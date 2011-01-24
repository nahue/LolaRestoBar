<?
define("RUTA_TPL", base_url() . "media/template1/");
$usuario = get_object_vars($this->ion_auth->get_user());
?>

<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />

        <title><?= $template['title']; ?></title>

        <link type="text/css" href="<?= RUTA_TPL ?>style.css" rel="stylesheet" /> <!-- the layout css file -->
        <link type="text/css" href="<?= RUTA_TPL ?>css/custom.css" rel="stylesheet" /> 

        <link type="text/css" href="<?= RUTA_TPL ?>css/jquery.cleditor.css" rel="stylesheet" />

        <script type="text/javascript" src="<?= base_url() ?>media/js/jquery-1.4.2.min.js"></script>	<!-- jquery library -->
        <script type="text/javascript" src="<?= base_url() ?>media/js/jquery-ui-1.8.6.custom.min.js"></script> <!-- jquery UI -->
        <script type="text/javascript" src="<?= base_url() ?>media/js/jquery.ui.datepicker-es.js"></script>
        <script type='text/javascript' src='<?= RUTA_TPL ?>js/cufon-yui.js'></script> <!-- Cufon font replacement -->
        <script type='text/javascript' src='<?= RUTA_TPL ?>js/colaboratelight_400.font.js'></script> <!-- the Colaborate Light font -->
        <script type='text/javascript' src='<?= RUTA_TPL ?>js/easytooltip.js'></script> <!-- element tooltips -->
        <script type='text/javascript' src='<?= RUTA_TPL ?>js/jquery.tablesorter.min.js'></script> <!-- tablesorter -->

        <!--[if IE 8]>
                <script type='text/javascript' src='<?= RUTA_TPL ?>js/excanvas.js'></script>
		<link rel="stylesheet" href="<?= RUTA_TPL ?>css/IEfix.css" type="text/css" media="screen" />
	<![endif]-->

        <!--[if IE 7]>
                <script type='text/javascript' src='<?= RUTA_TPL ?>js/excanvas.js'></script>
		<link rel="stylesheet" href="<?= RUTA_TPL ?>css/IEfix.css" type="text/css" media="screen" />
	<![endif]-->

        <script type='text/javascript' src='<?= RUTA_TPL ?>js/visualize.jquery.js'></script> <!-- visualize plugin for graphs / statistics -->
        <script type='text/javascript' src='<?= RUTA_TPL ?>js/iphone-style-checkboxes.js'></script> <!-- iphone like checkboxes -->
        <script type='text/javascript' src='<?= RUTA_TPL ?>js/jquery.cleditor.min.js'></script> <!-- wysiwyg editor -->

        <script type='text/javascript' src='<?= RUTA_TPL ?>js/custom.js'></script> <!-- the "make them work" script -->
        <!--
        <script type='text/javascript' src='<?= RUTA_TPL ?>js/links.js'></script> 
        -->
        <script type="text/javascript">
            $ = jQuery;
            $(document).ready(function(){
                var controlador = "<?= $this->router->fetch_class(); ?>";
                
                jQuery("li#"+controlador).addClass('current');

            });
            
        </script>
    </head>

    <body>

        <div id="container">
            <div id="bgwrap">
                <div id="primary_left">

                    <div id="logo">
                        <a href="http://www.ncdesarrollos.com.ar" title="Dashboard"><img src="<?= RUTA_TPL ?>assets/logo2.png" alt="" /></a>
                    </div> <!-- logo end -->
                    <p style="width:95%; text-align:center; color: #CCCCCC">
                        Bienvenido <br />

                        <a href="<?= site_url('usuarios/change_password') ?>" title="Click aqui para cambiar la contraseña" class="tooltip"><?= $usuario["first_name"] .
" " . $usuario["last_name"] ?></a>
                        -
                        <a href="<?= site_url('usuarios/logout') ?>">Salir</a>


                    </p>

                    <div id="menu"> <!-- navigation menu -->
                        <ul>



                            <li id="escritorio"><a href="<?= site_url('escritorio/inicio') ?>" class="dashboard"><img src="<?= RUTA_TPL ?>assets/icons/small_icons_3/dashboard.png" alt="" /><span class="current">Escritorio</span></a></li>
                            <li id="menus"><a href="<?= site_url('menus') ?>" class="dashboard"><img src="<?= RUTA_TPL ?>assets/icons/3_48x48.png" alt="" /><span class="current">Menús</span></a></li>

                            <!--
                            <li><a href="#"><img src="<?= RUTA_TPL ?>assets/icons/small_icons_3/posts.png" alt="" /><span>Posts</span></a></li>
                            <li><a href="#"><img src="<?= RUTA_TPL ?>assets/icons/small_icons_3/media.png" alt="" /><span>Media</span></a>
                                <ul>
                                    <li><a href="#">Upload</a></li>
                                    <li><a href="#">Add new</a></li>
                                    <li><a href="#">Categories</a></li>
                                </ul>
                            </li>
                            <li class="tooltip" title="Menu items can also have a tooltip!"><a href="#"><img src="<?= RUTA_TPL ?>assets/icons/small_icons_3/notes.png" alt="" /><span>My notes</span></a></li>
                            <li><a href="#"><img src="<?= RUTA_TPL ?>assets/icons/small_icons_3/coin.png" alt="" /><span>Earnings</span></a></li>
                            -->
                            <li id="usuarios">
                                <a href="<?= site_url('usuarios') ?>"><img src="<?= RUTA_TPL ?>assets/icons/small_icons_3/users.png" alt="" /><span>Usuarios</span></a>
                                <ul style="display:block;">
                                    <li><a href="<?= site_url('agencias') ?>">Agencias</a></li>    
                                </ul>
                            </li>
                            

                            <!--
                            <li><a href="#"><img src="<?= RUTA_TPL ?>assets/icons/small_icons_3/settings.png" alt="" /><span>Settings</span></a></li>
                            -->
                        </ul>
                    </div> <!-- navigation menu end -->
                </div> <!-- sidebar end -->

                <div id="primary_right">

                    <div class="inner">



                        <div class="clearboth"></div>
                        <p style="clear:both">
                            <?php
if ($this->router->fetch_class() != "escritorio")
    echo set_breadcrumb();
?>
                        </p>
                        <div id="contenido">
                        <?php echo $template['body']; ?>
                        </div>
                    </div>
                </div> <!-- primary_right -->
            </div> <!-- bgwrap -->
        </div> <!-- container -->
    </body>
</html>
