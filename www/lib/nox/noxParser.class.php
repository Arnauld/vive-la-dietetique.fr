<?php

class noxParser {
	
	var $formatter;
	
	function __construct($noxFormatter=NULL) {
		if(isset($noxFormatter) && $noxFormatter)
			$this->formatter = $noxFormatter;
		else {
			require_once('noxFormatter.class.php');
			$this->formatter = new noxFormatter ();
		}
	}
	
	function parse_all($text) {
		$parsed = $text;
		$parsed = $this->parse_html ($parsed);
		$parsed = $this->parse_anchor ($parsed);
		$parsed = $this->parse_ref ($parsed);
		$parsed = $this->parse_list ($parsed);
		$parsed = $this->parse_code ($parsed);
		$parsed = $this->parse_blockquote ($parsed);
		$parsed = $this->parse_block ($parsed);
		$parsed = $this->parse_b ($parsed);
		$parsed = $this->parse_i ($parsed);
		$parsed = $this->parse_cite ($parsed);
		$parsed = $this->parse_link ($parsed);
		$parsed = $this->parse_mail ($parsed);
		
		return $parsed;
	}
	
	function parse_block($text)
	{
		$style_regexp = "( style=\"([^\"]+)\")?";
		$title_regexp = "( title=\"([^\"]+)\")?";
		$anchor_regexp = "( anchor=\"([^\"]+)\")?";
		$width_regexp = "( width=\"([^\"]+)\")?";
		$block_options = "($style_regexp|$title_regexp|$anchor_regexp|$width_regexp){0,4}";
		return preg_replace(
				"#\[block$block_options\](.*?)\[\/block\]#eis",
				"\$this->formatter->format_block('$10','$3', '$5', '$7', '$9')",
				$text);
	}
	
	function parse_cite ($text)
	{
		return preg_replace(
				'#(<cite>)(.*?)(</cite>)#eis', 
				"\$this->formatter->format_cite('$2')", 
				$text);
	}
	
	function parse_blockquote($text)
	{
		$author_regexp = "( author=\"([^\"]+)\")?";
		
		$date_regexp = "([0-9]{1,2})\/([0-9]{1,2})\/([0-9]{4})";
		$date_regexp = "( date=\"".$date_regexp."\")?";

		$style_regexp = "( style=\"([^\"]+)\")?";
		
		$quote_options = "($author_regexp|$date_regexp|$style_regexp){0,3}";
		
		return preg_replace(
				"#\[quote$quote_options\](.*?)\[\/quote\]#eis",
				"\$this->formatter->format_blockquote('$10','$9', '$3', '$5','$6','$7')",
				$text);
	}
	
	function parse_anchor ($text)
	{
		$url_regexp = "(=\"([^\"]+)\")?";
		$code_options = $url_regexp;
		return preg_replace(
				"#\[anchor$code_options\](.*?)\[\/anchor\]#eis",
				"\$this->formatter->format_anchor('$3','$2')",
				$text);
	}
	
	function parse_ref ($text)
	{
		$url_regexp = "(=\"([^\"]+)\")?";
		$code_options = $url_regexp;
		return preg_replace(
				"#\[ref$code_options\](.*?)\[\/ref\]#eis",
				"\$this->formatter->format_ref('$3','$2')",
				$text);
	}
	
	function parse_list_items($text, $style=NULL)
	{
		$item_regexp = "#\[\*\](.*?)#s";
		$items = preg_split($item_regexp, $text);
		return $this->formatter->format_list_items($items,$style);
	}
	
	function parse_list($text)
	{
		$style_regexp = "( style=\"([^\"]+)\")?";
		$list_options = $style_regexp;
		return preg_replace(
				"#\[list$list_options\](.*?)\[\/list\]#eis",
				"\$this->parse_list_items('$3','$2')",
				$text);
	}
	
	function parse_code($text)
	{
		$language_regexp = "( language=\"([^\"]+)\")?";
		$code_options = $language_regexp;
		return preg_replace(
				"#\[code$code_options\](.*?)\[\/code\]#eis",
				"\$this->formatter->format_code('$3','$2')",
				$text);
	}
	
	function parse_link($text)
	{
		$url_regexp = "(=\"([^\"]+)\")?";
		$code_options = $url_regexp;
		return preg_replace(
				"#\[link$code_options\](.*?)\[\/link\]#eis",
				"\$this->formatter->format_link('$3','$2')",
				$text);
	}
	
	function parse_mail($text)
	{
		$url_regexp = "(=\"([^\"]+)\")?";
		$code_options = $url_regexp;
		return preg_replace(
				"#\[mail$code_options\](.*?)\[\/mail\]#eis",
				"\$this->formatter->format_mail('$3','$2')",
				$text);
	}
	
	function parse_html($text)
	{
		return preg_replace(
				"#\[html\](.*?)\[\/html\]#eis",
				"htmlentities('$1', ENT_QUOTES, 'ISO-8859-1')",
				$text);
	}
	
	function parse_b($text)
	{
		return preg_replace(
				'#\[b\](.*?)\[/b\]#is', 
				'<strong>$1</strong>', 
				$text);
	}
	
	function parse_i($text)
	{
		return preg_replace(
				'#\[i\](.*?)\[/i\]#is', 
				'<em>$1</em>', 
				$text);
	}
	
}
?>