<?php /* Smarty version Smarty-3.1.14, created on 2014-12-29 16:13:02
         compiled from "templates\admin\include\photo-profile.html" */ ?>
<?php /*%%SmartyHeaderCode:2322754a16f7e98f7c1-11939018%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'd3a593cee2ca8f57ccacde185cdb1225555a99fb' => 
    array (
      0 => 'templates\\admin\\include\\photo-profile.html',
      1 => 1419865886,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2322754a16f7e98f7c1-11939018',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'lang' => 0,
    'admin' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_54a16f7ea7dc82_92991232',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_54a16f7ea7dc82_92991232')) {function content_54a16f7ea7dc82_92991232($_smarty_tpl) {?> <div class="row"><div class="caption lead" ><?php echo showImg('__stylesheet/__images/icons/user_go.png',16,16,'center');?>
<?php echo $_smarty_tpl->tpl_vars['lang']->value->admin->page->settings->profile->title;?>
</div>
 </div>
<form action="" method="post">
   
   <div class="row">
       
       <?php echo $_smarty_tpl->getSubTemplate ("templates/admin/include/tiny_parts/buttons.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
 
	  
    </div> <br/>
	<div class="row">
	<ul class="list-group">
  <?php echo $_smarty_tpl->tpl_vars['admin']->value->showImg(1);?>

  <ul>
 
  </div>
  <br/>
   
</form>
<?php }} ?>