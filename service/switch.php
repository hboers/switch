<?php
header('Access-Control-Allow-Origin: *');  
$forwarded_for = $_SERVER['HTTP_X_FORWARDED_FOR'];
$remote_addr = $_SERVER['REMOTE_ADDR'];
$switch = array('A'=>"16",'B'=>"08",'C'=>"04",'D'=>"02",'E'=>"01");
$nSys=1;
$nDelay=0;
$nGroup=$_GET['group'];
$aSwitch=$_GET['switch'];
if (!isset($switch[$aSwitch])) die("Invalid switch");
$nSwitch = $switch[$aSwitch];
$nAction=$_GET['action'];
$output =$nSys.$nGroup.$nSwitch.$nAction.$nDelay;
$state = 'state/'.$nSys.$nGroup.$aSwitch;
if (file_exists($state)) {
  if ($nAction == 0) {
    unlink($state);
    file_put_contents('log/switch.log',sprintf("%s,%s,%d,%s,%s,%s\n",$remote_addr,$forwarded_for,time(),$nGroup,$aSwitch,'off'),FILE_APPEND);
  } 
} else {
  if ($nAction == 1) {
    touch($state);
    file_put_contents('log/switch.log',sprintf("%s,%s,%d,%s,%s,%s\n",$remote_addr,$forwarded_for,time(),$nGroup,$aSwitch,'on'),FILE_APPEND);
  }
}

if (strlen($output) >= 5) {
  $socket = socket_create(AF_INET, SOCK_STREAM, SOL_TCP) or die("Could not create socket");
  socket_bind($socket, $_SERVER['SERVER_ADDR']) or die("Could not bind to socket");
  socket_connect($socket, "127.0.0.1", 11337) or die("Could not connect to socket");
  socket_write($socket, $output, strlen ($output)) or die("Could not write output");
  socket_close($socket);
  echo $nAction;
}
