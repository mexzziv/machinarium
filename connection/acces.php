
<?php

/*LOGIN*/

$usuario = $_POST['usuario'];
$passw = $_POST['password'];


require_once 'funciones_bd.php';
$db = new funciones_BD();

	if($db->login($usuario,$passw)){

	$resultado[]=array("El usuario ".$usuario." no existe."); // en este bloque se puede redirigir a index de nuevo o a registrar
	}else{
	$resultado[]=array("Bienvenido ".$usuario); // en este bloque se redireige a otra direccion, yasea dashboard u otro lado
	}

echo json_encode($resultado);




?>
