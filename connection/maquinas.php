<?php
$serie = $_POST['serie'];
$modelo = $_POST['modelo'];


require_once 'funciones_bd.php';
$db = new funciones_BD();

  if($db->agregarMaquina($serie,$modelo)){
    header('Location: ../acceso/index.php?usuario='.$usuario);
  }else{
    echo "No se pudo registrar la maquina ";
  }
 ?>
