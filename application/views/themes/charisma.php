<!DOCTYPE html>
<html lang="en">
    <head>   

        <!--
                Charisma v1.0.0

                Copyright 2012 Muhammad Usman
                Licensed under the Apache License v2.0
                http://www.apache.org/licenses/LICENSE-2.0

                http://usman.it
                http://twitter.com/halalit_usman
        -->
        <meta charset="utf-8">
<!--	<title>Free HTML5 Bootstrap Admin Template</title>-->
        <title><?php echo $title; ?></title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="Charisma, a fully featured, responsive, HTML5, Bootstrap admin template.">
        <meta name="author" content="Muhammad Usman -> Sergio Garcia Mamani">

        <!-- ---------------  INICIO grocerycrud -------------------------- -->
        <?php
        if (!empty($css_files)) {
            foreach ($css_files as $file):
                ?>
                <link type="text/css" rel="stylesheet" href="<?php echo $file; ?>" />
                <?php
            endforeach;
        }
        ?>

        <!-- The styles -->
        <link id="bs-css" href="<?php echo base_url(); ?>assets/themes/charisma/css/bootstrap-spacelab.css" rel="stylesheet">
        <style type="text/css">
            body {
                padding-bottom: 40px;
            }
            .sidebar-nav {
                padding: 9px 0;
            }
        </style>
        <link href="<?php echo base_url(); ?>assets/themes/charisma/css/bootstrap-responsive.css" rel="stylesheet">
        <link href="<?php echo base_url(); ?>assets/themes/charisma/css/charisma-app.css" rel="stylesheet">
        <link href="<?php echo base_url(); ?>assets/themes/charisma/css/jquery-ui-1.8.21.custom.css" rel="stylesheet">
        <link href="<?php echo base_url(); ?>assets/themes/charisma/css/fullcalendar.css" rel='stylesheet'>
        <link href="<?php echo base_url(); ?>assets/themes/charisma/css/fullcalendar.print.css" rel='stylesheet'  media='print'>
        <link href="<?php echo base_url(); ?>assets/themes/charisma/css/chosen.css" rel='stylesheet'>
        <link href="<?php echo base_url(); ?>assets/themes/charisma/css/uniform.default.css" rel='stylesheet'>
        <link href="<?php echo base_url(); ?>assets/themes/charisma/css/colorbox.css" rel='stylesheet'>
        <link href="<?php echo base_url(); ?>assets/themes/charisma/css/jquery.cleditor.css" rel='stylesheet'>
        <link href="<?php echo base_url(); ?>assets/themes/charisma/css/jquery.noty.css" rel='stylesheet'>
        <link href="<?php echo base_url(); ?>assets/themes/charisma/css/noty_theme_default.css" rel='stylesheet'>
        <link href="<?php echo base_url(); ?>assets/themes/charisma/css/elfinder.min.css" rel='stylesheet'>
        <link href="<?php echo base_url(); ?>assets/themes/charisma/css/elfinder.theme.css" rel='stylesheet'>
        <link href="<?php echo base_url(); ?>assets/themes/charisma/css/jquery.iphone.toggle.css" rel='stylesheet'>
        <link href="<?php echo base_url(); ?>assets/themes/charisma/css/opa-icons.css" rel='stylesheet'>
        <link href="<?php echo base_url(); ?>assets/themes/charisma/css/uploadify.css" rel='stylesheet'>

        <!-- The HTML5 shim, for IE6-8 support of HTML5 elements -->
        <!--[if lt IE 9]>
          <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
        <![endif]-->


        <?php
        /** -- Copy from here -- */
        if (!empty($meta))
            foreach ($meta as $name => $content) {
                echo "\n\t\t";
                ?><meta name="<?php echo $name; ?>" content="<?php echo $content; ?>" /><?php
            }
        echo "\n";

        if (!empty($canonical)) {
            echo "\n\t\t";
            ?><link rel="canonical" href="<?php echo $canonical ?>" /><?php
        }
        echo "\n\t";

        foreach ($css as $file) {
            echo "\n\t\t";
            ?><link rel="stylesheet" href="<?php echo $file; ?>" type="text/css" /><?php
        } echo "\n\t";



        /** -- to here -- */
        ?>

        <!-- The fav icon -->
        <link rel="shortcut icon" href="<?php echo base_url(); ?>assets/themes/charisma/img/favicon.ico">

        <!-- ---------------  INICIO grocerycrud -------------------------- -->
        <?php
        if (!empty($js_files)) {
            foreach ($js_files as $file):
                ?>
                <script src="<?php echo $file; ?>"></script>
                <?php
            endforeach;
        }else {
            ?>
            <!-- jQuery -->
            <script src="<?php echo base_url(); ?>assets/themes/charisma/js/jquery-1.7.2.min.js"></script>
            <!-- jQuery UI -->
            <script src="<?php echo base_url(); ?>assets/themes/charisma/js/jquery-ui-1.8.21.custom.min.js"></script>    
            <!-- transition / effect library -->
            <script src="<?php echo base_url(); ?>assets/themes/charisma/js/bootstrap-transition.js"></script>
            <!-- alert enhancer library -->
            <script src="<?php echo base_url(); ?>assets/themes/charisma/js/bootstrap-alert.js"></script>
            <!-- modal / dialog library -->
            <script src="<?php echo base_url(); ?>assets/themes/charisma/js/bootstrap-modal.js"></script>
            <!-- custom dropdown library -->
            <script src="<?php echo base_url(); ?>assets/themes/charisma/js/bootstrap-dropdown.js"></script>
            <!-- scrolspy library -->
            <script src="<?php echo base_url(); ?>assets/themes/charisma/js/bootstrap-scrollspy.js"></script>
            <!-- library for creating tabs -->
            <script src="<?php echo base_url(); ?>assets/themes/charisma/js/bootstrap-tab.js"></script>
            <!-- library for advanced tooltip -->
            <script src="<?php echo base_url(); ?>assets/themes/charisma/js/bootstrap-tooltip.js"></script>
            <!-- popover effect library -->
            <script src="<?php echo base_url(); ?>assets/themes/charisma/js/bootstrap-popover.js"></script>
            <!-- button enhancer library -->
            <script src="<?php echo base_url(); ?>assets/themes/charisma/js/bootstrap-button.js"></script>
            <!-- accordion library (optional, not used in demo) -->
            <!--<script src="<?php echo base_url(); ?>assets/themes/charisma/js/bootstrap-collapse.js"></script>-->
            <!-- carousel slideshow library (optional, not used in demo) -->
            <!--<script src="<?php echo base_url(); ?>assets/themes/charisma/js/bootstrap-carousel.js"></script>-->
            <!-- autocomplete library -->
            <script src="<?php echo base_url(); ?>assets/themes/charisma/js/bootstrap-typeahead.js"></script>
            <!-- tour library -->
            <!--<script src="<?php echo base_url(); ?>assets/themes/charisma/js/bootstrap-tour.js"></script>-->


            <script>
                $(function() {
                    //Array para dar formato al calendario en español
                    $.datepicker.regional['es'] =
                            {
                                closeText: 'Cerrar',
                                prevText: 'Previo',
                                nextText: 'Próximo',
                                monthNames: ['Enero', 'Febrero', 'Marzo', 'Abril', 'Mayo', 'Junio',
                                    'Julio', 'Agosto', 'Septiembre', 'Octubre', 'Noviembre', 'Diciembre'],
                                monthNamesShort: ['Ene', 'Feb', 'Mar', 'Abr', 'May', 'Jun',
                                    'Jul', 'Ago', 'Sep', 'Oct', 'Nov', 'Dic'],
                                monthStatus: 'Ver otro mes', yearStatus: 'Ver otro año',
                                dayNames: ['Domingo', 'Lunes', 'Martes', 'Miércoles', 'Jueves', 'Viernes', 'Sábado'],
                                dayNamesShort: ['Dom', 'Lun', 'Mar', 'Mie', 'Jue', 'Vie', 'Sáb'],
                                dayNamesMin: ['Do', 'Lu', 'Ma', 'Mi', 'Ju', 'Vi', 'Sa'],
                                dateFormat: 'dd/mm/yy', firstDay: 0,
                                initStatus: 'Selecciona la fecha', isRTL: false};
                    $.datepicker.setDefaults($.datepicker.regional['es']);

                    //miDate: fecha de comienzo D=días | M=mes | Y=año
                    //maxDate: fecha tope D=días | M=mes | Y=año
                    $("#datepicker").datepicker({minDate: "-1D", maxDate: "+1M +10D"});
                });
            </script>     

            <?php
        }

        foreach ($js as $file) {
            echo "\n\t\t";
            ?><script src="<?php echo $file; ?>"></script><?php
        } echo "\n\t";
        ?>

    </head>

    <body>
        <?php if (!isset($no_visible_elements) || !$no_visible_elements) { ?>
            <!-- topbar starts -->
            <div class="navbar">
                <div class="navbar-inner">
                    <div class="container-fluid">
                        <a class="btn btn-navbar" data-toggle="collapse" data-target=".top-nav.nav-collapse,.sidebar-nav.nav-collapse">
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </a>
                        <a class="brand" href="#"> <img alt="Charisma Logo" src="<?php echo base_url(); ?>assets/themes/charisma/img/logo20.png" /> <span>GARMASER</span></a>


                        <!-- user dropdown starts -->
                        <div class="btn-group pull-right" >
                            <a class="btn dropdown-toggle" data-toggle="dropdown" href="#">
                                <i class="icon-user"></i><span class="hidden-phone"> 
                                    <?php
//                                    $user = $this->ion_auth->user()->row();
//                                    $user_groups = $this->ion_auth->get_users_groups($user->id)->row();
//                                    echo '<b>' . strtoupper($user_groups->name) . ': </b>';
//                                    echo strtoupper($user->first_name . ' ' . $user->last_name);
                                    echo 'SERGIO GARCIA MAMANI';
                                    ?>
                                </span>
                                <span class="caret"></span>
                            </a>
                            <ul class="dropdown-menu">
                                <li><a href="#">Editar mis datos</a></li>
                                <li class="divider"></li>
                                <li><a href="<?php echo site_url('auth/logout'); ?>">Salir del sistema</a></li>
                            </ul>
                        </div>
                        <!-- user dropdown ends -->

                        <div class="top-nav nav-collapse">
                            <ul class="nav">
                                <li><a href="#">Visitar Sitio Web</a></li>
                            </ul>
                        </div><!--/.nav-collapse -->
                    </div>
                </div>
            </div>
            <!-- topbar ends -->
        <?php } ?>
        <div class="container-fluid">
            <div class="row-fluid">
                <?php if (!isset($no_visible_elements) || !$no_visible_elements) { ?>

                    <!-- left menu starts -->
                    <div class="span2 main-menu-span">
                        <div class="well nav-collapse sidebar-nav">
                            <ul class="nav nav-tabs nav-stacked main-menu">
                                <?php
                                $html = '';
                                if (!empty($menu)) {
                                    foreach ($menu as $valor) {
                                        if (empty($valor['link']))
                                            $html.= '<li class="nav-header hidden-tablet">' . $valor['nombre'] . '</li>';
                                        else
                                            $html.= '<li><a class="ajax-link" href="' . $valor['link'] . '"><i class="' . $valor['icono'] . '"></i><span class="hidden-tablet"> ' . $valor['nombre'] . '</span></a></li>';
                                    }
                                }
                                echo $html;
                                ?>	
                            </ul>
                            <label id="for-is-ajax" class="hidden-tablet" for="is-ajax"><input id="is-ajax" type="checkbox"> Ajax on menu</label>
                        </div><!--/.well -->
                    </div><!--/span-->
                    <!-- left menu ends -->

                    <noscript>
                    <div class="alert alert-block span10">
                        <h4 class="alert-heading">Warning!</h4>
                        <p>You need to have <a href="http://en.wikipedia.org/wiki/JavaScript" target="_blank">JavaScript</a> enabled to use this site.</p>
                    </div>
                    </noscript>

                    <div id="content" class="span10">
                        <!-- content starts -->
                    <?php } ?>

                    <div class="row-fluid">
                        <div class="box span12">
                            <div class="box-header well" data-original-title>
                                <h2><i class="icon-cog"></i> <?php if (!empty($titulo)) echo strtoupper($titulo); ?></h2>
                                <div class="box-icon">
                                </div>
                            </div>   


                            <?php
                            if (!empty($botones)) {
                                echo '<div style="margin:10px 0px 0px 20px;">'.$botones.'</div>';
                            }

                            echo $output;
                            ?>

                        </div><!--/span-->

                    </div><!--/row-->

