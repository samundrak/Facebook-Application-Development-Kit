<?php 
/*
 Copyright (C) 2014  Samundra kc
 
  
 *- @Author: Samundra kc;
 *- @contact: samundrak@yahoo.com
 *
 */

 if(isset($_GET['admin'])){
    if($_GET['admin'] == 'admin'){
    include 'install/admins/index.php';
	exit();
	}
  }
  
 if(adminOrder('app') == 'off'){
    $x =  $_SERVER['PHP_SELF'];
	if(strchr($x,'index.php')){
	exit(adminOrder('closed_msg'));}
	else{
	 @header('Location: index.php');
	exit;
	}
	unset($x);
}

//checkFacebook_data();	
try{

$lang  = @simplexml_load_file('__languages/lang/'.adminOrder('languages')); 

   if(!$lang){
 throw new Exception();}

 }
catch(Exception $e){
    try{
$lang  = @simplexml_load_file('__languages/lang/english.xml'); 
   if(!$lang){
     throw new Exception("<p style='background-color:red;color:white;width:auto;'>Problem in language file..</p>");
	 
   }
}
catch(Exception $e){
   echo $e->getMessage();
   exit;
 }
}
$attr  = $lang[0]->attributes();
$lCode = $attr['lang'];

 
	function adminOrder($x,$link = 'default',$ex = 0){
	if($ex ==  0){
$y  =  "__src/__data/".$link.".json";
}
else{
$y = $link;
}
try{
 if(file_exists($y)){
                 
			     $getF = file_get_contents($y);
				 $order = json_decode($getF,true);
					$int = 1;
				  foreach($order as $xlx){
					    if(empty($xlx)){
					    throw new Exception("<p style='background-color:red;color:white;width:auto;'>Value at (".$int.") is missing \n Please open default.json file and put value at (".$int.")</p>");
					    return 'null' and die();
						die();
						
					 }$int++;
				   }
				   return html_entity_decode($order[$x]);
			 }else{
			    throw new Exception("<p style='background-color:red;color:white;width:auto;'>".$y." file is missing!</p>");
			  }
			 }
			 catch(Exception $e){
			   echo $e->getMessage();
			 }
}
			 
function checkFacebook_data(){
 //if(!in_array('mod_rewrite', apache_get_modules()))
    //exit('Mod Rewrite Must be enable on your server inorder to complete installation.');
 htaMaker('__src/__license/');
 htaMaker('install/');
 htaMaker('__src/');
 htaMaker('__src/__data/');
	    
  try{
   if(file_exists('__src/__license/license.ls')){
        $licenseFile = '__src/__license/license.ls';
   }else{
      $licenseFile = '__license/license.ls';
	    include 'install/admin/index.php';
	
       exit();
    }
   }
   catch (Exception $e){
      if(file_exists('__src/__license/license.ls')){
        $licenseFile = '__src/__license/license.ls';
   }else{
      $licenseFile = '__src/__license/license.ls';
	    include 'install/admin/index.php';
	
	  exit();
    }
   }

   try{   
	$fileOpen = file_get_contents($licenseFile);
	$licensed  = json_decode($fileOpen,true);
         foreach($licensed as $license){
		       if(empty($license) || strchr($license,' ')){
			      exit("<p style='background-color:red;color:white;width:auto;'>Some values are Empty!</p>");
				 }
		 }
		 
		 //$licensePath = 'http://www.soosal.com/fb/account/__json_files__/'.md5($licensed['key']).'.json';
		
//Where the login details will be saved 
		$licensePath = '../secret.json';
//End


		       if(function_exists('curl_init')){
	      function remoteFileExists($url) {
    $curl = curl_init($url);
    curl_setopt($curl, CURLOPT_NOBODY, true);
    $result = curl_exec($curl);
    $ret = false;
    if ($result !== false) {
    $statusCode = curl_getinfo($curl, CURLINFO_HTTP_CODE);  
     if ($statusCode == 200) {
            $ret = true;   
        }
    }
    curl_close($curl);
    return $ret;
      }

$exists = remoteFileExists($licensePath);
if ($exists) {
            $ch = curl_init(); 
            curl_setopt($ch, CURLOPT_URL, $licensePath); 
            curl_setopt($ch, CURLOPT_RETURNTRANSFER,1); 
            $getJson = curl_exec($ch);
			curl_close($ch); 
            $s_license  = json_decode($getJson,true);
			  foreach($s_license as $s_licensed){
		       if(empty($s_licensed) || strchr($s_licensed,' ')){
			    echo 1;
			      unlink($licenseFile);
			      exit("<p style='background-color:red;color:white;width:auto;'> Some values are Empty!</p>");
				  } 
				  if($s_licensed == 1 || $s_licensed == 2){
				    break;
				  }
				  if(!in_array($s_licensed,$licensed)){
				  echo 2;
				     unlink($licenseFile);
				     exit("<p style='background-color:red;color:white;width:auto;'>Some value Didn\'t match</p>");
					 
				  }
				  
				}
			    if($s_license['sts'] == 1){
				   if(!file_exists('__src/__data/config.json')){
				      include 'install/active.php';
					  
					  /*MAIL USER OF SUCESS INSTALL*/
				 
 $txt = "Hello".$s_license['admin'].",
 You have Suceesfully installed this app.
 You can now use this app.
 
 ThankYou!";

						// Use wordwrap() if lines are longer than 70 characters
						$txt = wordwrap($txt,70);

						// Send email
						mail($s_license['email'],"App Installed",$txt);
						 

					  /**/
					  }
				}else{
				   throw new Exception ("<p style='background-color:red;color:white;width:auto;'>You are not licensed user!</p>");
				}
			     
            
} else {
    throw new Exception("<p style='background-color:red;color:white;width:auto;'>You haven\'t entered correct license key or Did you download this from another source?</p>");
	 exit();
}
	}else{
	
	  throw new Exception("<p style='background-color:red;color:white;width:auto;'>Curl must be enabled to install this APP</p>");
	  exit();
	}
		  
	 }
	catch (Exception $e){
	     unlink($licenseFile);
		 echo $e->getMessage();
		 exit();
	}
	
	}
