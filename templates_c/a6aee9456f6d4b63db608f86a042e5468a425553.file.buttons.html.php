<?php /* Smarty version Smarty-3.1.14, created on 2014-12-29 16:13:02
         compiled from "templates\admin\include\tiny_parts\buttons.html" */ ?>
<?php /*%%SmartyHeaderCode:1941654a16f7ea9d086-03769517%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'a6aee9456f6d4b63db608f86a042e5468a425553' => 
    array (
      0 => 'templates\\admin\\include\\tiny_parts\\buttons.html',
      1 => 1413835051,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1941654a16f7ea9d086-03769517',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'lang' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_54a16f7eb35639_32261343',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_54a16f7eb35639_32261343')) {function content_54a16f7eb35639_32261343($_smarty_tpl) {?> 
<div class="btn-group">
<input class="btn btn-success" type="submit" name="submit" value="Download all" title="<?php echo $_smarty_tpl->tpl_vars['lang']->value->admin->hints->title;?>
"
      data-container="body" data-toggle="popover" data-placement="top" 
      data-content="<?php echo $_smarty_tpl->tpl_vars['lang']->value->admin->page->dw_all;?>
" data-trigger="hover" />
	  
<input class="btn btn-warning" type="submit" name="submit" value="Download" title="<?php echo $_smarty_tpl->tpl_vars['lang']->value->admin->hints->title;?>
"
      data-container="body" data-toggle="popover" data-placement="top" 
      data-content="<?php echo $_smarty_tpl->tpl_vars['lang']->value->admin->page->dw;?>
" data-trigger="hover" />
	  
<input  class="btn btn-primary" type="submit" name="submit" value="Delete all" title="<?php echo $_smarty_tpl->tpl_vars['lang']->value->admin->hints->title;?>
"
      data-container="body" data-toggle="popover" data-placement="top" 
      data-content="<?php echo $_smarty_tpl->tpl_vars['lang']->value->admin->page->dt_all;?>
" data-trigger="hover" />
	  
<input class="btn btn-default" type="submit" name="submit" value="Delete" title="<?php echo $_smarty_tpl->tpl_vars['lang']->value->admin->hints->title;?>
"
      data-container="body" data-toggle="popover" data-placement="top" 
      data-content="<?php echo $_smarty_tpl->tpl_vars['lang']->value->admin->page->dt;?>
" data-trigger="hover" ">
 </div> <?php }} ?>