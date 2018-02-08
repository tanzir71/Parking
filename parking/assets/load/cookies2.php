<!DOCTYPE html>
<head>
	<title>LOCALHOST PHP</title>
	<script src="http://code.jquery.com/jquery-1.10.2.js"></script>
</head>
<body>


<div id="sohel">
	<a href="http://www.bdsohel.com">link 1</a> <br>
	<a href="https://thirdhandbd.com">link 2</a> <br>
</div>
<script>
/*setTimeout(function () { 
	location.reload();
}, 300000);*/


$(document).ready(function() {
    $anchor = $("#sohel a");
    for (var j = 0; j < $anchor.length; j++) {
    	var link = $anchor[j];
    	//window.open(link,'_blank');
    }
});



</script>
<?php
echo md5(123);
 ?>
</body>
</html> 