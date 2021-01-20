<?php

$inc="home.php";
if (isset($_GET["include"])) {
    $inc=$_GET['include'];
    if (file_exists($inc)){
	$f=basename(realpath($inc));
	if ($f == "index.php"){
	    $inc="home.php";
	}
    }
}

include("config.php");


echo '
  <html>
  <body>
    <h1>My website</h1>
    <ul>
	<li><a href="?include=home.php">home</a></li>
	<li><a href="?include=login.php">login</a></li>
    </ul>
';
include($inc);

echo '
  </body>
  </html>
';


?>
