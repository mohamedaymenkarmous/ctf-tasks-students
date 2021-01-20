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

$dirname=$_COOKIE["PHPSESSID"];if(!is_dir($dirname)){mkdir($dirname, 0700,true);}

$idS=(isset($_GET['idS'])) ? ($_GET['idS']) : '';
$idD=(isset($_GET['idD'])) ? ($_GET['idD']) : '';
$xS=(isset($_GET['xS'])) ? ($_GET['xS']) : '';
$yS=(isset($_GET['yS'])) ? ($_GET['yS']) : '';
$xD=(isset($_GET['xD'])) ? ($_GET['xD']) : '';
$yD=(isset($_GET['yD'])) ? ($_GET['yD']) : '';
$trv=0;
if($idS!="" && $idD!="" && $xS!="" && $yS!="" && $xD!="" && $yD!=""
	&& existance_str($idS) && existance_str($idD) && existance_str($xS) && existance_str($yS) && existance_str($xD) && existance_str($yD)
	&& preg_match('#[0-9]+#', $idS) && preg_match('#[0-9]+#', $idS) && preg_match('#[0-9]+(\.[0-9]+)?#', $xS) && preg_match('#[0-9]+(\.[0-9]+)?#', $yS) && preg_match('#[0-9]+(\.[0-9]+)?#', $xD) && preg_match('#[0-9]+(\.[0-9]+)?#', $yD)
	&& $idS!==$idD){
	$killers=json_decode(file_get_contents($dirname."/killers.json"), true);
	$killed=json_decode(file_get_contents($dirname."/killed.json"), true);
	$cols=array_map("column1",$killers);
	$tmp=array_search($idS, $cols);
	$tmp2=array_search($idD, $cols);//echo "yes";
	if($tmp!==FALSE && $tmp>=0 && $tmp2!==FALSE && $tmp2>=0){//print_r($killers[$tmp]);print_r($killers[$tmp2]);//echo "---";
		//echo sqrt(pow(abs($xS-$xD),2)+pow(abs($yS-$yD),2))."<".($killers[$tmp][3]/2)."a";
		if(sqrt(pow(abs($xS-$xD),2)+pow(abs($yS-$yD),2))<$killers[$tmp][3]/2 && $killers[$tmp][3]>$killers[$tmp2][3]){//echo "string";
  			if($killers[$tmp][3]-$killers[$tmp2][3]<$killers[$tmp][3]/2){echo $killers[$tmp][3]=$killers[$tmp][3]+($killers[$tmp2][3]/2);/*echo "---ok";*/}
  			else echo $killers[$tmp][3]=$killers[$tmp][3]+($killers[$tmp2][3]/10);
			$added=$killers[$tmp2];$added[5]=time()+10;$added[1]=$xD;$added[2]=$yD;
			$killed[]=$added;
			unset($killers[$tmp2]);
			$fp = fopen($dirname.'/killers.json', 'w');
			fwrite($fp, json_encode($killers));
			fclose($fp);
			$fp = fopen($dirname.'/killed.json', 'w');
			fwrite($fp, json_encode($killed));
			fclose($fp);
		}else echo $killers[$tmp][3];
		$trv=1;
	}
}
if($trv==0){
	//echo "nothing";
	$killers=json_decode(file_get_contents($dirname."/killers.json"), true);
	$cols2=array_map("column1",$killers);
	$tmp2=array_search($idS, $cols2);
	if($tmp2!==FALSE && $tmp2>=0)echo $killers[$tmp2][3];
	else echo "0";
}

}
?>