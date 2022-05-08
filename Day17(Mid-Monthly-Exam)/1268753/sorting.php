<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Sorting of three number.</title>
</head>
<body>
	<?php 

		$a = 12;
		$b = 20;
		$c = 30;

		$temp = "";

		if ( $a > $b ) {
			$temp = $a;
			$a = $b;
			$b = $temp;
		}

		if ( $a > $c ) {
			$temp = $a;
			$a = $c;
			$c = $temp;
		}

		if ( $b > $c ) {
			$temp = $b;
			$b = $c;
			$c = $temp;
		}

		echo ($a.", ".$b.", ".$c);
	?>
</body>
</html>