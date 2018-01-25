<!-- Modal -->
<div class="modal fade" id="exampleConfiguracion" tabindex="-1" role="dialog" aria-labelledby="exampleConfiguracionLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleConfiguracionLabel">Configuracion</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <div class="form-group">
          <small class="form-text text-muted">Contraseña</small>
          <input type="hidden" name="usuario" value='<?php echo $usuario;?>'>
          <input class="form-control" type="password" name="pass" id="pass" value="" placeholder="Contraseña">
        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Salir</button>
        <button type="submit" class="btn btn-primary">Actualizar</button>
      </div>
    </div>
  </div>
</div>
