<?php /* Smarty version Smarty-3.1.14, created on 2014-12-29 15:19:34
         compiled from ".\templates\__body\body.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2679254a162f650ff26-20252656%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'ffba160e1aac4c127cfcebeacc4a86e0ccb8f042' => 
    array (
      0 => '.\\templates\\__body\\body.tpl',
      1 => 1419861574,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2679254a162f650ff26-20252656',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'app' => 0,
    'lang' => 0,
    'img_link' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_54a162f65e2e51_06690389',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_54a162f65e2e51_06690389')) {function content_54a162f65e2e51_06690389($_smarty_tpl) {?><?php if (!is_callable('smarty_function_add')) include 'C:\\xampp\\htdocs\\FADkit\\libs\\plugins\\function.add.php';
?><div id="sw_windowBox"></div>
<div id="fb-root"></div>
<div class="row">
  <div class="col-md-12">
  <div id="head" >
    <div class="appName">
	<?php if (adminOrder('color','default')=="none"){?>
	<?php }else{ ?>
 <?php echo adminOrder('app_name','info');?>

     <?php }?>
  </div>
	<!--<div class="appLogo"></div>-->
  </div></div>
</div>
<nav class="navbar  navbar-default" role="navigation">
<div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" 
         data-target="#example-navbar-collapse">
         <span class="sr-only">Toggle navigation</span>
         <span class="icon-bar"></span>
         <span class="icon-bar"></span>
         <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="#">Options</a>
   </div>
<div class="collapse navbar-collapse" id="example-navbar-collapse"> 
 <ul class="nav navbar-nav"> 
 <li><a href="#" class="finalButton" onclick="sendRequestViaMultiFriendSelector('<?php echo $_smarty_tpl->tpl_vars['app']->value['inviteMsg'];?>
');">
 <?php echo showImg('__stylesheet/__images/icons/mpp.png',16,16,'center');?>

 Invite</a></li>
  <?php if (adminOrder('make_pp')=='on'){?>
	  <li id="mpp"> 
	   <a href="#"><?php echo showImg('__stylesheet/__images/icons/mpp.png',16,16,'center');?>
<?php echo $_smarty_tpl->tpl_vars['lang']->value->index->mpp;?>
 </a>
	  </li>
	  <?php }?>
	  
	  <?php if (adminOrder('dw_photo')=='on'){?>
	  <li id="dtp">
	   <a href="#"><?php echo showImg('__stylesheet/__images/icons/dowload.png',16,16,'center');?>

	   <?php echo $_smarty_tpl->tpl_vars['lang']->value->index->dtp;?>
 </a>
	  </li>
	  <?php }?>
	  
	  <?php if (adminOrder('send_mail')=='on'){?>
	  <li id="etp">
	   <a href="#"><?php echo showImg('__stylesheet/__images/icons/email.png',16,16,'center');?>

	  <?php echo $_smarty_tpl->tpl_vars['lang']->value->index->etp;?>
 </a>
	  </li>
	  <?php }?>
 </ul></div></nav>
 
   <div class="row">
    <div class="col-md-12">
	   <ul class="list-group  ">
	   <li class="list-group-item active">
	   <div class="row">
	   <div class="col-md-9">
		<div class="appTitle"> <?php echo adminOrder('app_name','info');?>
</div> 
		 </div>
		<div class="col-md-3">
	 	       </div></div>
	   </li>
	   <li class="list-group-item">
	   <?php echo $_smarty_tpl->getSubTemplate ("__body/__layout/box2.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

	   
	   <li class="list-group-item">
	      <div class="btn-group">
		       <button class="btn btn-success" id="publishButton" onclick="publishButton();">Publish</button>
			   <button class="btn btn-primary" id="reloadButton" onclick="reloadButton('<?php echo $_smarty_tpl->tpl_vars['img_link']->value;?>
');">Reload</button>
		  </div>
	   </li>
	   
	 
	    <?php if (adminOrder('ads_1')=="on"){?>  
	    <li class="list-group-item" style="height:90px">       
		
<!---YOUR ADS CODE OF 720X90 HERE--->
<?php echo adminOrder('adsSlot','config.json');?>

</li><?php }?>
	   </ul>
	</div>

   </div>
     <div id="content" style="display:none"> 
	 <?php if (adminOrder('popup')=="on"){?>
	 <?php echo smarty_function_add(array('tab'=>"social.html"),$_smarty_tpl);?>

	 <?php }?>

	<div id="popupFeature">
	<ul class="list-group">
	<li class="list-group-item active">
 <div class="row">	
			<div class="col-md-10"><div class="statusMessage"></div></div>	     
			<div class="col-md-2">	     
		 <div class="head">
		      <div class="Xlose"><span onclick="popUpfeatures('hide')">X</span></div>
		   </div></div></div></li>
		   <li class="list-group-item">
	        <div class="row"><div class="body">
				 <div class="col-md-12">
				 <div class="progress progress-striped active">
			     <div id="goProgress2" class="progress-bar progress-bar-success" role="progressbar" 
				  aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" 
				  style="width: 0%;">
				  <span class="sr-only">40% Complete</span>
			     </div>
			     </div></div> 
				  <div class="col-md-12">
		      <label for="name"> <?php echo $_smarty_tpl->tpl_vars['lang']->value->index->loading;?>
 </label>></div>
		   </div>
	       </div></li>
	</ul></div> 
  </div>
    
 
 <?php if (adminOrder('animation')=="on"){?>
	   <script>onAnimationOn();</script>
	<?php }?><?php }} ?>