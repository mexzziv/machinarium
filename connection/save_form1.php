<?php
  $empresa = $_POST['empresa'];
  $cliente = $_POST['cliente'];
  $empleado = $_POST['empleado'];
  $origen = $_POST['origen'];
  $destino = $_POST['destino'];
  $dia_salida = $_POST['dia_salida'];
  $hora_salida = $_POST['hora_salida'];
  $dia_entrada = $_POST['dia_entrada'];
  $hora_entrada = $_POST['hora_entrada'];
  $lugar = $_POST['lugar'];

  //echo $empresa.$cliente.$empleado.$origen.$destino.$dia_salida.$hora_salida.$dia_entrada.$hora_salida.$lugar;
  require_once 'funciones_bd.php';
  $db = new funciones_BD();

  	if($db->control_proveedor($empresa,$cliente,$empleado,$origen,$destino,$dia_salida,$hora_salida,$dia_entrada,$hora_entrada,$lugar)){
  		header('Location: ../acceso/index.php?usuario='.$usuario);
      echo $empresa.$cliente.$empleado.$origen.$destino.$dia_salida.$hora_salida.$dia_entrada.$hora_entrada.$lugar;
  	}else{
  		echo "No se pudo registrar ";
      echo $empresa.$cliente.$empleado.$origen.$destino.$dia_salida.$hora_salida.$dia_entrada.$hora_entrada.$lugar;
  	}
?>
