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
}

?>
