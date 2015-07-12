<?php /* Smarty version Smarty-3.1.14, created on 2014-12-29 15:46:26
         compiled from "templates\admin\include\photo-generated.tpl" */ ?>
<?php /*%%SmartyHeaderCode:414154a16942961328-52848409%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '9774ea24591658093831e4a3a80fd91dcacb5328' => 
    array (
      0 => 'templates\\admin\\include\\photo-generated.tpl',
      1 => 1413824966,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '414154a16942961328-52848409',
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
  'unifunc' => 'content_54a16942a4b963_93376159',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_54a16942a4b963_93376159')) {function content_54a16942a4b963_93376159($_smarty_tpl) {?> <div class="row"><div class="caption lead" ><?php echo showImg('__stylesheet/__images/icons/photo.png',16,16,'center');?>
<?php echo $_smarty_tpl->tpl_vars['lang']->value->admin->page->settings->generated->title;?>
</div>
</div>
<form action="" method="post">
   
   <div class="row">
       
       <?php echo $_smarty_tpl->getSubTemplate ("templates/admin/include/tiny_parts/buttons.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
 
	  
    </div> <br/>
	<div class="row">
	<ul class="list-group">
  <?php echo $_smarty_tpl->tpl_vars['admin']->value->showImg(0);?>

  <ul>
 
  </div>
  <br/>
   
</form>
<?php }} ?>