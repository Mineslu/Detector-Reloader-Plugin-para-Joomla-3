<?php 

// require Detector so we can popular identify the browser & populate $ua
require("../lib/Detector/Detector.php"); 

// include some helpful functions
require("templates/_convertTF.inc.php");
require("templates/_createFT.inc.php");




/*echo $ua->pescreenattributes->width;
switch templates based on device type
echo $ua->prscreenattributes->width;
echo $prscreenattributes->width;
echo $ua->screenattributes->width;*/

//echo $ua->screenattributes-> windowWidth;
echo realpath(dirname(__FILE__))." <br>";
echo "Densidad de pixeles es:".(int)$ua->hirescapable." <br>";


echo "Cambas:".(int)$ua->canvas." <br>";

if ($ua->screenattributes-> windowWidth < 900){
	echo "MENORR555555555555";
}else{
	echo "MAYORR";
}

include("templates/index.default.inc.php");


?>

