<?php
/*
 Copyright (C) 2014  Samundra kc

    This program is free software: you can redistribute it and/or modify
    it under the terms of the GNU General Public License as published by
    the Free Software Foundation, either version 3 of the License, or
    any later version.

    This program is distributed in the hope that it will be useful,
    but WITHOUT ANY WARRANTY; without even the implied warranty of
    MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
    GNU General Public License for more details.

    You should have received a copy of the GNU General Public License
    along with this program.  If not, see <http://www.gnu.org/licenses/>.
 
 *- @Author: Samundra kc;
 *- @contact: samundrak@yahoo.com
 *
 *- Free Facebook App PHP Scripts
 *- DownLoad it at http://www.soosal.com 
 *- You can use this app for your Facebook Page
 *- or Any other commercial purpose,Buisness or Entertainment purpose
 *- Also this app will help new developers to learn about facebook app development
 *- You no need to take permisson with me to use this app for your commercial purpose.
 */

  include '__src/__iii__.php'; 
  require('libs/Smarty.class.php');
  require_once 'lib/swift_required.php';  
	//required
  $smarty = new smarty;
  echo 1;
  $smarty->assign('lang',$lang);
  $smarty->assign('img_link',$img->outputFinalLink(1));
  $smarty->assign('fb',$fb);
  $smarty->assign('app',$app);
  if(adminOrder('app_mode','default') ==  'on')
  {$smarty->assign('freindListId',$fb->freindListId());}
  $smarty->display('templates/default/index.html');
  
?>
