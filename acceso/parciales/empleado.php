  <div class="tab-pane fade show" id="list-Empleado" role="tabpanel" aria-labelledby="list-Empleado-list">
    <!-- Button trigger modal -->
    <button type="button" class="btn btn-outline-info" data-toggle="modal" data-target="#agregarEmpleado">
      Agregar
    </button>

    <!-- Modal -->
    <div class="modal fade" id="agregarEmpleado" tabindex="-1" role="dialog" aria-labelledby="agregarEmpleadoLabel" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h3 class="modal-title" id="exampagregarEmpleado">Agregar Empleado</h3>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
            <form action="../connection/empleado.php" method="post">
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
                  <small class="form-text text-muted">Nacimiento</small>
                  <input class="form-control" type="date" name="nacimiento" value="" placeholder="Nacimiento">
                </div>
                <div class="form-group">
                  <small class="form-text text-muted">CURP</small>
                  <input class="form-control" type="text" name="curp" value="" placeholder="CURP">
                </div>
                <br>
                <div class="form-group">
                  <small class="form-text text-muted">RFC</small>
                  <input class="form-control" class="form-control" type="text" name="rfc" value="" placeholder="RFC">
                </div>
                <div class="form-group">
                  <label for="categoria">Categoria</small>
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
