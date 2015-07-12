<?php /* Smarty version Smarty-3.1.14, created on 2014-12-29 16:13:06
         compiled from "templates\admin\include\tiny_parts\upload-form.html" */ ?>
<?php /*%%SmartyHeaderCode:2651954a16f82a78d08-30983708%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'e97e8ed1a49687410a7b0a1f8c00ea61e2efb5ed' => 
    array (
      0 => 'templates\\admin\\include\\tiny_parts\\upload-form.html',
      1 => 1413836152,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2651954a16f82a78d08-30983708',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'lang' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_54a16f82a8c580_81279701',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_54a16f82a8c580_81279701')) {function content_54a16f82a8c580_81279701($_smarty_tpl) {?> <?php echo $_smarty_tpl->tpl_vars['lang']->value->admin->page->apppImages->s_f;?>
 
 
  
      <input class="form-control" type="file" name="file" id="file" />
       <br/>
       <br/>
      <input type="submit" name="submit" value="Upload" class="btn btn-primary"/>
      
   <?php }} ?>