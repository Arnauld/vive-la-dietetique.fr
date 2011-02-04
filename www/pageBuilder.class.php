<?php

require_once('lib/nox/noxUtil.php');
require_once("lib/patError.php");
require_once("lib/patErrorManager.php");
require_once("lib/patTemplate.php");

class pageBuilder {
	
	var $page;
	
	
	function setPage($page) {
		$this->page = $page;
	}
	
	function process () {
		$page = $this->page;
		
		
		$tmpl = new patTemplate();
		$tmpl->setBasedir( "view" );
		$tmpl->readTemplatesFromFile("webpage.tpl");

		$tmpl->addGlobalVar("PAGE_TITLE", $page['title']);
		$tmpl->addGlobalVar("PAGE_SUBTITLE", $page['description']);
		
		if(isset($page['metadata'])) {
			// Iterate through the array
			foreach($page['metadata'] as $key => $value) {
				$tmpl->addVar("meta", "NAME", $key);
				$tmpl->addVar("meta", "CONTENT", $value);
				$tmpl->parseTemplate("meta", "a"); 
			}
		}

		if(isset($page['styles'])) {
			$styles = $page['styles'];
			foreach($styles as $style) {
				$tmpl->addVar("style", "PATH", $style);
				$tmpl->parseTemplate("style", "a"); 
			}
		}

		$tmpl->addVar("page", "HEAD_ADDENDUM", $page['headerAddendum']);
		$tmpl->addVar("page", "BODY_ATTRIBUTES", $page['bodyAttributes']);
		
		//
		$tmpl->addVar("includedHeader", "PAGE_TITLE", $page['title']);
		$tmpl->addVar("includedHeader", "PAGE_SUBTITLE", $page['description']);
		
		foreach($page['footerMenu'] as $values) {
			$menuId = $values['id'];
			if($menuId == $page['menuId']) {
				$tmpl->addVar("footer_entry", "isCurrent", "true");
			}else{
				$tmpl->addVar("footer_entry", "isCurrent", "false");
			}
			$tmpl->addVar("footer_entry", "ID", $menuId);
			$tmpl->addVar("footer_entry", "LINK", $values['link']);
			$tmpl->addVar("footer_entry", "LABEL", nbsp($values['label']));
			$tmpl->parseTemplate("footer_entry", "a"); 
		}
		$tmpl->parseTemplate("includedFooter");
		
		foreach($page['menu'] as $values) {
			$menuId = $values['id'];
			if($menuId == $page['menuId']) {
				$tmpl->addVar("header_entry", "isCurrent", "true");
			}else{
				$tmpl->addVar("header_entry", "isCurrent", "false");
			}
			$tmpl->addVar("header_entry", "ID", $menuId);
			$tmpl->addVar("header_entry", "LINK", $values['link']);
			$tmpl->addVar("header_entry", "LABEL", nbsp($values['label']));
			$tmpl->parseTemplate("header_entry", "a"); 
		}
		$tmpl->parseTemplate("includedHeader");
		
		/*
		 * page content : formatting and co
		 */
		$pageContent = $page['pageContent'];
		
		require_once ("lib/nox/noxContentProcessor.class.php");
		$noxProcessor = new noxContentProcessor ();
        $noxProcessor->setContent($pageContent);
        $noxProcessor->process();
        $pageContent = $noxProcessor->getProcessedContent();
        
        $table_of_content = $noxProcessor->getTableOfContent();
        $count = count($table_of_content);
		if($count>0) {
	        foreach($table_of_content as $entry) {
	        	$level = $entry["level"];
	        	$title = $entry["title"];
	        	$key = $entry["key"];
	        	if($level==1) {
	        		$tmpl->addVar("navigation_entry", "LINK", "#".$key);
	        		$tmpl->addVar("navigation_entry", "LABEL", $title);
	        		$tmpl->parseTemplate("navigation_entry", "a"); 
	        	}
	        }
			$tmpl->parseTemplate("includedNav");
		}
		$tmpl->addVar("page", "PAGE_CONTENT", $pageContent);
			
		//Parse and return template 
		$applyFilters = true;
		
		return $tmpl->getParsedTemplate("page", $applyFilters);
	}
}
?>