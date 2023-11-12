<?php
header("content-type:text/plain;");
date_default_timezone_set('Asia/Shanghai');
$ar=array('Idle','Idle','Nemui','Anone_Synced','Dance');
if(intval(date("H"))>=1 and intval(date("H"))<=5){
	$ar=array('Nemui');
}
else{
	$ar=array('Idle','Idle','Nemui','Anone_Synced','Dance');
}
shuffle($ar);
echo file_get_contents($ar[0].'.mtn');
//header('location:'.$ar[0].'.mtn');
?>