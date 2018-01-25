<?php
  ob_start();

  require_once '../connection/funciones_bd.php';
  $db = new funciones_BD();

  $id_empresa = $_POST['empresa'];
  $id_cliente = $_POST['cliente'];
  $id_empleado = $_POST['empleado'];
  $dia_inicio = $_POST['dia_inicio'];
  $dia_final = $_POST['dia_final'];
?>
<style type="text/css">
  table{
    width: 100%;
    text-align: center;
    border-spacing: 0;
    border-collapse: collapse;
  }
  table.registros{
    border: 1px black;
    font-size: 9px;
  }
  table.registros th{
    border: 1px black;
  }
  .rayas{
    background: repeating-linear-gradient(
      0deg,
      rgba(0, 0, 0, 0) 2px,
      rgba(0, 0, 0, 0) 4px,
      #000 4px,
      #000 6px
    );
  }
</style>
<div class="header">
  <table>
    <col style="width: 50%">
    <col style="width: 20%">
    <col style="width: 30%">
    <tr>
      <th>Formato de control de Proveedores</th>
      <th>No. de Plantilla</th>
      <th></th>
    </tr>
    <tr>
      <th>Plantillas de Horas de Servicio</th>
      <th>No. de O.C-</th>
      <th></th>
    </tr>
  </table>
  <table>
    <col style="width: 20%">
    <col style="width: 50%">
    <col style="width: 30%">
    <tr>
      <td>Cliente</td>
      <td>General Motors de Mexico</td>
      <td rowspan="4"><img src="../assets/image/LOGO-1.png" width="90" height="45"></td>
    </tr>
    <tr>
      <td>Cliente</td>
      <td>Carlos Aguilar</td>
    </tr>
    <tr>
      <td>Nombre</td>
      <td>Jorge Dorador Villa</td>
    </tr>
    <tr>
      <td>Compañia</td>
      <td>Machinarium Internacional Services</td>
    </tr>
  </table>
  <table>
    <col style="width: 50%">
    <col style="width: 50%">
  </table>
  <table class="registros">
    <col style="width: 6.15%">
    <col style="width: 6.15%">
    <col style="width: 6.15%">
    <col style="width: 6.15%">
    <col style="width: 6.15%">
    <col style="width: 6.15%">
    <col style="width: 6.15%">
    <col style="width: 6.15%">
    <col style="width: 6.15%">
    <col style="width: 6.15%">
    <col style="width: 6.15%">
    <col style="width: 6.15%">
    <col style="width: 6.15%">
    <col style="width: 20%">
    <tr>
      <td rowspan="2">Mes</td>
      <td rowspan="2">Dia</td>
      <td colspan="2">Horas</td>
      <td colspan="4">Horas Productivas</td>
      <td colspan="5">Horas Productivas</td>
      <td>Descripcion corta del trabajo</td>
    </tr>
    <tr>
      <td>De</td>
      <td>Hasta</td>
      <td>Normal</td>
      <td>Viaje</td>
      <td>VFJ</td>
      <td>Extras</td>
      <td>Otros</td>
      <td>Espera</td>
      <td>Cap/Apren</td>
      <td>Fest.Vac.</td>
      <td>Inc.</td>
    </tr>
    <tr>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
    </tr>
  </table>
  <table class="datos">
    <col style="width: 50%">
    <col style="width: 20%">
    <col style="width: 30%">
    <tr>
      <td>Viaticos</td>
      <td>Importe</td>
      <td>Observaciones</td>
    </tr>
    <tr>
      <td></td>
      <td></td>
      <td></td>
    </tr>
    <tr>
      <td></td>
      <td></td>
    </tr>
    <tr>
      <td></td>
      <td></td>
    </tr>
    <tr>
      <td></td>
      <td></td>
    </tr>
  </table>
  <table>
    <col style="width: 60%">
    <col style="width: 20%">
    <col style="width: 20%">
    <tr>
      <td>Total de Horas Productivas en letra</td>
      <td>Representante</td>
      <td>Montador</td>
    </tr>
    <tr>
      <td class="rayas">ciento cuarenta horas extras</td>
      <td>Fecha/Firma</td>
      <td>Fecha/Firma</td>
    </tr>
  </table>
</div>
<?php
  $content = ob_get_clean();
  require_once('../html2pdf/html2pdf.class.php');
  $pdf = new HTML2PDF('P','A4','es','UTF-8');
  $pdf->writeHTML($content);
  $pdf->pdf->IncludeJS('print(TRUE)');
  $pdf->output("reporte_form_".date("j")."-".date("M")."-".date("Y").".pdf");
?>
