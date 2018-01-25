<div class="tab-pane fade show active" id="list-Actividad" role="tabpanel" aria-labelledby="list-Actividad-list">
  <!-- Button trigger modal -->
  <button type="button" class="btn btn-outline-info" data-toggle="modal" data-target="#agregarActividad">
    Agregar
  </button>

  <!-- Modal -->
  <div class="modal fade" id="agregarActividad" tabindex="-1" role="dialog" aria-labelledby="agregarActividadLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h3 class="modal-title" id="exampagregarActividad">Agregar Actividad</h3>
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
                <label for="text_label">Actividad</label>
                <input type="text" name="actividad" value="" placeholder="Actividad">
              </div>
              <div class="form-group">
                <label for="text_label">Fecha </label>
                <input type="date" name="fecha_actividad" value="" placeholder="Fecha">
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
