<div class="tab-pane fade show" id="list-Maquina" role="tabpanel" aria-labelledby="list-Maquina-list">
  <!-- Button trigger modal -->
  <button type="button" class="btn btn-outline-info" data-toggle="modal" data-target="#agregarMaquina">
    Agregar
  </button>

  <!-- Modal -->
  <div class="modal fade" id="agregarMaquina" tabindex="-1" role="dialog" aria-labelledby="agregarMaquinaLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampagregarMaquina">Agregar Maquina</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <form action="../connection/maquinas.php" method="post">
          <div class="modal-body">
            <div class="form-group">
              <small class="form-text text-muted">Serie</small>
              <input class="form-control" type="text" name="serie" id="empresa" value="" placeholder="Serie">
            </div>
            <div class="form-group">
              <small class="form-text text-muted">Modelo</small>
              <input class="form-control" type="text" name="modelo" value="" placeholder="Modelo">
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
