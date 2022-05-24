<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Largest Number</title>
	<style type="text/css">
		form {
			margin: 0 auto;
		}
		input {
			height: 40px;
		}
		input[type="submit"] {
			height: 46px;
			padding: 0px 25px;
		}

		div{
			width: 48%;
			margin: 0 auto;
		}
	</style>
</head>
<body>
	<?php
	if (isset($_POST['submit'])) {
		
		$a = $_POST['num1'];
		$b = $_POST['num2'];
		$c = $_POST['num3'];

		$msg;

		if ($a>$b && $a>$c) {
	        $msg = "Largest number is: ".$a;
	    } else if ($b>$a && $b>$c) {
	        $msg = "Largest number is: ".$b;
	    } else {
	        $msg = "Largest number is: ".$c;
	    }
	}
	?>
	<h2 style="text-align: center; color: green;"><?php if (isset($_POST['submit'])) { echo $msg; } ?></h2>
	<div>
		<form method="POST" action="">
			<input type="number" name="num1" placeholder="1st number">
			<input type="number" name="num2" placeholder="2st number">
			<input type="number" name="num3" placeholder="3st number">
			<input type="submit" name="submit" value="Submit">
		</form>
	</div>


	
</body>
</html>