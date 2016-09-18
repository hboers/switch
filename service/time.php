<?php
header('Access-Control-Allow-Origin: *');  
$nGroup=$_GET['group'];
$aSwitch=$_GET['switch'];
$state = 'state/1'.$nGroup.$aSwitch;
$time = filemtime ( $state );
if ($time > 0) {
   $time =  time() - $time;	
}
echo gmdate("H:i", $time);
