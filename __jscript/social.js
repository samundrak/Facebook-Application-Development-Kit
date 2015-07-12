/* @AUTHOR: SAMUNDRA KC;
  * @EMAIL:  SAMUNDRAK@YAHOO.COM;
  * @URL:    WWW.SAMUNDRA.ME
  *   
  *    
  */
var swaGatam ={
/*SET THIS SETTING ACCORDING TO YOUR DATA THIS IS DEFAULT
DATA AND WILL BE SHOWN DEFAULT IF WON'T EDIT THIS*/
//TITLE OF SWAGATAM BAR
title: "Please Like Our Social Page!",

//THIS IS ANNOUNCE MENT MESSAGE!
announce: "elu TODAY WE ARE GOING TO LAUNCH OUR NEW POPUP .. HOW IS THIS POP UP HOPE IT IS NICE!",

//THIS IS ANNOUNCEMENT HEADER 
announceHeader: "We Welcome You To Our Website.",
 
//HOW MUCH TIMES YOU WANT TO SHOW SWAGATAM USER PER DAY
limit: 500,
 
//HIDE SWAGATAM WHILE CLICKED ON BLACK PART
outClick:"OFF",
 
//HIDE SWAGATAM WHILE "ESC" KEY PRESSED ON KEYBOARD
escClick:"ON",
 
//APP ID OF FACEBOOK APPLICATION
appId:"533938673327493",
 
//YOUR TWITTER USERNAME
twitter:"samundrak",
 
/*YOUR TWITTER TIME WIDGET ID
  YOU WILL GET THIS HERE https://twitter.com/settings/widgets/new
  YOU WILL GET ID WHEN YOU WILL GENERATE ID BY CLICKING CREATE WIDGET
  SEE DATA-WIDGET-ID IN GENERATED CODE AND ENTER CODE ONLY HERE.
*/
twitterWidgetId:"368311442044239872",
 
//YOUR FACEBOOK PAGE USERNAME
facebookPage:"facebook",
 
//GOOGLE PAGE OR PERSON?
gplusType : "person",
 
/*THIS IS YOUR GOOGLE PLUS ID FOR PAGE/PERSON
  IT WILL BE LIKE THIS WHILE VISITING YOUR PROFILE IN GOOGLE PLUS
  PLUS.GOOGLE.COM/YOUR_GPLUS_CODE*/
gplus:"106278275837591205389",
 
popMeUp: function(){ if(this.checkSet(5) == 1){$('#sw_windowBox').fadeIn(1500); $('#sw_widgetBox').slideDown(1500); $(document).ready(function(){$("body").keyup(function(){swaGatam.escClick == "OFF" ? null : whichButton(event); });});closeThisShit(".sw_closeWidget");this.outClick == "OFF" ? null : closeThisShit("#sw_windowBox");function closeThisShit(x){$(document).ready(function(){$(x).click(function(){hideIt();});});}function whichButton(event) {var key = event.keyCode;if(key == 27){hideIt();}}$(document).ready(function(){$(".heading").mouseover(function(){for(var x = 0; x <= 10; x++){ $(".heading").animate({marginLeft:"20px"}); $(".heading").animate({marginLeft:"-20px"}); } }); });$(document).ready(function(){ $(".heading").mouseout(function(){ $(".heading").stop(true); });}); }function hideIt(){ $('#sw_windowBox').fadeOut(1500); $('#sw_widgetBox').fadeOut(1500);}},
doThis: function(x){ switch(x){ case 0: $(".sw_box2").hide(1000); $(".sw_box1").show(1000); /*$("#sw_widgetBox").css({"transition":"background 2s","background-color":"#3b5998"});*/ $(".sw_box3").hide(1000); $(".share_box2").hide(1000); $(".share_box1").show(1000); $(".share_box3").hide(1000); $("#sw_box").hide(1500); break; case 1: $(".sw_box1").hide(1000); $(".sw_box2").show(1000); /*$("#sw_widgetBox").css({"transition":"background 2s","background-color":"#9AE4E8"});*/ $(".sw_box3").hide(1000); $(".share_box1").hide(1000); $(".share_box2").show(1000); $(".share_box3").hide(1000); $("#sw_box").hide(1500); break; case 2: $(".sw_box2").hide(1000); $(".sw_box3").show(1000); /* $("#sw_widgetBox").css({"animation":"widgetBg 5s","-webkit-animation":"widgetBg 5s"}); $("#sw_widgetBox").css({"transition":"background 2s","background-color":"white"});*/ $(".sw_box1").hide(1000); $(".share_box2").hide(1000); $(".share_box3").show(1000); $(".share_box1").hide(1000); $("#sw_box").hide(1500); break; } },
checkSet: function(x){ if(typeof(Storage)!=="undefined") { var d = new Date(); var day = d.getDate(); checkData = localStorage.checkData; if(checkData){ $today = checkData[0]+checkData[1]; $show = checkData[3]; if($show == this.limit && $today == day){ return 0; }else{ if($today == day){ $showPlus = parseInt($show) + 1;localStorage.checkData = [day,$showPlus];return 1; }else{ localStorage.checkData = [day,1];return 1; } } }else{ localStorage.checkData = [day,1];return 1; } } },}
$(document).ready(function(){ $("body").keyup(function(){ isEnter(event); }); });function isEnter(event){pressKey = event.keyCode; if($("input")[0] == document.activeElement) {if(pressKey == 13){ valu = $("#emailInput").val(); if (validateEmail(valu)) { swaGatam.email = valu; window.open('http://feedburner.google.com/fb/a/mailverify?uri='+window.location.host, 'popupwindow', 'scrollbars=yes,width=550,height=520'); }else{ console.log("ERROR INCORRECT EMAIL!"); } }} }
function validateEmail(email) { /* CREDIT: http://stackoverflow.com/a/46181/11236*/
var re = /^(([^<>()[\]\\.,;:\s@\"]+(\.[^<>()[\]\\.,;:\s@\"]+)*)|(\".+\"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
return re.test(email);
}
$(document).ready(function(){ swaGatam.popMeUp(); });(function(d, s, id) { var js, fjs = d.getElementsByTagName(s)[0]; if (d.getElementById(id)) return; js = d.createElement(s); js.id = id; js.src = "//connect.facebook.net/ne_NP/all.js#xfbml=1&appId="+swaGatam.appId; fjs.parentNode.insertBefore(js, fjs);}(document, 'script', 'facebook-jssdk'));setTimeout(function(){ $("#sw_box").fadeOut(1500); $(".sw_box1").fadeIn(1500);},6000);
$(document).ready(function(){ $(".head").click(function(){ $(".sw_announce").slideToggle(1000); localStorage.alert_msg = '{"sts":"1","msg":"'+swaGatam.announce+'"}'; setTimeout(function(){$("#sw_notifi").fadeOut(1000);},2000); setTimeout(function(){$(".sw_announce_header").slideDown(1000);},3000); $(".sw_announce_header").click(function(){$(".sw_announce_header").slideUp(1000);}); });});$(document).ready(function(){$("#sw_notifi").mouseover(function(){ document.getElementById("sw_heading").innerHTML = "Website Announcement!";$("#sw_notifi").mouseout(function(){ document.getElementById("sw_heading").innerHTML = swaGatam.title; });});});announceAlert(swaGatam.announce);function announceAlert(x){ if(typeof(Storage)!=="undefined"){ var y = localStorage.alert_msg; if(y === undefined){ localStorage.alert_msg = '{"sts":"0","msg":"'+x+'"}'; setTimeout(function(){$("#sw_notifi").fadeIn(1000);},2000); }else{ var z = eval ("(" + localStorage.alert_msg + ")"); if(z.msg === x){ if(z.sts == 0){ setTimeout(function(){$("#sw_notifi").fadeIn(1000);},2000); /*alert('MESSAGE ISNT READ');*/ }else{ /* alert('MESSAGE IS READ');*/ }}else{ localStorage.alert_msg = '{"sts":"0","msg":"'+x+'"}'; setTimeout(function(){$("#sw_notifi").fadeIn(1000);},2000);} } }}
  $(document).ready(function(){
      $(".heading").mouseover(function(){
	  for(var x = 0; x <= 10; x++){
	      $(".heading").animate({marginLeft:"20px"});
	      $(".heading").animate({marginLeft:"-20px"});
	      }
	  });
   });
   $(document).ready(function(){
      $(".heading").mouseover(function(){
	  for(var x = 0; x <= 10; x++){
	      $(".heading").animate({marginLeft:"20px"});
	      $(".heading").animate({marginLeft:"-20px"});
	      }
	  });
   });
  
$(document).ready(function(){
      $(".heading").mouseout(function(){
	      $(".heading").stop(true);
	   });});
 $(document).ready(function(){
    $("body").keyup(function(){
	  swaGatam.escClick == "OFF" ? null : whichButton(event);
		 
	});
  });
  
  
   
   
   
  closeThisShit(".sw_closeWidget");
  
swaGatam.outClick == "OFF"  ? null : closeThisShit("#sw_windowBox");;
  
 
   function closeThisShit(x){
   $(document).ready(function(){
      $(x).click(function(){
	     hideIt();
	  });
   });
   }
 function whichButton(event) {
var key = event.keyCode
   if(key == 27){
         hideIt();
   }
 
 
   

   
  }
function hideIt(){
         $('#sw_windowBox').fadeOut(1500);
	     $('#sw_widgetBox').fadeOut(1500);
}  
