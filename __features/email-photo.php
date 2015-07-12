<?php 
/*
 Copyright (C) 2014  Samundra kc

    
 *- @Author: Samundra kc;
 *- @contact: samundrak@yahoo.com
 *
 */
    require('libs/Smarty.class.php');
    
   $smarty = new Smarty;
   $smarty->assign('name',$x['session']);
   $smarty->assign('lang',$lang);
   $smarty->display('templates/features/email-photo.html');

   ?>