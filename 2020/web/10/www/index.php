<?php
error_reporting(0);

$access_granted=FALSE;
if (isset($_POST['username']) && isset($_POST['password'])) {

$manager = new MongoDB\Driver\Manager("mongodb://localhost:27017");
$filter = ['username' => $_POST['username'],'password' => $_POST['password']];
$options = [
    'projection' => ['_id' => 0],
    'sort' => ['username' => -1],
];

$query = new MongoDB\Driver\Query($filter, $options);
$cursor = $manager->executeQuery('db.users', $query);

$value=NULL;
foreach ($cursor as $document) {
$value=$document;
}
var_dump($value);

	// If query is invalid
	if ($value === NULL) {
		$error = true;
		$error_msg = "<strong>Error!</strong> Invalid credentials";
	} else {
                $access_granted=TRUE;
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
		<?php if ($access_granted !== true) { ?>
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
					<h3 class="corb-login-length">Login If You Can</h3>
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
				<h1 class="corb-flag">Welcome admin!</h1>
				<h1 class="corb-flag">Here is your flag! Empire{N0SqL_1njecti0ns_are_funny_right_xD}</h1>
			</div>
		<?php } ?>

		<script
		      src="https://code.jquery.com/jquery-3.1.1.min.js"
		      integrity="sha256-hVVnYaiADRTO2PzUGmuLJr8BLUSjGIZsDYGmIJLv2b8="
		      crossorigin="anonymous"></script>

		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

	</body>
</html>

<?php
session_destroy();
?>
