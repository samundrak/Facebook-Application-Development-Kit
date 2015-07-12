<?php /* Smarty version Smarty-3.1.14, created on 2014-12-29 15:44:29
         compiled from ".\templates\admin\login.tpl" */ ?>
<?php /*%%SmartyHeaderCode:152154a168cd3e5102-69771261%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '22e0f256edc3738b16f878b54dea57e8bfe31c8a' => 
    array (
      0 => '.\\templates\\admin\\login.tpl',
      1 => 1413819186,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '152154a168cd3e5102-69771261',
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
  'unifunc' => 'content_54a168cd446b90_47164062',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_54a168cd446b90_47164062')) {function content_54a168cd446b90_47164062($_smarty_tpl) {?> <div class="row">   <div class="caption lead" > <?php echo $_smarty_tpl->tpl_vars['lang']->value->admin->page->login->title;?>
</div> </div> <form action="" method="post">		 <ul class="list-group">		 <li class="list-group-item active">		    <ul>			  <li ><?php echo $_smarty_tpl->tpl_vars['lang']->value->admin->page->login->li;?>
</li>			  <li ><?php echo $_smarty_tpl->tpl_vars['lang']->value->admin->page->login->li2;?>
</li>			  <?php echo $_smarty_tpl->tpl_vars['admin']->value->login();?>
			  </ul></li>   	 <li class="list-group-item "> <label for="name">		  <?php echo $_smarty_tpl->tpl_vars['lang']->value->admin->page->license->username;?>
 </label><input class="form-control" id="name"          placeholder="Enter username" type="text" name="username" required style="width:400px;"/>		 <span class="help-block">Please enter the username that you entered in secret file.</span>		 </li>		  		  		 	 <li class="list-group-item ">		    <label for="name">		    <?php echo $_smarty_tpl->tpl_vars['lang']->value->admin->page->license->key;?>
</label><input class="form-control" id="name" style="width:400px;"          placeholder="Enter License Key" type="text" name="license" required/> 		 <span class="help-block">Please enter the License Key that you entered in secret file.</span>			</li>										 <li class="list-group-item ">		   <input type="submit" name="submit"  class="btn btn-success"/> 		  </li></ul>		</form> <br/><?php }} ?>