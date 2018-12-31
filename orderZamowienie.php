<!DOCTYPE HTML>
<html lang="pl">
<head>
	<meta charset="utf-8"/>
	<title> Piekarnia_zamówienie</title>
</head>

<body>
<?php
		$i_p = $_POST['i_p']; //sczytujemy wartosci z tabeli POST gdyby było get to z GET
		$i_g = $_POST['i_g'];
		
		$w_p = $i_p * 0.99;
		$w_g = $i_g * 1.23;
		
		$suma = $w_p + $w_g; 
		
echo<<<END
		<h1> Podsumowanie zamówienia </h1>
		<br>
		<h2>
			<table border="1" cellpadding="30" cellspacing="0"> 
			<!-- border-grubosc lini, cellpadding-odleglosc tekstu w komorce od krawedzi, cellspacing-linia bez odstepu -->
				<tr>
				    <td> $i_p  </td>
					<td> pączków po 0.99PLN/szt = </td>
					<td> $w_p </td>
				</tr>
				<tr>
					<td> $i_g  </td>
					<td> grzebieni po 1.23PLN/szt = </td>
					<td> $w_g </td>
				</tr>
				<tr>
					<td> </td>
					<td> suma </td>
					<td> $suma </td>
				</tr>		
			</table> 
		</h2>
		<br/>
		<a href="index.php"> powrot do tabeli index <a/>
END;
?>
</body>
</html>
