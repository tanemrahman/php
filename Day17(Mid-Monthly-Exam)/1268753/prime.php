<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Prime Number</title>
</head>
<body>
	<?php

	if (isset($_POST['submit'])) {

		$num = $_POST['number'];
	
		$testprime = true;

		if ($num == 1) {
			echo "1 is neither primer or not prime.";
		} else if($num > 1) {
			for ($i = 2; $i < $num; $i++) {
				if ($num % $i == 0) {
					$testprime = false;
				}
			}
			if ($testprime) {
				echo $num." is prime number.";
			} else {
				echo $num." is not prime number.";
			}
		} else {
			echo "The number you entered is not a prime number";
		}
		
	}
	?>
	<br><br><br>
	<form method="POST" action="<?php echo $_SERVER['PHP_SELF']; ?>">
		<input type="number" name="number">
		<input type="submit" name="submit" value="Submit">
	</form>
</body>
</html>