function htaMaker($x){
 fwrite(fopen($x.'.htaccess','w+'),'DENY FROM ALL');
 }
function clearInputData($x){
   $y = @htmlentities(@ltrim(@rtrim(@$x)));
  return $y;   
}
function addLicense($licenseFile){ 
 if(!isset($_POST['submit']))
 exit();
 
   foreach($_POST['input'] as $_FORM){
     if(empty($_FORM))
	 exit("<p style='background-color:red;color:white;width:auto;'>Some values are blank!</p>");
   }
$getId = $_POST['input'][3];
$appId = 12;
 
 
   //if($getId != $appId)
   //exit;  
   echo $_POST['input'][0];
$licensJson =' {
              "admin" : "'.clearInputData($_POST['input'][0]).'",
              
			  "key"   : "'.clearInputData($_POST['input'][1]).'",
              
			  "email" : "'.clearInputData($_POST['input'][2]).'",
              
			  "on"    : "'.clearInputData($_POST['input'][4]).'",
			  
			  "app"   : "'.clearInputData($_POST['input'][3]).'"
  }';
  
 try{
 
   if(file_exists($licenseFile)){
    $truPth =  $licenseFile;
	 	}
	else{
	$truPth = '__src/'.$licenseFile;
	 }
 
$openF = fopen($truPth,'w+');
if(file_exists($truPth)){ 
fwrite($openF,$licensJson);
//echo '<script>window.top.location.reload()</script>';
}else{
 throw new Exception("<p style='background-color:red;color:white;width:auto;'>Unable to make license File</p>");
}
	
 }
 catch(Exception $e){
   echo $e->getMessage();
 }
 }
 
 function addAppInfo(){
  if(!isset($_POST['submit']))
 exit();
 
   foreach($_POST['input'] as $_FORM){
       if(empty($_FORM))
	 exit("<p style='background-color:red;color:white;width:auto;'>Some value are blank!</p>"); 
   }
   try{
      $truPth = '__src/__data/config.json';
	   
	   $dataF = '{
                   
				   "id"                  : "'.clearInputData($_POST['input'][0]).'",
				   
                   "secret"              : "'.clearInputData($_POST['input'][1]).'",
		           
				   "url"                 : "'.clearInputData($_POST['input'][2]).'",
		           
				   "page"                : "'.clearInputData($_POST['input'][3]).'",
		           
				   "post_msg"            : "'.clearInputData($_POST['input'][4]).'",
                   
				   "inviteMsg"           : "'.clearInputData($_POST['input'][5]).'",
                   
				   "pageTitle"           : "'.clearInputData($_POST['input'][6]).'",
                   
				   "adsScript"           : "'.$_POST['input'][9].'",
                   
				   "adsSlot"             : "'.$_POST['input'][10].'",  
				   
				   "adsSlot_2"             : "'.$_POST['input'][11].'",  
				   
				   "adsSlot_3"             : "'.$_POST['input'][12].'",  
  
                  "fontName"             : "'.clearInputData($_POST['input'][13]).'",    
				  
		          "fontSize"             : "'.clearInputData($_POST['input'][14]).'"        
     }';
	 
	 $openF = fopen($truPth,'w+');
	 fwrite($openF,$dataF);
	 echo '<script>window.top.location.reload</script>';
   }catch(Exception $e){
     echo $e->getMessage();
   }
    exit();
 }
 
 function DenyFromAll(){
      if($_SERVER['REQUEST_METHOD'] == 'GET'){
	@header('Location: 404.php');
	  exit;
	}
 }
 function showImg($file,$width,$height,$align){
	 $img = "<img src='".$file."' width='".$width."' height='".$height."' align='".$align."' />";
     print $img;
	 }
?>