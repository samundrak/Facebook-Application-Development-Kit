<?php /* Smarty version Smarty-3.1.14, created on 2015-07-12 21:56:23
         compiled from "templates/admin/include/license.html" */ ?>
<?php /*%%SmartyHeaderCode:26982226155a291abf355c6-84150229%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '1bcead726073f87988ecf6b1de2b8ec0d3d1c000' => 
    array (
      0 => 'templates/admin/include/license.html',
      1 => 1413835953,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '26982226155a291abf355c6-84150229',
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
  'unifunc' => 'content_55a291ac0e2ca9_56661059',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_55a291ac0e2ca9_56661059')) {function content_55a291ac0e2ca9_56661059($_smarty_tpl) {?> <div class="row"><div class="caption lead" ><div style="color:white;width:auto;background-color:red;"><?php echo $_smarty_tpl->tpl_vars['admin']->value->editLicense();?>
</div>
 <?php echo showImg('__stylesheet/__images/icons/license.png',16,16,'center');?>
<?php echo $_smarty_tpl->tpl_vars['lang']->value->admin->page->license->title;?>

</div></div>
<form action="" method="post">
  <ul class="list-group">
    <li class="list-group-item active">License Details</li>
	<li class="list-group-item">
       <label for="name"><?php echo $_smarty_tpl->tpl_vars['lang']->value->admin->page->license->username;?>
 </label>
       <input class="form-control" type="text" name="input[]" required value="<?php echo $_smarty_tpl->tpl_vars['admin']->value->json->admin;?>
"/> 
    </li>
    <li class="list-group-item">
       <label for="name"><?php echo $_smarty_tpl->tpl_vars['lang']->value->admin->page->license->key;?>
 </label>
       <input class="form-control" type="text" name="input[]" required value="<?php echo $_smarty_tpl->tpl_vars['admin']->value->json->key;?>
"/> 
    </li>
    <li class="list-group-item">
       <label for="name"><?php echo $_smarty_tpl->tpl_vars['lang']->value->admin->page->license->email;?>
 </label>
       <input class="form-control" type="email" name="input[]" required value="<?php echo $_smarty_tpl->tpl_vars['admin']->value->json->email;?>
"/> 
    </li>
    <li class="list-group-item">
       <label for="name"><?php echo $_smarty_tpl->tpl_vars['lang']->value->admin->page->license->a_code;?>
 </label>
       <input class="form-control" type="text" name="input[]" required value="<?php echo $_smarty_tpl->tpl_vars['admin']->value->json->app;?>
"/> 
    </li>
    <li class="list-group-item">
       <label for="name"><?php echo $_smarty_tpl->tpl_vars['lang']->value->admin->page->license->d_code;?>
 </label>
       <input class="form-control" type="text" name="input[]" required value="<?php echo $_smarty_tpl->tpl_vars['admin']->value->json->on;?>
"/> 
    </li>
    <li class="list-group-item">
      <input class="btn btn-primary " type="submit" name="submit"/>
       
    </li>
  </ul>
</form>
<?php }} ?>