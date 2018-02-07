<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>String Replace</title>
</head>
<body>
	

<?php 


$string = 'df/ fgndfjg /fdjkg gfdlk';

echo preg_replace('/\s+/', '-', $string);

?>

<br>

<script type="text/javascript">
	var str = 'a b c';
	var replaced = str.split(' ').join('-');
	//alert(replaced);
</script>









<hr>



<?php
for ($i=0; $i<=12; $i++) { 
echo '<option value="'.date('Y-m-d', strtotime("-$i month")).'">'.date('Y-m', strtotime("-$i month")).'</option>';
 } 


?>
<hr>
<?php

$begin = new DateTime( '2017-09-09' );
$end = new DateTime( '2017-09-15' );

$interval = DateInterval::createFromDateString('1 day');
$period = new DatePeriod($begin, $interval, $end);

foreach ( $period as $dt ){
  echo $dt->format("Y-m-d").'<br>';
}

?>

<hr>

<?php
$number = cal_days_in_month(CAL_GREGORIAN, 9, 2017); // 31
//echo "There were {$number} days in August 2003";
echo "{$number}";
?>
</body>
</html>