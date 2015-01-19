<?php /* Smarty version Smarty-3.1.14, created on 2014-12-29 15:44:38
         compiled from ".\templates\admin\home.tpl" */ ?>
<?php /*%%SmartyHeaderCode:968654a168d671cfa2-61592008%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '4a8fd9bda9c4a18f6e1d128fe97b2e9c892da9ca' => 
    array (
      0 => '.\\templates\\admin\\home.tpl',
      1 => 1419864251,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '968654a168d671cfa2-61592008',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'tab' => 0,
    'admin' => 0,
    'lang' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_54a168d6d37914_95115734',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_54a168d6d37914_95115734')) {function content_54a168d6d37914_95115734($_smarty_tpl) {?><?php if (!is_callable('smarty_function_exists')) include 'C:\\xampp\\htdocs\\FADkit\\libs\\plugins\\function.exists.php';
if (!is_callable('smarty_function_pathinfo')) include 'C:\\xampp\\htdocs\\FADkit\\libs\\plugins\\function.pathinfo.php';
?> <script>
 function returnl(){
   var x = window.top.location.pathname;
   var l = x.replace('admin','');
     return l;
   }
   function gotoApp(){
      var x = returnl();
	  return x;
   }
    
 </script>
 <?php if ($_smarty_tpl->tpl_vars['tab']->value){?>
   <?php if ($_smarty_tpl->tpl_vars['tab']->value=='logout'){?>
   <?php echo $_smarty_tpl->tpl_vars['admin']->value->inc_lude($_smarty_tpl->tpl_vars['tab']->value);?>

    
   <?php }else{ ?>
     <?php if ("templates/admin/include/".((string)$_smarty_tpl->tpl_vars['tab']->value).".tpl"){?>
 <div style="display:none"><?php echo smarty_function_exists(array('file'=>"templates/admin/include/".((string)$_smarty_tpl->tpl_vars['tab']->value).".tpl"),$_smarty_tpl);?>
 </div>
  <?php echo $_smarty_tpl->getSubTemplate ("templates/admin/include/".((string)$_smarty_tpl->tpl_vars['tab']->value).".tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

      <?php }else{ ?>
	     <script>
       top.location = 'admin';
   </script>
	  <?php }?>
  <?php }?>
  <?php }else{ ?>
 <div class="row">
  
 <div class="col-md-10"><div class="caption lead" >
 <?php echo showImg('__stylesheet/__images/icons/admin.png',16,16,'center');?>
<?php echo $_smarty_tpl->tpl_vars['lang']->value->admin->page->homepage->title;?>

  </div></div>
 <div class="colmd-2">
 <div class="caption lead" >
 <?php echo showImg('__stylesheet/__images/icons/goto.png',16,16,'center');?>

			  <script type="text/javascript">
			   document.write('<a href="'+gotoApp()+'" style="color:white;"> <?php echo $_smarty_tpl->tpl_vars['lang']->value->admin->page->homepage->app;?>
</a>');
			  </script> 
			   </div>
</div>
 </div> 
 
			 <?php echo $_smarty_tpl->tpl_vars['admin']->value->editdefault();?>

			  
		 <ul class="list-group">
			  
			  <form action="" method="post">
			  <li class="list-group-item">
			  <div class="info_focus">
			<?php echo $_smarty_tpl->tpl_vars['lang']->value->admin->page->homepage->app_mode;?>
: 
			 <label class="checkbox-inline">
			  <input type="radio" id="optionsRadios4"  name="app_mode" value="on" <?php echo doChecked($_smarty_tpl->tpl_vars['admin']->value->json->app_mode,'on');?>
/><?php echo $_smarty_tpl->tpl_vars['lang']->value->admin->page->online;?>
 
			  </label>
			  <label class="checkbox-inline">
			  <input type="radio"  name="app_mode" value="off" <?php echo doChecked($_smarty_tpl->tpl_vars['admin']->value->json->app_mode,'off');?>
/><?php echo $_smarty_tpl->tpl_vars['lang']->value->admin->page->offline;?>

			  </label>
			  </div>
			  </li>
			  <li class="list-group-item">
			  <div class="info_focus">
			<?php echo $_smarty_tpl->tpl_vars['lang']->value->admin->page->homepage->popup;?>
: 
			 <label class="checkbox-inline">
			  <input type="radio" id="optionsRadios4"  name="popup" value="on" <?php echo doChecked($_smarty_tpl->tpl_vars['admin']->value->json->popup,'on');?>
/><?php echo $_smarty_tpl->tpl_vars['lang']->value->admin->page->show;?>
 
			  </label>
			  <label class="checkbox-inline">
			  <input type="radio"  name="popup" value="off" <?php echo doChecked($_smarty_tpl->tpl_vars['admin']->value->json->popup,'off');?>
/><?php echo $_smarty_tpl->tpl_vars['lang']->value->admin->page->hide;?>

			  </label>
			  </div>
			  </li>
			  
			  <li class="list-group-item">
			  <div class="info_focus">
			  <?php echo $_smarty_tpl->tpl_vars['lang']->value->admin->page->homepage->ads_1;?>
: 
			  <label class="checkbox-inline">
			  <input type="radio" name="ads_1" value="on" <?php echo doChecked($_smarty_tpl->tpl_vars['admin']->value->json->ads_1,'on');?>
/><?php echo $_smarty_tpl->tpl_vars['lang']->value->admin->page->show;?>

			   </label>
			  <label class="checkbox-inline">
			  <input type="radio" name="ads_1" value="off" <?php echo doChecked($_smarty_tpl->tpl_vars['admin']->value->json->ads_1,'off');?>
/><?php echo $_smarty_tpl->tpl_vars['lang']->value->admin->page->hide;?>

			 </label>
			 </div>
			  </li>
			  
			  <li class="list-group-item">
			  <div class="info_focus">
			  <?php echo $_smarty_tpl->tpl_vars['lang']->value->admin->page->homepage->ads_2;?>
: 
			  <label class="checkbox-inline">
			  <input type="radio" name="ads_2" value="on" <?php echo doChecked($_smarty_tpl->tpl_vars['admin']->value->json->ads_2,'on');?>
/><?php echo $_smarty_tpl->tpl_vars['lang']->value->admin->page->show;?>
 
			   </label>
			  <label class="checkbox-inline">
			  <input type="radio" name="ads_2" value="off" <?php echo doChecked($_smarty_tpl->tpl_vars['admin']->value->json->ads_2,'off');?>
/><?php echo $_smarty_tpl->tpl_vars['lang']->value->admin->page->hide;?>

			  </label>
			  </div>
			  </li>
			  
			  <li class="list-group-item">
			  <div class="info_focus">
			  <?php echo $_smarty_tpl->tpl_vars['lang']->value->admin->page->homepage->ads_3;?>
: 
			  <label class="checkbox-inline">
			  <input type="radio" name="ads_3" value="on" <?php echo doChecked($_smarty_tpl->tpl_vars['admin']->value->json->ads_3,'on');?>
/><?php echo $_smarty_tpl->tpl_vars['lang']->value->admin->page->show;?>
 
			  </label>
			  <label class="checkbox-inline">
			  <input type="radio" name="ads_3" value="off" <?php echo doChecked($_smarty_tpl->tpl_vars['admin']->value->json->ads_3,'off');?>
/><?php echo $_smarty_tpl->tpl_vars['lang']->value->admin->page->hide;?>

			 </label>
			 </div>
			  </li>
			  
			  <li class="list-group-item">
			  <div class="info_focus">
			  <?php echo $_smarty_tpl->tpl_vars['lang']->value->admin->page->homepage->send_mail;?>
: 
			  <label class="checkbox-inline">
			  <input type="radio" name="send_mail" value="on" <?php echo doChecked($_smarty_tpl->tpl_vars['admin']->value->json->send_mail,'on');?>
/><?php echo $_smarty_tpl->tpl_vars['lang']->value->admin->page->allow;?>

			   </label>
			  <label class="checkbox-inline">
			  <input type="radio" name="send_mail" value="off" <?php echo doChecked($_smarty_tpl->tpl_vars['admin']->value->json->send_mail,'off');?>
/><?php echo $_smarty_tpl->tpl_vars['lang']->value->admin->page->disallow;?>

			  </label>
			  </div> 
			  </li>
			  
			  <li class="list-group-item">
			  <div class="info_focus">
			  <?php echo $_smarty_tpl->tpl_vars['lang']->value->admin->page->homepage->download_photo;?>
:  
			  <label class="checkbox-inline">
			  <input type="radio" name="dw_photo" value="on" <?php echo doChecked($_smarty_tpl->tpl_vars['admin']->value->json->dw_photo,'on');?>
/><?php echo $_smarty_tpl->tpl_vars['lang']->value->admin->page->allow;?>
 
			  </label>
			  <label class="checkbox-inline">
			  <input type="radio" name="dw_photo" value="off" <?php echo doChecked($_smarty_tpl->tpl_vars['admin']->value->json->dw_photo,'off');?>
/><?php echo $_smarty_tpl->tpl_vars['lang']->value->admin->page->disallow;?>

			  </label>
			  </div>
			  </li>
			
			<li class="list-group-item">
			  <div class="info_focus">
			  <?php echo $_smarty_tpl->tpl_vars['lang']->value->admin->page->homepage->make_pp;?>
:  
			  <label class="checkbox-inline">
			  <input type="radio" name="make_pp" value="on" <?php echo doChecked($_smarty_tpl->tpl_vars['admin']->value->json->make_pp,'on');?>
/><?php echo $_smarty_tpl->tpl_vars['lang']->value->admin->page->allow;?>

			   </label>
			  <label class="checkbox-inline">
			  <input type="radio" name="make_pp" value="off" <?php echo doChecked($_smarty_tpl->tpl_vars['admin']->value->json->make_pp,'off');?>
/><?php echo $_smarty_tpl->tpl_vars['lang']->value->admin->page->disallow;?>

			  </label>
			  </div>
			  </li>
			  
			  <li class="list-group-item">
			  <div class="info_focus">
			  <?php echo $_smarty_tpl->tpl_vars['lang']->value->admin->page->homepage->animation;?>
:  
			  <label class="checkbox-inline">
			  <input type="radio" name="animation" value="on" <?php echo doChecked($_smarty_tpl->tpl_vars['admin']->value->json->animation,'on');?>
/><?php echo $_smarty_tpl->tpl_vars['lang']->value->admin->page->allow;?>

			   </label>
			  <label class="checkbox-inline">
			  <input type="radio" name="animation" value="off" <?php echo doChecked($_smarty_tpl->tpl_vars['admin']->value->json->animation,'off');?>
/><?php echo $_smarty_tpl->tpl_vars['lang']->value->admin->page->disallow;?>

			  </label>
			  </div></li>
			  
			  <li class="list-group-item">
			  <div class="info_focus">
			  <?php echo $_smarty_tpl->tpl_vars['lang']->value->admin->page->homepage->copyright;?>
:  
			  <label class="checkbox-inline">
			  <input type="radio" name="copyright" value="on" <?php echo doChecked($_smarty_tpl->tpl_vars['admin']->value->json->copyright,'on');?>
 onclick="$('#whileclosed2').show(1000);"/><?php echo $_smarty_tpl->tpl_vars['lang']->value->admin->page->show;?>

			 </label>
			  <label class="checkbox-inline">
			  <input type="radio" name="copyright" value="off" <?php echo doChecked($_smarty_tpl->tpl_vars['admin']->value->json->copyright,'off');?>
 onclick="$('#whileclosed2').hide(1000);"/><?php echo $_smarty_tpl->tpl_vars['lang']->value->admin->page->hide;?>

			  </label>
			  </div>
			   
 
			  <div class="info_focus" id="whileclosed2" style="display:none;">
			   <?php echo $_smarty_tpl->tpl_vars['lang']->value->admin->page->homepage->copyright_msg;?>
:<br/> <textarea name="copyright_msg" class="form-control" rows="3"/><?php echo $_smarty_tpl->tpl_vars['admin']->value->json->copyright_msg;?>
</textarea></div>
			 </li>
			 
			 
			 <li class="list-group-item">
			 <div class="info_focus"><?php echo $_smarty_tpl->tpl_vars['lang']->value->admin->page->homepage->status;?>
 : 
			 <label class="checkbox-inline">
			  <input type="radio" name="app" value="on"<?php echo doChecked($_smarty_tpl->tpl_vars['admin']->value->json->app,'on');?>
    onclick="$('#whileclosed').hide(1000);"/><?php echo $_smarty_tpl->tpl_vars['lang']->value->admin->page->open;?>
 
			   </label>
			   <label class="checkbox-inline">
			  <input type="radio" name="app" value="off" <?php echo doChecked($_smarty_tpl->tpl_vars['admin']->value->json->app,'off');?>
 onclick="$('#whileclosed').show(1000);"/><?php echo $_smarty_tpl->tpl_vars['lang']->value->admin->page->close;?>

				</label>
				<div class="info_focus" id="whileclosed" style="display:none;">
			  <?php echo $_smarty_tpl->tpl_vars['lang']->value->admin->page->homepage->status_msg;?>
:<br/> <textarea name="closed_msg" class="form-control" rows="3"/><?php echo $_smarty_tpl->tpl_vars['admin']->value->json->closed_msg;?>
</textarea></div></div>
				</li>
				
				<li class="list-group-item">
			  <div class="info_focus"><?php echo $_smarty_tpl->tpl_vars['lang']->value->admin->page->homepage->language;?>
 :
                   <select name="languages" style="width:70px;height:20px;">
                <option value="<?php echo $_smarty_tpl->tpl_vars['admin']->value->json->languages;?>
"><?php echo smarty_function_pathinfo(array('fname'=>$_smarty_tpl->tpl_vars['admin']->value->json->languages,'return'=>"filename"),$_smarty_tpl);?>
</option>
		 		 <?php echo $_smarty_tpl->tpl_vars['admin']->value->selectOption('__languages/lang/','xml');?>

			   </select>
			   </div></li>

 
			   <input type="hidden" name="change_bg" value="<?php echo $_smarty_tpl->tpl_vars['admin']->value->json->change_bg;?>
" />
			   <input type="hidden" name="oldColor" value="<?php echo $_smarty_tpl->tpl_vars['admin']->value->json->color;?>
" id="oldColor"/>
			   <input type="hidden" name="host" value="this"  />
			   <script>document.write('<input type="hidden" name="server" value="'+window.top.location.protocol+'//'+window.top.location.hostname+returnl()+'"/>')</script>
			         
					
					<li class="list-group-item">
				  <div class="info_focus"><?php echo $_smarty_tpl->tpl_vars['lang']->value->admin->page->homepage->color;?>
 :
                   <select id="selectColor" name="color" style="width:70px;height:20px;">
                <option value="<?php echo $_smarty_tpl->tpl_vars['admin']->value->json->color;?>
"><?php echo smarty_function_pathinfo(array('fname'=>$_smarty_tpl->tpl_vars['admin']->value->json->color,'return'=>"filename"),$_smarty_tpl);?>
</option>
				<option value="none">None</option>
		 		 <script>
				 showColor();
				 </script>
			   </select>
			   </div></li>

			   <li class="list-group-item">
			   <div class="info_focus">
			  <input type="submit" name="submit" value="Update" class="btn  btn-primary" style="width:100px;height:30px;"/></div></li>
			  </form>
			  
		        
		   </ul>
		 <?php }?>
		 
	<div class="animation_ball">
	  
	</div>
	 <?php if (adminOrder('animation')=="on"){?>
	   <script>onAnimationOn();</script>
	<?php }?><?php }} ?>