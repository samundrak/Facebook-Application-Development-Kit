<?php /* Smarty version Smarty-3.1.14, created on 2025-08-18 09:43:17
         compiled from "templates/admin/include/language.html" */ ?>
<?php /*%%SmartyHeaderCode:209499818968a2f5b5632410-12102378%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '815417014451fdd50b52dcb0769497c65533ea05' => 
    array (
      0 => 'templates/admin/include/language.html',
      1 => 1755507186,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '209499818968a2f5b5632410-12102378',
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
  'unifunc' => 'content_68a2f5b566a338_01450301',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_68a2f5b566a338_01450301')) {function content_68a2f5b566a338_01450301($_smarty_tpl) {?> 
 <div class="row"><div class="caption lead" ><?php echo showImg('__stylesheet/__images/icons/language.png',16,16,'center');?>
<?php echo $_smarty_tpl->tpl_vars['lang']->value->admin->page->homepage->language;?>
</div>
 </div>
 
<div class="row">
<div class="col-md-4">
<ul class="list-group">
<form action="" method="post" enctype="multipart/form-data">
<li class="list-group-item active">
  <?php echo $_smarty_tpl->tpl_vars['lang']->value->admin->page->settings->appImages->s_f;?>

  </li>
  <li class="list-group-item">
     <input class="form-control" type="file" name="file" id="file"/> 
	 </li>
	 <li class="list-group-item">
     <input class="form-control btn-primary" type="submit" name="submit" value="Upload"/> 
    </li>
</form>
</ul>
</div>
 <div class="col-md-8">
<form action="" method="post">
  <?php echo $_smarty_tpl->getSubTemplate ("templates/admin/include/tiny_parts/buttons.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

  <br/><br/>
 <?php echo $_smarty_tpl->tpl_vars['admin']->value->showImg(5,'__languages');?>

</form>
</div>
</div><br/><br/><?php }} ?>