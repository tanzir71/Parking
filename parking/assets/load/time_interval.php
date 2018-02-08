<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Time Interval</title>
</head>
<body>
<?php
date_default_timezone_set('Asia/Dhaka');

$time = date("h:i:sa");

echo "The time is " . $time;

echo '<br>';

echo $strTime = strtotime($time);


echo '<br>';

echo $strTime+20;
echo '<br><br>';



echo $myTarget = 1517907959;
echo '<br>';


if ($strTime<$myTarget) {

}



function setInterval($f, $milliseconds)
{
    $seconds=(int)$milliseconds/1000;
    while(true)
    {
        $f();
        sleep($seconds);
    }
}
setInterval(function(){
    echo "hi!\n";
}, 1000);








	/*$mobile_no = 8801775326442;
    $message = "abcd";

    $curlPost = 'user=e-salebazar&password=Z1kemW04&sender=e-salebazar&SMSText='.$message.'&GSM='.$mobile_no;
    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, 'http://api.bulksms.icombd.com/api/v3/sendsms/plain');
    curl_setopt($ch, CURLOPT_HEADER, 1);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
    curl_setopt($ch, CURLOPT_POST, 1);
    curl_setopt($ch, CURLOPT_POSTFIELDS, $curlPost);
    $data = curl_exec($ch);
    curl_close($ch);*/
?>
</body>
</html>