<?php /* Smarty version Smarty-3.1.14, created on 2014-12-29 16:30:16
         compiled from "templates\admin\include\app-fonts.html" */ ?>
<?php /*%%SmartyHeaderCode:1984454a16f850d9d47-65338942%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'e8aa5e134dbf0f07d3fd1d6c4eb1330ed2ad6d05' => 
    array (
      0 => 'templates\\admin\\include\\app-fonts.html',
      1 => 1419867011,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1984454a16f850d9d47-65338942',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_54a16f851c4376_50492001',
  'variables' => 
  array (
    'lang' => 0,
    'admin' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_54a16f851c4376_50492001')) {function content_54a16f851c4376_50492001($_smarty_tpl) {?><div class="row"><div class="caption lead" ><?php echo showImg('__stylesheet/__images/icons/font.png',16,16,'center');?>
<?php echo $_smarty_tpl->tpl_vars['lang']->value->admin->page->settings->appFonts->title;?>
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
  <?php echo $_smarty_tpl->tpl_vars['admin']->value->showImg(4,'__stylesheet');?>

</form>
</div>
</div><br/><br/><?php }} ?>