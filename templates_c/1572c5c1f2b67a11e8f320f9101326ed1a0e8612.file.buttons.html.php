<?php /* Smarty version Smarty-3.1.14, created on 2015-07-12 21:56:37
         compiled from "templates/admin/include/tiny_parts/buttons.html" */ ?>
<?php /*%%SmartyHeaderCode:197448178055a291b923f630-61788875%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '1572c5c1f2b67a11e8f320f9101326ed1a0e8612' => 
    array (
      0 => 'templates/admin/include/tiny_parts/buttons.html',
      1 => 1413835051,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '197448178055a291b923f630-61788875',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'lang' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_55a291b9291609_89243051',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_55a291b9291609_89243051')) {function content_55a291b9291609_89243051($_smarty_tpl) {?> 
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