
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Result Page</title>
</head>
<body>
	<?php 

	/**
	 * Result Class Create
	 */
	class Student
	{
		public $id;
		public $name;
		public $batch;
		
		function __construct($id,$batch)
		{
			$this->id = $id;
			$this->batch = $batch;

			$this->result($this->id);
		}

		public function result($id)
		{
			$file = fopen("marks.txt","r");
			rewind($file);

			while (!feof($file)) {
				$data = fgets($file);
				$marks = explode("=", $data);

				if ($id == $marks[0]) {
					echo "Name: ".$marks[1]."<br>";
					echo "ID: ".$this->id."<br>";
					echo "Batch: ".$this->batch."<br>";
					echo "Mark: ".$marks[2]."<br>";

					echo "<br>";
					echo "<br>";
				}

			}

			
		}
	}

	if (isset($_POST['sbtn'])) {
		$id = $_POST['id'];
		$obj = new Student($id,75);
	}

	?>
	<form method="POST" action="">
		<label>ID</label>
		<input type="text" name="id">
		<br>
		<input type="submit" name="sbtn" value="Submit">
	</form>
</body>
</html>



