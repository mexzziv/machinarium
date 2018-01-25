  <div class="tab-pane fade show" id="list-Empresa" role="tabpanel" aria-labelledby="list-Empresa-list">
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
          <form action="../connection/empresa.php" method="post">
            <div class="modal-body">
              <div class="form-group">
                <small class="form-text text-muted">Empresa</small>
                <input class="form-control" type="text" name="empresa" id="empresa" value="" placeholder="Empresa">
              </div>
              <div class="form-group">
                <small class="form-text text-muted">Direccion</small>
                <input class="form-control" type="text" name="direccion" value="" placeholder="Direccion">
              </div>
              <div class="form-group">
                <small class="form-text text-muted">Telefono</small>
                <input class="form-control" type="text" name="telefono" value="" placeholder="Telefono">
              </div>
              <div class="form-group">
                <small class="form-text text-muted">E-mail</small>
                <input class="form-control" type="text" name="email" value="" placeholder="E-mail">
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
