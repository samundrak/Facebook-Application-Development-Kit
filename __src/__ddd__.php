<?php
/*
 *Refrence: https://www.webniraj.com/2014/05/01/facebook-api-php-sdk-updated-to-v4-0-0/;
 */
// include required files form Facebook SDK
require 'config.php';
 

require_once( 'Facebook/HttpClients/FacebookHttpable.php' );
require_once( 'Facebook/HttpClients/FacebookCurl.php' );
require_once( 'Facebook/HttpClients/FacebookCurlHttpClient.php' );

require_once( 'Facebook/Entities/AccessToken.php' );
require_once( 'Facebook/Entities/SignedRequest.php' );

require_once( 'Facebook/FacebookSession.php' );
require_once( 'Facebook/FacebookRedirectLoginHelper.php' );
require_once( 'Facebook/FacebookRequest.php' );
require_once( 'Facebook/FacebookResponse.php' );
require_once( 'Facebook/FacebookSDKException.php' );
require_once( 'Facebook/FacebookRequestException.php' );
require_once( 'Facebook/FacebookOtherException.php' );
require_once( 'Facebook/FacebookAuthorizationException.php' );
require_once( 'Facebook/GraphObject.php' );
require_once( 'Facebook/GraphSessionInfo.php' );

use Facebook\HttpClients\FacebookHttpable;
use Facebook\HttpClients\FacebookCurl;
use Facebook\HttpClients\FacebookCurlHttpClient;

use Facebook\Entities\AccessToken;
use Facebook\Entities\SignedRequest;

use Facebook\FacebookSession;
use Facebook\FacebookRedirectLoginHelper;
use Facebook\FacebookRequest;
use Facebook\FacebookResponse;
use Facebook\FacebookSDKException;
use Facebook\FacebookRequestException;
use Facebook\FacebookOtherException;
use Facebook\FacebookAuthorizationException;
use Facebook\GraphObject;
use Facebook\GraphSessionInfo;

// start session
session_start();

// init app with app id and secret
FacebookSession::setDefaultApplication( $app['id'], $app['secret'] );

// login helper with redirect_uri
$helper = new FacebookRedirectLoginHelper( $app['url'] );

// see if a existing session exists
if ( isset( $_SESSION ) && isset( $_SESSION['fb_token'] ) ) {
  // create new session from saved access_token
  $session = new FacebookSession( $_SESSION['fb_token'] );
  
  // validate the access_token to make sure it's still valid
  try {
    if ( !$session->validate() ) {
      $session = null;
    }
  } catch ( Exception $e ) {
    // catch any exceptions
    $session = null;
  }
}  

if ( !isset( $session ) || $session === null ) {
  // no session exists
  
  try {
    $session = $helper->getSessionFromRedirect();
  } catch( FacebookRequestException $ex ) {

  // When Facebook returns an error
    // handle this better in production code
    print_r( $ex );
  } catch( Exception $ex ) {
  
  // When validation fails or other local issues
    // handle this better in production code
    print_r( $ex );
  }
  
}

// see if we have a session
if ( !isset( $session ) ) {
  
  // show login url
  $loginUrl = $helper->getLoginUrl( array( 'publish_actions','email', 'user_photos','user_friends','public_profile','user_about_me','read_friendlists' ) ) ;// 
  echo '<script>window.top.location="'.$loginUrl.'";</script>';
  exit();
  }
  
  // save the session
  $_SESSION['fb_token'] = $session->getToken();
  
  // create a session using saved token or the new one we generated at login
  $session = new FacebookSession( $session->getToken() );
     
?>
 
 