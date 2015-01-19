<?php 
/*
 *     Smarty plugin
 * -------------------------------------------------------------
 * File:     	function.add.php
 * Type:     	function
 * Name:     	exists
 * Description:  This will include the file from query of url.
 *
 * -------------------------------------------------------------
 * @license GNU Public License (GPL)
 *
 * -------------------------------------------------------------
 * Parameter:
 * - file    	=  Query string which will be fetched from url. (required)
 * -------------------------------------------------------------
 * Example usage:
 *
 * <div>{exists file="3434323"}</div>
 */
 
function smarty_function_exists($params, $smarty){
    if(!isset($params['file'])){
	$smarty->trigger_error("Required param is supplied!");
		return;
	}
	if(file_exists($params['file']))
	 return $params['file'];
	 else
	 echo '<script>window.top.location = "admin"</script>';
}  
 ?>