<?php

class funciones_BD {

    private $db;

    // constructor

    function __construct() {
        require_once 'connectbd.php';
        // connecting to database

        $this->db = new DB_Connect();
        $this->db->connect();

    }

    // destructor
    function __destruct() {

    }

    /**
     * agregar nuevo usuario
     */
    public function adduser($username, $password) {

    $result = mysql_query("INSERT INTO usuarios(username,pass) VALUES('$username', '$password')");
        // check for successful store

        if ($result) {

            return true;

        } else {

            return false;
        }

    }


     /**
     * Verificar si el usuario ya existe por el username
     */

    public function isuserexist($username) {

        $result = mysql_query("SELECT username from usuarios WHERE username = '$username'");

        $num_rows = mysql_num_rows($result); //numero de filas retornadas

        if ($num_rows > 0) {

            // el usuario existe

            return true;
        } else {
            // no existe
            return false;
        }
    }


	public function login($user,$passw){

	$result=mysql_query("SELECT COUNT(*) FROM usuarios WHERE username='$user' AND pass='$passw' ");
	$count = mysql_fetch_row($result);

	/*como el usuario debe ser unico cuenta el numero de ocurrencias con esos datos*/


		if ($count[0]==0){

		return true;

		}else{

		return false;

		}
	}

  /* agregar datos al formulario 1 */
  public function addform1($username, $password) {
    $result = mysql_query("INSERT INTO usuarios(username,pass) VALUES('$username', '$password')");
        // check for successful store

        if ($result) {

            return true;

        } else {

            return false;
        }
  }

  /* agregar empleado */
  public function empleado($nombre,$app,$apm,$nacimiento,$curp,$rfc,$categoria){
    $result = mysql_query("INSERT INTO empleado(nombre,app,apm,nacimiento,curp,rfc,id_categoria) VALUES('$nombre','$app','$apm','$nacimiento','$curp','$rfc','$categoria')");
    if($result){
      return true;
    }else{
      return false;
    }
  }

  public function empresa_llenar() {
    echo "<div class='form-group'>
      <label for='empresa'>Empresa</label>
        <select class='form-control' id='empresa' name='empresa'>";
     $result = mysql_query("SELECT * FROM empresa");
     while ($fila = mysql_fetch_array($result))
     {
       echo "<option value='$fila[0]'>$fila[1]</option>";
     }
     echo "</select>
   </div>";
  }

  public function cliente_llenar() {
    echo "<div class='form-group'>
      <label for='cliente'>Cliente</label>
        <select class='form-control' id='cliente' name='cliente'>";
     $result = mysql_query("SELECT * FROM cliente");
     while ($fila = mysql_fetch_array($result))
     {
       echo "<option value='$fila[0]'>$fila[1] $fila[2] $fila[3]</option>";
     }
     echo "</select>
   </div>";
  }
  public function empleado_llenar() {
    echo "<div class='form-group'>
      <label for='empleado'>Empleado</label>
        <select class='form-control' id='empleado' name='empleado'>";
     $result = mysql_query("SELECT * FROM empleado");
     while ($fila = mysql_fetch_array($result))
     {
       echo "<option value='$fila[0]'>$fila[1] $fila[2] $fila[3]</option>";
     }
     echo "</select>
   </div>";
  }
  public function maquina_llenar() {
    echo "<div class='form-group'>
      <label for='maquina'>Maquinas</label>
        <select class='form-control' id='maquina' name='maquina'>";
     $result = mysql_query("SELECT * FROM maquinas");
     while ($fila = mysql_fetch_array($result))
     {
       echo "<option value='$fila[0]'>$fila[1] $fila[2] $fila[3]</option>";
     }
     echo "</select>
   </div>";
  }

  public function empresa() {
    echo "<div class='form-group'>
      <label for='empresa'>Empresa</label>
        <select class='form-control' id='empresa' name='empresa'>";
     $result = mysql_query("SELECT * FROM empresa");
     while ($fila = mysql_fetch_array($result))
     {
       echo "<option value='$fila[0]'>$fila[1]</option>";
     }
     echo "</select>
   </div>";
  }

  public function control_proveedor($empresa,$cliente,$empleado,$origen,$destino,$dia_salida,$hora_salida,$dia_entrada,$hora_entrada,$lugar){
    $result = mysql_query("INSERT INTO control_proveedor (id_empresa,id_cliente,id_empleado,origen,destino,dia_salida,hora_salida,dia_entrada,hora_entrada,lugar) VALUES ('$empresa','$cliente','$empleado','$origen','$destino','$dia_salida','$hora_salida','$dia_entrada','$hora_entrada','$lugar')");
    if($result){
      return true;
    }else{
      return false;
    }
  }

  public function dato_empresa($empresa){
    $result = mysql_query("SELECT * FROM empresa WHERE id = '$empresa'");
    while ($fila = mysql_fetch_array($result))
    {
      echo $fila[1];
    }
  }

  public function dato_cliente($cliente){
    $result = mysql_query("SELECT * FROM cliente WHERE id = '$cliente'");
    while ($fila = mysql_fetch_array($result))
    {
      echo $fila[1]." ".$fila[2]." ".$fila[3];
    }
  }

  public function dato_empleado($empleado){
    $result = mysql_query("SELECT * FROM empleado WHERE id = '$empleado'");
    while ($fila = mysql_fetch_array($result))
    {
      echo $fila[1]." ".$fila[2]." ".$fila[3];
    }
  }

  public function dato_maquina($id_maquina){
    $result = mysql_query("SELECT * FROM maquinas WHERE id = '$id_maquina'");
    while ($fila = mysql_fetch_array($result))
    {
      echo $fila[1]." ".$fila[2];
    }
  }

  public function buscar_fechas($id_empresa,$id_cliente,$id_empleado,$dia_inicio,$dia_final){
    $result = mysql_query("SELECT dia_salida,hora_salida,dia_entrada,hora_entrada,lugar FROM control_proveedor WHERE id_empresa = '$id_cliente' AND id_cliente = '$id_cliente' AND id_empleado= '$id_cliente' AND dia_salida BETWEEN '$dia_inicio' AND '$dia_final' AND dia_entrada BETWEEN '$dia_inicio' AND '$dia_final' ORDER BY dia_salida ASC");
    while ($fila = mysql_fetch_array($result))
    {
      echo $fila[0].$fila[1].$fila[2].$fila[3].$fila[4];
    }
  }

  public function buscar_actividades($id_empresa,$id_cliente,$id_maquina,$dia_inicio,$dia_final){
    $result = mysql_query("SELECT fecha,actividad FROM actividades WHERE id_empresa = '$id_cliente' AND id_cliente = '$id_cliente' AND id_maquina= '$id_maquina' AND fecha BETWEEN '$dia_inicio' AND '$dia_final' ORDER BY fecha ASC");
    while ($fila = mysql_fetch_array($result))
    {
      echo $fila[0].$fila[1];
    }
  }

  public function actividades_agregar($empresa,$cliente,$maquina,$fecha_actividad,$actividad){
    $result = mysql_query("INSERT INTO actividades(id_empresa,id_cliente,id_maquina,fecha,actividad) VALUES('$empresa','$cliente','$maquina','$fecha_actividad','$actividad')");
    if($result){
      return true;
    }else{
      return false;
    }

  }
}

?>
