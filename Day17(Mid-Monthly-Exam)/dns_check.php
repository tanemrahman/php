<?php 
	$domain = "gamil.com";

	$recordexists = checkdnsrr($domain, "ANY");

	if ($recordexists) {
		echo "The domain '$domain' has a DNS record";
	} else {
		echo "The domain '$domain' has not a DNS record";
	}

	echo "<br>";

	$email = "tanemra1998@gamil.com";
	$domain = explode("@",$email);

	$valid;


	echo "<br>";
	echo "<br>";

	echo "<pre>";
	system("Ping -n 3 tanemrahman.com");
	echo "</pre>";
 ?>


 