<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Prime Number</title>
	<style type="text/css">
		form {
			margin: 0 auto;
		}
		input {
			height: 40px;
		}
		input[type="number"] {
			width: 250px;
		}
		input[type="submit"] {
			height: 46px;
			padding: 0px 25px;
		}

		div{
			width: 27%;
			margin: 0 auto;
		}
	</style>
</head>
<body>
	<?php

	if (isset($_POST['submit'])) {

		$num = $_POST['number'];
		$msg;
		$testprime = true;

		if ($num == 1) {
			$msg = "<h2 style='text-align: center; color: #ff7600;'>1 is neither primer or not prime.</h2>";
		} else if($num > 1) {
			for ($i = 2; $i < $num; $i++) {
				if ($num % $i == 0) {
					$testprime = false;
				}
			}
			if ($testprime) {
				$msg = "<h2 style='text-align: center; color: green;'>".$num." is prime number.</h2>";
			} else {
				$msg = "<h2 style='text-align: center; color: red;'>".$num." is not prime number.</h2>";
			}
		} else {
			$msg = "<h2 style='text-align: center; color: red;'>The number you entered is not a prime number</h2>";
		}
		
	}
	?>
	<?php if (isset($_POST['submit'])) { echo $msg; } ?>
	<div>
		<form method="POST" action="<?php echo $_SERVER['PHP_SELF']; ?>">
			<input type="number" name="number" placeholder="Enter a number">
			<input type="submit" name="submit" value="Submit">
		</form>
	</div>
</body>
</html>