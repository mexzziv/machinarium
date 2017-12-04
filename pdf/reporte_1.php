<?php
  ob_start();

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
