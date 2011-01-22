<? define("RUTA_TPL", base_url() . "media/template1/"); ?>

<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
        <title>Administracion</title>

        <link type="text/css" href="<?= RUTA_TPL ?>style.css" rel="stylesheet" />
        <link type="text/css" href="<?= RUTA_TPL ?>css/login.css" rel="stylesheet" />

        <script type="text/javascript" src="<?= base_url() ?>media/js/jquery-1.4.2.min.js"></script>	<!-- jquery library -->
        <script type='text/javascript' src='<?= RUTA_TPL ?>js/iphone-style-checkboxes.js'></script> <!-- iphone like checkboxes -->

        <script type='text/javascript'>
            jQuery(document).ready(function() {
                jQuery('.iphone').iphoneStyle();
            });
        </script>

        <!--[if IE 8]>
                <script type='text/javascript' src='<?= RUTA_TPL ?>js/excanvas.js'></script>
		<link rel="stylesheet" href="<?= RUTA_TPL ?>css/loginIEfix.css" type="text/css" media="screen" />
	<![endif]-->

        <!--[if IE 7]>
                <script type='text/javascript' src='<?= RUTA_TPL ?>js/excanvas.js'></script>
		<link rel="stylesheet" href="<?= RUTA_TPL ?>css/loginIEfix.css" type="text/css" media="screen" />
	<![endif]-->

        <meta charset="UTF-8"></head>
    <body>
        <div id="line"><!-- --></div>
        <div id="background">
            <div id="container">
                <div id="logo">
                    <img src="<?= RUTA_TPL ?>assets/logologin2.png" alt="Logo" />
                </div>
                <div id="box">
                    <?php echo $template['body']; ?>
                </div>

            </div>
        </div>
    </body>
</html>