<?php echo $this->load->get_section('sidebar'); ?>




                <?php if (!isset($no_visible_elements) || !$no_visible_elements) { ?>
                        <!-- content ends -->
                    </div><!--/#content.span10-->
<?php } ?>
            </div><!--/fluid-row-->
<?php if (!isset($no_visible_elements) || !$no_visible_elements) { ?>

                <hr>

                <div class="modal hide fade" id="myModal">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal">×</button>
                        <h3>Settings</h3>
                    </div>
                    <div class="modal-body">
                        <p>Here settings can be configured...</p>
                    </div>
                    <div class="modal-footer">
                        <a href="#" class="btn" data-dismiss="modal">Close</a>
                        <a href="#" class="btn btn-primary">Save changes</a>
                    </div>
                </div>

                <footer>
                    <p class="pull-left">&copy; <a href="#" target="_blank">GARMASER</a> <?php echo date('Y') ?></p>
                    <p class="pull-right">Powered by: <a href="http://www.hostruser.com">HostRuser</a></p>
                </footer>
<?php } ?>

        </div><!--/.fluid-container-->

        <!-- external javascript
        ================================================== -->
        <!-- Placed at the end of the document so the pages load faster -->   




        <!-- library for cookie management -->
        <script src="<?php echo base_url(); ?>assets/themes/charisma/js/jquery.cookie.js"></script>
        <!-- calander plugin -->
        <script src="<?php echo base_url(); ?>assets/themes/charisma/js/fullcalendar.min.js"></script>
        <!-- data table plugin -->
        <script src="<?php echo base_url(); ?>assets/themes/charisma/js/jquery.dataTables.min.js"></script>

        <!-- chart libraries start -->
        <script src="<?php echo base_url(); ?>assets/themes/charisma/js/excanvas.js"></script>
        <script src="<?php echo base_url(); ?>assets/themes/charisma/js/jquery.flot.min.js"></script>
        <script src="<?php echo base_url(); ?>assets/themes/charisma/js/jquery.flot.pie.min.js"></script>
        <script src="<?php echo base_url(); ?>assets/themes/charisma/js/jquery.flot.stack.js"></script>
        <script src="<?php echo base_url(); ?>assets/themes/charisma/js/jquery.flot.resize.min.js"></script>
        <!-- chart libraries end -->

        <!-- select or dropdown enhancer -->
        <script src="<?php echo base_url(); ?>assets/themes/charisma/js/jquery.chosen.min.js"></script>
        <!-- checkbox, radio, and file input styler -->
        <script src="<?php echo base_url(); ?>assets/themes/charisma/js/jquery.uniform.min.js"></script>
        <!-- plugin for gallery image view -->
        <script src="<?php echo base_url(); ?>assets/themes/charisma/js/jquery.colorbox.min.js"></script>
        <!-- rich text editor library -->
        <script src="<?php echo base_url(); ?>assets/themes/charisma/js/jquery.cleditor.min.js"></script>
        <!-- notification plugin -->
        <script src="<?php echo base_url(); ?>assets/themes/charisma/js/jquery.noty.js"></script>
        <!-- file manager library -->
        <script src="<?php echo base_url(); ?>assets/themes/charisma/js/jquery.elfinder.min.js"></script>
        <!-- star rating plugin -->
        <script src="<?php echo base_url(); ?>assets/themes/charisma/js/jquery.raty.min.js"></script>
        <!-- for iOS style toggle switch -->
        <script src="<?php echo base_url(); ?>assets/themes/charisma/js/jquery.iphone.toggle.js"></script>
        <!-- autogrowing textarea plugin -->
        <script src="<?php echo base_url(); ?>assets/themes/charisma/js/jquery.autogrow-textarea.js"></script>
        <!-- multiple file upload plugin -->
        <script src="<?php echo base_url(); ?>assets/themes/charisma/js/jquery.uploadify-3.1.min.js"></script>
        <!-- history.js for cross-browser state change on ajax -->
        <script src="<?php echo base_url(); ?>assets/themes/charisma/js/jquery.history.js"></script>
        <!-- application script for Charisma demo -->
        <script src="<?php echo base_url(); ?>assets/themes/charisma/js/charisma.js"></script>
        
    </body>
</html>
