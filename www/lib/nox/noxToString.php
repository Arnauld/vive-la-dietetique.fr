<?php
function array_to_string_html ($array, $sep=";", $ident=0) {
	$nl = "\n";
	$buffer = "<ul>".$nl ;
	foreach ($array as $key=>$value) {
		$buffer .= "<li>".$key."=>";
		if(is_array($value)) {
			$buffer .= array_to_string_html ($value,$sep,$ident+1);
		}else{
			$buffer .= $value;
		}
		$buffer .= "</li>".$nl;
	}
	$buffer .= "</ul>".$nl;
	return $buffer;
}
?>