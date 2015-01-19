<?php 
/*
 Copyright (C) 2014  Samundra kc

    
 *- @Author: Samundra kc;
 *- @contact: samundrak@yahoo.com
 *
  */
ob_start();
session_start();

$x = @$_SESSION['admin'];
try{

$lang  = @simplexml_load_file('__languages/lang/'.adminOrder('languages')); 

   if(!$lang){
 throw new Exception();}

 }
catch(Exception $e){
    try{
$lang  = @simplexml_load_file('__languages/lang/english.xml'); 
   if(!$lang){
     throw new Exception('Problem in language file.\n May be error in XML tags or attributes');
	 
   }
}
catch(Exception $e){
   echo $e->getMessage();
   exit;
 }
}
$attr  = $lang[0]->attributes();
$lCode = $attr['lang'];

$admin = new Admin($x);
class Admin{
 
 public $step;
 public $user;
 public $json;
 private $lang;
 private $license = '__src/__license/license.ls';
 private $config  = '__src/__data/config.json';
 private $social  = '__src/__data/social.json';
 private $default = '__src/__data/default.json';
 private $login   = '__src/__data/login.json';
 
 public function __construct($x = ''){
     global $lang;
     $this->user = $x;
	 $this->lang = $lang;
    try{
	if($this->detect() == TRUE){
	  $this->step = 'login';
	 }else{
	  throw new Exception($this->lang->admin->alert->fileMissing);
	  
	 }
	}
	catch(Exception $e){
	   echo $e->getMessage();
	   exit();
	}
 }
 
 
      private function detect(){
	     if(file_exists($this->license)){
		     if(file_exists($this->config)){
			    return TRUE;
			 }else{
			    return FALSE;
			 }
		 }else{
		       return FALSE;
		 }
	  }
	  
	 public function login(){
	     if(isset($_POST['submit'])){
		  
		 
	      $adminName = $this->clearInputData($_POST['username']);
	      $appLs     = $this->clearInputData($_POST['license']);
		  
		  $data = array($adminName,$appLs);
		  foreach($data as $checks){
		    
		      if(empty($checks)){
			  echo("<li>".$this->lang->admin->alert->empty."</li>");
			  exit();
			  }
		   }
		   echo 11;
		     $this->validate(1);
			   if($this->json->admin == $adminName && $this->json->key == $appLs){
			     $this->step = 'home';
				  $_SESSION['admin'] = $this->json->admin;
				    $this->loginAttempt($adminName,$appLs,$this->login,0); 
				      //echo '1';
					  header("Location: admin");
					  //sleep(2000);
					  //echo '<script>window.top.location = "admin"</script>';
					 
				  
				   }
		      else{
			       alert($this->lang->admin->alert->unMatch);
			       $this->loginAttempt($adminName,$appLs,$this->login,1);  
			      
			  }
		   }
	 }
	 
	 public function validate($x){
	  error_output();
	     try{ 
		 if(!empty($x)){
		   switch($x){
		     case 1:
			 $x = $this->license;
			 break;
			 case 2:
			 $x = $this->config;
			 break;
			 case 3:
			 $x = $this->social;
			 break;
			 case 4:
			 $x = $this->default;
			 break;
			 case 5:
			 $x = $this->login;
			 break;
		   }
		 }else{
		    exit();
		 }
		     if(file_exists($x)){
			     $getF = file_get_contents($x);
				 @$this->json = json_decode($getF);
				 $xllx = get_object_vars($this->json);
				   foreach($xllx as $xlx){
				     if(empty($xlx)){
					    throw new Exception($this->lang->admin->alert->empty);
					    die();
					 }
				   }
			 }else{
			    throw new Exception("<div style='background-color:red;color:white;'>".$this->lang->admin->alert->fileMissing."</div>");
			 }
		 }catch(Exception $e){
		    echo $e->getMessage();
		 }
	 }

private  function openNwrite($x,$y){
		for($i = 0; $i <= count($y) - 1; $i++){
		    $v[$y[$i]] = $this->clearInputData($_POST['input'][$i]); 
		}
		
		  $d = json_encode($v);
		  $o = fopen($x,"w");
		  fwrite($o,$d);
		  fclose($o);
		  alert($this->lang->admin->alert->dataUpdated);
		  }
		  	 
