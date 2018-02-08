<!DOCTYPE html>
<head>
	<title>LOCALHOST PHP</title>
</head>
	
	<h4>Localhost is working.</h4>
	<h4>Database is Connected.</h4>

	<?php
		$get_c = $_COOKIE['sohel'];	
		$cookie_value = $get_c+1;
		$cookie_name = "sohel";
		setcookie($cookie_name, $cookie_value);
		echo "Value is: " . $_COOKIE[$cookie_name];
	?>
	<script>
		setTimeout(function () { 
	      location.reload();
	  	}, 60000);
	</script>

</body>
</html> 