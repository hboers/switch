<?php
$nGroup=$_GET['group'];
$nAction=$_GET['action'];
$aSwitch=$_GET['switch'];
$state = 'state/1'.$nGroup.$aSwitch;
if (file_exists($state)) {
  if ($nAction == 1) {
    echo 'active';
  } else {
    echo 'inactive';
  }
} else {
  if ($nAction == 0) {
    echo 'active';
  } else {
    echo 'inactive';
  }
}
