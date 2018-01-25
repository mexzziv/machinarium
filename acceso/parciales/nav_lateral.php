<div class="row">
  <div class="col-5">
    <div class="list-group" id="list-tab" role="tablist">
      <a class="list-group-item list-group-item-action active" id="list-Actividad-list" data-toggle="list" href="#list-Actividad" role="tab" aria-controls="Actividad">Actividad</a>
      <a class="list-group-item list-group-item-action" id="list-Hora-list" data-toggle="list" href="#list-Hora" role="tab" aria-controls="Hora">Hora</a>
      <a class="list-group-item list-group-item-action" id="list-Empresa-list" data-toggle="list" href="#list-Empresa" role="tab" aria-controls="Empresa">Empresa</a>
      <a class="list-group-item list-group-item-action" id="list-Cliente-list" data-toggle="list" href="#list-Cliente" role="tab" aria-controls="Cliente">Cliente</a>
      <a class="list-group-item list-group-item-action" id="list-Empleado-list" data-toggle="list" href="#list-Empleado" role="tab" aria-controls="Empleado">Empleado</a>
      <a class="list-group-item list-group-item-action" id="list-Maquina-list" data-toggle="list" href="#list-Maquina" role="tab" aria-controls="Maquina">Maquina</a>
    </div>
  </div>
  <div class="col-7">
    <div class="tab-content" id="nav-tabContent">
      <?php
      include 'parciales/actividad.php';
      include 'parciales/hora.php';
      include 'parciales/empresa.php';
      include 'parciales/cliente.php';
      include 'parciales/empleado.php';
      include 'parciales/maquina.php';
      ?>
    </div>
  </div>
</div>