 public function inc_lude($x){
     $this->clearInputData($x);
	 if($x == 'logout'){
	   @session_destroy();
	   echo '<script>window.top.location.reload()</script>';
	   exit();
	 }
	  else{
	  return $x;
     }
  }
   public function clearInputData($x){
   $y = @trim(@htmlentities(@ltrim(@$x)));
  return $y;   
  }	 
  
 public function editLicense(){
       $this->validate(1);

       if(isset($_POST['submit'])){
	   foreach($_POST['input'] as $_FORM){
       
	   if(empty($_FORM))
	   exit($this->lang->admin->alert->empty);
      }
	  
	   
		$key   = array('admin','key','email','app','on');
	    $this->openNwrite($this->license,$key);
	  }
 }

 public function editConfig(){
    $this->validate(2);
	
	   if(isset($_POST['submit'])){
	   foreach($_POST['input'] as $_FORM){
       
	   if(empty($_FORM))
	   exit($this->lang->admin->alert->empty);
      }
	  
	 $key   = array('id','secret','url','page','post_msg','inviteMsg','pageTitle','adsScript','adsSlot','adsSlot_2','adsSlot_3','fontName','fontSize');
	 $this->openNwrite($this->config,$key); 
    }
  }
public function editPopUp(){
       $this->validate(3);
	
	   if(isset($_POST['submit'])){
	   foreach($_POST['input'] as $_FORM){
       
	   if(empty($_FORM))
	   exit($this->lang->admin->alert->empty);
      }
        $key =  array('title','announce','announce_header','limit','out_click','esc_click','facebook_app_id','facebook_page','twitter_username','twitter_widget_id','gplus_type','gplus_id');
		$this->openNwrite($this->social,$key); 
		 
		 try{

if(!file_exists($this->social)){
  throw new Exception($this->lang->admin->alert->sFile);
  exit;
}

  $open = file_get_contents($this->social);
  $json = json_decode($open);
  
  if(!file_exists('__src/__plugs/backup.html')){
  throw new Exception($this->lang->admin->alert->bFile);
  exit;
}
 
 $file = file_get_contents('__src/__plugs/backup.html');
    foreach($key as $keys){
	  $file =  str_replace('[%'.$keys.'%]',
	  $json->$keys,$file);
	}
$open = fopen('social.html','w');	
fwrite($open,$file);
fclose($open);    }
catch(Exception $e){
   echo $e->getMessage();
}
	 }
}  

public function editdefault(){
      $this->validate(4);
	
	    if(isset($_POST['submit'])){
			  $key = array();
			  $color = array('color');
			  $x   = array('app_mode','popup','change_bg','ads_1','ads_2','ads_3','app','closed_msg','send_mail','dw_photo','make_pp','copyright','copyright_msg','animation','languages','color','server','host');
               
     			  if(!file_exists('__languages/lang/'.$this->clearInputData($_POST['languages']))){
				  alert($this->lang->admin->alert->fileMissing);
				  exit;
				  }
			   
			   foreach($x as $z){
			      $key[$z] = $this->clearInputData($_POST[$z]);
			   }		
               
               self::changeValue(@$_POST['oldColor'],@$_POST['color'],$color);			   
			  $z = json_encode($key);
			  $o = fopen($this->default,'w');
			  fwrite($o,$z);
			  fclose($o);
			   alert($this->lang->admin->alert->dataUpdated);
			  }
}
  
