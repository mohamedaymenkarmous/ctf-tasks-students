<?php
session_start();
//error_reporting(E_ALL);
ini_set("display_errors", 0);

function existance_var($var=""){
	return ((isset($var) && !empty($var)) || $var==="0" || is_numeric($var) || $var===0 || (is_string($var) && strlen($var)>0) || is_array($var));
}
function existance_str($var=""){
	return (existance_var($var) && is_string($var) && strlen($var)>0 && !is_array($var));
}
function column1($arr) {
	if(count($arr)>0 && array_key_exists(0,$arr))return $arr[0];
}
$_COOKIE["PHPSESSID"]=(isset($_COOKIE["PHPSESSID"]) && !empty($_COOKIE["PHPSESSID"])) ? $_COOKIE["PHPSESSID"] : '';
$_COOKIE["PHPSESSID"]=existance_str($_COOKIE["PHPSESSID"]) ? $_COOKIE["PHPSESSID"] : '';
if($_COOKIE["PHPSESSID"]==""){
 session_id();
 echo "Refresh the page to begin. If you have already nothing please activate your cookies.";
}else{

$trv=0;

$dirname=$_COOKIE["PHPSESSID"];if(!is_dir($dirname)){mkdir($dirname, 0700,true);}

$killers=json_decode(file_get_contents($dirname."/killers.json"), true);
$killed=json_decode(file_get_contents($dirname."/killed.json"), true);
$map1=array();
$map2=array();
foreach($killed as $i => $val){
//for($i=0;$i<count($points);$i++){
	if($val[5]<time()){
		unset($val[5]);$map1[]=$val;
		$killers[]=$val;
		//$map1[]=array_map("nColumns",$points[$i]);
	}else $map2[]=$val;
}
echo json_encode($map1);

$fp = fopen($dirname.'/killed.json', 'w');
fwrite($fp, json_encode($map2));
fclose($fp);

$fp = fopen($dirname.'/killers.json', 'w');
fwrite($fp, json_encode($killers));
fclose($fp);
}
?>