<?php /* Smarty version Smarty-3.1.14, created on 2014-12-29 16:12:59
         compiled from "templates\admin\include\social.html" */ ?>
<?php /*%%SmartyHeaderCode:698654a16f7b6d6346-02648216%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'cc7391dbfc06aac33addf044dd3e563173e5cfc5' => 
    array (
      0 => 'templates\\admin\\include\\social.html',
      1 => 1413836000,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '698654a16f7b6d6346-02648216',
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
  'unifunc' => 'content_54a16f7bba4be5_88283205',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_54a16f7bba4be5_88283205')) {function content_54a16f7bba4be5_88283205($_smarty_tpl) {?> <div class="row"><div class="caption lead" ><div style="color:white;width:auto;background-color:red;"><?php echo $_smarty_tpl->tpl_vars['admin']->value->editPopUp();?>
</div>
 <?php echo showImg('__stylesheet/__images/icons/popup.png',16,16,'center');?>
<?php echo $_smarty_tpl->tpl_vars['lang']->value->admin->page->social->title;?>

 </div></div>
<form action="" method="post">
<div class="col-md-5">
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
      data-content="<?php echo $_smarty_tpl->tpl_vars['lang']->value->admin->hints->social->p_title;?>
" data-trigger="hover"><?php echo $_smarty_tpl->tpl_vars['lang']->value->admin->page->social->p_title;?>
</label>
      <input class="form-control"  type="text" name="input[]" value="<?php echo $_smarty_tpl->tpl_vars['admin']->value->json->title;?>
"/>
    </li>
   
        
     
    <li class="list-group-item"> 
       <label for="name" title="<?php echo $_smarty_tpl->tpl_vars['lang']->value->admin->hints->title;?>
"  
      data-container="body" data-toggle="popover" data-placement="top" 
      data-content=" <?php echo $_smarty_tpl->tpl_vars['lang']->value->admin->hints->social->announce;?>
" data-trigger="hover"><?php echo $_smarty_tpl->tpl_vars['lang']->value->admin->page->social->announce;?>
</label>
      <input class="form-control"  type="text" name="input[]" value="<?php echo $_smarty_tpl->tpl_vars['admin']->value->json->announce;?>
"/>
     </li>
	 
     <li class="list-group-item"> 
       <label for="name" title="<?php echo $_smarty_tpl->tpl_vars['lang']->value->admin->hints->title;?>
"  
      data-container="body" data-toggle="popover" data-placement="top" 
      data-content="<?php echo $_smarty_tpl->tpl_vars['lang']->value->admin->hints->social->a_header;?>
" data-trigger="hover"><?php echo $_smarty_tpl->tpl_vars['lang']->value->admin->page->social->a_header;?>
</label>
      <input class="form-control"  type="text" name="input[]" value="<?php echo $_smarty_tpl->tpl_vars['admin']->value->json->announce_header;?>
"/>
     </li>
    
	<li class="list-group-item"> 
       <label for="name" title="<?php echo $_smarty_tpl->tpl_vars['lang']->value->admin->hints->title;?>
"  
      data-container="body" data-toggle="popover" data-placement="top" 
      data-content=" <?php echo $_smarty_tpl->tpl_vars['lang']->value->admin->hints->social->limit;?>
 " data-trigger="hover"><?php echo $_smarty_tpl->tpl_vars['lang']->value->admin->page->social->limit;?>
</label>
      <input class="form-control"  type="text" name="input[]" value="<?php echo $_smarty_tpl->tpl_vars['admin']->value->json->limit;?>
"/>
     </li>
    
     
	 <li class="list-group-item"> 
	  <label for="name" title="<?php echo $_smarty_tpl->tpl_vars['lang']->value->admin->hints->title;?>
"  
      data-container="body" data-toggle="popover" data-placement="top" 
      data-content="  <?php echo $_smarty_tpl->tpl_vars['lang']->value->admin->hints->social->out_click;?>
 " data-trigger="hover"><?php echo $_smarty_tpl->tpl_vars['lang']->value->admin->page->social->out_click;?>
</label>
      <select name="input[]">
          <option value="<?php echo $_smarty_tpl->tpl_vars['admin']->value->json->out_click;?>
"><?php echo $_smarty_tpl->tpl_vars['admin']->value->json->out_click;?>
 (Default)</option>
          <option value="ON"><?php echo $_smarty_tpl->tpl_vars['lang']->value->admin->page->on;?>
</option>
          <option value="OFF"><?php echo $_smarty_tpl->tpl_vars['lang']->value->admin->page->off;?>
</option>
        </select>
    </li>
     
	 <li class="list-group-item"> 
      <label for="name" title="<?php echo $_smarty_tpl->tpl_vars['lang']->value->admin->hints->title;?>
"  
      data-container="body" data-toggle="popover" data-placement="top" 
      data-content=" <?php echo $_smarty_tpl->tpl_vars['lang']->value->admin->hints->social->esc_click;?>
 " data-trigger="hover"><?php echo $_smarty_tpl->tpl_vars['lang']->value->admin->page->social->esc_click;?>
</label>
      <select name="input[]">
          <option value="<?php echo $_smarty_tpl->tpl_vars['admin']->value->json->esc_click;?>
"><?php echo $_smarty_tpl->tpl_vars['admin']->value->json->esc_click;?>
 (Default)</option>
          <option value="ON"><?php echo $_smarty_tpl->tpl_vars['lang']->value->admin->page->on;?>
</option>
          <option value="OFF"><?php echo $_smarty_tpl->tpl_vars['lang']->value->admin->page->off;?>
</option>
        </select>
     </li>
    
       <li class="list-group-item"> 
	 <label for="name" title="<?php echo $_smarty_tpl->tpl_vars['lang']->value->admin->hints->title;?>
"  
      data-container="body" data-toggle="popover" data-placement="top" 
      data-content="  <?php echo $_smarty_tpl->tpl_vars['lang']->value->admin->hints->social->f_a_id;?>
" data-trigger="hover"><?php echo $_smarty_tpl->tpl_vars['lang']->value->admin->page->social->f_a_id;?>
</label>
      <input class="form-control"  type="text" name="input[]" value="<?php echo $_smarty_tpl->tpl_vars['admin']->value->json->facebook_app_id;?>
"/>
     </li>
    
      
	  <li class="list-group-item">
	   <label for="name" title="<?php echo $_smarty_tpl->tpl_vars['lang']->value->admin->hints->title;?>
"  
      data-container="body" data-toggle="popover" data-placement="top" 
      data-content=" <?php echo $_smarty_tpl->tpl_vars['lang']->value->admin->hints->social->f_p_usr;?>
 " data-trigger="hover"><?php echo $_smarty_tpl->tpl_vars['lang']->value->admin->page->social->f_p_usr;?>
</label>
      <input class="form-control"  type="text" name="input[]" value="<?php echo $_smarty_tpl->tpl_vars['admin']->value->json->facebook_page;?>
"/>
    </li>
    
      
	  <li class="list-group-item"> 
      <label for="name" title="<?php echo $_smarty_tpl->tpl_vars['lang']->value->admin->hints->title;?>
"  
      data-container="body" data-toggle="popover" data-placement="top" 
      data-content="  <?php echo $_smarty_tpl->tpl_vars['lang']->value->admin->hints->social->t_u;?>
" data-trigger="hover"><?php echo $_smarty_tpl->tpl_vars['lang']->value->admin->page->social->t_u;?>
</label>
      <input class="form-control"  type="text" name="input[]" value="<?php echo $_smarty_tpl->tpl_vars['admin']->value->json->twitter_username;?>
"/>
     </li>
    
      
	  <li class="list-group-item"> 
	   <label for="name" title="<?php echo $_smarty_tpl->tpl_vars['lang']->value->admin->hints->title;?>
"  
      data-container="body" data-toggle="popover" data-placement="top" 
      data-content=" <?php echo $_smarty_tpl->tpl_vars['lang']->value->admin->hints->social->t_w_i;?>
  " data-trigger="hover"><?php echo $_smarty_tpl->tpl_vars['lang']->value->admin->page->social->t_w_i;?>
</label>
      <input class="form-control"  type="text" name="input[]" value="<?php echo $_smarty_tpl->tpl_vars['admin']->value->json->twitter_widget_id;?>
"/>
      
    </li>
    
	<li class="list-group-item"> 
       <label for="name" title="<?php echo $_smarty_tpl->tpl_vars['lang']->value->admin->hints->title;?>
"  
      data-container="body" data-toggle="popover" data-placement="top" 
      data-content=" <?php echo $_smarty_tpl->tpl_vars['lang']->value->admin->hints->social->g_t;?>
 " data-trigger="hover"><?php echo $_smarty_tpl->tpl_vars['lang']->value->admin->page->social->g_t;?>
</label>
      <select name="input[]">
          <option value="<?php echo $_smarty_tpl->tpl_vars['admin']->value->json->gplus_type;?>
"><?php echo $_smarty_tpl->tpl_vars['admin']->value->json->gplus_type;?>
 (Default)</option>
          <option value="person"><?php echo $_smarty_tpl->tpl_vars['lang']->value->admin->page->person;?>
</option>
          <option value="page"><?php echo $_smarty_tpl->tpl_vars['lang']->value->admin->page->page;?>
</option>
        </select>
    </li>
    
      
	  <li class="list-group-item"> 
	  <label for="name" title="<?php echo $_smarty_tpl->tpl_vars['lang']->value->admin->hints->title;?>
"  
      data-container="body" data-toggle="popover" data-placement="top" 
      data-content=" <?php echo $_smarty_tpl->tpl_vars['lang']->value->admin->hints->social->g_i;?>
 " data-trigger="hover"><?php echo $_smarty_tpl->tpl_vars['lang']->value->admin->page->social->g_i;?>
</label>
      <input class="form-control"  type="text" name="input[]" value="<?php echo $_smarty_tpl->tpl_vars['admin']->value->json->gplus_id;?>
"/>
     </li>
    
       
	  <li class="list-group-item"> 
	    <input class="btn btn-primary " type="submit" name="submit"/></li>
    </li>
  </ul></div> 
  <div class="col-md-7">
      <ul class="list-group">
		<li class="list-group-item active"> <label for="name" ><?php echo $_smarty_tpl->tpl_vars['lang']->value->admin->page->preview;?>
</label></li>
	   <li class="list-group-item"> 
       <img src="__stylesheet/__images/popup.jpg" width="590px" height="440px"/>
    </li>
    
	  </ul>
  </div>
</form>
<?php }} ?>