  public function showImg($b,$d = '__photos'){
  $b2 = $b;
  switch($b){
    case 0:
     $l = '__tmp';
    break;
   
   case 1:
     $l = '__downloaded';
   break;

   case 2:
     $l = '__bg';
   break;

   case 3:
      $l = '__images';
    break;  

	case 4:
      $l = '__fonts';
   break;   
   case 5:
     $l = 'lang';
   break;
   case 6:
   $l = '__demo';
   break;
   default:
   exit;
   break;
	 }
      $filesInDir = scandir($d.'/'.$l);
	    unset($filesInDir[0]);
	    unset($filesInDir[1]);
		$tx = 2;
		 foreach($filesInDir as $a ){
		    if(is_dir($d.'/'.$l.'/'.$a)){
			   unset($filesInDir[$tx]);
			 }
			clearstatcache();
			$tx++;
		 }
		   unset($tx);
		 	$a = $filesInDir;
		$sum = 0;
		foreach($a as $k){
		   $sum = $sum + filesize($d.'/'.$l.'/'.$k) / 1024;
		}
		echo '<li class="list-group-item active"><div class="info_focus"><strong>'.count($a).'</strong>  '.$this->lang->admin->info->tFile.',   '.substr($sum,0,5).'KB '.$this->lang->admin->info->fSpace.'</div></li>';
		$ex = array('jpg','jpeg','png','gif','ttf','html','xml','zip','json');
		foreach($a as $b){
		
		$xx = $d.'/'.$l.'/'.$b;
		$img = $d.'/'.$l.'/'.$b;
		$x  = 0;
         foreach($ex as $ext){

		   if(strchr($xx,$ext)){	
		   
		   if($ext == 'ttf')
		   $img = '__stylesheet/__images/fonts.jpg';
		    elseif($ext == 'html')
		   $img = '__stylesheet/__images/html.jpg';
		    elseif($ext == 'xml')
		   $img = '__stylesheet/__images/xml.jpg';
		    elseif($ext == 'zip')
		   $img = '__stylesheet/__images/zip.jpg';
		   
	  
		   if($b2 == 6){
			include ('app-type.php');
			
		   }else{
		   echo '<div class="dlt_img" title="'.$b.'"><a href="'.$xx.'" target="_blank"><img src="'.$img.'" width="150px" height="100px" /></a>
		   <div class="dlt_ft">';
		     echo '<input type="checkbox" name="img[]" value="'.$b.'"/>';
			  echo  $this->lang->admin->info->select.'
			  <br/>
			 '.$this->lang->admin->info->updatedOn.': '.date("Y-m-d",filemtime($xx)).'
			  <br/>
			  '.$this->lang->admin->info->size.': '.substr((filesize($xx) / 1024),0,5) .'KB
			  <br/>';
			   if($ext == 'jpg' || $ext == 'jpeg' || $ext == 'png'|| $ext == 'gif' || $ext == 'bmp')
			 echo $this->lang->admin->info->dimenson.': '.getimagesize($xx)[0]. ' x '.getimagesize($xx)[1];
			 
			 echo ' <br/>
			  '.$this->lang->admin->info->type.': '.strtoupper($ext).' file
		   </div></div> ';
		    }}
		  }
		  
		}
	$this->onSubmit($l,$a,$d,$b2);
  
		
  }
  
