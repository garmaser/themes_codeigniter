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

        <!--
                theme Codeigniter GARMASER

                Copyright 2014 Sergio Garcia Mamani
                Licensed under the Apache License v2.0
                http://www.apache.org/licenses/LICENSE-2.0

                http://garmaser.com
        -->
        <meta charset="utf-8">
        <title>Free HTML5 Bootstrap Admin Template Codeigniter GARMASER</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="Charisma, a fully featured, responsive, HTML5, Bootstrap admin template.">
        <meta name="author" content="Muhammad Usman (Sergio Garcia Mamani theme codeigniter)">


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

        foreach ($js as $file) {
            echo "\n\t\t";
            ?><script src="<?php echo $file; ?>"></script><?php
        } echo "\n\t";

        /** -- to here -- */
        ?>

        <!-- The styles -->
        <link id="bs-css" name="<?php echo base_url(); ?>assets/themes/charisma/" href="<?php echo base_url(); ?>assets/themes/charisma/css/bootstrap-cerulean.css" rel="stylesheet">
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
        <link href='<?php echo base_url(); ?>assets/themes/charisma/css/fullcalendar.css' rel='stylesheet'>
        <link href='<?php echo base_url(); ?>assets/themes/charisma/css/fullcalendar.print.css' rel='stylesheet'  media='print'>
        <link href='<?php echo base_url(); ?>assets/themes/charisma/css/chosen.css' rel='stylesheet'>
        <link href='<?php echo base_url(); ?>assets/themes/charisma/css/uniform.default.css' rel='stylesheet'>
        <link href='<?php echo base_url(); ?>assets/themes/charisma/css/colorbox.css' rel='stylesheet'>
        <link href='<?php echo base_url(); ?>assets/themes/charisma/css/jquery.cleditor.css' rel='stylesheet'>
        <link href='<?php echo base_url(); ?>assets/themes/charisma/css/jquery.noty.css' rel='stylesheet'>
        <link href='<?php echo base_url(); ?>assets/themes/charisma/css/noty_theme_default.css' rel='stylesheet'>
        <link href='<?php echo base_url(); ?>assets/themes/charisma/css/elfinder.min.css' rel='stylesheet'>
        <link href='<?php echo base_url(); ?>assets/themes/charisma/css/elfinder.theme.css' rel='stylesheet'>
        <link href='<?php echo base_url(); ?>assets/themes/charisma/css/jquery.iphone.toggle.css' rel='stylesheet'>
        <link href='<?php echo base_url(); ?>assets/themes/charisma/css/opa-icons.css' rel='stylesheet'>
        <link href='<?php echo base_url(); ?>assets/themes/charisma/css/uploadify.css' rel='stylesheet'>

        <!-- The HTML5 shim, for IE6-8 support of HTML5 elements -->
        <!--[if lt IE 9]>
          <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
        <![endif]-->

        <!-- The fav icon -->
        <link rel="shortcut icon" href="<?php echo base_url(); ?>assets/themes/charisma/img/favicon.ico">

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
                        <a class="brand" href="index.html"> <img alt="Charisma Logo" src="<?php echo base_url(); ?>assets/themes/charisma/img/logo20.png" /> <span>GarMaSer</span></a>

                        <!-- theme selector starts -->
                        <div class="btn-group pull-right theme-container" >
                            <a class="btn dropdown-toggle" data-toggle="dropdown" href="#">
                                <i class="icon-tint"></i><span class="hidden-phone"> Change Theme / Skin</span>
                                <span class="caret"></span>
                            </a>
                            <ul class="dropdown-menu" id="themes">
                                <li><a data-value="classic" href="<?php echo base_url(); ?>"><i class="icon-blank"></i> Classic</a></li>
                                <li><a data-value="cerulean" href="#"><i class="icon-blank"></i> Cerulean</a></li>
                                <li><a data-value="cyborg" href="#"><i class="icon-blank"></i> Cyborg</a></li>
                                <li><a data-value="redy" href="#"><i class="icon-blank"></i> Redy</a></li>
                                <li><a data-value="journal" href="#"><i class="icon-blank"></i> Journal</a></li>
                                <li><a data-value="simplex" href="#"><i class="icon-blank"></i> Simplex</a></li>
                                <li><a data-value="slate" href="#"><i class="icon-blank"></i> Slate</a></li>
                                <li><a data-value="spacelab" href="#"><i class="icon-blank"></i> Spacelab</a></li>
                                <li><a data-value="united" href="#"><i class="icon-blank"></i> United</a></li>
                            </ul>
                        </div>
                        <!-- theme selector ends -->

                        <!-- user dropdown starts -->
                        <div class="btn-group pull-right" >
                            <a class="btn dropdown-toggle" data-toggle="dropdown" href="#">
                                <i class="icon-user"></i><span class="hidden-phone"> Sergio Garcia Mamani</span>
                                <span class="caret"></span>
                            </a>
                            <ul class="dropdown-menu">
                                <li><a href="#">Profile</a></li>
                                <li class="divider"></li>
                                <li><a href="login.html">Logout</a></li>
                            </ul>
                        </div>
                        <!-- user dropdown ends -->

                        <div class="top-nav nav-collapse">
                            <ul class="nav">
                                <li><a href="#">Visit Site</a></li>
                                <li>
                                    <form class="navbar-search pull-left">
                                        <input placeholder="Search" class="search-query span2" name="query" type="text">
                                    </form>
                                </li>
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




