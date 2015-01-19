<?php 
/*
 Copyright (C) 2014  Samundra kc

    
 *- @Author: Samundra kc;
 *- @contact: samundrak@yahoo.com
 *
 */
require('__src/api.php');
require('__src/GetSet.class.php');

if(adminOrder('app_mode','default') ==  'on')
{
require('__src/__aaa__.php');
}

 
 class Image implements GetSet{
 private $user,$img;
   public function __construct(){
          global $fb,$app;
         $this->user             = array();
         $this->img              = array();
		if(adminOrder('app_mode','default') ==  'on')
{
		save_image('https://graph.facebook.com/'.$fb->username.'/picture?width=165&height=165','__photos/__downloaded/'.$fb->username.'.jpg');
		 $this->user['name']     = $fb->name;  
		 $this->user['username'] = $fb->username; 
		 $this->user['gender']   = $fb->gender;
		 $this->user['email']    = 'email@yahoo.com'; // Saving email is against facebook policy
		 $this->user['photo']    = '__photos/__downloaded/'.$fb->username.'.jpg'; 
		 $this->img['font']      = '__stylesheet/__fonts/'.$app['fontName'];
		 $this->img['size']      = $app['fontSize'];
         $this->img['final']     = '__photos/__tmp/'.$this->user['username'].'.jpg';  
	 }else{
	 	 $this->user['name']     = 'samundra kc '; 
		 $this->user['username'] = 'samund';  
		 $this->user['gender']   = 'male';  
		 $this->user['email']    = 'samundrak@yahoo.com';
		 $this->user['photo']    = '__photos/__downloaded/fadkit.jpg'; 
		 $this->img['font']      = '__stylesheet/__fonts/'.adminOrder('fontName','config'); 
		 $this->img['size']      = adminOrder('fontSize','config');
		 $this->img['final']     = '__photos/__tmp/fadkit.jpg'; 
		  
		}
		  
	 }
//IMAGE MAKING SCRIPTS FOUND UNDER __PLUGS FOLDER
public function makeImg(){
		try{
                        require('__src/__plugs/index.php');
						}catch(Exception $e){}
   }
   
// RETURN BACKGROUND IMAGE USED IN APP  
   public function __first__(){
       $imgFile =  scandir('__photos/__bg');
	    if(count($imgFile) == 2){
		  throw new Exception('No file found in given directory!');
		  exit();
		}
	   for($x = 0; $x <= 1; $x++){
	   array_shift($imgFile);}
	   $totalFiles      = count($imgFile) == 1 ? 0 : count($imgFile);
       if($totalFiles >= 2){
	   $randomNum = mt_rand(0,$totalFiles - 1);
	   }else{
	   $randomNum = mt_rand(0,$totalFiles);
	    }
      $this->img['bg'] = '__photos/__bg/bg.jpg'; 
         return $this->img['bg'];	  
	  }

// CHECK FILE EXISTS , RELOAD BUTTON CLICKED, LAST IMAGE UPDATED
// IF RELOAD CLICKED  THEN GENERATE NEW IMAGE ELSE DON'T GENERATE
	  
	  private function imageManipulateOk($reloadFile){
	   if($reloadFile === 0){
	        $this->makeImg();
	    }else{
	     if(file_exists($this->img['final'])){
		       if(time() - filemtime($this->img['final']) > 200){
			           $this->makeImg();
		
			   }else{
			      return $this->img['final'];
			   }
			   
		 }else{
		    $this->makeImg();
		 }
	   }
      }
//OK IMAGE HAS BEEN GENERATED NOW SEND FINAL LINK TO DISPLAY IT 	 
	 public function outputFinalLink($reloadFile){
     $this->imageManipulateOk($reloadFile);
	 return $this->img['final'];
  }
  
   public function getName($x = array()){
   $o = "";
   if($x){
        if(!empty($x['limit'])){
		$i = (int) $x['limit'];
	     $o = wordwrap($this->user['name'],$i );
	   }
	 }else{
     $o = $this->user['name'];
     }
	 return $o;
   }
   
   public function getUsername(){
    return  $this->user['username'];
   }
   public function getFontSize(){
     return  $this->img['size'];
   }
   public function  getFontStyle(){
     return $this->img['font'];
   }
   public function getBackgroundImage(){
     return $this->img['bg'];
   }
   public function getUserImage(){
     return $this->user['photo'];
   }
   public function getGender(){
     return $this->user['gender'];
   }
    
	public function getFinalImageLink(){
	  return $this->img['final'];
	}
 }
$img = new Image();

 ?>