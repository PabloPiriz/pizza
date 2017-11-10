<!DOCTYPE html>
<html>
<head>
	<title>Index</title>
</head>
<body>
	<?php

	require_once ('modelo/personaje.php');

	$personaje =  new Personaje(0, NULL, 'perder', 2);
	echo $personaje;

	?>
</body>
</html>
