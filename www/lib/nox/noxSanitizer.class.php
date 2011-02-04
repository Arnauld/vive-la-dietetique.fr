<?php

class noxSanitizer {
	
	// make int int!
	function int($integer, $min='', $max='')
	{
	  $int = intval($integer);
	  if((($min != '') && ($int < $min)) || (($max != '') && ($int > $max)))
	    return FALSE;
	  return $int;
	}
	
	// make float float!
	function float($float, $min='', $max='')
	{
	  $float = floatval($float);
	  if((($min != '') && ($float < $min)) || (($max != '') && ($float > $max)))
	    return FALSE;
	  return $float;
	}
	
	function enforced_file_name($filename)
	{
		return preg_replace("/[^a-zA-Z0-9-_]/", "", $filename);
	}
	
	/*
	 * @param $vars : tableau de variables a scanner et nettoyer
	 * @param $signatures : signature des variables
	 * 
	 * array( variable_name => variable_properties)
	 * 
	 * build-in variable properties toutes optionnelles:
	 * 'required' : true/false 
	 * 'type' : php type : 'string', 'float', 'boolean', 'integer'
	 * 'pattern' : pattern that a value must match
	 * 'function' : function applied on the variable value
	 * 
	 * retourne un tableau contenant les variables manquantes ou invalides
	 * @return array
	 */
	function sanitize_vars(&$vars, $signatures, $stop_on_error=true) {
		$tmp = array();
		
		$invalids = array ();
		/* Walk through the signatures and add them to the temporary
		 * array $tmp 
		 */
		foreach ($signatures as $name => $sig) {
			
			$is_required = isset($sig['required']) && $sig['required'];
			
			if (!isset($vars[$name]) && $is_required)
			{
				$invalids[] = array ($name, 'required');
				if($stop_on_error) {
					return $invalids;
				}else{
					continue;
				}
			}else{
				/* apply type to variable */
				$tmp[$name] = $vars[$name];
				if (isset($sig['type'])) {
					if(!settype($tmp[$name], $sig['type'])) {
						$invalids[] = array ($name, 'type');
						unset($tmp[$name]);
						if($stop_on_error) {
							return $invalids;
						}else{
							continue;
						}
					}
				}
				
				/* apply pattern match */
				if(isset($sig['pattern'])) {
					if(preg_match($sig['pattern'], $tmp[$name])==0) {
						$invalids[] = array ($name, 'pattern');
						unset($tmp[$name]);
						if($stop_on_error) {
							return $invalids;
						}else{
							continue;
						}
					}
				}
				
				/* apply functions to the variables, you can use the standard PHP
				 * functions, but also use your own for added flexibility. 
				 */
				if (isset($sig['function'])) {
					$tmp[$name] = $sig['function']($tmp[$name]);
				}
			}
		}
		$vars = $tmp;
		return $missings;
	}
	
}
?>