<?php
//$_SESSION["present"]="oui";
$_SESSION["id"]="b".str_replace("c","g",sha1(sha1(md5(date("YmdHms")))."a".md5(date("Ymd"))."5".sha1(md5(time()))).md5(date("Ymd"))."abc54".sha1(md5(session_id())).sha1(md5(rand().$_SERVER["REMOTE_ADDR"]))."c")."a";
//"fqsfsdflsdqdamozieopakdlmqsdfjqlsdfjgsqdfksljfozejfklsdfsqfnnnnnnvlxkcvjsqkldfjozerzfsqgdmlqsjfksqldflojziefsldjf";
//$flag="Take your flag Seigneur: 1_3at_A11_Th3_C00k135";
//var_dump($_SESSION);
/*$serveur='localhost';	//Nom du serveur (en local : locahost)
$user='root';	//Nom de l'utilisateur (en local : root)
$mdp='';	//Mot de passe (en local : aucun)
$base='db2211326-main';	//Nom de la base de données
$ctflag="asplkkklj";*/
/*
if($_SERVER){if(isset($_SERVER['HTTP_X_FORWARDED_FOR'])){$ip=$_SERVER['HTTP_X_FORWARDED_FOR'];}elseif(isset($_SERVER['HTTP_CLIENT_IP'])){$ip=$_SERVER['HTTP_CLIENT_IP'];}else{$ip=$_SERVER['REMOTE_ADDR'];}}
else{if(getenv('HTTP_X_FORWARDED_FOR')){$ip=getenv('HTTP_X_FORWARDED_FOR');}elseif(getenv('HTTP_CLIENT_IP')){$ip=getenv('HTTP_CLIENT_IP');}else{$ip=getenv('REMOTE_ADDR');}}
$_SESSION['ip']=$ip;
*/
/* ATTENTION : NE PAS CHANGER CE QU'IL Y A CI-DESSOUS *//*
@$connect=mysql_connect($serveur, $user, $mdp) or die ('Erreur : '.mysql_error());
mysql_set_charset ('UTF8');
@mysql_select_db($base) or die ('Erreur : '.mysql_error());*/
//require_once('fonctions.php');

?>