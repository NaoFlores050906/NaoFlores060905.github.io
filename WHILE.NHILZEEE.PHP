<html>
<head>
	<tittle>Ejemplo de PHP para el ciclo While</tittle>
</head>
<body>
	<h1>Números de 10 en 10 hasta 80</h1>
	<?php
		$X = 0;
$C = 80;
		// Sentencia while para imprimir valores de 10 en 10 hasta 80
		while ($X <= $C) {
			echo $X . "<br>";
			$X += 10;
		}
	?>
</body>
</html>