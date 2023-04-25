<?php
session_start();
error_reporting(0);

$_SESSION['is_logged_in']=isset($_SESSION['is_logged_in']) && !empty($_SESSION['is_logged_in']) ? $_SESSION['is_logged_in'] :false;
if (isset($_POST['username']) && isset($_POST['password'])) {
  $user=isset($_POST['username']) && !empty($_POST['username']) ? $_POST['username'] :'';
  $pass=isset($_POST['password']) && !empty($_POST['password']) ? $_POST['password'] :'';

                if ($user != NULL && is_string($user) && $user==="demo" && $pass != NULL && is_string($pass) && $pass==="demo") {
                        $_SESSION['is_logged_in'] = true;
                        $_SESSION['username'] = $user;

        if(!array_key_exists("typeUser",$_COOKIE))
        {setcookie('typeUser', 'simpleUser', time() + 365*24*3600);$_COOKIE['typeUser']="simpleUser";}

                } else {
                        $error = true;
                        $error_msg = "<strong>Wrong!</strong> Username/Password is invalid.";
                }
}
?>
<!DOCTYPE HTML>
<html>
        <head>
        <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
        <style>
                .corb-body { background-color: #333;}

                .centered {
                  position: fixed;
                  top: 50%;
                  left: 50%;
                  /* bring your own prefixes */
                  transform: translate(-50%, -50%);
                }
                .corb-login-length { width: 500px;}
                .corb-submit { position: relative; left: auto; right: -420px;}
                .corb-flag { color: #0F0; }
                .corb-alert { margin-top: 20px; }
        </style>
        </head>
        <body class="corb-body container-fluid">
                <?php if ($_SESSION['is_logged_in'] !== true) { ?>
                        <?php if (isset($error) && $error === true) { ?>
                        <div class="container-fluid corb-alert">
                                <div class="alert alert-danger">
                                        <?php echo $error_msg; ?>
                                </div>
                        </div>
                        <?php } ?>

                <div class="row">
                        <div class="centered">
                                <div class="well">
                                        <h3 class="corb-login-length">Login using the demo account: username=demo, password=demo</h3>
                                        <br/>
                                        <form method="POST">
                                        <input name="username" class="form-control" type="text" placeholder="username">
                                        <br/>
                                        <input name="password" class="form-control" type="text" placeholder="password">
                                        <br/>
                                        <input name="submit" class="corb-submit btn btn-primary btn-lg" type="submit" value="Login">
                                        </form>
                                </div>
                        </div>
                </div>
                <?php }else { ?>
                        <div class="centered">
                                <h1 class="corb-flag">Welcome <?php echo $_SESSION['username']; ?>! Welcome to the private section</h1>
                                <h2 class="corb-flag">
<?php if(array_key_exists("typeUser",$_COOKIE) && $_COOKIE['typeUser']=='admin' )
        { echo "Now you are the Admin ... This is your flag : INSAT{I_Like_Handmade_C00kies}";}
else{ echo "You are a simple user. You don't have the admin privilege that allows you to see the flag";}
?>
</h2>
                        </div>
                <?php } ?>

                <script
                      src="https://code.jquery.com/jquery-3.1.1.min.js"
                      integrity="sha256-hVVnYaiADRTO2PzUGmuLJr8BLUSjGIZsDYGmIJLv2b8="
                      crossorigin="anonymous"></script>

                <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

        </body>
</html>
