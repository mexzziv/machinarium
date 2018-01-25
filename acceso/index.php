<!DOCTYPE html>
<html lang="es">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="../assets/css/style.css">
  <link rel="stylesheet" href="../assets/css/material.css">
  <link rel="stylesheet" href="../assets/css/stiky.css">
  <link href="https://fonts.googleapis.com/css?family=Expletus+Sans|Share" rel="stylesheet">
  <link rel="shortcut icon" href="assets/image/LOGO-3.png">
  <title>Machinarium</title>
</head>

<body>
  <?php
    $usuario = $_GET['usuario'];

    require_once '../connection/funciones_bd.php';
    $db = new funciones_BD();
  ?>
  <nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark">
      <h3 class="navbar-brand expletus" >Machinarium</h3>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarCollapse">
        <ul class="navbar-nav mr-auto">
          <li class="nav-item">
            <button type="button" class="btn btn-info" data-toggle="modal" data-target="#exampleConfiguracion">
              Configuracion
            </button>
            <?php include 'parciales/configuracion.php'; ?>
          </li>
        </ul>
          <a class="btn btn-outline-warning my-2 my-sm-0" href="salir.php">Salir</a>
      </div>
    </nav>

    <!-- Begin page content -->
    <div class="container">
      <div class="row">
        <div class="col-4">
          <?php include 'parciales/nav_lateral.php';?>
        </div>
        <div class="col-8">
          <div class="row">
            <div class="col-md-6 col-sm-12">
              <?php  include 'parciales/actividades_pdf.php';?>
            </div>
            <div class="col-md-6  col-sm-12">
              <?php include 'parciales/horas_pdf.php'; ?>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="container">
      <div class="row">
        <div class="col-12">
          <div class="jumbotron jumbotron-fluid">
            <div class="container">
              <!--
              <h1 class="display-3">Ultimos Movimientos</h1>
              <p class="lead">This is a modified jumbotron that occupies the entire horizontal space of its parent.</p>
              -->
            </div>
          </div>
        </div>
      </div>
    </div>

    <footer class="footer">
      <div class="container">
        <span class="text-muted expletus">Machinarium 2018</span>
      </div>
    </footer>

  <!-- cdn de javascript-->
  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.3/js/bootstrap.min.js" integrity="sha384-a5N7Y/aK3qNeh15eJKGWxsqtnX/wWdSZSKp+81YjTmS15nvnvxKHuzaWwXHDli+4" crossorigin="anonymous"></script>
  <script src="asstes/js/material.js"></script>
</body>

</html>
