<?php   require('__src/admin.php');
require('libs/Smarty.class.php');

  
  $smarty = new smarty;
  $smarty->assign('admin',$admin);
  $smarty->assign('tab',@$_GET['tab']);
  $smarty->assign('lang',$lang);
  $smarty->assign('lCode',$lCode);
  $smarty->display('templates/admin/admin.html');

?>