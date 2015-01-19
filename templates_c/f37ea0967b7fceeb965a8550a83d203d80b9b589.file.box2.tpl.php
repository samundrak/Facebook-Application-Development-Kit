<?php /* Smarty version Smarty-3.1.14, created on 2014-12-29 15:33:32
         compiled from ".\templates\default\__body\__layout\box2.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2648554a1663c259760-31047911%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'f37ea0967b7fceeb965a8550a83d203d80b9b589' => 
    array (
      0 => '.\\templates\\default\\__body\\__layout\\box2.tpl',
      1 => 1419859860,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2648554a1663c259760-31047911',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'img_link' => 0,
    'lang' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_54a1663c2ea005_68292885',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_54a1663c2ea005_68292885')) {function content_54a1663c2ea005_68292885($_smarty_tpl) {?><style>
    .img-responsive { height:300px; }
</style>
 
<div class="box2" style="height:300px;overflow:hidden;">
   <div id="imgFile" style="color:white;"><img id="dynamicImg" class="img-responsive" src="<?php echo $_smarty_tpl->tpl_vars['img_link']->value;?>
" width="720px" height="350px"/>
     
   </div>
   <?php if (adminOrder('ads_2')=="on"){?>
	 <div class="ads_2">
	   <div class="Xlose"><span onclick="$('.ads_2').fadeOut(1000);">X</span></div>
	   <div class="adsIsHere">
	   <?php echo adminOrder('adsSlot_2','config');?>

	   </div>
	 </div>
	 <?php }?>
	  <?php if (adminOrder('ads_3')=="on"){?>
	    <?php if (adminOrder('ads_2')=="off"){?>
     <div class="ads_3" style="display:block">
	   <?php }else{ ?>
	     <div class="ads_3">
	   <?php }?>
	 <div class="Xlose"><span onclick="$('.ads_3').fadeOut(1000);">X</span></div>
	 <div class="adsIsHere">
	  <?php echo adminOrder('adsSlot_3','config');?>

	  </div>
	 </div>
     	  <?php }?>
	<div class="row">	   
     <div class="col-md-12 loadingGif" style="display:none;">
	<div class="progress progress-striped active">
   <div id="goProgress" class="progress-bar progress-bar-success" role="progressbar" 
      aria-valuenow="90" aria-valuemin="0" aria-valuemax="100" 
      style="width:5%;">
      <span class="sr-only">80% Complete</span>
   </div>
</div><label for="name" class="col-md-12 col-md-push-4"><?php echo $_smarty_tpl->tpl_vars['lang']->value->index->p_wait;?>
<br/><span id="loadingTxt"><?php echo $_smarty_tpl->tpl_vars['lang']->value->index->wait;?>
</span></label>
	  </div> 
	 </div>
     
	 <div class="txtInput">
	    <div class="txtBg">
	 <div class ="txtTop"></div>
	 <div class="txtLeft"></div>
	 <div class="txtRight" >
	 <textarea class="form-control shareMsg" placeholder="<?php echo $_smarty_tpl->tpl_vars['lang']->value->index->t_a_placeholder;?>
" ></textarea></div>
	 </div>
	 <div class="btn-group" style="width:inherit;float:left;">
	  <button class="btn btn-success" onclick="getShareMsg('<?php echo $_smarty_tpl->tpl_vars['img_link']->value;?>
')">Share</button>
	 <button class="btn btn-primary" onclick="closeTxtArea()">Close</button>
	 </div> 
	  </div></div><?php }} ?>