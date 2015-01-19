<?php $cr_file = basename($img,'.jpg');
$json = '__types/__files/__json/'.$cr_file.'.json';
 
	  
		 
	   ?>
<br/>
<ul class="list-group" style="box-shadow:2px 2px 15px;
">
<li class="list-group-item active"><?php echo adminOrder('app_name',$json,1); ?></li>
<li class="list-group-item" style="
 <?php 
		   if(adminOrder('app_code','info') == basename($cr_file,'.jpg')){
		    echo '
			background: -webkit-radial-gradient(center,rgb(228, 228, 228) 20%, #797979 100%);
background: -moz-radial-gradient(center,rgb(228, 228, 228) 20%, #797979 100%);
background: -ms-radial-gradient(center,rgb(228, 228, 228) 20%, #797979 100%);
background: -o-radial-gradient(center,rgb(228, 228, 228) 20%, #797979 100%);';
		 } 
		?>
">
<div class="row" >
<div class="col-md-12">
 <div class="col-md-5" ><br/>
 <ul class="list-group" >
  <li class="list-group-item ">
  <img src="<?php echo $img;?>" width="250px" height="250px"  class="img-responsive" alt="Responsive image"/>

	
	 <input class="col-md-12"type="radio" name="img[]" value="<?php echo $b;?>"
		<?php 
		   if(adminOrder('app_code','info') == basename($cr_file,'.jpg')){
		    echo 'checked';
		 } 
		?>
	 />
	 
 </ul>
 </div>
 <div class="col-md-7">
 <br/>
<ul class="list-group">
    <ul class="list-group">
	   <li class="list-group-item">
	   <table class="table table-striped">
    <thead>
      <tr>
         <th><?php echo $this->lang->admin->app_type->a_name; ?></th>
		 <th><?php echo adminOrder('app_name',$json,1); ?></th>
         </tr>
   </thead>
   <tbody>
      <tr>
         <td><?php echo $this->lang->admin->app_type->a_version; ?></td>
         <td><?php echo adminOrder('version',$json,1); ?></td>
       </tr>
      <tr>
         <td><?php echo $this->lang->admin->app_type->a_code; ?></td>
         <td><?php echo adminOrder('app_code',$json,1); ?></td>
       </tr>
      <tr>
         <td><?php echo $this->lang->admin->app_type->a_released; ?></td>
         <td><?php echo adminOrder('released_on',$json,1); ?></td>
       </tr>
	   <tr>
         <td><?php echo $this->lang->admin->app_type->a_updated; ?></td>
         <td><?php echo adminOrder('updated_on',$json,1); ?></td>
       </tr>
	   <tr>
         <td><?php echo $this->lang->admin->app_type->a_developed; ?></td>
         <td><?php echo adminOrder('developed_by',$json,1); ?></td>
       </tr>
	   <tr>
         <td><?php echo $this->lang->admin->app_type->a_website; ?></td>
         <td><a href="<?php echo adminOrder('website',$json,1); ?>" target="_blank" ><?php echo adminOrder('website',$json,1); ?></a></td>
       </tr>
	   <tr>
         <td><?php echo $this->lang->admin->app_type->a_price; ?></td>
         <td><?php echo adminOrder('price',$json,1); ?></td>
       </tr>
	   <tr>
         <td><?php echo $this->lang->admin->app_type->a_status; ?></td>
         <td><?php 
		   if(adminOrder('app_code','info') == basename($cr_file,'.jpg')){
		     echo $this->lang->admin->app_type->a_active;
		 } else{
		 echo $this->lang->admin->app_type->a_not_active;
		 }
		?></td>
       </tr>
   </tbody>
</table>
	  </li>
	</ul>
</ul>
</div>
</div>
</li>
</ul>