<?php /* Smarty version Smarty-3.1.14, created on 2015-07-19 23:10:14
         compiled from "templates/admin/include/app-type.html" */ ?>
<?php /*%%SmartyHeaderCode:94613835955abdd7a915970-27483715%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '076e52de287105530f338b8b52191a685b2c70ba' => 
    array (
      0 => 'templates/admin/include/app-type.html',
      1 => 1437326277,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '94613835955abdd7a915970-27483715',
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
  'unifunc' => 'content_55abdd7a959917_15442793',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_55abdd7a959917_15442793')) {function content_55abdd7a959917_15442793($_smarty_tpl) {?><div class="row"><div class="caption lead" ><?php echo showImg('__stylesheet/__images/icons/invite.png',16,16,'center');?>
<?php echo $_smarty_tpl->tpl_vars['lang']->value->admin->page->homepage->app_type;?>
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

  <input style="position: fixed;
z-index: 9999;
box-shadow:2px 2px 15px;
" class="btn btn-default" type="submit" name="submit" value="Activate" title="<?php echo $_smarty_tpl->tpl_vars['lang']->value->admin->hints->title;?>
"
      data-container="body" data-toggle="popover" data-placement="top" 
      data-content="<?php echo $_smarty_tpl->tpl_vars['lang']->value->admin->page->act;?>
" data-trigger="hover" />
  <br/><br/>
  <?php echo $_smarty_tpl->tpl_vars['admin']->value->showImg(6,'__types/__files');?>

</form>
</div>
</div><br/><br/><?php }} ?>