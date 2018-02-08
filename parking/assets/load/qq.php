<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>PHP</title>
</head>
<body>
<?php
	$month = date("F");
	$year = date("Y");
	function find_month_length($month, $year){
		if ($month == "April" || $month == "June" || $month == "September" || $month == "November"){
			return 30;
		}
		else if($month == "February"){
			if ((($year % 4 == 0) && ($year % 100)) || ($year % 400 == 0)){
				return 29;
			}
			else{
				return 28;
			}
		}
		else{
			return 31;
		}
	}
	echo find_month_length($month, $year);
?>
</body>
</html>