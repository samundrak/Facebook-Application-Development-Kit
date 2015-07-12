<?php
/*
 Copyright (C) 2014  Samundra kc

    
 *- @Author: Samundra kc;
 *- @contact: samundrak@yahoo.com
 *
 */
require('__src/__iii__.php');
DenyFromAll();

$data = @$_POST['data'];

if(!$data)
   exit;

if(empty($data['to']) && empty($data['from']) && empty($data['img']))
exit;
	$to   = filter_var($data['to'],FILTER_SANITIZE_EMAIL);
	$from = filter_var($data['from'],FILTER_SANITIZE_SPECIAL_CHARS,FILTER_SANITIZE_ENCODED);
	$msg  = filter_var($data['msg'],FILTER_SANITIZE_SPECIAL_CHARS,FILTER_SANITIZE_ENCODED);
	$img  = filter_var($data['img'],FILTER_SANITIZE_SPECIAL_CHARS,FILTER_SANITIZE_ENCODED);
	
if($img){
if(!file_exists($img))
	exit;
	}

require_once 'lib/swift_required.php';

// Create the Transport
/*$transport = Swift_SmtpTransport::newInstance('smtp.example.org', 25)
  ->setUsername('your username')
  ->setPassword('your password')
  ;
*/
/*
You could alternatively use a different transport such as Sendmail or Mail:

// Sendmail
$transport = Swift_SendmailTransport::newInstance('/usr/sbin/sendmail -bs');
*/
 //Mail
$transport = Swift_MailTransport::newInstance();


// Create the Mailer using your created Transport
$mailer = Swift_Mailer::newInstance($transport);

// Create a message
try{
if($img){
$message = Swift_Message::newInstance($from." Sent you a photo.")
  ->setFrom(array($from."@facebook.com" => $from))
  ->setTo(array($to))
  ->setBody($msg) 
  ->attach(Swift_Attachment::fromPath($img)  
  ->setDisposition('inline'));
  echo 0;
  }else{
 $message = Swift_Message::newInstance($from." Sent you Msg")
  ->setFrom(array($from."@facebook.com" => $from))
  ->setTo(array($to))
  ->setBody($msg)
  ;
  echo 0;
  }

// Send the message
$result = $mailer->send($message);}
catch(Exception $e){
   echo 1;
}
?> 