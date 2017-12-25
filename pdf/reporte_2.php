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
<page backtop="7mm" backbottom="7mm" backleft="10mm" backright="10mm">
  <page_header>
    <div style="text-align:right;" ><img src="../assets/image/LOGO-1.png" width="90" height="45"></div>
  </page_header>
    <h2 style="text-align:center; margin-top: 2.5mm;">CAmbio de datos</h2>
    <h6 style="text-align:center; margin-top: -5mm;">CAmbio de datos</h6>
    <h5 style="text-align:center; margin-top: -5mm;">__________________________________________________________________________________________________</h5>
    <h5 style="text-align:right; margin-top: 0mm;"><?php echo "Atlacomulco,Mexico a ".date("j")." de ".date("M"). " de ".date("Y");?></h5>
    <h4 style="text-align:center;"><?php echo "CAmbio";?></h4>
    <?php
      $db-> dato_empresa($id_empresa);
      $db-> dato_cliente($id_cliente);
      $db-> dato_maquina($id_maquina);
    ?>
    <br>
    <p><?php $db -> buscar_actividades($id_empresa,$id_cliente,$id_maquina,$dia_inicio,$dia_final);
    ?></p>
  <page_footer>
    <div style="font-size:10px; color:#848484; text-align: center;" >agregar datos</div>
    <div style="font-size:10px; color:#848484; text-align: center;" >agregAR DATOS</div>
    <div style="font-size:10px; color:#848484; text-align: center;" >agregAR DATOS</div>
  </page_footer>
</page>
<?php
  $content = ob_get_clean();
  require_once('../html2pdf/html2pdf.class.php');
  $pdf = new HTML2PDF('P','A4','es','UTF-8');
  $pdf->writeHTML($content);
  $pdf->pdf->IncludeJS('print(TRUE)');
  $pdf->output("reporte_form_".date("j")."-".date("M")."-".date("Y").".pdf");
?>
