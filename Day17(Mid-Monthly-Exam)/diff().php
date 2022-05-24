<?php 
	$lastPayment = new DateTime("2022-05-30");
	$todaysdate = new DateTime("today");
	$span = $lastPayment->diff($todaysdate);

	echo "Your subscription ends in {$span->format('%a')} days.";


	$d=cal_days_in_month(CAL_GREGORIAN,2,2020);
	echo "There was $d days in February 2020";
 ?>