<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Max & Min Number</title>
</head>
<body>
	<?php
	if (isset($_POST['submit'])) {
		
		$a = $_POST['num1'];
		$b = $_POST['num2'];
		$c = $_POST['num3'];

		$maxNum = max($a,$b,$c);
		echo "Your Maximum number is: ".$maxNum."<br>";


		$minNum = min($a,$b,$c);
		echo "Your Minimum number is: ".$minNum."<br>";
	}
	?>

	<form method="POST" action="">
		<input type="number" name="num1" placeholder="1st number">
		<input type="number" name="num2" placeholder="2st number">
		<input type="number" name="num3" placeholder="3st number">
		<input type="submit" name="submit" value="Submit">
	</form>
</body>
</html>