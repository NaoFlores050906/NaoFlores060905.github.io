</html>
<head>
	<title>Ejemplo de PHP con el ciclo For </title>
</head>
<body>
	<h1>Números desde A hasta C</h1>
	<?php
	$A = 1;
	$C = 2;
		// Sentencia for para imprimir los números desde el valor de A hasta el valor de C
		for ($i = $A; $i <= $C; $i++) {
			echo $i . "<br>";
		}
	?>
</body>