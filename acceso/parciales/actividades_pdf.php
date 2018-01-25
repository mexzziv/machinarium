<div class="card">
  <div class="card-header">
    Generar PDF Actividades
  </div>
  <div class="card-body">
    <p class="card-text">Generador del reporte de actividades, de acuerdo a un periodo de tiempo.</p>
    <button type="button" class="btn btn-outline-info" data-toggle="modal" data-target="#exampleActividad">
      PDF
    </button>

    <!-- Modal -->
    <div class="modal fade" id="exampleActividad" tabindex="-1" role="dialog" aria-labelledby="exampleActividadLabel" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleActividadLabel">Generar Busqueda</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
            <form class="" action="../pdf/reporte_1.php" method="post">
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
