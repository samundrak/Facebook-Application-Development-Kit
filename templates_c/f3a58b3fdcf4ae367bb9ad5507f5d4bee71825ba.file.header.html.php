<?php /* Smarty version Smarty-3.1.14, created on 2015-07-12 21:32:15
         compiled from "./templates/default/__body/header.html" */ ?>
<?php /*%%SmartyHeaderCode:191248604555a28c033fe1c0-72235811%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'f3a58b3fdcf4ae367bb9ad5507f5d4bee71825ba' => 
    array (
      0 => './templates/default/__body/header.html',
      1 => 1419861898,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '191248604555a28c033fe1c0-72235811',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'lang' => 0,
    'fb' => 0,
    'app' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_55a28c034ae3e4_83888263',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_55a28c034ae3e4_83888263')) {function content_55a28c034ae3e4_83888263($_smarty_tpl) {?><head>
 <title><?php echo adminOrder('app_name','info');?>
</title>
    <script>
      var adminOrder = Array();
	  adminOrder['animation'] = "<?php echo adminOrder('animation');?>
";
	     var lang            = Array();
		 
	     lang['onErr']       ="<?php echo $_smarty_tpl->tpl_vars['lang']->value->index->onErr;?>
"; 
		 lang['loading']     = '<?php echo $_smarty_tpl->tpl_vars['lang']->value->index->loading;?>
';
		 lang['created']     = '<?php echo $_smarty_tpl->tpl_vars['lang']->value->index->created;?>
';
		 lang['wait']        = '<?php echo $_smarty_tpl->tpl_vars['lang']->value->index->wait;?>
';
		 lang['p_wait']      = '<?php echo $_smarty_tpl->tpl_vars['lang']->value->index->p_wait;?>
';
		 lang['wPosting']    = '<?php echo $_smarty_tpl->tpl_vars['lang']->value->index->wPosting;?>
';
		 lang['postSuccess'] = '<?php echo $_smarty_tpl->tpl_vars['lang']->value->index->postSuccess;?>
';
		 lang['wDownload']   = '<?php echo $_smarty_tpl->tpl_vars['lang']->value->index->wDownload;?>
';
		 lang['wPosting']    ='<?php echo $_smarty_tpl->tpl_vars['lang']->value->index->wPosting;?>
';
		 lang['mailError']   ='<?php echo $_smarty_tpl->tpl_vars['lang']->value->index->mailError;?>
';
		 lang['mailSending'] ='<?php echo $_smarty_tpl->tpl_vars['lang']->value->index->mailSending;?>
';
		 lang['mailSent']    ='<?php echo $_smarty_tpl->tpl_vars['lang']->value->index->mailSent;?>
';
		 lang['mailFail']    ='<?php echo $_smarty_tpl->tpl_vars['lang']->value->index->mailFail;?>
';
		 lang['unknwnErr']   ='<?php echo $_smarty_tpl->tpl_vars['lang']->value->index->unknwnErr;?>
';
   </script>
 <style >
   @font-face
{ 
font-family: fontOfApp;
src: url(__stylesheet/__fonts/<?php echo adminOrder('fontName','config');?>
);
font-size:13px;
}
 </style>
<link href="__stylesheet/default.css" rel="stylesheet" type="text/css" />


 <link href="__boot/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
 <link href="__stylesheet/<?php echo adminOrder('color');?>
.css" rel="stylesheet" type="text/css" />
 <link href="__stylesheet/override.css" rel="stylesheet" type="text/css" />
 <?php if (adminOrder('app_mode','default')=='on'){?>
  
<script>userData = ["<?php echo $_smarty_tpl->tpl_vars['fb']->value->username;?>
","<?php echo $_smarty_tpl->tpl_vars['fb']->value->username;?>
.jpg","<?php echo $_smarty_tpl->tpl_vars['app']->value['id'];?>
"];</script>
 <?php }else{ ?>
 <script>userData = ["fadkit","fadkit.jpg","3333"];</script> 
<?php }?>
 <script src="__jscript/jquery.js" type="text/javascript"></script>
<script src="__boot/js/bootstrap.min.js" type="text/javascript"></script>
<script src="__jscript/script.js" type="text/javascript"></script>
<script src="__jscript/__fb__.js" type="text/javascript"></script>
<script type="text/javascript" src="http://connect.facebook.net/en_US/all.js"></script>

 
</head>
  <?php }} ?>