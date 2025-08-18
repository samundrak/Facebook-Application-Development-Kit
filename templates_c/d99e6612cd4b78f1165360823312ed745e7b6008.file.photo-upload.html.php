<?php /* Smarty version Smarty-3.1.14, created on 2025-08-18 09:43:03
         compiled from "templates/admin/include/photo-upload.html" */ ?>
<?php /*%%SmartyHeaderCode:1561915668a2f5a734c5e2-40267570%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'd99e6612cd4b78f1165360823312ed745e7b6008' => 
    array (
      0 => 'templates/admin/include/photo-upload.html',
      1 => 1755507186,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1561915668a2f5a734c5e2-40267570',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'admin' => 0,
    'lang' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_68a2f5a7378e30_30533094',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_68a2f5a7378e30_30533094')) {function content_68a2f5a7378e30_30533094($_smarty_tpl) {?><?php echo $_smarty_tpl->tpl_vars['admin']->value->validate(4);?>

<div class="row"><div class="caption lead" ><?php echo showImg('__stylesheet/__images/icons/photos.png',16,16,'center');?>
<?php echo $_smarty_tpl->tpl_vars['lang']->value->admin->page->settings->upload->title;?>
</div>
</div>

 <div class="row">
 <div class="col-md-6">
     <ul class="list-group">
	 <li class="list-group-item active"><?php echo $_smarty_tpl->tpl_vars['lang']->value->admin->page->settings->upload->default;?>
</li>
	 <li class="list-group-item">
    <img src="__photos/__bg/bg.jpg" width="500px" height="300px" style="border:2px solid white;"/> 
	</li>
	<li class="list-group-item">
	<form action=""   class="form-inline" role="form" method="post" enctype="multipart/form-data">
    <?php echo $_smarty_tpl->getSubTemplate ("templates/admin/include/tiny_parts/upload-form.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

	</form>
    </li>
	 </ul>

</div>
 <div class="col-md-6">
 
<form action="" method="post">
	<div class="btn-group">
   <input class="btn btn-success" type="submit" name="submit" value="Make Default" title="<?php echo $_smarty_tpl->tpl_vars['lang']->value->admin->hints->title;?>
"
      data-container="body" data-toggle="popover" data-placement="top" 
      data-content="<?php echo $_smarty_tpl->tpl_vars['lang']->value->admin->page->settings->upload->m_default;?>
" data-trigger="hover" />
   <input class="btn btn-primary" type="submit" name="submit" value="Default" title="<?php echo $_smarty_tpl->tpl_vars['lang']->value->admin->hints->title;?>
"
      data-container="body" data-toggle="popover" data-placement="top" 
      data-content="<?php echo $_smarty_tpl->tpl_vars['lang']->value->admin->page->settings->upload->default_msg;?>
" data-trigger="hover"  />
   </div>
   <br/>
   <br/>
  
  <?php echo $_smarty_tpl->getSubTemplate ("templates/admin/include/tiny_parts/buttons.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
 
  <br/>
  <br/>
    
    <ul class="list-group">
  <?php echo $_smarty_tpl->tpl_vars['admin']->value->showImg(2);?>

  <ul>
</form>

</div></div>
<?php }} ?>