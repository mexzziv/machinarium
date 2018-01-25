<div class="tab-pane fade show" id="list-Cliente" role="tabpanel" aria-labelledby="list-Cliente-list">
  <!-- Button trigger modal -->
  <button type="button" class="btn btn-outline-info" data-toggle="modal" data-target="#agregarCliente">
    Agregar
  </button>

  <!-- Modal -->
  <div class="modal fade" id="agregarCliente" tabindex="-1" role="dialog" aria-labelledby="agregarClienteLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampagregarCliente">Agregar Cliente</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <form action="../connection/cliente.php" method="post">
          <div class="modal-body">
            <div class="form-group">
              <small class="form-text text-muted">Nombre</small>
              <input class="form-control" type="text" name="nombre" id="nombre" value="" placeholder="Nombre">
            </div>
            <div class="form-group">
              <small class="form-text text-muted">Apellido Paterno</small>
              <input class="form-control" type="text" name="app" value="" placeholder="Apellido Paterno">
            </div>
            <div class="form-group">
              <small class="form-text text-muted">Apellido Materno</small>
              <input class="form-control" type="text" name="apm" value="" placeholder="Apellido Materno">
            </div>
            <div class="form-group">
              <small class="form-text text-muted">Telefono</small>
              <input class="form-control" type="text" name="telefono" value="" placeholder="Telefono">
            </div>
            <div class="form-group">
              <small class="form-text text-muted">E-mail</small>
              <input class="form-control" type="email" name="email" value="" placeholder="E-mail">
            </div>
            <div class="form-group">
              <?=
              $db->empresa_llenar();
              ?>
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
