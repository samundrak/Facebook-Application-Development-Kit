<?php /* Smarty version Smarty-3.1.14, created on 2015-07-12 21:56:37
         compiled from "templates/admin/include/app-images.html" */ ?>
<?php /*%%SmartyHeaderCode:181662213455a291b9198b38-43294789%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '3a646dc63427d939b5b2d2b4b207541acac65b7e' => 
    array (
      0 => 'templates/admin/include/app-images.html',
      1 => 1419865907,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '181662213455a291b9198b38-43294789',
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
  'unifunc' => 'content_55a291b9238e59_50315135',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_55a291b9238e59_50315135')) {function content_55a291b9238e59_50315135($_smarty_tpl) {?><div class="row"><div class="caption lead" ><?php echo showImg('__stylesheet/__images/icons/app-image.png',16,16,'center');?>
<?php echo $_smarty_tpl->tpl_vars['lang']->value->admin->page->settings->appImages->title;?>
</div>
</div>
<div class="row">
 <div class="col-md-4">
<form action="" method="post" enctype="multipart/form-data">
  <ul class="list-group">
   <li class="list-group-item active">
  <label for="name"><?php echo $_smarty_tpl->tpl_vars['lang']->value->admin->page->settings->appImages->r_msg;?>
</label>
      </li>
	  <li class="list-group-item"> <br/>
	   <img src="__stylesheet/__images/login-bg.jpg" width="320px" height="200px" style="border:2px solid white;" id="previewThumb"/>
	 </li> 
	 <li class="list-group-item">
      <input class="form-control" type="file" name="file" id="file"/>
     <?php echo $_smarty_tpl->tpl_vars['lang']->value->admin->page->settings->appImages->s_t;?>

      <select class="form-control" name="c2i" id="selectOption">
      <option value="0">none</option>
       <?php echo $_smarty_tpl->tpl_vars['admin']->value->selectOption('__stylesheet/__images/');?>

	 
        </select></li>
      <li class="list-group-item">
       <input class="form-control btn-primary" type="submit" name="submit" value="Upload"/> </li>
    </ul>
</form> 
 </div>
  
 <div class="col-md-8">
<form action="" method="post">
  <?php echo $_smarty_tpl->getSubTemplate ("templates/admin/include/tiny_parts/buttons.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

  <br/>
  <br/>
  <?php echo $_smarty_tpl->tpl_vars['admin']->value->showImg(3,'__stylesheet');?>

</form> 
</div>
</div><?php }} ?>