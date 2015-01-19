<?php /* Smarty version Smarty-3.1.14, created on 2014-12-29 15:46:19
         compiled from "templates\admin\include\tiny_parts\upload-form.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1466354a1693b28e817-22828811%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'c6675c6a15edd197894b744dc8e1d895d53cfcc8' => 
    array (
      0 => 'templates\\admin\\include\\tiny_parts\\upload-form.tpl',
      1 => 1413836152,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1466354a1693b28e817-22828811',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'lang' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_54a1693b2a2093_07101803',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_54a1693b2a2093_07101803')) {function content_54a1693b2a2093_07101803($_smarty_tpl) {?> <?php echo $_smarty_tpl->tpl_vars['lang']->value->admin->page->apppImages->s_f;?>
 
 
  
      <input class="form-control" type="file" name="file" id="file" />
       <br/>
       <br/>
      <input type="submit" name="submit" value="Upload" class="btn btn-primary"/>
      
   <?php }} ?>