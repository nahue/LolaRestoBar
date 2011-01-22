<?php echo doctype('html5'); ?>
<html>
    <head>
        <title><?php echo $template['title']; ?></title>

        <style type="text/css">
            @import "<?= base_url() ?>media/css/960.css";
            @import "<?= base_url() ?>media/css/Aristo/jquery-ui-1.8.7.custom.css";
            @import "<?= base_url() ?>media/css/uniform.default.css";

            @import "<?= base_url() ?>media/css/custom.css";
        </style>



        <script type="text/javascript" src="<?= base_url() ?>media/js/jquery-1.4.2.min.js"></script>
        <script type="text/javascript" src="<?= base_url() ?>media/js/jquery.tools.min.js"></script>
        <script type="text/javascript" src="<?= base_url() ?>media/js/jquery-ui-1.8.6.custom.min.js"></script>
        <script type="text/javascript" src="<?= base_url() ?>media/js/jquery-ui.form.js"></script>
        <script type="text/javascript" src="<?= base_url() ?>media/js/jquery.uniform.min.js"></script>

        <script type="text/javascript">
            $(document).ready(function(){
                $("select, input:text, input:checkbox, input:radio, input:file, input:submit, textarea").uniform();
            });
        </script>
    </head>

    <body>
        <div class="container_24">
            <div class="grid_4" style="border: 1px dotted black; height:300px;">
                <div id="logo" class="grid_3" style="border: 1px dotted black; margin: 0 0 0 25px">
                    Lola Resto Bar<br>
                    Administrador de Menus
                </div>
            </div>
            <div class="grid_20">
                <div id="header">
                    aasasd
                    <div class="perfil">
                        asdasd
                    </div>
                </div>
                <?php echo set_breadcrumb(); ?>
                <?php echo $template['body']; ?>
            </div>
        </div>
    </body>
</html>  