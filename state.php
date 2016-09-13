<?php
$nSys=1;
$nDelay=0;
$nGroup=$_GET['group'];
$aSwitch=$_GET['switch'];
$state = 'state/'.$nSys.$nGroup.$aSwitch;
if (file_exists($state)) {
  echo 1;
} else {
  echo 0;
}
