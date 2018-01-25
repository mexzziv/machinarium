<?php
  ob_start();

  require_once '../connection/funciones_bd.php';
  $db = new funciones_BD();

  $id_empresa = $_POST['empresa'];
  $id_cliente = $_POST['cliente'];
  $id_maquina = $_POST['maquina'];
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
  ul{
    list-style: none;
    font-size: 11px;
    font-weight: bold;
  }
  li{
    font-size: 9px;
  }
  .header{
    background-color: #348CFC;
    padding: 5px;
    text-align: center;
  }
  .caja{
    border: 1px solid black;
    padding: 1mm;
    background-color: white;
    width: 10%;
  }
  table.dato{
    border: 2px black;
  }
  table.dato th{
    background-color: grey;
    color: white;
  }
  table.dato td{
    border: .5px black;
  }
  .bold{
    font-weight: bold;
  }
  .options{
    text-align: center;
    padding: 2px;
  }
  .statuses{
    font-size: 9px;
  }
  table.option{
    font-size: 10px;
  }
  .border{
    border: .5px black;
    width: 10px;
    height: 10px;
    background-color: white;
  }
  .space{
    border: 1px black;
    width: 100%;
    height: 8mm;
  }
  .consultas h6{
    text-align: center;
  }
  .consulta{
    border: 1px black;
    width: 97.5%;
  }
  .status{
    border: 1px black;
    width: 97.5%;
  }
  table.service{
    border: 1px black;
  }
  table.service th{
    border: 1px black;
  }
  table.service td{
    font-size: 8px;
    border: 1px black;
  }
  table.hour th{
    border: 1px black;
  }
  table.hour td{
    font-size: 8px;
    border: 1px black;
  }
  table.worked th{
    border: 1px black;
  }
  table.worked td{
    font-size: 8px;
    border: 1px black;
  }
  table.signature {
    text-align: center;
  }
  table.signature th{
    border: 1px black;
  }
  table.signature td{
    font-size: 8px;
    border: 1px black;
  }
</style>
<div class="header">
  <table class="head">
    <col style="width: 27%">
    <col style="width: 33%">
    <col style="width: 33%">
    <tr>
      <th>
        <img src="../assets/image/LOGO-1.png" width="90" height="45">
      </th>
      <th class="left">
        <h3>FIELD SERVER REPORT</h3>
        <ul>
          <li class="caja">FSR # <?php echo "14"; ?></li>
          <li>Service</li>
        </ul>
        <table class="option">
          <col style="width: 33%">
          <col style="width: 33%">
          <col style="width: 33%">
          <tr>
            <td>Service <div class="border"></div></td>
            <td>Production Support <div class="border"></div></td>
            <td>Other <div class="border"></div></td>
          </tr>
        </table>
      </th>
      <th class="left">
        <ul>
          <li>Orden de Compra Interna</li>
          <li class="caja"></li>
          <li>Orden de Cliente</li>
          <li class="caja"></li>
          <li>
            <table class="option">
              <col styel="width: 100%">
              <tr>
                <td>Carta Compromiso<div class="border"></div></td>
              </tr>
            </table>
          </li>
        </ul>
      </th>
    </tr>
  </table>
</div>
<div class="datos">
  <table class="dato">
    <col style="width: 25%">
    <col style="width: 25%">
    <col style="width: 25%">
    <col style="width: 25%">
    <thead>
      <tr>
        <th colspan="2">SERVICE LOCATION</th>
        <th colspan="2">MACHINE MODEL</th>
      </tr>
    </thead>
    <tr>
      <td class="bold">Company</td>
      <td>Machinarium Intenational Services</td>
      <td class="bold">MTB</td>
      <td></td>
    </tr>
    <tr>
      <td class="bold">ADRESS</td>
      <td>Circuito Cumbres Nevadas #284</td>
      <td class="bold">--</td>
      <td>Maquina</td>
    </tr>
    <tr>
      <td class="bold">ADRESS</td>
      <td>Residencial Las Cumbres</td>
      <td class="bold">DATE</td>
      <td>Maquina</td>
    </tr>
    <tr>
      <td class="bold">CITY</td>
      <td>San Luis Potosi</td>
      <td class="bold">N/S</td>
      <td></td>
    </tr>
    <tr>
      <td class="bold">PHONE</td>
      <td>311-847-0063</td>
      <td class="bold"></td>
      <td></td>
    </tr>
  </table>
  <table class="dato">
    <col style="width: 25%">
    <col style="width: 25%">
    <col style="width: 25%">
    <col style="width: 25%">
    <thead>
      <tr>
        <th colspan="2">SERVICE CONTACT</th>
        <th colspan="2">CONTROL MODEL</th>
      </tr>
    </thead>
    <tr>
      <td class="bold">CONTACT</td>
      <td>Maquina</td>
      <td class="bold">CONTROL SERIE</td>
      <td>Maquina</td>
    </tr>
    <tr>
      <td class="bold">EMAIL</td>
      <td>Maquina</td>
      <td class="bold">TYPE</td>
      <td>Maquina</td>
    </tr>
    <tr>
      <td class="bold">PHONE</td>
      <td>Maquina</td>
      <td class="bold">POLIZA</td>
      <td>Maquina</td>
    </tr>
    <tr>
      <td class="bold">NEXTEL ID</td>
      <td>Maquina</td>
      <td class="bold"></td>
      <td></td>
    </tr>
  </table>
