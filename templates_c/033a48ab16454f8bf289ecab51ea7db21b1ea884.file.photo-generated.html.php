<?php /* Smarty version Smarty-3.1.14, created on 2025-08-18 09:43:00
         compiled from "templates/admin/include/photo-generated.html" */ ?>
<?php /*%%SmartyHeaderCode:128046999168a2f5a4a1f8d5-58635799%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '033a48ab16454f8bf289ecab51ea7db21b1ea884' => 
    array (
      0 => 'templates/admin/include/photo-generated.html',
      1 => 1755507186,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '128046999168a2f5a4a1f8d5-58635799',
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
  'unifunc' => 'content_68a2f5a4a4df00_99537887',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_68a2f5a4a4df00_99537887')) {function content_68a2f5a4a4df00_99537887($_smarty_tpl) {?> <div class="row"><div class="caption lead" ><?php echo showImg('__stylesheet/__images/icons/photo.png',16,16,'center');?>
<?php echo $_smarty_tpl->tpl_vars['lang']->value->admin->page->settings->generated->title;?>
</div>
</div>
<form action="" method="post">
   
   <div class="row">
       
       <?php echo $_smarty_tpl->getSubTemplate ("templates/admin/include/tiny_parts/buttons.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
 
	  
    </div> <br/>
	<div class="row">
	<ul class="list-group">
  <?php echo $_smarty_tpl->tpl_vars['admin']->value->showImg(0);?>

  <ul>
 
  </div>
  <br/>
   
</form>
<?php }} ?>