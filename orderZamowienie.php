<!DOCTYPE HTML>
<html lang="pl">

<head>
	<meta charset="utf-8"/>
	<title> Piekarnia_zamówienie</title>
</head>


<body>
<?php



		$i_p = $_POST['i_p'];
		$i_g = $_POST['i_g'];
		
		$w_p = $i_p * 0.99;
		$w_g = $i_g * 1.23;
		
		$suma = $w_p + $w_g;
		
		echo "<h2> Wartość pączków $w_p </h2>";
?>

</body>


</html>
