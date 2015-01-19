<?php 
/*
 *     Smarty plugin
 * -------------------------------------------------------------
 * File:     	function.pathinfo.php
 * Type:     	function
 * Name:     	pathinfo
 * Description:  This will include the file from query of url.
 *
 * -------------------------------------------------------------
 * @license GNU Public License (GPL)
 *
 * -------------------------------------------------------------
 * Parameter:
 * - fname     	=  Name of the file. (required)
 * - return     =  Output that user wants. (required)
 * -------------------------------------------------------------
 * Example usage:
 *
 * <div>{add tab="3434323"}</div>
 */
 
function smarty_function_pathinfo($params, $smarty){
    if(!isset($params['fname']) && !isset($params['return'])){
	$smarty->trigger_error("Required param is supplied!");
		return;
	}
	 $file   = pathinfo($params['fname']);
	 $return =  $params['return'];
	 return $file[$return];
}  
 ?>