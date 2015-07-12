<?php
/*
 Copyright (C) 2014  Samundra kc

 *- @Author: Samundra kc;
 *- @contact: samundrak@yahoo.com
 *
 */
if(!$x['session'])
exit;

if(empty($x['session']))
exit;

$usr = $x['session'];
$pik = '__photos/__tmp/'.$usr.'.jpg';

if(!file_exists($pik))
exit;
 
     copy($pik,$usr.".jpg");
	                                    $zip = new ZipArchive();
										$filename = "__tmp/__tmp/".$usr.".zip";
										if ($zip->open($filename, ZIPARCHIVE::CREATE)!==TRUE) {
											exit("cannot open <$filename>\n");
										}
										$zip->addFromString("readme.txt", "Keep Using Our App");
										$zip->addFile($usr.".jpg");
			                            $zip->close();
										echo $filename;
										unlink($usr.'.jpg');
?>