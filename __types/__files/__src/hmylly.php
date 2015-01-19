<?php                   
/*
APP : HOW MUCH YOUR LOVER LOVES YOU?
 Copyright (C) 2014  Samundra kc

  
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

						imagecopymerge($destinationFile, $sourceFile, 700, 25, 0, 0, 172, 180, 100);
					    ImageTTFText($destinationFile, 50, 1, 600, 255, $this->textColorWhite, $this->getFontStyle(),'"'.$this->getName().'"');
					    ImageTTFText($destinationFile, 180, 1, 550, 600, $this->textColorWhite, $this->getFontStyle(),mt_rand(0,100)."%");
					    ImageTTFText($destinationFile, 20, 1, 550, 700, $this->textColorWhite, $this->getFontStyle(),$copyRight);
 
						imagejpeg($destinationFile,$this->getFinalImageLink());
						imagedestroy($destinationFile);
						imagedestroy($sourceFile);
						clearstatcache();
						 
	?>