</div>
<div class="options">
  <h6>WORK REQUESTED</h6>
  <table class="option">
    <col style="width: 25%">
    <col style="width: 25%">
    <col style="width: 25%">
    <col style="width: 25%">
    <tr>
      <td>STARTUP <div class="border"></div></td>
      <td>OPTION <div class="border"></div></td>
      <td>TROUBLE <div class="border"></div></td>
      <td>OTHER <div class="border"></div></td>
    </tr>
  </table>
</div>
<div class="space">
</div>
<div class="consultas">
  <h6>SERVICE PERFORMED</h6>
  <div class="consulta">
    <ul>
      <?php $db -> buscar_actividades($id_empresa,$id_cliente,$id_maquina,$dia_inicio,$dia_final); ?>
    </ul>
  </div>
</div>
<div class="status">
  <table class="statuses">
    <col style="12.5%">
    <col style="12.5%">
    <col style="12.5%">
    <col style="12.5%">
    <col style="12.5%">
    <col style="12.5%">
    <col style="12.5%">
    <col style="12.5%">
    <tr>
      <th rowspan="2" colspan="1">MACHINE STATUS @ END OF SERVICE</th>
      <th colspan="1"><div class="border"></div>OPERATIONAL</th>
      <th colspan="1"><div class="border"></div>SET-UP REQUIRED</th>
      <th colspan="1"><div class="border"></div>DOWN</th>
      <th colspan="1">BACK-UP FILE NAME</th>
      <th colspan="2"></th>
    </tr>
    <tr>
      <th colspan="1"><div class="border"></div>IN PRODUCTION</th>
      <th colspan="1"><div class="border"></div>MTB/END USER</th>
      <th colspan="1"><div class="border"></div>REQUIRES FOLLOW-UP</th>
    </tr>
  </table>
</div>
<div class="services">
  <table class="service">
    <col style="width: 25%">
    <col style="width: 25%">
    <col style="width: 25%">
    <col style="width: 25%">
    <tr>
      <td></td>
      <td>SERVICE CONTRACT <div class="border"></div></td>
      <td>PROJECT <div class="border"></div></td>
      <td>OTHER <div class="border"></div></td>
    </tr>
  </table>
</div>
<div class="hours">
  <table class="hour">
    <col style="width: 12.5%">
    <col style="width: 12.5%">
    <col style="width: 12.5%">
    <col style="width: 12.5%">
    <col style="width: 12.5%">
    <col style="width: 12.5%">
    <col style="width: 12.5%">
    <col style="width: 12.5%">
    <tr>
      <td class="bold">Service Date</td>
      <td>01/01/2018</td>
      <td>01/01/2018</td>
      <td>01/01/2018</td>
      <td>01/01/2018</td>
      <td>01/01/2018</td>
      <td>01/01/2018</td>
      <td class="bold">Total</td>
    </tr>
    <tr>
      <td></td>
      <td>
        <table>
          <col style="width: 33%">
          <col style="width: 33%">
          <col style="width: 33%">
          <tr>
            <td>ST</td>
            <td>OT</td>
            <td>TT</td>
          </tr>
        </table>
      </td>
    </tr>
    <tr>
      <td class="bold">HRS. WORKED</td>
      <td>
        <table>
          <col style="width: 33%">
          <col style="width: 33%">
          <col style="width: 33%">
          <tr>
            <td></td>
            <td></td>
            <td></td>
          </tr>
        </table>
      </td>
    </tr>
  </table>
</div>
<div class="signatures">
  <table class="signature">
    <col style="width: 33%">
    <col style="width: 33%">
    <col style="width: 33%">
    <tr>
      <td>
        <table>
          <col style="width: 100%">
          <tr>
            FIELD ENGINEER
          </tr>
          <tr>
            Print Name
          </tr>
          <tr>
            Jorge Dorador Villa
          </tr>
          <tr>
            Date:
          </tr>
          <tr>
            25/25/25
          </tr>
        </table>
      </td>
      <td>
        <table>
          <col style="width: 100%">
          <tr>
            FIELD ENGINEER
          </tr>
          <tr>
            Print Name
          </tr>
          <tr>
            Jorge Dorador Villa
          </tr>
          <tr>
            Date:
          </tr>
          <tr>
            25/25/25
          </tr>
        </table>
      </td>
      <td>
        <table class="worked">
          <col style="width: 33%">
          <col style="width: 33%">
          <col style="width: 33%">
          <tr>
            <td>HRS. WORKED ST</td>
            <td>Hrs.</td>
            <td></td>
          </tr>
          <tr>
            <td>HRS. WORKED OT</td>
            <td>Hrs.</td>
            <td></td>
          </tr>
          <tr>
            <td>HRS. TRAVEL</td>
            <td>Hrs.</td>
            <td></td>
          </tr>
          <tr>
            <td>T&L</td>
            <td></td>
            <td></td>
          </tr>
          <tr>
            <td>kILOMETRAJE</td>
            <td>KM.</td>
            <td></td>
          </tr>
          <tr>
            <td>MATERIALS</td>
            <td></td>
            <td></td>
          </tr>
          <tr>
            <td>SUBTOTAL</td>
            <td></td>
            <td></td>
          </tr>
          <tr>
            <td>I.V.A</td>
            <td></td>
            <td></td>
          </tr>
        </table>
        Total
      </td>
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
