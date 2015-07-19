<?php /* Smarty version Smarty-3.1.14, created on 2015-07-19 23:08:11
         compiled from "templates/admin/admin.html" */ ?>
<?php /*%%SmartyHeaderCode:36238322955abdcffb633d7-31920339%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '0a698f364b9a22869733863b3b5f99d6bca53489' => 
    array (
      0 => 'templates/admin/admin.html',
      1 => 1437326277,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '36238322955abdcffb633d7-31920339',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'lCode' => 0,
    'lang' => 0,
    'admin' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_55abdcffce7138_55656717',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_55abdcffce7138_55656717')) {function content_55abdcffce7138_55656717($_smarty_tpl) {?><!DOCTYPE HTML>
<html  lang="<?php echo $_smarty_tpl->tpl_vars['lCode']->value;?>
">
<title>Admin Panel</title>
<?php echo $_smarty_tpl->getSubTemplate ("default/__body/header.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<body>
<div >
<div class="container" style="box-shadow:2px 2px 15px;">
<div class="row">
 
 <div class="col-md-12" >
   <a href="admin"><div id="head">
   <div class="appName"> <?php if (adminOrder('color','default')=="none"){?>
	<?php }else{ ?>
	<?php echo adminOrder('app_name','info');?>

     <?php }?></div>
  </div></a>
   </div>
   
   
   <div class="col-md-12">
	<nav class="navbar navbar-default navbar-static-top" role="navigation">
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
      <li title="<?php echo $_smarty_tpl->tpl_vars['lang']->value->admin->hints->title;?>
" 
      data-container="body" data-toggle="popover" data-placement="bottom" 
      data-content="<?php echo $_smarty_tpl->tpl_vars['lang']->value->admin->info->license->msg;?>

				    <?php echo $_smarty_tpl->tpl_vars['lang']->value->admin->info->license->warning;?>

				    " data-trigger="hover">	
				     <a href="admin&tab=license"><?php echo showImg('__stylesheet/__images/icons/license.png',16,16,'center');?>

					 <?php echo $_smarty_tpl->tpl_vars['lang']->value->admin->info->license->title;?>

					 </a></li>
					 
      <li title="<?php echo $_smarty_tpl->tpl_vars['lang']->value->admin->hints->title;?>
" 
      data-container="body" data-toggle="popover" data-placement="bottom" 
      data-content="<?php echo $_smarty_tpl->tpl_vars['lang']->value->admin->info->app->msg;?>

				   <?php echo $_smarty_tpl->tpl_vars['lang']->value->admin->info->app->warning;?>

				    " data-trigger="hover">
		<a href="admin&tab=app"><?php echo showImg('__stylesheet/__images/icons/application.png',16,16,'center');?>

					<?php echo $_smarty_tpl->tpl_vars['lang']->value->admin->info->app->title;?>

	  </a></li>
        <li title="<?php echo $_smarty_tpl->tpl_vars['lang']->value->admin->hints->title;?>
" 
      data-container="body" data-toggle="popover" data-placement="bottom" 
      data-content="<?php echo $_smarty_tpl->tpl_vars['lang']->value->admin->info->social->msg;?>

				    <?php echo $_smarty_tpl->tpl_vars['lang']->value->admin->info->social->warning;?>

				    " data-trigger="hover">
				    <a href="admin&tab=social"><?php echo showImg('__stylesheet/__images/icons/popup.png',16,16,'center');?>

					 <?php echo $_smarty_tpl->tpl_vars['lang']->value->admin->info->social->title;?>

					</a></li>
         <li class="dropdown">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
              <?php echo showImg('__stylesheet/__images/icons/more.png',16,16,'center');?>

				 <?php echo $_smarty_tpl->tpl_vars['lang']->value->admin->info->settings->title;?>

				  <b class="caret"></b>
            </a>
            <ul class="dropdown-menu">
              <li id="profile" title="<?php echo $_smarty_tpl->tpl_vars['lang']->value->admin->hints->title;?>
" 
      data-container="body" data-toggle="popover" data-placement="left" 
      data-content="<?php echo $_smarty_tpl->tpl_vars['lang']->value->admin->info->profile->msg;?>
									
					 <?php echo $_smarty_tpl->tpl_vars['lang']->value->admin->info->profile->warning;?>

				    " data-trigger="hover">
				
				
				    <a href="admin&tab=photo-profile"><?php echo showImg('__stylesheet/__images/icons/user_go.png',16,16,'center');?>

					<?php echo $_smarty_tpl->tpl_vars['lang']->value->admin->info->profile->title;?>

					</a>
				</li>
			    <li class="divider"></li>
				<li id="generated" title="<?php echo $_smarty_tpl->tpl_vars['lang']->value->admin->hints->title;?>
" 
      data-container="body" data-toggle="popover" data-placement="left" 
      data-content="	<?php echo $_smarty_tpl->tpl_vars['lang']->value->admin->info->generated->msg;?>

				    <?php echo $_smarty_tpl->tpl_vars['lang']->value->admin->info->generated->warning;?>

				    " data-trigger="hover">
				 <a href="admin&tab=photo-generated">
				 <?php echo showImg('__stylesheet/__images/icons/photo.png',16,16,'center');?>

			
					 <?php echo $_smarty_tpl->tpl_vars['lang']->value->admin->info->generated->title;?>

					 </a>
				</li>
			      <li class="divider"></li>
				<li id="upload" title="<?php echo $_smarty_tpl->tpl_vars['lang']->value->admin->hints->title;?>
" 
      data-container="body" data-toggle="popover" data-placement="left" 
      data-content="<?php echo $_smarty_tpl->tpl_vars['lang']->value->admin->info->upload->msg;?>

					<?php echo $_smarty_tpl->tpl_vars['lang']->value->admin->info->upload->warning;?>

				    " data-trigger="hover">
				
				     <a href="admin&tab=photo-upload">
					 <?php echo showImg('__stylesheet/__images/icons/photos.png',16,16,'center');?>

			
					 <?php echo $_smarty_tpl->tpl_vars['lang']->value->admin->info->upload->title;?>

					 </a>
				</li>
			      <li class="divider"></li>
				<li id="appImages" title="<?php echo $_smarty_tpl->tpl_vars['lang']->value->admin->hints->title;?>
" 
      data-container="body" data-toggle="popover" data-placement="left" 
      data-content="<?php echo $_smarty_tpl->tpl_vars['lang']->value->admin->info->appImages->msg;?>

					<?php echo $_smarty_tpl->tpl_vars['lang']->value->admin->info->appImages->warning;?>

				    " data-trigger="hover">
				<a href="admin&tab=app-images">	
					<?php echo showImg('__stylesheet/__images/icons/app-image.png',16,16,'center');?>

					<?php echo $_smarty_tpl->tpl_vars['lang']->value->admin->info->appImages->title;?>

					</a>
				</li>
			      <li class="divider"></li>
				<li id="appFonts"  >
				 <a href="admin&tab=app-fonts">
					<?php echo showImg('__stylesheet/__images/icons/font.png',16,16,'center');?>

					<?php echo $_smarty_tpl->tpl_vars['lang']->value->admin->info->appFonts->title;?>

					</a>
				</li>
			     <li class="divider"></li>
			   <li id="deleteTmp" title="<?php echo $_smarty_tpl->tpl_vars['lang']->value->admin->hints->title;?>
" 
      data-container="body" data-toggle="popover" data-placement="left" 
      data-content="<?php echo $_smarty_tpl->tpl_vars['lang']->value->admin->info->deleteTmp->msg;?>

				   <?php echo $_smarty_tpl->tpl_vars['lang']->value->admin->info->deleteTmp->warning;?>

				    " data-trigger="hover">
			     <a href="admin&tab=delete-tmp">
					<?php echo showImg('__stylesheet/__images/icons/delete.png',16,16,'center');?>

				  <?php echo $_smarty_tpl->tpl_vars['lang']->value->admin->info->deleteTmp->title;?>

					</a>
				</li>
				    <li class="divider"></li>
				  <li id="language" >
				   <a href="admin&tab=language">
					<?php echo showImg('__stylesheet/__images/icons/language.png',16,16,'center');?>

				    <?php echo $_smarty_tpl->tpl_vars['lang']->value->admin->page->homepage->language;?>

					</a>
				</li>
				<li class="divider"></li>
				<li id="app-type" >
				   <a href="admin&tab=app-type">
					<?php echo showImg('__stylesheet/__images/icons/invite.png',16,16,'center');?>

				    <?php echo $_smarty_tpl->tpl_vars['lang']->value->admin->page->homepage->app_type;?>

					</a>
				</li>
				  
            </ul>
				<?php if ($_smarty_tpl->tpl_vars['admin']->value->user){?>	
					
        <li>    <a href="admin&tab=logout">
					 <?php echo showImg('__stylesheet/__images/icons/logout.png',16,16,'center');?>

				    <?php echo $_smarty_tpl->tpl_vars['lang']->value->admin->info->logout->title;?>

				    </a></li>
					<?php }?>
       
      </ul>
   </div>
</nav>
   
    <div class="col-md-12" style="background-color:#e7e7e7;">
		<?php if ($_smarty_tpl->tpl_vars['admin']->value->user){?>
		 <?php echo $_smarty_tpl->getSubTemplate ("admin/home.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

		<?php }else{ ?>
		<?php if ($_smarty_tpl->tpl_vars['admin']->value->step=='login'){?>
		    <?php echo $_smarty_tpl->getSubTemplate ("admin/login.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

		 <?php }?>
		 <?php }?>
   </div>
 </div></div></div>
 <script>$(function () 
      { $("[data-toggle='popover']").popover();
      });
   </script>
</body>
</html>
 <?php }} ?>