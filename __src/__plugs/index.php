<?php                   
 /*
 * APP = HOW WILL YOU DIE?  
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
						$reasonOfDeath         = array(
						'Bus accident','cancer','HIV AIDS','Hang till Death','Sucide','Tuberclosis','jaundice','Falling from Cycle','Bike Accident','Snake bite',
						'Malaria','Dengue','Heart Attack','Electric Shock','Becaming Too Old','Falling from Tree','Falling from Roof','Plane Crash','Terroist Attack',
						'Tsunami','Earthquake','Too much happy','Too Much Depression','Bomb blasts'
						);
						$inTotal               = count($reasonOfDeath);
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
						$this->textColorRed    = imagecolorallocate($destinationFile,255,0,0);
						$this->textColorWhite  = imagecolorallocate($destinationFile,255,255,255);
					 	$this->textColorBlack  = imagecolorallocate($destinationFile,0,0,0);
                              
						imagecopymerge($destinationFile, $sourceFile, 700, 130, 0, 0, 172, 180, 100);
					    ImageTTFText($destinationFile, 40, 1, 600, 350, $this->textColorRed, $this->getFontStyle(),$this->getName());
					    ImageTTFText($destinationFile, 55, 1, 350, 680, $this->textColorWhite, $this->getFontStyle(),$reasonOfDeath[mt_rand(0,$inTotal - 1)]);
					    ImageTTFText($destinationFile, 20, 1, 700, 700, $this->textColorWhite, $this->getFontStyle(),$copyRight);
 
						imagejpeg($destinationFile,$this->getFinalImageLink());
						imagedestroy($destinationFile);
						imagedestroy($sourceFile);
						clearstatcache();
						 
	?>