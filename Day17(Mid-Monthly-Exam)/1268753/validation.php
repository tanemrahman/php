<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Registration Form Validation</title>
	<style type="text/css">
		.error {
			color: #FF0000;
		}
  		h2.success {
    		color: green;
  		}
	</style>
</head>
<body>
<?php

$unameErr = $emailErr = $msg = "";
$name = test_input($_POST["name"]);
$email = test_input($_POST["email"]);
$unamelenth = strlen($name);

if ($_SERVER["REQUEST_METHOD"] == "POST") {
	if (empty($_POST["name"])) {
		$unameErr = "Username is required";
	} else {
		if ($unamelenth < 4) {
			$unameErr = "Username must be at least 4";
		}
		if ($unamelenth > 8) {
			$unameErr = "Username cannot be greater than 8";
		}
	}

	if (empty($_POST["email"])) {
		$emailErr = "Email is required";
	} else {
		$pattarn = "/^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,3})$/";

		if (!preg_match($pattarn, $email)) {
			$emailErr = "Invalid email format";
		}
	}

	if ( !empty($_POST["name"]) && $unamelenth >= 4 && $unamelenth <= 8 && !empty($_POST['email']) && preg_match($pattarn, $email) ) {
		$msg = "Your username and email is valid";
	}

}

function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}

?>

<h2>Registration Now</h2>
<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>"> 

	<label>Username:</label><br>
	<input type="text" name="name">
	<span class="error">* <?php echo $unameErr;?></span>
	<br><br>

	<label>Email:</label><br>
	<input type="text" name="email">
	<span class="error">* <?php echo $emailErr;?></span>
	<br><br>

	<input type="submit" name="submit" value="Submit">

</form>

<h2 class="success"><?php echo $msg; ?></h2>
</body>
</html>