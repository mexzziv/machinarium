<?php
  require_once 'funciones_bd.php';
  $db = new funciones_BD();
  $id_maquina = $_POST['maquina'];
  
  $db->dato_maquina($id_maquina)

?>
