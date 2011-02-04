<?php

require_once("list_formatter.php");
class list_formatter_default implements list_formatter {
	
	function format_list($items) {
		$nl = "\n";
		$nltab = $nl.$tab;
		
		$format .= "<ul>".$nltab;
		$count = count($items);
		for($i=1;$i<$count;$i++)
		{
			$format .= "<li>".$items[$i]."</li>".$nltab;
		}
		$format .= "</ul>".$nl;
		return $format;
	}
}
?>