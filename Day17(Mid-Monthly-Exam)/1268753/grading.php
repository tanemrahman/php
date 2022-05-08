<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Grade System</title>
</head>
<body>
	<?php
		if (isset($_POST['submit'])) {
			$mark = $_POST['number'];

			function gradeSystem($mark,$total) {

				$persent = ($mark/$total)*100;

				if ($persent>=80) {
					echo "Your grade is: A+";
				} else if($persent>=70) {
					echo "Your grade is: A";
				} else if($persent>=60) {
					echo "Your grade is: A-";
				} else if($persent>=50) {
					echo "Your grade is: B";
				} else if($persent>=40) {
					echo "Your grade is: C";
				} else if($persent>=33) {
					echo "Your grade is: D";
				} else if($persent<33) {
					echo "Your grade is: F";
				}
			}

			
			gradeSystem($mark, 100);
		}
		
	?>

	<form method="POST" action="<?php echo $_SERVER['PHP_SELF']; ?>">
		<input type="number" name="number">
		<input type="submit" name="submit" value="Submit">
	</form>
</body>
</html>