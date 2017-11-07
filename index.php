<!DOCTYPE html>
<html>
<head>
	<title>
asd
	</title>
</head>
<body>
	<?php
	require_once ('modelo/personaje.php');
	require_once ('modelo/inventario.php');
	require_once ('modelo/item.php');
	$personaje = new Personaje(NULL, 'juanalvertito', 2);
	
	$personaje->getInventario()->getItemPorTipo(Item::$TIPO_HARINA)->setCantidad(5);
	$personaje->getInventario()->getItemPorTipo(Item::$TIPO_AGUA)->setCantidad(20);

	echo 'Harina: ' . $personaje->getInventario()->getItemPorTipo(Item::$TIPO_HARINA)->getCantidad() . '<br>';
	echo 'Agua: '.$personaje->getInventario()->getItemPorTipo(Item::$TIPO_AGUA)->getCantidad(). '<br>';
	echo 'Masa: '.$personaje->getInventario()->getItemPorTipo(Item::$TIPO_MASA)->getCantidad(). '<br>';	

	$personaje->hacerMasa();

	echo 'Harina: ' . $personaje->getInventario()->getItemPorTipo(Item::$TIPO_HARINA)->getCantidad() . '<br>';
	echo 'Agua: '.$personaje->getInventario()->getItemPorTipo(Item::$TIPO_AGUA)->getCantidad(). '<br>';
	echo 'Masa: '.$personaje->getInventario()->getItemPorTipo(Item::$TIPO_MASA)->getCantidad(). '<br>';	

	?>


</body>
</html>