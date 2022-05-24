<?php 
error_reporting(0);
class Student
{
	public $id;
	public $name;
	public $batch;

	public function __construct($id, $name, $batch)
	{
		$this->id = $_POST['id'];
		$this->name = $name;
		$this->batch = $batch;

		$this->result($this->id);


	}

	public function result($id)
	{
		$file = fopen("marks.txt", "r");

		while(!feof($file))
		{
			$data = fgets($file);
			$marks = explode("=",$data);

			if($id == $marks[0])
			{
				
			echo $marks[1]."(ID: ".$this->id.",Batch:".$this->batch.")has got".$marks[2]."marks!";
		
			}
		}
	}
}

?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Student Info</title>
</head>
<body>
	<form method="POST" action="">
		Enter ID:<input type="text" name="id"><br>
		<input type="submit" name="submit" value="Submit">
	</form>

	<?php  $obj = new Student($id,$name,50); ?>

</body>
</html>