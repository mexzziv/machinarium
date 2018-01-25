<?php
$empresa = $_POST['empresa'];
$direccion = $_POST['direccion'];
$telefono = $_POST['telefono'];
$email = $_POST['email'];

require_once 'funciones_bd.php';
$db = new funciones_BD();

	if($db->agregarEmpresa($empresa,$direccion,$telefono,$email)){
		header('Location: ../acceso/index.php?usuario='.$usuario);
	}else{
		echo "No se pudo registrar la empresa";
	}
?>
