<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Factorical</title>
</head>
<body>

	<?php 
		if (isset($_POST['submit'])) {
			$num = $_POST['number'];
		
			$msg;
			
			if ($num === 0) {
				$msg = "<>Zero! is equals to 1";
			} else if ($num < 0) {
				$msg = "Your entered a negetive number. Negetive number is not a factoricals";
			} else {
				$fact = 1;
				for ($i = 1; $i <=$num ; $i++) { 
					$fact *=$i;
				}

				$msg = $num."! is equals to ".$fact;
			}
		}
	?>

	<h4 style="color: green;"><?php if (isset($_POST['submit'])) { echo $msg; } ?></h4>

	<form method="POST" action="<?php echo $_SERVER['PHP_SELF']; ?>">
		<input type="number" name="number">
		<input type="submit" name="submit" value="Submit">
	</form>


</body>
</html>