<!DOCTYPE html>
<html lang="es">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/flexboxgrid/6.3.1/flexboxgrid.min.css" type="text/css" >
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css" integrity="sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb" crossorigin="anonymous">
    <link rel="stylesheet" href="../assets/css/style.css">
    <link rel="stylesheet" href="../assets/js/index.js">
    <link href="https://fonts.googleapis.com/css?family=Expletus+Sans|Share" rel="stylesheet">
    <link rel="shortcut icon" href="../assets/image/LOGO-3.png">
    <title>Machinarium</title>
  </head>
  <body class="fondo">
    <?php
      $usuario = $_GET['usuario'];

      require_once '../connection/funciones_bd.php';
      $db = new funciones_BD();
    ?>

    <nav class="background">
        <ul class="nav justify-content-end">
          <li class="nav-item">
            <a class="nav-link text-white" href="salir.php">Salir</a>
          </li>
        </ul>
    </nav>

    <div class="container row">
      <!-- Agregar Fecha (WORD)-->
      <div class="col-md-5 col-xs-12">
        <div class="card">
          <h1>Agregar datos (WORD)</h1>
          <div class="card-block">
            <!-- Button trigger modal -->
            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#formato_1">
              Formato 1
            </button>

            <!-- Modal datos-->
            <div class="modal fade" id="formato_1" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
              <div class="modal-dialog" role="document">
                <div class="modal-content">
                  <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLongTitle">Formato 1</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                    </button>
                  </div>
                  <form action="../connection/save_form1.php" method="post">
                    <div class="modal-body">
                      <div class="form-group">
                        <?=
                        $db->empresa_llenar();
                        ?>
                      </div>
                      <div class="form-group">
                        <?=
                          $db->cliente_llenar();
                        ?>
                      </div>
                      <div class="form-group">
                        <?=
                          $db->empleado_llenar();
                        ?>
                      </div>
                      <div class="form-group">
                        <label for="text_label">Viaje de </label>
                        <input type="text" name="origen" value="" placeholder="Origen"> a
                        <input type="text" name="destino" value="" placeholder="Destino">
                      </div>
                      <div class="form-group">
                        <label for="text_label">Salida</label>
                        <input type="date" name="dia_salida" value="">
                        <input type="time" name="hora_salida" value="">
                      </div>
                      <div class="form-group">
                        <label for="text_label">Entrada</label>
                        <input type="date" name="dia_entrada" value="">
                        <input type="time" name="hora_entrada" value="">
                      </div>
                      <div class="form-group">
                        <label for="text-label">Lugar de Montaje/Servicio</label>
                        <input type="text" name="lugar" value="" placeholder="Lugar de Montaje/Servicio">
                      </div>
                    </div>
                    <div class="modal-footer">
                      <button type="button" class="btn btn-secondary" data-dismiss="modal">Salir</button>
                      <button type="submit" class="btn btn-primary">Guardar</button>
                    </div>
                  </form>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <!-- Generar PDF WORD-->
      <div class="col-md-7 col-xs-12">
        <div class="card">
          <h1>Buscar (WORD)</h1>
          <div class="card-block">
            <!-- Button trigger modal -->
            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#pdf_1">
            PDF 1
            </button>

            <!-- Modal PDF-->
            <div class="modal fade" id="pdf_1" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
              <div class="modal-dialog" role="document">
                <div class="modal-content">
                  <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLongTitle">PDF 1</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                    </button>
                  </div>
                  <form action="../pdf/reporte_1.php" method="post">
                    <div class="modal-body">
                      <div class="form-group">
                        <?=
                        $db->empresa_llenar();
                        ?>
                      </div>
                      <div class="form-group">
                        <?=
                        $db->cliente_llenar();
                        ?>
                      </div>
                      <div class="form-group">
                        <?=
                        $db->empleado_llenar();
                        ?>
                      </div>
                      <div class="form-group">
                        <label for="text_label">Fecha de </label>
                        <input type="date" name="dia_inicio" value="">
                        <input type="date" name="dia_final" value="">
                      </div>
                      <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary">Enviar</button>
                      </div>
                    </div>
                  </form>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <!-- Agregar Semana (EXCEL)-->
      <div class="col-md-5 col-xs-12">
        <div class="card">
          <h1>Agregar datos (Excel)</h1>
          <div class="card-block">
            <!-- Button trigger modal -->
            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#formato_2">
              Formato 2
            </button>

            <!-- Modal datos-->
            <div class="modal fade" id="formato_2" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
              <div class="modal-dialog" role="document">
                <div class="modal-content">
                  <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLongTitle">Formato 2</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                    </button>
                  </div>
                  <form action="../connection/actividad_form.php" method="post">
                    <div class="modal-body">
                      <div class="form-group">
                        <?=
                        $db->empresa_llenar();
                        ?>
                      </div>
                      <div class="form-group">
                        <?=
                          $db->cliente_llenar();
                        ?>
                      </div>
                      <div class="form-group">
                        <?=
                          $db->maquina_llenar();
                        ?>
                      </div>
                      <div class="form-group">
                        <label for="text_label">Fecha </label>
                        <input type="date" name="fecha_actividad" value="" placeholder="Fecha">
                      </div>
                      <div class="form-group">
                        <label for="text_label">Actividad</label>
                        <input type="text" name="actividad" value="" placeholder="Actividad">
                      </div>
                    <div class="modal-footer">
                      <button type="button" class="btn btn-secondary" data-dismiss="modal">Salir</button>
                      <button type="submit" class="btn btn-primary">Guardar</button>
                    </div>
                  </form>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <!-- Generar PDF EXCEL -->
      <div class="col-md-7 col-xs-12">
        <div class="card">
          <h1>Buscar (Excel)</h1>
          <div class="card-block">
            <!-- Button trigger modal -->
            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#pdf_2">
              PDF 2
            </button>

            <!-- Modal PDF-->
            <div class="modal fade" id="pdf_2" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
              <div class="modal-dialog" role="document">
                <div class="modal-content">
                  <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLongTitle">PDF 2</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                    </button>
                  </div>
                  <form action="../pdf/reporte_2.php" method="post">
                    <div class="modal-body">
                      <div class="form-group">
                        <?=
                        $db->empresa_llenar();
                        ?>
                      </div>
                      <div class="form-group">
                        <?=
                          $db->cliente_llenar();
                        ?>
                      </div>
                      <div class="form-group">
                        <?=
                          $db->maquina_llenar();
                        ?>
                      </div>
                      <div class="form-group">
                        <label for="text_label">Fecha de </label>
                        <input type="date" name="dia_inicio" value="">
                        <input type="date" name="dia_final" value="">
                      </div>
                    </div>
                    <div class="modal-footer">
                      <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                      <button type="submit" class="btn btn-primary">Enviar</button>
                    </div>
                  </form>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <!-- Agregar empledo -->
      <div class="col-md-5 col-xs-12">
        <div class="card">
          <h1>Agregar Empleado</h1>
          <div class="card-block">
            <!-- Button trigger modal -->
            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#empleado">
            Empleado
            </button>

            <!-- Modal datos-->
            <div class="modal fade" id="empleado" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
              <div class="modal-dialog" role="document">
                <div class="modal-content">
                  <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLongTitle">Empleado</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                    </button>
                  </div>
                  <form action="../connection/empleado.php" method="post">
                    <div class="modal-body">
                      <div class="form-group">
                        <label for="text_label">Nombre</label>
                        <input type="text" name="nombre" value="" placeholder="Nombre">
                      </div>
                      <div class="form-group">
                        <label for="text_label">Apellido Paterno</label>
                        <input type="text" name="app" value="" placeholder="Apellido Paterno">
                      </div>
                      <div class="form-group">
                        <label for="text_label">Apellido Materno</label>
                        <input type="text" name="apm" value="" placeholder="Apellido Materno">
                      </div>
                      <div class="form-group">
                        <label for="text_label">Nacimiento</label>
                        <input type="date" name="nacimiento" value="" placeholder="Nacimiento">
                      </div>
                      <div class="form-group">
                        <label for="text_label">CURP</label>
                        <input type="text" name="curp" value="" placeholder="CURP">
                      </div>
                      <br>
                      <div class="form-group">
                        <label for="text_label">RFC</label>
                        <input type="text" name="rfc" value="" placeholder="RFC">
                      </div>
                      <div class="form-group">
                        <label for="categoria">Categoria</label>
                        <select class="form-control" id="categoria" name="categoria">
                          <option value="1">Ing. Especializado</option>
                          <option value="2">Ing. Servicio</option>
                          <option value="3">Ing. Montaje</option>
                          <option value="4">Tec. Montaje</option>
                          <option value="5">Supervision</option>
                          <option value="6">Montaje</option>
                          <option value="7">Ayudante</option>
                        </select>
                      </div>
                      <div class="modal-footer">
                      <button type="button" class="btn btn-secondary" data-dismiss="modal">Salir</button>
                      <button type="submit" class="btn btn-primary">Guardar</button>
                    </div>
                    </div>
                  </form>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>

    <!-- cdn de javascript-->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js" integrity="sha384-vFJXuSJphROIrBnz7yo7oB41mKfc8JzQZiCq4NCceLEaO4IHwicKwpJf9c9IpFgh" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js" integrity="sha384-alpBpkh1PFOepccYVYDB4do5UnbKysX5WZXm3XxPqe5iKTfUKjNkCk9SaVuEZflJ" crossorigin="anonymous"></script>
  </body>
</html>
