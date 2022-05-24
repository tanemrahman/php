<?php 
	
	$pasttime = mktime(00, 00, 00, 02, 01, 2022);
	$now = time();
	$deadline = mktime(00, 00, 00, 02, 01, 2023);
	$difference = $deadline - $pasttime;
	$hours =$difference/60/60;
	$day = $hours/24;
	$without_chutir_din = $day - 52 - 24 - 30;
	$hours = $without_chutir_din*24;
	$without_20_hours = $hours/6;
	$complete_hours = 66*4;


	$uncompleted_hours = ($without_20_hours - 900) - $complete_hours;

	echo "uncompleted Hours: $uncompleted_hours";




 ?>