<?php /* Smarty version Smarty-3.1.14, created on 2014-12-29 15:44:41
         compiled from "templates\admin\include\app.tpl" */ ?>
<?php /*%%SmartyHeaderCode:8754a168d9a18a72-07902024%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '9ce39e587c9c001e361f4b5b4dd37613ed49ed5a' => 
    array (
      0 => 'templates\\admin\\include\\app.tpl',
      1 => 1417625363,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '8754a168d9a18a72-07902024',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'admin' => 0,
    'lang' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_54a168da021f35_72977558',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_54a168da021f35_72977558')) {function content_54a168da021f35_72977558($_smarty_tpl) {?>
<div class="row"><div class="caption lead" ><div style="color:white;width:auto;background-color:red;"><?php echo $_smarty_tpl->tpl_vars['admin']->value->editConfig();?>
</div>
 <?php echo showImg('__stylesheet/__images/icons/application.png',16,16,'center');?>
<?php echo $_smarty_tpl->tpl_vars['lang']->value->admin->page->app->title;?>
  </div></div>
 
<form action="" method="post">
   <ul class="list-group">  
    
	<li class="list-group-item active">
      
      <ul>
          <li><?php echo $_smarty_tpl->tpl_vars['lang']->value->admin->hints->ol->i;?>
</li>
          <li><?php echo $_smarty_tpl->tpl_vars['lang']->value->admin->hints->ol->ii;?>
</li>
          <li><?php echo $_smarty_tpl->tpl_vars['lang']->value->admin->hints->ol->iii;?>
</li>
        </ul>
     </li>

 
   <li class="list-group-item">
       <label for="name" title="<?php echo $_smarty_tpl->tpl_vars['lang']->value->admin->hints->title;?>
"  
      data-container="body" data-toggle="popover" data-placement="top" 
      data-content="<?php echo $_smarty_tpl->tpl_vars['lang']->value->admin->hints->a_id;?>
" data-trigger="hover"><?php echo $_smarty_tpl->tpl_vars['lang']->value->admin->page->app->a_id;?>
</label>
       <input class="form-control" class="form-control"type="text" name="input[]" required value="<?php echo $_smarty_tpl->tpl_vars['admin']->value->json->id;?>
"/>
    </li>
  
      
      
    
    
  <li class="list-group-item">
       <label for="name" title="<?php echo $_smarty_tpl->tpl_vars['lang']->value->admin->hints->title;?>
"  
      data-container="body" data-toggle="popover" data-placement="top" 
      data-content="<?php echo $_smarty_tpl->tpl_vars['lang']->value->admin->hints->a_secret;?>
" data-trigger="hover">
      <?php echo $_smarty_tpl->tpl_vars['lang']->value->admin->page->app->a_secret;?>
</label>
       <input class="form-control"  class="form-control" type="text" name="input[]" required value="<?php echo $_smarty_tpl->tpl_vars['admin']->value->json->secret;?>
"/>
    </li>
  
   
      
    
     <li class="list-group-item">
       <label for="name" title="<?php echo $_smarty_tpl->tpl_vars['lang']->value->admin->hints->title;?>
"  
      data-container="body" data-toggle="popover" data-placement="top" 
      data-content="<?php echo $_smarty_tpl->tpl_vars['lang']->value->admin->hints->a_url;?>
" data-trigger="hover">
      <?php echo $_smarty_tpl->tpl_vars['lang']->value->admin->page->app->a_url;?>
</label>
       <input class="form-control" class="form-control" type="url" name="input[]" required value="<?php echo $_smarty_tpl->tpl_vars['admin']->value->json->url;?>
"/>
    </li>
  
     
       
    
     <li class="list-group-item">
       <label for="name" title="<?php echo $_smarty_tpl->tpl_vars['lang']->value->admin->hints->title;?>
"  
      data-container="body" data-toggle="popover" data-placement="top" 
      data-content=" <?php echo $_smarty_tpl->tpl_vars['lang']->value->admin->hints->f_page;?>
" data-trigger="hover">
      <?php echo $_smarty_tpl->tpl_vars['lang']->value->admin->page->app->f_page;?>
</label>
       <input class="form-control" type="url" name="input[]" required value="<?php echo $_smarty_tpl->tpl_vars['admin']->value->json->page;?>
"/>
    </li>
  
       
    
     <li class="list-group-item">
       <label for="name" title="<?php echo $_smarty_tpl->tpl_vars['lang']->value->admin->hints->title;?>
"  
      data-container="body" data-toggle="popover" data-placement="top" 
      data-content=" <?php echo $_smarty_tpl->tpl_vars['lang']->value->admin->hints->p_msg;?>
" data-trigger="hover">
      <?php echo $_smarty_tpl->tpl_vars['lang']->value->admin->page->app->p_msg;?>
</label>
       <input class="form-control" type="text" name="input[]" required value="<?php echo $_smarty_tpl->tpl_vars['admin']->value->json->post_msg;?>
"/>
  </li>  
  
     
      
    
     <li class="list-group-item">
       <label for="name" title="<?php echo $_smarty_tpl->tpl_vars['lang']->value->admin->hints->title;?>
"  
      data-container="body" data-toggle="popover" data-placement="top" 
      data-content="<?php echo $_smarty_tpl->tpl_vars['lang']->value->admin->hints->i_msg;?>
" data-trigger="hover">
      <?php echo $_smarty_tpl->tpl_vars['lang']->value->admin->page->app->i_msg;?>
</label>
       <input class="form-control" type="text" name="input[]" required value="<?php echo $_smarty_tpl->tpl_vars['admin']->value->json->inviteMsg;?>
"/>
    </li>
  
     
    
     <li class="list-group-item">
       <label for="name" title="<?php echo $_smarty_tpl->tpl_vars['lang']->value->admin->hints->title;?>
"  
      data-container="body" data-toggle="popover" data-placement="top" 
      data-content="<?php echo $_smarty_tpl->tpl_vars['lang']->value->admin->hints->p_title;?>
 " data-trigger="hover">
      <?php echo $_smarty_tpl->tpl_vars['lang']->value->admin->page->app->p_title;?>
</label>
       <input class="form-control" type="text" name="input[]" required value="<?php echo $_smarty_tpl->tpl_vars['admin']->value->json->pageTitle;?>
"/>
    </li>
   
       
    
       <li class="list-group-item">
       <label for="name" title="<?php echo $_smarty_tpl->tpl_vars['lang']->value->admin->hints->title;?>
"  
      data-container="body" data-toggle="popover" data-placement="top" 
      data-content="   <?php echo $_smarty_tpl->tpl_vars['lang']->value->admin->hints->ad_script;?>
" data-trigger="hover">
      <?php echo $_smarty_tpl->tpl_vars['lang']->value->admin->page->app->ad_script;?>
</label>
      <textarea class="form-control" rows="3" type="text" name="input[]"   required  />
        <?php echo $_smarty_tpl->tpl_vars['admin']->value->json->adsScript;?>

        </textarea>
		</li>
    
  
  
    
    
       <li class="list-group-item">
       <label for="name" title="<?php echo $_smarty_tpl->tpl_vars['lang']->value->admin->hints->title;?>
"  
      data-container="body" data-toggle="popover" data-placement="top" 
      data-content="<?php echo $_smarty_tpl->tpl_vars['lang']->value->admin->hints->ad_slot;?>
" data-trigger="hover">
      <?php echo $_smarty_tpl->tpl_vars['lang']->value->admin->page->app->ad_slot;?>
</label>
      <textarea class="form-control" rows="3" type="text" name="input[]"   required  />
        <?php echo $_smarty_tpl->tpl_vars['admin']->value->json->adsSlot;?>

        </textarea></li>
     
       
    
       <li class="list-group-item">
       <label for="name" title="<?php echo $_smarty_tpl->tpl_vars['lang']->value->admin->hints->title;?>
"  
      data-container="body" data-toggle="popover" data-placement="top" 
      data-content=" <?php echo $_smarty_tpl->tpl_vars['lang']->value->admin->hints->ad_slot2;?>
" data-trigger="hover">
      <?php echo $_smarty_tpl->tpl_vars['lang']->value->admin->page->app->ad_slot2;?>
</label>
      <textarea class="form-control" rows="3" type="text" name="input[]"   required  />
        <?php echo $_smarty_tpl->tpl_vars['admin']->value->json->adsSlot_2;?>

        </textarea>
    </li>
  
      
	     <li class="list-group-item">
       <label for="name" title="<?php echo $_smarty_tpl->tpl_vars['lang']->value->admin->hints->title;?>
"  
      data-container="body" data-toggle="popover" data-placement="top" 
      data-content="   <?php echo $_smarty_tpl->tpl_vars['lang']->value->admin->hints->ad_slot3;?>
" data-trigger="hover">
      <?php echo $_smarty_tpl->tpl_vars['lang']->value->admin->page->app->ad_slot3;?>
</label>
      <textarea class="form-control" rows="3" type="text" name="input[]"   />
        <?php echo $_smarty_tpl->tpl_vars['admin']->value->json->adsSlot_3;?>

        </textarea>
    </li>
  
   
      <li class="list-group-item">
       <label for="name" title="<?php echo $_smarty_tpl->tpl_vars['lang']->value->admin->hints->title;?>
"  
      data-container="body" data-toggle="popover" data-placement="top" 
      data-content=" <?php echo $_smarty_tpl->tpl_vars['lang']->value->admin->hints->fn_name;?>
" data-trigger="hover"> 
      <?php echo $_smarty_tpl->tpl_vars['lang']->value->admin->page->app->fn_name;?>
</label>
      <select class="form-control" name="input[]">
          <option value="<?php echo $_smarty_tpl->tpl_vars['admin']->value->json->fontName;?>
"><?php echo $_smarty_tpl->tpl_vars['admin']->value->json->fontName;?>
</option>
          
		   <?php echo $_smarty_tpl->tpl_vars['admin']->value->selectOption('__stylesheet/__fonts');?>

		   
        </select></li>
    
  
     
    
       <li class="list-group-item">
       <label for="name" title="<?php echo $_smarty_tpl->tpl_vars['lang']->value->admin->hints->title;?>
"  
      data-container="body" data-toggle="popover" data-placement="top" 
      data-content="  <?php echo $_smarty_tpl->tpl_vars['lang']->value->admin->hints->fn_size;?>
 
     " data-trigger="hover">
      <?php echo $_smarty_tpl->tpl_vars['lang']->value->admin->page->app->fn_size;?>
</label>
	  
       <input class="form-control" type="text" name="input[]" required  value="<?php echo $_smarty_tpl->tpl_vars['admin']->value->json->fontSize;?>
"/>
    
  </li>
      
     
    
      <li class="list-group-item">
	 
       <input class="btn btn-primary " type="submit" name="submit"/></li>
     
   </ul>
</form><?php }} ?>