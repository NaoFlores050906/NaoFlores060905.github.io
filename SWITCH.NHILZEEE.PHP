<html>
<head>
	<title>Ejemplo de PHP para el ciclo switch</title>
</head>
<body>
<h1>Cantidad según el número mayor</h1>
	<?php
	$A = 10;
	$B = 20;
	$C = 30;
		// Sentencia switch para imprimir la cantidad según el número mayor
		switch (true) {
			case ($A > $B && $A > $C):
				echo "La cantidad es " . $A;
				break;
			case ($B > $A && $B > $C):
				echo "La cantidad es " . $B;
				break;
			default:
				echo "La cantidad es " . $C;
		}
	?>
Final<BR>Ejemplo
</body>
</html>