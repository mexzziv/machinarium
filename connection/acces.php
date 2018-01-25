<?php

/*LOGIN*/

$usuario = $_POST['usuario'];
$passw = $_POST['password'];


require_once 'funciones_bd.php';
$db = new funciones_BD();

	if($db->login($usuario,$passw)){
		header('Location: ../index.html');

	}else{
		header('Location: ../acceso/index.php?usuario='.$usuario);
	}

//echo json_encode($resultado);

?>