  private function onSubmit($l,$a,$d,$activate = 6){
     error_output();
	 if(isset($_POST['submit'])){
	    
		$restrict = array(
		    'index.html','index','.htaccess','..','http://','www','https://','../','ftp','http','xml','css','php','php5','js','html'
		);
		$z = strtolower(str_ireplace(' ','_',$_POST['submit']));
		       if($z != 'upload'){
			 foreach(@$_POST['img'] as $x){
			     foreach($restrict as $y){
				     if(strchr($x,$y)){
					    alert("This types of files are not allowed to download or delete.");
				        exit;
					 }
				 }
			 } 
	   }
         switch($z){

     	case 'delete':

		   isEmpty();
		      if($activate == 6){
			      foreach(@$_POST['img'] as $b){
				     $x = basename($b,".jpg");
					 try{
					 unlink("__types/__files/__img/".$x.".jpg");
					 unlink("__types/__files/__src/".$x.".php");
					 unlink("__types/__files/__json/".$x.".json");
					 unlink("__types/__files/__demo/".$x.".jpg");
					 alert($x.' '.$this->lang->admin->alert->fDeleted.' ');
			        }catch(Exception $e){
					    alert($this->lang->index->unknwnErr);
			 
					 }
				  }    
			  }else{
             $c = count($this->clearInputData($_POST['img']));
			 $x = 0;
		    foreach(@$_POST['img'] as $b){
			  unlink($d.'/'.$l.'/'.$b);
			  $x += 1;
			}
			 alert($x.' '.$this->lang->admin->alert->fDeleted.' ');
			 }
		   break;  
		   
		   
		   case 'delete_all':
		     if($activate == 6){
			   alert($x.' '.$this->lang->admin->alert->err_dlt_type.' ');
			  }else{
		   $c = count($a);
		   $x = 0;
		  
		    foreach($a as $b){
			   unlink($d.'/'.$l.'/'.$b);
			   $x += 1;
			}
		   }alert($x.' '.$this->lang->admin->alert->fDeleted.'');
		   break;
		   case 'upload':
		   $c2i  = $this->clearInputData(@$_POST['c2i']);
		   if($l == "__images" && !empty($c2i)){
		       self::doUpload($l,$d,$c2i);
		 	}else{
		        if($activate == 6){
				       self::doUpload($l,$d,$activate);
				}else{
					   self::doUpload($l,$d,$activate);
			 }
			   
			}
		   break;
		    case 'make_default':
		         isEmpty();
		  
		 
		         rename($d.'/'.$l.'/bg.jpg',$d.'/'.$l.'/'.time().'.jpg');
			     rename($d.'/'.$l.'/'.$_POST['img'][0],$d.'/'.$l.'/bg.jpg');
				 alert($this->lang->admin->alert->dataUpdated);
		   break;
		   case 'default':
		        //isEmpty();
				
				rename($d.'/'.$l.'/bg.jpg',$d.'/'.$l.'/'.time().'.jpg');
                //rename($d.'/'.$l.'/backup.jpg',$d.'/'.$l.'/bg.jpg');
				copy($d.'/'.$l.'/backup/bg.jpg',$d.'/'.$l.'/bg.jpg');
				alert($this->lang->admin->alert->dataUpdated);
			
		   break;
		   case 'download':
		   case 'download_all':
		   error_output();
		   if($activate == 6){
		               foreach(@$_POST['img'] as $b){
try{			                                 echo $b;
											  $x = basename($b,".jpg");
											   $zip = new ZipArchive();
											   $filename = "__tmp/__tmp/".$x.".zip";
										
											   if ($zip->open($filename, ZIPARCHIVE::CREATE)!==TRUE) {
											exit($this->lang->admin->alert->cOpen." <$filename>\n");
										}
										$zip->addFromString("readme.txt", ">-> This app code is downloaded from http://www.beingprogrammer.com <-<");
										
												 $zip->addFile("__types/__files/__img/".$x.".jpg");
												 $zip->addFile("__types/__files/__demo/".$x.".jpg");
												 $zip->addFile("__types/__files/__src/".$x.".php");
											     $zip->addFile("__types/__files/__json/".$x.".json");
			                              }

catch(Exception $e){
	alert($this->lang->admin->alert->err_download_app);
}										  }
		
		}
		                               else{ $zip = new ZipArchive();
										$filename = "__tmp/__tmp/".sha1(time()).".zip";
										if ($zip->open($filename, ZIPARCHIVE::CREATE)!==TRUE) {
											exit($this->lang->admin->alert->cOpen." <$filename>\n");
										}
										$zip->addFromString("readme.txt", ">-> This app is downloaded from http://www.beingprogrammer.com <-<");
										
										if($z == 'download_all'){
										$c = count($a);
                                		foreach($a as $b){
			                            $zip->addFile($d.'/'.$l.'/'.$b);
			                              }
										 }
										 else if($z == 'download'){
										    foreach(@$_POST['img'] as $b){
			                                    $zip->addFile($d.'/'.$l.'/'.$b);
			                               }
										 }}	
										$zip->close();
										echo '<script>window.top.location = "'.$filename.'"</script>';
										 
									 
		   break;
		   case 'activate':
		   isEmpty();
		   foreach(@$_POST['img'] as $b){
		      $filename =  basename($b,".jpg");
			  $file = '__types/__files/__src/'.$filename.'.php';
			  $img = '__types/__files/__img/'.$filename . '.jpg';
			  $json = '__types/__files/__json/'.$filename.'.json';
			  if(file_exists($file) && file_exists($img) && file_exists($json)){
					copy($img,"__photos/__bg/bg.jpg");
					copy($img,"__photos/__bg/backup/bg.jpg");
					copy($file,"__src/__plugs/index.php");
					copy($json,"__src/__data/info.json");
				    alert("App " .$filename." ". $this->lang->admin->alert->success_in_activate);
			  } else{
			     //output error
				 alert($this->lang->admin->alert->err_in_activate);
			  }
		   }
		   $s = scandir("__photos/__tmp/");
		   $c = count($s);
		   $x = 0;
		  
		    foreach($s as $b){
			 if(strchr($b,"jpg")){
			    unlink("__photos/__tmp/".$b);
			  }
			}
		   break;
		 }		 
	 }
  }
  
