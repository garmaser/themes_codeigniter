
<div id="toPrint"  style="margin:20px auto 50px 20px; background-color:#ffffff; width: 100%; height: 100%;">    
  
    <link href="<?php echo base_url('assets/themes/charisma'); ?>/css/bootstrap-united.css" rel="stylesheet" media="print">
    <link href="<?php echo base_url('assets/themes/charisma'); ?>/css/bootstrap-responsive.css" rel="stylesheet" media="print">
    <link href="<?php echo base_url('assets/themes/charisma'); ?>/css/charisma-app.css" rel="stylesheet" media="print">
    <link href="<?php echo base_url('assets/themes/charisma'); ?>/css/style_reporte.css" rel="stylesheet" media="screen, print" type="text/css" />
    <div id="imprimirReporte" <?php if (!empty($anchoReporte)) echo 'style="width:' . $anchoReporte . '"'; ?> >

        <div id="cabeceraReporte">
            <img src="<?php echo base_url('assets/themes/charisma/img/logo.jpg'); ?>" border="0" align="LEFT" style="padding-left:5px; padding-bottom: 30px;"/>
            <img src="<?php echo base_url('assets/themes/charisma/img/logo2.jpg'); ?>" border="0" align="RIGHT" style="padding-right: 5px; padding-bottom: 30px;"/>
            <div>UNIVERSIDAD PÚBLICA DE EL ALTO <br /> <span> VICERRECTORADO <br />CENTRO DE ESTUDIOS Y FORMACION DE POSGRADO E INVESTIGACION <br /> POSGRADO - UPEA</span> </div>
            <span> <?php echo $tipoReporte; ?></span>
            <br />
            SISTEMA DE INFORMACION INTEGRADO - UT'ÄWI
        </div>
        <div id="cuerpoReporte">
            <?php
            echo '<div style="text-align:right;">' . fecha_literal(date('Y-m-d'), 4) . '</div>';
            echo '<h3>' . alinear($tituloReporte, 'centro', '', 20) . '</h3>';
            echo '<div style="padding-top:8px;"> </div>';
            echo $reporte;
            ?>
        </div>


    </div>
</div>

