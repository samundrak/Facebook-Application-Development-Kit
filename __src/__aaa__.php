<?php 
/*
 Copyright (C) 2014  Samundra kc
 
 *- @Author: Samundra kc;
 *- @contact: samundrak@yahoo.com
 *
 */

 /*
   WHAT HAPPENS HERE ?
   Here we make new facebook class
   which will return current users
   details like there username,gender,
   profile photos,friends lists,we pull
   data from facebook and passing it to
   our new facebook class!!!
   
   
   
 */
require('__ddd__.php');
require_once( 'Facebook/FacebookRequest.php' );
use Facebook\FacebookRequest;
$fb = new fb($session);
 
 
class fb{
private $global;
public  $freinds;

             function __construct($facebook){
             $this->global   = $facebook;
	     $this->freinds  = array();
             $session        = new FacebookRequest( $this->global, 'GET', '/me' );
             $request =$session->execute();
	     $graphObject = $request->getGraphObject()->asArray();
	     $this->username = $graphObject['id'];
             $this->name     = $graphObject['name'];
             $this->image    = 'https://graph.facebook.com/'.$this->username.'/picture?width=219&height=300';
             $this->gender   = m_f($graphObject['gender']);   
             
   }
   
//JUST UPLOAD GENERATED PHOTO TO FACEBOOK  
   public function publishStream($photo,$message){

/* PHP SDK v4.0.0 */
/* make the API call */
$request = new FacebookRequest(
  $this->global,
  'POST',
  '/photos',
  array (
  'message' => $message,
    'source' => '@'.$photo
  )
);
$response = $request->execute();
}
   
//RETURNS FREINDS ID NUMBER AND STORE IT IN SINGLE VARIABLE  
   public function freindListId(){
     
    global $facebook;
   // $this->freinds = $this->global->api('/me/friends');
    //for($x = 1; $x <=48; $x++){
    //$frnTab.=  $this->freinds['data'][$x]['id'].',';
     //}
    //$frnTab.= $this->freinds['data'][0]['id'];
	//return $frnTab;
   }
   
//THIS METHOD UPLOAD PHOTO TO FACEBOOK AND RETURNS THE ALBUM ID OF UPLOADED PHOTO AND REDIRECT USER TO FACEBOOK MAKE PROFILE PICTURE PAGE   
          public function makePPonFb($photo){
		$request = new FacebookRequest(
  $this->global,
  'GET',
  '/me/albums'
);
$album_id = '';
$response = $request->execute();
$graphObject = $response->getGraphObject()->asArray();
 
$arr =  $graphObject['data'];
   foreach($arr as $pr){
     $ar = get_object_vars($pr);
       if($ar['name'] == 'Profile Pictures'){

         if($ar['can_upload'] == 1){
          $album_id = $ar['id'];
}else{
        $album_id = 0;
   }}
  }
/* handle the result */
 if($album_id != 0){
$request = new FacebookRequest(
  $this->global,
  'POST',
  '/'.$album_id.'/photos',
  array (
    'source' => '@'.$photo,
  )
);
$response = $request->execute(); 
$graph =  $response->getGraphObject()->asArray();
echo 'https://www.facebook.com/photo.php?fbid='.$graph['id'].'&makeprofile=1';
}else{
  echo '0';
}
        }   


 }
 
//HELP US TO KNOW WHETHER THE CURRENT USER IS MALE OR FEMALE
function m_f($x){switch($x){case 'male':$g = 0;break;case 'female':$g = 1;break;}return $g;}

//SAVES PROFLE PHOTO OF USERS IN OUR SERVER!
function save_image($img,$fullpath){$ch = curl_init ($img);curl_setopt($ch, CURLOPT_HEADER, 0);curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);curl_setopt($ch,CURLOPT_FOLLOWLOCATION, TRUE );curl_setopt($ch, CURLOPT_BINARYTRANSFER,1); $rawdata=curl_exec($ch);curl_close ($ch);if(file_exists($fullpath)){unlink($fullpath);}$fp = fopen($fullpath,'x');
fwrite($fp, $rawdata);fclose($fp);}
?>