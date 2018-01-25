<div class="tab-pane fade show" id="list-Hora" role="tabpanel" aria-labelledby="list-Hora-list">
  <!-- Button trigger modal -->
  <button type="button" class="btn btn-outline-info" data-toggle="modal" data-target="#agregarHora">
    Agregar
  </button>

  <!-- Modal -->
  <div class="modal fade" id="agregarHora" tabindex="-1" role="dialog" aria-labelledby="agregarHoraLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h3 class="modal-title" id="exampagregarHora">Agregar Hora</h3>
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
