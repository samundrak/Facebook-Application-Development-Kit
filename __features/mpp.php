<?php
/*
 Copyright (C) 2014  Samundra kc

 *- @Author: Samundra kc;
 *- @contact: samundrak@yahoo.com
 */
if(!$x['session'])
exit;

if(empty($x['session']))
exit;

$usr = $x['session'];
$pik = '__photos/__tmp/'.$usr.'.jpg';

if(!file_exists($pik))
exit;
 
      echo $fb->makePPonFb($pik);
	   
?>