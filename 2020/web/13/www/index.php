<?php

require("config.php");

if(isset($_GET['source'])){
    show_source(__FILE__);
    die();
}
$USER="ok";
$PASSWORD="ha";
$return['status'] = 'Authentication failed!';
if (isset($_POST["login"]) AND isset($_POST["password"]))  {
    if($auth['login'] == $USER && !strcmp($auth['password'], $PASSWORD)){
        $return['status'] = "Access granted! The validation password is: $FLAG";
    }
}
print json_encode($return);

