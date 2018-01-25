<?php
$nombre = $_POST['nombre'];
$app = $_POST['app'];
$apm = $_POST['apm'];
$telefono = $_POST['telefono'];
$email = $_POST['email'];
$id_empresa = $_POST['empresa'];

require_once 'funciones_bd.php';
$db = new funciones_BD();

	if($db->agregarCliente($nombre,$app,$apm,$telefono,$email,$id_empresa)){
		header('Location: ../acceso/index.php?usuario='.$usuario);
		echo $nombre.$app.$apm.$telefono,$email,$id_empresa;
	}else{
		echo "No se pudo registrar el cliente";
		echo $nombre.$app.$apm.$nacimiento.$curp.$rfc.$categoria;
	}
?>
