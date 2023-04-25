<?php 
$admin_secret = "Qy9W1MpHlbATrLqDDBPP";
$flag = "Empire{http_h3aders_buFFer1ng}";

function isAdmin(){
    global $admin_secret;
    return isset($_COOKIE['secret']) && $_COOKIE['secret'] === $admin_secret;
}
