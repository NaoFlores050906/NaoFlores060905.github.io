<html>
<head>
	<title>Ejemplo de PHP con el IF</title>
</head>
<body>
	<h1>Mayor de tres variables</h1>
	<?php
		$A = 10;
		$B = 25;
		$C = 80;

		// Sentencia if para determinar la variable mayor
		if ($A > $B && $A > $C) {
			echo "La variable mayor es A";
		} elseif ($B > $A && $B > $C) {
			echo "La variable mayor es B";
		} else {
			echo "La variable mayor es C";
		}
	?>
</body>
</html>