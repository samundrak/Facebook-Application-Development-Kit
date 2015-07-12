<?php /* Smarty version Smarty-3.1.14, created on 2014-12-29 16:13:04
         compiled from "templates\admin\include\photo-generated.html" */ ?>
<?php /*%%SmartyHeaderCode:1924954a16f80975293-35863948%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'daf8330c294e71e10e2c6d43c6943737363d9d8f' => 
    array (
      0 => 'templates\\admin\\include\\photo-generated.html',
      1 => 1419865889,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1924954a16f80975293-35863948',
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
  'unifunc' => 'content_54a16f80a5ba48_54884058',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_54a16f80a5ba48_54884058')) {function content_54a16f80a5ba48_54884058($_smarty_tpl) {?> <div class="row"><div class="caption lead" ><?php echo showImg('__stylesheet/__images/icons/photo.png',16,16,'center');?>
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