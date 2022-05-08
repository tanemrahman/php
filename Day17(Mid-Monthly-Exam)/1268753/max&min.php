<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Max & Min Number</title>
</head>
<body>
	<?php 
		$a = 12;
		$b = 20;
		$c = 30;

		$maxNum = max($a,$b,$c);
		echo "Your Maximum number is: ".$maxNum."<br>";


		$minNum = min($a,$b,$c);
		echo "Your Minimum number is: ".$minNum."<br>";
	?>
</body>
</html>