<?php /* Smarty version Smarty-3.1.14, created on 2014-12-29 16:14:31
         compiled from "templates\admin\include\language.html" */ ?>
<?php /*%%SmartyHeaderCode:1918754a16fd71586f6-32415555%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '45e19f831f84438671855b6d220eb89d067fb217' => 
    array (
      0 => 'templates\\admin\\include\\language.html',
      1 => 1419865894,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1918754a16fd71586f6-32415555',
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
  'unifunc' => 'content_54a16fd723eea2_30832772',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_54a16fd723eea2_30832772')) {function content_54a16fd723eea2_30832772($_smarty_tpl) {?> 
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