<?php
if (!empty($botones)) {
    echo '<div style="margin:10px 0px 0px 20px;">' . $botones . '</div>';
}

echo $output;
?>



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
                    <p class="pull-left">&copy; <a href="http://garmaser.com" target="_blank">Muhammad Usman (Sergio Garcia M. theme Codeigniter)</a> <?php echo date('Y') ?></p>
                    <p class="pull-right">Powered by: <a href="http://www.hostruser.com">Host Ruser</a></p>
                </footer>
<?php } ?>

        </div><!--/.fluid-container-->

        <!-- external javascript
        ================================================== -->
        <!-- Placed at the end of the document so the pages load faster -->

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
        <script src="<?php echo base_url(); ?>assets/themes/charisma/js/bootstrap-collapse.js"></script>
        <!-- carousel slideshow library (optional, not used in demo) -->
        <script src="<?php echo base_url(); ?>assets/themes/charisma/js/bootstrap-carousel.js"></script>
        <!-- autocomplete library -->
        <script src="<?php echo base_url(); ?>assets/themes/charisma/js/bootstrap-typeahead.js"></script>
        <!-- tour library -->
        <script src="<?php echo base_url(); ?>assets/themes/charisma/js/bootstrap-tour.js"></script>
        <!-- library for cookie management -->
        <script src="<?php echo base_url(); ?>assets/themes/charisma/js/jquery.cookie.js"></script>
        <!-- calander plugin -->
        <script src='<?php echo base_url(); ?>assets/themes/charisma/js/fullcalendar.min.js'></script>
        <!-- data table plugin -->
        <script src='<?php echo base_url(); ?>assets/themes/charisma/js/jquery.dataTables.min.js'></script>

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

<?php
//Google Analytics code for tracking my demo site, you can remove this.
if ($_SERVER['HTTP_HOST'] == 'usman.it') {
    ?>
            <script>
                var _gaq = _gaq || [];
                _gaq.push(['_setAccount', 'UA-26532312-1']);
                _gaq.push(['_trackPageview']);
                (function() {
                    var ga = document.createElement('script');
                    ga.type = 'text/javascript';
                    ga.async = true;
                    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
                    (document.getElementsByTagName('head')[0] || document.getElementsByTagName('body')[0]).appendChild(ga);
                })();
            </script>
        <?php } ?>

    </body>
</html>
