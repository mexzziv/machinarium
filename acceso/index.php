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
  <nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark">
      <h3 class="navbar-brand expletus" >Machinarium</h3>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarCollapse">
        <ul class="navbar-nav mr-auto">
          <li class="nav-item">
            <a class="nav-link" href="configuracion.php">Configuracion</a>
          </li>
        </ul>
          <a class="btn btn-outline-warning my-2 my-sm-0" href="salir.php">Salir</a>
      </div>
    </nav>

    <!-- Begin page content -->
    <div class="container">
      <div class="row">
        <div class="col-4">
          <div class="row">
            <div class="col-5">
              <div class="list-group" id="list-tab" role="tablist">
                <a class="list-group-item list-group-item-action active" id="list-home-list" data-toggle="list" href="#list-home" role="tab" aria-controls="Empresa">Empresa</a>
              </div>
            </div>
            <div class="col-7">
              <div class="tab-content" id="nav-tabContent">
                <div class="tab-pane fade show active" id="list-home" role="tabpanel" aria-labelledby="list-Empresa-list">
                  <!-- Button trigger modal -->
                  <button type="button" class="btn btn-outline-info" data-toggle="modal" data-target="#agregarEmpresa">
                    Agregar
                  </button>

                  <!-- Modal -->
                  <div class="modal fade" id="agregarEmpresa" tabindex="-1" role="dialog" aria-labelledby="agregarEmpresaLabel" aria-hidden="true">
                    <div class="modal-dialog" role="document">
                      <div class="modal-content">
                        <div class="modal-header">
                          <h5 class="modal-title" id="exampagregarEmpresa">Agregar Empresa</h5>
                          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                          </button>
                        </div>
                        <div class="modal-body">
                          ...
                        </div>
                        <div class="modal-footer">
                          <button type="button" class="btn btn-secondary" data-dismiss="modal">Salir</button>
                          <button type="button" class="btn btn-primary">Guardar</button>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-8">
          <div class="row">
            <div class="col-md-6 col-sm-12">
              <div class="card">
                <div class="card-header">
                  Generar PDF Actividades
                </div>
                <div class="card-body">
                  <p class="card-text">Generador del reporte de actividades, de acuerdo a un periodo de tiempo.</p>
                  <button type="button" class="btn btn-outline-info" data-toggle="modal" data-target="#exampleModal">
                    PDF
                  </button>

                  <!-- Modal -->
                  <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog" role="document">
                      <div class="modal-content">
                        <div class="modal-header">
                          <h5 class="modal-title" id="exampleModalLabel">Generar Busqueda</h5>
                          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                          </button>
                        </div>
                        <div class="modal-body">
                          ...
                        </div>
                        <div class="modal-footer">
                          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                          <button type="button" class="btn btn-primary">Save changes</button>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-md-6  col-sm-12">
              <div class="card">
                <div class="card-header">
                  Generar PDF horas Laborales
                </div>
                <div class="card-body">
                  <p class="card-text">Generar PDF de las hora laboradas de cada empleado.</p>
                  <a href="#" class="btn btn-outline-info">PDF</a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <footer class="footer">
      <div class="container">
        <span class="text-muted">Machinarium 2018</span>
      </div>
    </footer>

  <!-- cdn de javascript-->
  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.3/js/bootstrap.min.js" integrity="sha384-a5N7Y/aK3qNeh15eJKGWxsqtnX/wWdSZSKp+81YjTmS15nvnvxKHuzaWwXHDli+4" crossorigin="anonymous"></script>
  <script src="asstes/js/material.js"></script>
</body>

</html>
