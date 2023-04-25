<?php
require_once("secrets.php");
$nonce = random_bytes(8);

if(isset($_GET['login_as_admin'])){
    $arr_cookie_options = array (
        'expires' => time() + 60*60*24*30,
        'path' => '/',
        'secure' => true,
        'httponly' => true,
        'samesite' => 'Lax'
    );
  setcookie('secret', $admin_secret, $arr_cookie_options);
  $_COOKIE['secret']=$admin_secret;
}
if(isset($_GET['flag'])){
 if(isAdmin()){
    header('X-Content-Type-Options: nosniff');
    header('X-Frame-Options: DENY');
    header('Content-type: text/html; charset=UTF-8');
    echo $flag;
    die();
 }
 else{
     echo "You are not an admin!";
     die();
 }
}

if(isset($_GET['user']) && strlen($_GET['user']) <= 23) {
    echo <<<EOT
        <script>
            setInterval(
                ()=>user.style.color=Math.random()<0.3?'red':'black'
            ,100);
        </script>
        <center><h1> Hello <span id='user'>{$_GET['user']}</span>!!</h1>
EOT;
}else{
    show_source(__FILE__);
}