  private function doUpload($l,$d,$activate,$c2i = ''){
		if($activate == 6){
        $allowedExts = array("zip");
        }else{$allowedExts = array("gif", "jpeg", "jpg", "png","ttf","otf","fon","xml","zip");
        }$temp = explode(".", $_FILES["file"]["name"]);

		$extension = end($temp);
        if ((($_FILES["file"]["type"] == "image/gif")

		|| ($_FILES["file"]["type"] == "image/jpeg")
        || ($_FILES["file"]["type"] == "image/jpg")

		|| ($_FILES["file"]["type"] == "image/pjpeg")
        || ($_FILES["file"]["type"] == "image/x-png")
		
        || ($_FILES["file"]["type"] == "application/octet-stream")
        || ($_FILES["file"]["type"] == "application/zip")
        
		|| ($_FILES["file"]["type"] == "text/xml")

		|| ($_FILES["file"]["type"] == "image/png"))
        || ($_FILES["file"]["size"] < 200000)

		|| in_array($extension, $allowedExts))
        {
        if ($_FILES["file"]["error"] > 0)
  
        {
       alert("Error: " . $_FILES["file"]["error"]);

        }
        else
        {
    if($l == "__images" && !empty($c2i)){
	     move_uploaded_file($_FILES["file"]["tmp_name"],
         $d."/".$l .'/'. $_FILES["file"]["name"]);
		 rename($d."/".$l .'/'. $_FILES["file"]["name"],$d."/".$l .'/'.$c2i);
		 alert($this->lang->admin->alert->fReplace."  ".$c2i);
	}else{		
    if (file_exists( $d."/".$l .'/'. $_FILES["file"]["name"])){
     alert($_FILES["file"]["name"] . " already exists. ");
      }
    else{
	  if($activate == 6){
	     move_uploaded_file($_FILES["file"]["tmp_name"],
		 $d."/". $_FILES["file"]["name"]);
		 $filename = $d."/".$_FILES["file"]["name"];
	   
			$zip = new ZipArchive();
			$x = $zip->open($filename);
			if($x === true) {
				$zip->extractTo("__types");
				$zip->close();
				unlink($filename);
				$name = basename($filename,".zip");
				$img = "__types/".$name.".jpg";
				$demo= "__types/demo_".$name.".jpg";
				$file = "__types/".$name.".php";
				$json = "__types/".$name.".json";
				if(file_exists($img) && file_exists($file) && file_exists($json) && file_exists($demo)){
				copy($img,"__types/__files/__img/".$name.".jpg");
				unlink($img);
				copy($demo,"__types/__files/__demo/".$name.".jpg");
				unlink($demo);
				copy($file,"__types/__files/__src/".$name.".php");
			 	unlink($file);
				copy($json,"__types/__files/__json/".$name.".json");
			 	unlink($json);
			   alert($this->lang->admin->alert->fUpload );
			
				}
				else{
				//output some error here
				unlink($img);
				unlink($file);
				unlink($demo);
				unlink($json);
				alert($this->lang->admin->alert->err_app_type );
				exit;
				}
			} else {
				alert("There was a problem. Please try again!");
				die;
			}

	  }else{
      move_uploaded_file($_FILES["file"]["tmp_name"],
      $d."/".$l .'/'. $_FILES["file"]["name"]);
       }}
	  }
    }
  }

  else{
 alert($this->lang->admin->alert->invalid);
   }
  
  }
  
  public function selectOption($dir,$a = ""){
         $x = scandir($this->clearInputData($dir));
		 unset($x[0]);
		 unset($x[1]);
		 foreach($x as $z){
		     $i = pathinfo($z);
			 $ext = @$i['extension'];
			 if(empty($a)){
		     echo '<option value="'.$z.'">'.$i['filename'].'</option>';}
			 else{
			    if($ext == $a){
				  echo '<option value="'.$z.'">'.$i['filename'].'</option>';}
			   }
			 }
		 }
  
