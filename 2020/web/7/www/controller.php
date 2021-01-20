<?php
session_start();
if (isset($_GET['source'])) {
    die(highlight_file(__FILE__));
}
$id=(isset($_POST["id"]) && !empty($_POST["id"])) ? $_POST["id"]: "";
if($id!=$_SESSION["id"]){
  require_once('config.php');
}else $_SESSION["flag"]="1";
header("location: index.php");
?>
