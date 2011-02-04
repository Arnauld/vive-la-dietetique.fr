<?php
class noxFormatter {
	
	var $sanitizer;
	var $list_formatters = array ();
	
	function set_sanitizer ($sanitizer) {
		$this->sanitizer = $sanitizer;
	}
	
	function get_sanitizer () {
		if(!isset($this->sanitizer) || !$this->sanitizer)
		{
			require_once ('noxSanitizer.class.php');
			$this->sanitizer = new noxSanitizer ();
		}
		return $this->sanitizer;
	}
	
	function format_link($content, $url=NULL, $target='_top')
	{
		if(!isset($url) || !$url) {
			$url = $content;
		}
		return "<a href='http://" . $url . "' target='$target'>" . $content . "</a>";
	}
	
	function format_mail($content, $url=NULL, $target='_top')
	{
		if(!isset($url) || !$url) {
			$url = $content;
		}
		require_once ('noxUtil.php');
		return htmlMailTo($content,true);
	}
	
	
	
	function format_anchor($content, $key)
	{
		return "<a name='".$key."'>".$content."</a>";
	}
	
	function format_ref($content, $key)
	{
		return "<a href='#" . $key . "' target='$target'>" . $content . "</a>";
	}
	
	function format_bold($text) {
		return "<strong>$text</strong>";
	}
	
	function format_cite($text) {
		return "<cite>&ldquo;$text&rdquo;</cite>";
	}
	
	function format_list_items ($items, $style=NULL) {
		
		$list_formatter = NULL;
		$has_style = (isset($style) && $style);
		if($has_style) {
			if(!isset($list_formatters[$style])) {
				$sanitizer = $this->get_sanitizer();
				$list_formatter_class = 
						"list_formatter_".$sanitizer->enforced_file_name($style);
				$list_formatter_file = "formatter/".$list_formatter_class.".class.php";
				
				$file = dirname(__FILE__)."/".$list_formatter_file;
				if(file_exists($file)) {
					require_once($list_formatter_file);
					$list_formatter = new $list_formatter_class ();
				}
				
				$list_formatters[$style] = $list_formatter;
			}else{
				$list_formatter = $list_formatters[$style];
			}
		}
		
		if(!$list_formatter) {
			require_once("formatter/list_formatter_default.class.php");
			$list_formatter = new list_formatter_default ();
		}
		
		return $list_formatter->format_list($items);
	}
	
	function format_block($content, $style=NULL, $title=NULL, $anchor=NULL, $width=NULL) {
		$format = $content;
		$has_style = (isset($style)&& $style);
		$has_title = (isset($title)&& $title);
		$has_anchor = (isset($anchor)&& $anchor);
		$has_width = (isset($width)&& $width);
		if($has_style) {
			$styles = explode(";", $style);
			$is_center = false;
			
			if(in_array("html", $styles)) {
				$format = htmlentities($format); 
			}
			
			if(in_array("nl", $styles)) {
				$format = nl2br($format); 
			}
			
			if(in_array("center", $styles)) {
				$is_center = true; 
			}
			
			if(in_array("cadre", $styles)) {
				$nl = "\n";
				
				$cadre_style = "";
				
				if($has_width) {
					$cadre_style .= "width:".$width."; ";
				}
				
				if($is_center) {
					$cadre_style .= "margin:auto; ";
				}
				
				
				if($cadre_style!="") {
					$cadre = "<div class=\"cadre_container\" style=\"$cadre_style\">".$nl;
				}else{
					$cadre = "<div class=\"cadre_container\">".$nl;
				}
				
				$cadre .= "  <div class=\"cadre_header\">".$nl;
				if($has_title) {
					$usedTitle = $title;
					if($has_anchor) {
						$usedTitle = "<a name='".$anchor."'>".$usedTitle."</a>";
					}
					
					$cadre .= "    <h6>$usedTitle</h6>".$nl;
				}else{
					$cadre .= "    <h6><span>Cadre</span></h6>".$nl;
				}
				$cadre .= "  </div>".$nl;
				$cadre .= "  <div class=\"cadre_content\">".$nl;
				$cadre .= $format.$nl;
				$cadre .= "  </div>".$nl;
				$cadre .= "  <div class=\"cadre_footer\">".$nl;
				$cadre .= "    <h6><span>pied de page</span></h6>".$nl;
				$cadre .= "  </div>".$nl;
				$cadre .= "</div>".$nl;
				
				$format = $cadre;
			}else{
				$format = "<p>".$format."</p>";
			}
		}else{
			$format = "<p>".$format."</p>";
		}
		return $format;
	}
	
	function format_blockquote ($content, $style=NULL, $author=NULL, $day=NULL, $month=NULL, $year=NULL)
	{
		$nl = "\n";
		$has_style = (isset($style)&& $style);
		$class = "blockquote";
		
		$copy_content = false;
		$copy_as_cite = false;
		if($has_style) {
			$styles = explode(";", $style);
			if(in_array("pull", $styles)) {
				$class = "pullquote";
				$copy_content = false;
			}
			if(in_array("cite", $styles)) {
				$copy_as_cite = true;
			}
		}
		
		$format = "<div class=\"$class\">".$nl;
		$format = $format."<div class=\"quote_content\"><h2>$content</h2></div>".$nl;
		
		$has_author = isset($author) && $author;
		$has_day = (isset($day)&& $day);
		$has_month = (isset($month)&&$month);
		$has_year = (isset($year) &&$year);
		$has_date = $has_day || $has_month || $has_year;
		
		if($has_author || $has_date) {
			$format = $format."<div class=\"quote_infos\">".$nl;
			if($has_author) {
				$format = $format."<div class=\"quote_author\">$author</div>".$nl;
			}
			if($has_date) {
				$date = strval($day)."/".strval($month)."/".strval($year);
				$format = $format."<div class=\"quote_date\">$date</div>".$nl;
			}	
			$format = $format."</div>".$nl;
		}
		$format = $format."</div>".$nl;
		
		if($copy_content) {
			$secondary_divs [] = $format;
			
			if($copy_as_cite) {
				$format = $this->format_cite($content);
			}else{
				$format = $content;
			}
		}
		
		return strval($format);
	}
	
	function format_code($code, $language=NULL) {
		$nl = "\n";
		$format = "<div class=\"code\">".$nl;
		$format = $format."<div class=\"content\">".htmlentities($code, ENT_QUOTES, 'ISO-8859-1')."</div>".$nl;
		
		$has_language = isset($language) && $language;
		if($has_language) {
			$format = $format."<div class=\"infos\">".$nl;
			
			$format = $format."<div class=\"language\">".$nl;
			$format = $format.$language.$nl;
			$format = $format."</div>".$nl;
			
			$format = $format."</div>".$nl;
		}
		$format = $format."</div>".$nl;
		return $format;
	}
}
?>