<?php /* Smarty version Smarty-3.1.14, created on 2014-12-29 15:46:19
         compiled from "templates\admin\include\tiny_parts\buttons.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1368454a1693b2b5914-52184024%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '7781681ad56cc2ee657f924dcaded720a0eb441b' => 
    array (
      0 => 'templates\\admin\\include\\tiny_parts\\buttons.tpl',
      1 => 1413835051,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1368454a1693b2b5914-52184024',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'lang' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_54a1693b3367b7_67801365',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_54a1693b3367b7_67801365')) {function content_54a1693b3367b7_67801365($_smarty_tpl) {?> 
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