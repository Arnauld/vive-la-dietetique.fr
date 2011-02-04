<?php
function html($string){
	return htmlentities($string, ENT_QUOTES, 'ISO-8859-1');
}
function ret($string){
	echo $string;
}
function retHtml($string){
	echo html($string);
}
function nbsp($string){
	return ereg_replace(" ", "&nbsp;", $string);
}

/*
 * remplace une adresse email dans une page web 
 * en son équivalent en codes ASCII : 
 */
function no_spam($email) { 
    $cars = array( 
              "A","B","C","D","E","F","G","H","I","J", 
              "K","L","M","N","O","P","Q","R","S","T", 
              "U","V","W","X","Y","Z", "a","b","c","d", 
              "e","f","g","h","i","j","k","l","m","n", 
              "o","p","q","r","s","t","u","v","w","x","y", 
              "z", "@"); 

    $htmls = array( 
              "65","66","67","68","69","70","71","72","73","74",  
              "75","76","77","78","79","80","81","82","83","84", 
              "85","86","87","88","89","90", 
              "97","98","99","100","101","102","103","104","105", 
              "106","107","108","109","110","111","112","113","114", 
              "115","116","117","118","119","120","121","122","64"); 

    for ($i = 0; $i < $nbcars = count($cars); $i++) 
      $email = ereg_replace($cars[$i], "&#$htmls[$i];", $email);  

    return $email; 
} 

/*
 * from Parsing Email Adresses in PHP
 * http://iamcal.com/publish/articles/php/parsing_email
 */
function is_valid_email_address($email){

    $qtext = '[^\\x0d\\x22\\x5c\\x80-\\xff]';
    $dtext = '[^\\x0d\\x5b-\\x5d\\x80-\\xff]';
    $atom = '[^\\x00-\\x20\\x22\\x28\\x29\\x2c\\x2e\\x3a-\\x3c'.
            '\\x3e\\x40\\x5b-\\x5d\\x7f-\\xff]+';
    $quoted_pair = '\\x5c[\\x00-\\x7f]';
    $domain_literal = "\\x5b($dtext|$quoted_pair)*\\x5d";
    $quoted_string = "\\x22($qtext|$quoted_pair)*\\x22";
    $domain_ref = $atom;
    $sub_domain = "($domain_ref|$domain_literal)";
    $word = "($atom|$quoted_string)";
    $domain = "$sub_domain(\\x2e$sub_domain)*";
    $local_part = "$word(\\x2e$word)*";
    $addr_spec = "$local_part\\x40$domain";

    return preg_match("!^$addr_spec$!", $email) ? 1 : 0;
}

/*
 * 
 */
function htmlMailTo ($email, $doNospam=false) {
	$usedEmail = $email;
	if($doNospam) {
		$usedEmail = no_spam($email);
	}
	return '<a href="mailto:'.$usedEmail.'"\>'.$usedEmail.'</a>';
}

/*
 * adresses emails, site web cliquables dans une chaine texte
 */
function linkify($text, $doNospamEmail=false) {
    $strip_lchrs = "[^\s\(\)\[\]\{\}\.\,\;\:\?\!]";      //Not these chars in beginning
    $strip_rchrs = "[^\s\(\)\[\]\{\}\.\,\;\:\?\!\d]";    //Not these chars in end

    $prot_pat = $strip_lchrs . "[\S]*\:\/\/[\S]*\.[\S]*" . $strip_rchrs;  //abc://de.fg
    $email_pat = $strip_lchrs . "[\S]*@[\S]*\.[\S]*" . $strip_rchrs;      //abc@de.fg
    $general_pat = $strip_lchrs . "[\S]*\.[\S]*" . $strip_rchrs;          //abc.de

    $preg_pattern = "/(" . $prot_pat . "|" . $email_pat . "|" . $general_pat . ")/ei";
    $preg_replace = "format_link('$1',$doNospamEmail)";
    return preg_replace($preg_pattern, $preg_replace, $text);
}

function format_link($subpat, $doNospamEmail=false) {
    //These abbr. should not be linked
    $exc_string = "/e\.g|i\.e|et\.c/i";
    //If it says abc://de.fg
    if (preg_match("/[\S]*\:\/\/[\S]*\.[\S]*/i", $subpat) == 1) {
        return "<a href='" . $subpat . "' target='_top'>" . $subpat . "</a>";
    }
    //If it says abc@de.fg
    else if (preg_match("/[\S]*@[\S]*\.[\S]*/i", $subpat) == 1) {
    	
    	$used = $subpat;
    	if($doNospamEmail) {
    		$used = no_spam($used);
    	}
    	
        return "<a href='mailto:" . $used . "'>" . $used . "</a>";
    }
    //If it says "e.g." don't link
    else if (preg_match($exc_string, $subpat) == 1) {
        return $subpat;
    }
    //If it says abc.de
    else
        return "<a href='http://" . $subpat . "' target='_top'>" . $subpat . "</a>";
}


?>