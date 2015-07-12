//Author Samundra KC
//Contact: Samundrak@yahoo.com

function onAnimationOn(){
    $("#head").css({"animation": "anim_2 3s",
			 "-webkit-animation":" anim_2 3s",
			 "-moz-animation":" anim_2 3s",
			 "-ms-animation": "anim_2 3s",
			 "-o-animation":" anim_2 3s"
	});
	$('.shiney').css({
	    "animation":"anim_5 5s",
        "-ms-animation":"anim_5 5s",
        "-moz-animation":" anim_5 5s",
        "-o-animation": "anim_5 5s",
         "-webkit-animation":"anim_5 5s"
	});
	$("li").css({
	    "animation": "anim_2 3s",
        "-ms-animation": "anim_2 3s",
        "-moz-animation":" anim_2 3s",
        "-o-animation": "anim_2 3s",
        "-webkit-animation":" anim_2 3s"
	});
	$(".caption").css({
	   "-webkit-animation":" anim_1 2s",
	"-moz-animation":" anim_1 2s",
	"-ms-animation": "anim_1 2s",
	"animation": "anim_1 2s"
	});
}

function animation(x,s){
 x = Math.floor((Math.random()*4)+1);;
 var animation = Array();
for(var i = 0; i <= 4; i++){
   animation[i] = 'img_'+i+' '+s+'s';
 }
 return animation[x];
}
 
function rotateY(x){
				$(x).css({"-webkit-animation":"anim_4 3s"});
				$(x).css({"-moz-animation":"anim_4 3s"});
				$(x).css({"-ms-animation":"anim_4 3s"});
				$(x).css({"-o-animation":"anim_4 3s"});
				$(x).css({"animation":"anim_4 3s"});
				 setTimeout(function(){
				 $(x).css({"-webkit-animation":"none"});
				 $(x).css({"-moz-animation":"none"});
				 $(x).css({"-ms-animation":"none"});
				 $(x).css({"-o-animation":"none"});
				 $(x).css({"animation":"none"});
				 },5000);
				}
				
    function adsRotate(x){
	setTimeout(function(){
	    $(document).ready(function(){
		   $(".ads_2").fadeIn(1000);
		   
		   $(".ads_2 span").click(function(){
		       $(".ads_3").fadeIn(1000);
		   });
		   
		});
		},x);
	}
	
	function popUpfeatures(x){
	    if(x == 'hide'){
		 $("#content").css("display","none");
		   $("#sw_windowBox").fadeOut(800);
		   $("#popupFeature").fadeOut(800);
		   $(".statusMessage").val(lang.loading);
		   $(".body").html('   <div class="row">'+
				 '<div class="col-md-12">'+
				' <div class="progress progress-striped active">'+
			    ' <div class="progress-bar progress-bar-success" role="progressbar" '+
				 ' aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" '+
				 ' style="width: 0%;">'+
				'  <span class="sr-only">40% Complete</span>'+
			  '   </div>'+
			 '    </div></div> '+
			'	  <div class="col-md-12">'+
		    '  <label for="name"> '+lang.loading+' </label></div>'+
		   '</div>');
		   
		   }
		else{
		   $("#sw_windowBox").fadeIn(800);
	     $("#popupFeature").slideDown(800);
		}
		
	}
	 
function reloadButton(imgName){
 $(".ads_2").hide();
     document.getElementById("publishButton").disabled=true;
	 document.getElementById("reloadButton").disabled=true;
     $("#imgFile").slideUp(1000);
     $(".loadingGif").slideDown(1000);
	 $(".txtInput").slideUp(1000);
	 var i = 0;
	 var timer = setInterval(function(){
	     $("#goProgress").css("width",i + "%");
		 i++;
		  if( i == 100) {clearInterval(timer);};
	 },50);
	 i=0;
	 $.post("__fff__.php",{fileName:imgName,doTask:0},
     function(data,status){
	  $(".ads_2").hide();
	      if(status == 'success'){
		      document.getElementById("loadingTxt").innerHTML = lang.created;
              setTimeout(function(){ 
			   $("#goProgress").css("width","100%");
			    $("#imgFile").slideDown(1000);
                 $("#imgFile").html("<img id='dynamicImg' src='"+imgName+"?t=" + new Date().getTime()+"' width='720px' height='300px'/>");
				 if(adminOrder.animation == "on"){
				$("#imgFile").css({"-webkit-animation":animation(1,2),"-moz-animation":animation(),"-ms-animation":animation(),"animation":animation()});
		        rotateY('.box3');
				rotateY('.box1');}
				adsRotate(10000);
			    $(".loadingGif").slideUp(100);
			 	setTimeout(function(){
				$(".loadingGif").css("display","none")
				  document.getElementById("loadingTxt").innerHTML = lang.wait;
				 clearInterval(timer);
				 i = 0;
				 
				 $(".txtInput").hide(1000);
				 
				document.getElementById("publishButton").disabled=false;
				document.getElementById("reloadButton").disabled=false;
                },400);
			   },3000);
		
			 
		 }else{
		   alert(lang.onErr);
		 }
     });  
	
}
function publishButton(){
     document.getElementById("reloadButton").disabled=true;
     $("#imgFile").slideUp(1000);
     $(".txtInput").slideDown(1000);
	 document.getElementById("reloadButton").disabled=true;
    
}

