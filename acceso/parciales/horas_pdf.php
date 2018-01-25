<div class="card">
  <div class="card-header">
    Generar PDF horas Laborales
  </div>
  <div class="card-body">
    <p class="card-text">Generar PDF de las hora laboradas de cada empleado.</p>
    <button type="button" class="btn btn-outline-info" data-toggle="modal" data-target="#exampleModal">
      PDF
    </button>

    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLongTitle">PDF 1</h5>
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
