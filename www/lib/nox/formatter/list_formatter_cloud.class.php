<?php

require_once("list_formatter.php");
class list_formatter_cloud implements list_formatter {
	
	function format_list($items) {
		$nl = "\n";
		$tab = "\t";
		$nltab = $nl.$tab;
		$nltab2 = $nl.$tab.$tab;
		$count = count($items);
		$style = "strongCurr";
		
		$format = "<div class=\"cloud\">".$nltab2;
		$format .= "<ul>".$nltab2;
		for($i=1;$i<$count;$i++)
		{
			if(($i % 2) == 0) {
				$style = "strongCurr";
			}else{
				$style = "strongAlt";
			}
			$format .=
			"<li class=\"cloud$i\"><span class=\"$style\">".$items[$i]."</span></li>".$nltab2;
		}
		$format .= "</ul>".$nl;
		$format .= "</div>".$nl;
		return $format;
	}
}
?>