function closeTxtArea(){
     $("#imgFile").slideDown(1000);
     $(".txtInput").slideUp(1000);
	 document.getElementById("reloadButton").disabled=false;
	  var shareMsg = $(".shareMsg").val();
	 if(shareMsg != ""){
	   setTimeout(function(){$(".shareMsg").val('')},1000);
	  }

 }
 
 function getShareMsg(imgName){
     var shareMsg = $(".shareMsg").val();
	   if(shareMsg != ""){
			   if(typeof(Storage)!=="undefined")
		  {
		   localStorage.shareMsg = shareMsg;
		   }
		  }
    $(".shareMsg").val(lang.p_wait + "..." + lang.wPosting );
	    $.post("__fff__.php",{fileName:imgName,doTask:1,getMsg:shareMsg},
        function(data,status){
	      if(status == 'success'){
		       $(".shareMsg").val(lang.postSuccess);
	          setTimeout(function(){
			    $(".shareMsg").val(shareMsg);
				$("#imgFile").slideDown(1000);
                $(".txtInput").slideUp(1000);
				document.getElementById("reloadButton").disabled=false;
	 
	          },5000);
		  }});
	 
 }
 $(document).ready(function(){
     $("#show_hints").click(function(){
	   $(".hints").toggle(1500);
	 });
	 
	 $("#dlt").click(function(){
	     $(".dlt_photos").toggle();
	 });
	 $("li").mouseover(function(){
	   $x = this.id;
	   $("#info_"+$x).show();
	 });
	 $("li").mouseout(function(){
	   $x = this.id;
	   $("#info_"+$x).hide();
	 });
	 
	 $("#selectOption").change(function(){
	    var i = $("#selectOption").attr("value");
		 
		$("#previewThumb").attr("src","__stylesheet/__images/"+i);
		if(i == 0)
	     $(".dlt_photos").hide(1000);
		 else
	     $(".dlt_photos").show(500); 
	 });
	 
	 $("#selectColor").change(function(){
	     var i = $("#selectColor").attr("value");
		   $("body").css({"background-color":i});  
		    });
	 
	 $(".caption").click(function(){
	    window.top.location = window.location.pathname;
	 });
	 $("#alert .footer").click(function(){
	    $("#sw_windowBox").fadeOut(1000);
	    $("#alert").fadeOut(1000);
		 window.top.location = window.location.pathname;
	 });
	 $("#mpp").click(function(){
	       popUpfeatures('show');
		   $(".caption").hide();
		   $("#noti").remove();
		    $("#goProgress2").css("width","10%");
			 $("#content").css("display","block");
		    $(".statusMessage").append("<span id='noti'>Sending data to server....</span>");
		   $usr = userData[0];
		   $.post("__fff__.php",{features:{"session":$usr,"type":"mpp"},doTask:2},function(data,status){
		      if(status == "success"){
			   $("#goProgress2").css("width","30%");
			  
                                if(data == 0 || data =='unable to upload'){
								 $("#goProgress2").css("width","0%");
								 $("#noti").remove();
 $(".statusMessage").append("<span id='noti'>Unknown Errr.....Maybe Photo didn't uploaded. Please reload this page!</span>");
                          
                                }else{
								 $("#goProgress2").css("width","100%");
			   $(".statusMessage").append("<span id='noti' >Data sent please wait some seconds..we will redirect you to facebook</span>");
  window.top.location = data;
}
                              setTimeout(function(){
							   $("#goProgress2").css("width","0%");
				  popUpfeatures('hide');
				  },3000);
				   
			  }else{
				 $("#goProgress2").css("width","0%");
			    $("#noti").remove();
			     $(".statusMessage").append("<span id='noti'>unable</span>");
			  }
		   });
	      
	 });
	 $("#dtp").click(function(){
	     $("#noti").remove();
		 $(".statusMessage").append("<span id='noti'>"+lang.wDownload+"</span>");
	    $("#content").css("display","block");
	      popUpfeatures('show');
		  $usr = userData[0];
		   $("#goProgress2").css("width","10%");
		  $.post("__fff__.php",{features:{"session":$usr,"type":"download"},doTask:2},function(data,status){
		               if(status == "success"){
							 $("#goProgress2").css("width","100%");
					        $( ".statusMessage" ).append( "<span id='noti'>"+lang.wDownload+"</span>" );
	                          top.location = data;
							  popUpfeatures('hide');
							  $("#noti").remove();
					   }
		  });
		  
	 });
	 $("#etp").click(function(){
			$("#noti").remove();
			 $( ".statusMessage" ).append( "<span id='noti'>Send Email to your friends!</span>" );
			 $("#content").css("display","block");
			  $(".add_email_details").append("<li>Email This To Friend</li>");
	         popUpfeatures('show');
			 $usr = userData[0];
			 $usrPik = userData[2];
			  $("#goProgress2").css("width","10%");
	        $.post("__fff__.php",{features:{"session":$usr,"type":"mail"},doTask:2},
     function(data,status){
	        if(status == 'success'){
			 $("#goProgress2").css("width","100%");
			  
			  $("#popupFeature .body img").fadeOut(1000);
			   $("#popupFeature .body span").fadeOut(1000);
			   	//$("#noti").remove();
		
			    $(".body").html(data);
			}
	 });
		  
	 });
	 
	 $("#mail-to").click(function(){
	    //alert();
	 });
 });
 adsRotate(3000); 
  function formDo(){
        var from = document.forms['mail-photo']['from'].value;
        var to   = document.forms['mail-photo']['to'].value;
        var msg  = document.forms['mail-photo']['msg'].value;
		 
		if (to==null || to=="")
  {
      $(".add_email_details li").remove();
	  $( ".add_email_details" ).append( "<li>"+lang.mailError+"</li>" );
	   
      return false;
  }else{
  try{
  $(".add_email_details li").remove();
  $( ".add_email_details " ).append( "<li>"+lang.mailSending+"</li>" );
  var x = location.href.replace('#','');
  
  $.post("swift-mail.php",{data:{"to":to,"from":from,"img":'__photos/__tmp/'+from+'.jpg',"msg":msg}},function(data,status){
       if(status == "success")
	        if(data == 0){
			  $(".add_email_details li").remove();
			  $( ".add_email_details" ).append( "<li>"+lang.mailSent+"</li>" );
			   setTimeout(function(){
			     popUpfeatures('hide');
			  },5000);
			}else{
			 $(".add_email_details li").remove();
			 $( ".add_email_details" ).append( "<li>"+lang.mailFail+"</li>" );
			}
   });
    return false;
	   }
	
	 catch(err){
	  $(".add_email_details li").remove();
	   $( ".add_email_details" ).append( "<li>"+lang.unknwnErr+"</li>" );
	   return false;
     	 }
	 }
   }
    function spaceSplit(x){
      for(a in x){
         if(x[a] == " ")
              var b  = x[a].replace(' ','');
           else
               var b = x[a];
          document.write(b);			   
	  }
	  }
  function showColor(){
  var color = Array('blue','red','orange','purple','white','black','red','cyan','sienna','sea shell','silver','sky blue','slate blue','slate gray','snow','spring green','steel blue','tan','teal','thistle','tomato','turqoise','violet','wheat','white smoke','sea green','sandy brown','salmon','saddle borwn','royal blue','rosy brown','powder blue','plum','peru','peachpuff','papaya whip','pale violet red'
  ,'blanched almond','chocolate','coral','cornflower blue','cornsilk','crimson','dark blue','dark gray','dark green','dark khaki','dark magenta','dark olive green','dark orange','dark orchid','dark red','dark salmon','dark sea green','deep pink','fire brick','forest green','pink','dodger blue','fuchsia','gainsboro','goldenrod','honyedew','indian red','indigo','ivory','khaki','lavender','lawn green',
  'lemon chiffon','light blue','light coral','light cyan','light goldenrod yellow','light grey','light green','light pink','light salmon','light sea green','light sky blue','light slate gray','light steel blue','lime','lime green','linen','magenta','maroon','medium aquamarine','medium blue','medium orchid','medium purple','medium sea green','medium slate blue','medium spring green','medium turquoise','medium violet red','midnight blue','mint cream','misty rose','moccasin','navajo white',
   'navy','old lace','purple'
  ); 
  color = color.sort();
  var total = color.length; 
  
  for(var i = 0; i<= total -1; i++){
   document.write('<option value="');
   spaceSplit(color[i]);
   document.write('">'+color[i]+'</option>');
    }
  } 
    
  