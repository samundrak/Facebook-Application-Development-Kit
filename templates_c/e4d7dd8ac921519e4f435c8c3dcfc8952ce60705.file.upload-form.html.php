<?php /* Smarty version Smarty-3.1.14, created on 2025-08-18 09:43:03
         compiled from "templates/admin/include/tiny_parts/upload-form.html" */ ?>
<?php /*%%SmartyHeaderCode:186253749068a2f5a739b920-17404333%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'e4d7dd8ac921519e4f435c8c3dcfc8952ce60705' => 
    array (
      0 => 'templates/admin/include/tiny_parts/upload-form.html',
      1 => 1755507186,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '186253749068a2f5a739b920-17404333',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'lang' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_68a2f5a739f5e8_56136784',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_68a2f5a739f5e8_56136784')) {function content_68a2f5a739f5e8_56136784($_smarty_tpl) {?> <?php echo $_smarty_tpl->tpl_vars['lang']->value->admin->page->apppImages->s_f;?>
 
 
  
      <input class="form-control" type="file" name="file" id="file" />
       <br/>
       <br/>
      <input type="submit" name="submit" value="Upload" class="btn btn-primary"/>
      
   <?php }} ?>