  private static function changeValue($oldClr,$value,$key,$backup ='__src/__plugs/backup.css'){	
  try{
    if(!file_exists($backup)){
  throw new Exception($this->lang->admin->alert->bFile);
  exit;
}
 
 $file = file_get_contents($backup);
    foreach($key as $keys){
	  $file =  str_replace('[%'.$keys.'%]',
	  $value,$file);
	}
$open = fopen('__stylesheet/'.$value.'.css','w');	
fwrite($open,$file);
unlink('__stylesheet/'.$oldClr.'.css');
fclose($open); 

 }
catch(Exception $e){
    //Just chill
 }
}

private function loginAttempt($name,$license,$lg,$do){    
 $ip = $_SERVER['REMOTE_ADDR'];
 

 $key = array('time','attempt','ip','username','license');
	 $value = array(time(),0,$ip,$name,$license);
	 $x = 0;
	 if(!file_exists($lg) || $do == 0){
	      
		  $open = fopen($lg,'w');
		  foreach($key as $keys){
	     
		  $v[$keys] = $value[$x];
		  $x++;
	      }
	      $js = json_encode($v);
		  fwrite($open,$js);
	      fclose($open);
		   //exit;
	   }
	   else{
	      $open =  file_get_contents($lg);
	   }
	
	  
       $login = json_decode($open);
	   
	   if($login->attempt >= 2){
	         $cntnt =  file_get_contents('.htaccess');
			 $fopen = fopen('htaccess.txt','r');
			 $fopen2 = fopen('.htaccess','w');
			 fwrite($fopen,$cntnt);
			 fwrite($fopen2,' ');
			 fclose($fopen);
			 fclose($fopen2);
			echo ' 2';
		   exit;
	   }
	   
	   $value[1] = (int)$login->attempt + 1;
	   
            foreach($key as $keys){
	     
		  $v[$keys] = $value[$x];
		  $x++;
	      }
	      $js = json_encode($v);
		  $open = fopen($lg,'w');
		  fwrite($open,$js);
	      fclose($open);
		   
		  }
 }

function alert($alert){
   global $lang;
    echo '<div id="sw_windowBox" style="display:block;z-index:9999;"></div><div id="alert">';
    echo '<div class="title">'.$lang->index->msg.'</div>';
    echo '<div class="content">'.$alert.'</div>';
    echo '<div class="footer">'.$lang->index->ok.'</div>';
    echo '</div>';
  }
function isEmpty(){
if(empty($_POST['img'])){
		   alert($this->lang->admin->alert->empty);
		   die;}
}

function doChecked($x,$y){
           if($x == $y)
		   echo 'checked';
   }

function get_mime_type($file)
{

        // our list of mime types
        $mime_types = array(
                "pdf"=>"application/pdf"
                ,"exe"=>"application/octet-stream"
                ,"zip"=>"application/zip"
                ,"docx"=>"application/msword"
                ,"doc"=>"application/msword"
                ,"xls"=>"application/vnd.ms-excel"
                ,"ppt"=>"application/vnd.ms-powerpoint"
                ,"gif"=>"image/gif"
                ,"png"=>"image/png"
                ,"jpeg"=>"image/jpg"
                ,"jpg"=>"image/jpg"
                ,"mp3"=>"audio/mpeg"
                ,"wav"=>"audio/x-wav"
                ,"mpeg"=>"video/mpeg"
                ,"mpg"=>"video/mpeg"
                ,"mpe"=>"video/mpeg"
                ,"mov"=>"video/quicktime"
                ,"avi"=>"video/x-msvideo"
                ,"3gp"=>"video/3gpp"
                ,"css"=>"text/css"
                ,"jsc"=>"application/javascript"
                ,"js"=>"application/javascript"
                ,"php"=>"text/html"
                ,"htm"=>"text/html"
                ,"html"=>"text/html"
        );

       @$extension = strtolower(end(explode('.',$file)));
       return $mime_types[$extension];
}
	
function error_output(){
  $x = true;
  if($x){
   error_reporting(0);
  }else{
    error_reporting(E_ALL);
  }
}
?>