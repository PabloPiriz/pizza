<!DOCTYPE html>
<html>
<head>
	<title>
asd
	</title>
</head>
<body>
	<?php
	/*require_once ('modelo/personaje.php');
	require_once ('modelo/inventario.php');
	require_once ('modelo/item.php');
	$personaje = new Personaje(NULL, 'juanalvertito', 2);

	$personaje->getInventario()->getItemPorTipo(Item::$TIPO_SALSA)->setCantidad(120);
	$personaje->getInventario()->getItemPorTipo(Item::$TIPO_OREGANO)->setCantidad(120);

	echo 'Salsa: ' . $personaje->getInventario()->getItemPorTipo(Item::$TIPO_SALSA)->getCantidad() . '<br>';
	echo 'Oregano: ' . $personaje->getInventario()->getItemPorTipo(Item::$TIPO_OREGANO)->getCantidad() . '<br>';
	echo 'Salsa preparada: ' . $personaje->getInventario()->getItemPorTipo(Item::$TIPO_SALSA_PREP)->getCantidad() . '<br>';
	$personaje->hacerSalsaPrep();

	echo 'Salsa: ' . $personaje->getInventario()->getItemPorTipo(Item::$TIPO_SALSA)->getCantidad() . '<br>';
	echo 'Oregano: ' . $personaje->getInventario()->getItemPorTipo(Item::$TIPO_OREGANO)->getCantidad() . '<br>';

	echo 'Salsa preparada: ' . $personaje->getInventario()->getItemPorTipo(Item::$TIPO_SALSA_PREP)->getCantidad() . '<br>';
	*/

	require_once ('modelo/personaje.php');

	$personaje =  new Personaje(0, NULL, 'perder', 2);
	echo $personaje;


	?>


</body>
</html>
