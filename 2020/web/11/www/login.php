<?php
error_reporting(0);
include("config.php");

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
		<div class="row">
			<div class="centered">
				<div class="well">
<?php
if ( isset($_POST["username"]) && isset($_POST["password"]) ){
    if ($_POST["username"]==$username && $_POST["password"]==$password){
      print("<h2>Welcome back !</h2>");
      print("To validate the challenge use this password: Empire&#123;${password}&#125;<br/><br/>");
    } else {
      print("<h3>Error : incorrect credentials</h2><br />");
    }
} else {
?>					<h3 class="corb-login-length">Login If You Can</h3>
					<br/>
					<form method="POST">
					<input name="username" class="form-control" type="text" placeholder="username">
					<br/>
					<input name="password" class="form-control" type="text" placeholder="password">
					<br/>
					<input name="submit" class="corb-submit btn btn-primary btn-lg" type="submit" value="Login">
					</form>
<?php } ?>
				</div>
			</div>
		</div>

		<script
		      src="https://code.jquery.com/jquery-3.1.1.min.js"
		      integrity="sha256-hVVnYaiADRTO2PzUGmuLJr8BLUSjGIZsDYGmIJLv2b8="
		      crossorigin="anonymous"></script>

		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

	</body>
</html>

