<?php

require_once("noxUtil.php");

class noxContentProcessor {
	
	var $content;
	
	// ___[flags]___
	var $buildTableOfContent = true;
	var $linkify = false;
	var $bbcode = true;
	
	// ___[processedContent]___
	var $processedContent;
	var $tableOfContent = array ();
	
	function getProcessedContent () {
		return $this->processedContent;
	}
	
	// ___[content]___
	function setContent($content) {
		$this->content = $content;
	}
	
	function getTableOfContent () {
		return $this->tableOfContent;
	}
	
	function addTableOfContent($level, $title) {
		$key = str_replace (" ", "_", $title)."_".count($this->tableOfContent);
		
		$this->tableOfContent[] = 
			array(
				"key"=>$key, 
				"title"=>$title, 
				"level"=>$level);
		
		return "<h$level><a name=\"".$key."\">".$title."</a></h$level>";
	}
	
	function parse_for_content($text)
	{
		return preg_replace(
				//"#(<h([1-9])>)([^<]*)(<\/h[1-9]>)#Ueis",
				"#(<h([1-9])>)(.*?)(<\/h[1-9]>)#ei",
				"\$this->addTableOfContent('$2', '$3')",
				$text);
	}
	
	function process () {
		$processedContent = $this->content;
		if($this->linkify) {
			$processedContent = 
				linkify($processedContent, true);
		}
		
		if($this->bbcode) {
			require_once("noxParser.class.php");
			$noxParser = new noxParser ();
			$processedContent = $noxParser->parse_all($processedContent);
		}
		
		if($this->buildTableOfContent) {
			$processedContent = 
				$this->parse_for_content($processedContent);
		}
		
		$this->processedContent = $processedContent;
	}

}
?>