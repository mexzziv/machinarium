<?php
  $id_empresa = $_POST['empresa'];
  $id_cliente = $_POST['cliente'];
  $id_maquina = $_POST['maquina'];
  $fecha_actividad = $_POST['fecha_actividad'];
  $actividad = $_POST['actividad'];


  //echo $empresa.$cliente.$empleado.$origen.$destino.$dia_salida.$hora_salida.$dia_entrada.$hora_salida.$lugar;
  require_once 'funciones_bd.php';
  $db = new funciones_BD();

  	if($db->actividades_agregar($id_empresa,$id_cliente,$id_maquina,$fecha_actividad,$actividad)){
  		header('Location: ../acceso/index.php?usuario='.$usuario);
      echo $id_empresa.$id_cliente.$id_maquina.$fecha_actividad.$actividad;
  	}else{
  		echo "No se pudo registrar ";
      echo $id_empresa.$id_cliente.$id_maquina.$fecha_actividad.$actividad;
  	}
?>
