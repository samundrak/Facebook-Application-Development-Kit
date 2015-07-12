<?php                   
/*
 * App = HOW MUCH ROMANTIC YOU ARE? 
  
 *- @Author: Samundra kc;
 *- @contact: samundrak@yahoo.com
 *
 
 * Current session user   = $this->getUsername();
 * Current user photo     = $this->getUserImage();
 * Current user name	  = $this->getName();
 * Current user gender    = $this->getGender();
 
 * App font style         = $this->getFontStyle();
 * App Background Image   = $this->getBackgroundImage();
 * App font size 		  = $this->getFontSize();
 * App Final Image Link   = $this->getFinalImageLink();
 
 * You can make your own image generating script in this page with above details!
 */
error_reporting(0);  
$_gender = $this->getGender() == 'male' ? 'Girls': 'Boys';
$_habit = array(
    'good' => array(
	                'You are very Innocent',
					'You are very kind Hearted',
					'You love playing with kids',
					'You love Kids',
					'You love your family',
					'You Respect Your mother',
					'You Respect Your Father',
					'You don\'t bunk class',
					'You don\'t smoke',
					'You don\'t drink alcohol',
					'You never lie to your partner',
					'You love your partner',
					'You don\'t flirt with'.$_gender,
					'You saves your earning',
					'You never waste your time',
					'You don\'t like disco',
					'You never steal anything'
					
	),
	'bad'  => array(
	                'You aren\'t innocent',
					'You are very cruel Hearted',
					'You hate playing with kids',
					'You hate kids',
					'You hate your parents',
					'You never respect your mother',
					'You never repect your father',
					'You never attend any class',
					'You smoke too much',
					'You drink alcohol too much',
					'You always tell lie your partner',
					'You never loved your partner',
					'You always flirt with '.$_gender,
					'You never save your earning',
					'You always waste your time',
					'You love to be in disco',
					'You steal whatever you see infront of you'
	)
 );
 //COUNTING NUMBER OF GOOD ARRAY
 $inTotal  = count($_habit['good']);
 $x = 1;
 
 $_first     = array();
 $_next      = array();

 //GENERATING 5 RANDOM NUMBER FOR GOOD HABITS
 while($x <= 5){ 
 $v = mt_rand(0,$inTotal - 1);
 
     while(in_array($v,$_first)){
	      $v = $v + 1;
		     }
			 
			 $_first[] = $v;
 $x++;
   }

//ASSIGNING TOTAL NUMBER OF ARRAY TO NEW VALUE   
   for($i = 0; $i <= $inTotal - 1; $i++){
      $_next[] = $i;
   }

//FINDING DIFFERENCE IN TWO ARRAY
 $_diff = array_diff($_next,$_first);
      foreach($_diff as $diff){
	     $_second[] = $diff;
	  }
	  
 $x = 1;  
 $second = array();

//GENERATING 5 RANDOM NUMBER FOR BAD HABITS 
	while($x <= 5){ 
 $v = mt_rand(0,count($_second) - 1);
 
     while(in_array($v,$second)){
	      $v = $v + 1;
		     }
			 
			 $second[] = $v;
 $x++;
   }
                        $this->__first__();
						$copyRight             = adminOrder("copyright") == 'on' ? adminOrder("copyright_msg"): ' ' ;
                       	try{
						$destinationFile       = imagecreatefromjpeg($this->getBackgroundImage());
						}
						catch(Exception $e){
						$destinationFile       = imagecreatefrompng($this->getBackgroundImage());
						}
						try{
						$sourceFile            = imagecreatefromjpeg($this->getUserImage());}
						catch(Exception $e){
						$sourceFile            = imagecreatefrompng($this->getUserImage());}
						
						$this->textColorWhite  = imagecolorallocate($destinationFile,255,255,255);
						$this->textColorBlack  = imagecolorallocate($destinationFile,0,0,0);
 
						imagecopymerge($destinationFile, $sourceFile, 400, 20, 0, 0, 172, 180, 100);
					    ImageTTFText($destinationFile, $this->getFontSize() * 2, 6, 400, 237, $this->textColorBlack, $this->getFontStyle(),$this->getName(array('limit'=>10)));
						ImageTTFText($destinationFile, $this->getFontSize() * 2, 6, 400, 235, $this->textColorWhite, $this->getFontStyle(),$this->getName(array('limit'=>10)));
					    
//PRINTING GOOD HABITS
$step = 0;
           for($i = 0; $i <= 4; $i++){
		          ImageTTFText($destinationFile, 25, 0, 20, 435 + $step, $this->textColorWhite, $this->getFontStyle(),$i+1 .": ".wordwrap($_habit['good'][$_first[$i]],35));
				  $step = $step + 40;
		  }
$step = 0;		  
  for($i = 0; $i <= 4; $i++){
		          ImageTTFText($destinationFile, 25, 0, 480, 435 + $step, $this->textColorWhite, $this->getFontStyle(),$i+1 .": ".wordwrap($_habit['bad'][$_second[$second[$i]]],50));
				  $step = $step + 40;
		  }					    
						
						ImageTTFText($destinationFile, 20, 0, 550, 700, $this->textColorWhite, $this->getFontStyle(),$copyRight);
 
						imagejpeg($destinationFile,$this->getFinalImageLink());
						imagedestroy($destinationFile);
						imagedestroy($sourceFile);
						clearstatcache();
						 
	?>