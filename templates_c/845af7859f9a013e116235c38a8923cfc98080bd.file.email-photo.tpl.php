<?php /* Smarty version Smarty-3.1.14, created on 2014-12-29 15:47:18
         compiled from "templates\features\email-photo.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1910154a1697696d5b7-09868559%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '845af7859f9a013e116235c38a8923cfc98080bd' => 
    array (
      0 => 'templates\\features\\email-photo.tpl',
      1 => 1417500363,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1910154a1697696d5b7-09868559',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'lang' => 0,
    'name' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_54a16976afbd11_69894468',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_54a16976afbd11_69894468')) {function content_54a16976afbd11_69894468($_smarty_tpl) {?> 
<form name="mail-photo" action="" method="post" onsubmit="return formDo()">
 
  
<ul class="list-group" style="min-width:400px;max-width:400px;"> 
 
 <li class="list-group-item active">
      
      <ul class="add_email_details">
          <li>Send Email to your friend!</li>
	</ul>
     </li>
 <li class="list-group-item">
 <label for="name">
 <?php echo $_smarty_tpl->tpl_vars['lang']->value->index->from;?>
</label><input class="form-control" type="text" name="from" value="<?php echo $_smarty_tpl->tpl_vars['name']->value;?>
" readonly/></li>

 <li class="list-group-item">
 <label for="name">
 
 <?php echo $_smarty_tpl->tpl_vars['lang']->value->index->to;?>
</label><input class="form-control" type="text" name="to" placeholder="<?php echo $_smarty_tpl->tpl_vars['lang']->value->index->to_hint;?>
"/></li>

 <li class="list-group-item">
 <label for="name">
 
 <?php echo $_smarty_tpl->tpl_vars['lang']->value->index->photo;?>
</label><img   src="__photos/__tmp/<?php echo $_smarty_tpl->tpl_vars['name']->value;?>
.jpg" width="50px" height="50px"/></li>

 <li class="list-group-item">
 <label for="name">
 
 <?php echo $_smarty_tpl->tpl_vars['lang']->value->index->msg;?>
</label><textarea   class="form-control" name="msg"><?php echo $_smarty_tpl->tpl_vars['lang']->value->index->snt_default;?>
</textarea></li>

<li class="list-group-item"><input class="btn btn-primary " type="submit" name="submit" id="submitButton"></li>
  
</ul>
 

 </form><?php }} ?>