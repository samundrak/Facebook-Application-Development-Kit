<?php 
/*
 *     Smarty plugin
 * -------------------------------------------------------------
 * File:     	function.add.php
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
 
function smarty_function_add($params, $smarty){
    if(!isset($params['tab'])){
	$smarty->trigger_error("Required param is supplied!");
		return;
	}
	include($params['tab']);
}  
 ?>