<?php /* Smarty version Smarty-3.1.14, created on 2014-12-29 15:44:43
         compiled from "templates\admin\include\license.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2234054a168db50d8a8-49665268%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'e141092702d72af3851a806656cfda0aac6a70e3' => 
    array (
      0 => 'templates\\admin\\include\\license.tpl',
      1 => 1413835953,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2234054a168db50d8a8-49665268',
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
  'unifunc' => 'content_54a168db651c79_14797942',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_54a168db651c79_14797942')) {function content_54a168db651c79_14797942($_smarty_tpl) {?> <div class="row"><div class="caption lead" ><div style="color:white;width:auto;background-color:red;"><?php echo $_smarty_tpl->tpl_vars['admin']->value->editLicense();?>
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