<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Basic Upload Example</title>
</head>
<body>
	<h1>Select Your Photograph</h1>
	<?php 
		$upload_dir="images";
		if (!file_exists($upload_dir)) {
			mkdir($upload_dir);
		}
		if(isset($_FILES['fupload'])) {

			$file_name=$_FILES['fupload']['name'];
			$file_type=$_FILES['fupload']['type'];
			

			if($file_type=="image/jpg" or $file_type=="image/png" or $file_type=="image/jpeg") {

				copy($_FILES['fupload']['tmp_name'], "$upload_dir/$file_name") or die("Couldn't Copy");

				print "Path:".$_FILES['fupload']['tmp_name']."<br>";
				print "Name: $file_name <br>";
				print "Size:".$_FILES['fupload']['size']."<br>";
				print "Type:$file_type<br>";

				print "<img src=\"$upload_dir/$file_name\" width=\"200\", height=\"150\"<p>";
			} else {
				print "$file_type file type does not match.";
			}
		}
	 ?>

	<form action="" enctype="multipart/form-data" method="POST">
		Upload Photography: <input type="file" name="fupload">
		<input type="submit" name="submit" value="Upload">
	</form>
</body>
</html>



