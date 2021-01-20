<?php
session_start();
include('config.php');
$s_id=$_SESSION['id'];
include('config.php');
$_SESSION["flag"]=(isset($_SESSION["flag"]) && !empty($_SESSION["flag"])) ? $_SESSION["flag"]: "";?>
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
					<h3 class="corb-login-length">Login If You Can</h3>
					<br/>
		<?php
			if($_SESSION["flag"]=="1")echo "Oh no! I forget to sanitize the cookies also in the controller! I have never though that you will send the data with no cookies. Cimpress{Awesome_Byp4ss_W1th_the_c00kies_deletion}";
			else echo "Yo ! You d'ont pass before sending your ID";
			$_SESSION["flag"]="";
		?>
					<form method="POST" action="controller.php">
					<input type="text" id='id' name="id" value="" placeholder="Enter your ID" class="form-control">
					<br/>
					<input name="submit" class="corb-submit btn btn-primary btn-lg" type="submit" value="Login">
					</form>
                                        <a href="/controller.php?source" target="_blank" class="btn btn-primary">Have a look on the Source code ?</a>
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
<!--
<?php echo "Token actuel (id) = ".$s_id;?>

-->
