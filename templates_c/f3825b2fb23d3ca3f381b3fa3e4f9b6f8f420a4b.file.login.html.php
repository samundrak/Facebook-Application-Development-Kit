<?php /* Smarty version Smarty-3.1.14, created on 2014-12-29 16:26:28
         compiled from ".\templates\admin\login.html" */ ?>
<?php /*%%SmartyHeaderCode:2616354a170d593a177-59795085%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'f3825b2fb23d3ca3f381b3fa3e4f9b6f8f420a4b' => 
    array (
      0 => '.\\templates\\admin\\login.html',
      1 => 1419866785,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2616354a170d593a177-59795085',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_54a170d59f3a48_52616686',
  'variables' => 
  array (
    'lang' => 0,
    'admin' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_54a170d59f3a48_52616686')) {function content_54a170d59f3a48_52616686($_smarty_tpl) {?><br/> <form action="" method="post">		 <ul class="list-group">		 <li class="list-group-item active">		    <ul>			  <li ><?php echo $_smarty_tpl->tpl_vars['lang']->value->admin->page->login->li;?>
</li>			  <li ><?php echo $_smarty_tpl->tpl_vars['lang']->value->admin->page->login->li2;?>
</li>			  <?php echo $_smarty_tpl->tpl_vars['admin']->value->login();?>
			  </ul></li>   	 <li class="list-group-item "> <label for="name">		  <?php echo $_smarty_tpl->tpl_vars['lang']->value->admin->page->license->username;?>
 </label><input class="form-control" id="name"          placeholder="Enter username" type="text" name="username" required style="width:400px;"/>		 <span class="help-block">Please enter the username that you entered in secret file.</span>		 </li>		  		  		 	 <li class="list-group-item ">		    <label for="name">		    <?php echo $_smarty_tpl->tpl_vars['lang']->value->admin->page->license->key;?>
</label><input class="form-control" id="name" style="width:400px;"          placeholder="Enter License Key" type="text" name="license" required/> 		 <span class="help-block">Please enter the License Key that you entered in secret file.</span>			</li>										 <li class="list-group-item ">		   <input type="submit" name="submit"  class="btn btn-success"/> 		  </li></ul>		</form> <br/><?php }} ?>