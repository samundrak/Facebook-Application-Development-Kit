<?php /* Smarty version Smarty-3.1.14, created on 2015-07-12 21:40:03
         compiled from "./templates/admin/login.html" */ ?>
<?php /*%%SmartyHeaderCode:65982514355a28dd75cb338-31186674%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '3e94f808c050a7235b685cc29b4652cf8a6e5953' => 
    array (
      0 => './templates/admin/login.html',
      1 => 1419866785,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '65982514355a28dd75cb338-31186674',
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
  'unifunc' => 'content_55a28dd76002c9_79655681',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_55a28dd76002c9_79655681')) {function content_55a28dd76002c9_79655681($_smarty_tpl) {?><br/> <form action="" method="post">		 <ul class="list-group">		 <li class="list-group-item active">		    <ul>			  <li ><?php echo $_smarty_tpl->tpl_vars['lang']->value->admin->page->login->li;?>
</li>			  <li ><?php echo $_smarty_tpl->tpl_vars['lang']->value->admin->page->login->li2;?>
</li>			  <?php echo $_smarty_tpl->tpl_vars['admin']->value->login();?>
			  </ul></li>   	 <li class="list-group-item "> <label for="name">		  <?php echo $_smarty_tpl->tpl_vars['lang']->value->admin->page->license->username;?>
 </label><input class="form-control" id="name"          placeholder="Enter username" type="text" name="username" required style="width:400px;"/>		 <span class="help-block">Please enter the username that you entered in secret file.</span>		 </li>		  		  		 	 <li class="list-group-item ">		    <label for="name">		    <?php echo $_smarty_tpl->tpl_vars['lang']->value->admin->page->license->key;?>
</label><input class="form-control" id="name" style="width:400px;"          placeholder="Enter License Key" type="text" name="license" required/> 		 <span class="help-block">Please enter the License Key that you entered in secret file.</span>			</li>										 <li class="list-group-item ">		   <input type="submit" name="submit"  class="btn btn-success"/> 		  </li></ul>		</form> <br/><?php }} ?>