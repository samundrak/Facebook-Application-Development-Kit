<?php /* Smarty version Smarty-3.1.14, created on 2014-12-29 15:46:19
         compiled from "templates\admin\include\photo-upload.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2778254a1693b1000b6-05515121%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'd37ba72ebec0532c45a8af0029ae18bbd47c6337' => 
    array (
      0 => 'templates\\admin\\include\\photo-upload.tpl',
      1 => 1413870589,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2778254a1693b1000b6-05515121',
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
  'unifunc' => 'content_54a1693b273281_52444581',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_54a1693b273281_52444581')) {function content_54a1693b273281_52444581($_smarty_tpl) {?><?php echo $_smarty_tpl->tpl_vars['admin']->value->validate(4);?>

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
    <?php echo $_smarty_tpl->getSubTemplate ("templates/admin/include/tiny_parts/upload-form.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

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
  
  <?php echo $_smarty_tpl->getSubTemplate ("templates/admin/include/tiny_parts/buttons.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
 
  <br/>
  <br/>
    
    <ul class="list-group">
  <?php echo $_smarty_tpl->tpl_vars['admin']->value->showImg(2);?>

  <ul>
</form>

</div></div>
<?php }} ?>