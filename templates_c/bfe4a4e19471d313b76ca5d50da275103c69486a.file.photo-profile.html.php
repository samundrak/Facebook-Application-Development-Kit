<?php /* Smarty version Smarty-3.1.14, created on 2025-08-18 09:42:52
         compiled from "templates/admin/include/photo-profile.html" */ ?>
<?php /*%%SmartyHeaderCode:155376813568a2f59ce0d0a3-94107787%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'bfe4a4e19471d313b76ca5d50da275103c69486a' => 
    array (
      0 => 'templates/admin/include/photo-profile.html',
      1 => 1755507186,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '155376813568a2f59ce0d0a3-94107787',
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
  'unifunc' => 'content_68a2f59ce51047_05099661',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_68a2f59ce51047_05099661')) {function content_68a2f59ce51047_05099661($_smarty_tpl) {?> <div class="row"><div class="caption lead" ><?php echo showImg('__stylesheet/__images/icons/user_go.png',16,16,'center');?>
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