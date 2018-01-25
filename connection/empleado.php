<?php

/*LOGIN*/

$nombre = $_POST['nombre'];
$app = $_POST['app'];
$apm = $_POST['apm'];
$nacimiento = $_POST['nacimiento'];
$curp = $_POST['curp'];
$rfc = $_POST['rfc'];
$categoria = $_POST['categoria'];

require_once 'funciones_bd.php';
$db = new funciones_BD();

	if($db->empleado($nombre,$app,$apm,$nacimiento,$curp,$rfc,$categoria)){
		header('Location: ../acceso/index.php?usuario='.$usuario);
		echo $nombre.$app.$apm.$nacimiento.$curp.$rfc.$categoria;
	}else{
		echo "No se pudo registrar el empleado ";
		echo $nombre.$app.$apm.$nacimiento.$curp.$rfc.$categoria;
	}

//echo json_encode($resultado);

	//header('Location: ../acceso/index.php?usuario='.$usuario);

?>
