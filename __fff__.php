<?php 
 /*
 Copyright (C) 2014  Samundra kc

 *- @Author: Samundra kc;
 *- @contact: samundrak@yahoo.com
 *
 */
    require('__src/__iii__.php');
     DenyFromAll();
	 
	  //if(adminOrder('server') != @$_SERVER['HTTP_REFERER'])
	 //exit('Invalid referer');
error_reporting(0);	 
   $getPath = clearInputData(@$_POST['fileName']);
   $doTask  = clearInputData(@$_POST['doTask']);
   $feat    = @$_POST['features'];
   $getMsg  = empty($_POST['getMsg']) ? ' ' : $_POST['getMsg'];
   $getMsg  = clearInputData($getMsg);
    
	
	$file = array($getPath,$feat);
$restrict = array(
		    'index.html','index','.htaccess','http://','www','https://','../','ftp','http','xml','css','php','php5','js','html'
		);
		      if(!empty($file)){
			 foreach(@$file as $x){
			     foreach($restrict as $y){
				     if(strchr($x,$y)){
					    alert("This types of files are not allowed to download or delete.");
				        exit;
					 }
				 }
			 }
		     }  
			 
    switch($doTask){
               case 0:
			   reloadFileFromAjaxReq($getPath);
			   break;
			   case 1:
			   publishFileToFb($getPath,$getMsg);
			   break;
			   case 2:
			   features($feat);
			   break;
	  }
   
   
        function reloadFileFromAjaxReq($getPath){
	global $img;
	sleep(2);
	$img->outputFinalLink(0);
	}
	
	function publishFileToFb($getPath,$getMsg){
        sleep(2);
        global $fb;
        $fb->publishStream($getPath,$getMsg);
        }
   function features($x){
   global $lang,$fb;
        switch($x['type']){
		    case 'mail':
			 include '__features/email-photo.php';
			break;
		   
		   case 'download':
		   include '__features/download.php';
		   break;
		   case 'mpp':
		   $fb->makePPonFb("__photos/__tmp/" . $x['session'] . ".jpg");
		   break;
		}
   }	 
?>