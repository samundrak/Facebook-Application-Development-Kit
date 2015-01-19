<?php 
/*
 *     Smarty plugin
 * -------------------------------------------------------------
 * File:     	function.filemaker.php
 * Type:     	function
 * Name:     	include
 * Description:  This will include the file from query of url.
 *
 * -------------------------------------------------------------
 * @license GNU Public License (GPL)
 *
 * -------------------------------------------------------------
 * Parameter:
 * - tab     	=  Query string which will be fetched from url. (required)
 * -------------------------------------------------------------
 * Example usage:
 *
 * <div>{add tab="3434323"}</div>
 */
 
function smarty_function_filemaker($params, $smarty){
    if(!isset($params['tab'])){
	$smarty->trigger_error("Required param is supplied!");
		return;
	}
	 $f = fopen("__src/__data/config.json","w+");
         fclose($f);
}  
 ?>