
<script>
	$(function() {
		$( ".fecha" ).datepicker();
	});
	</script>
<?php // Change the css classes to suit your needs

$attributes = array('class' => '', 'id' => '');
echo form_open('menus/editar/'.$producto["id"], $attributes); ?>
<h1>Crear un Menú</h1>

<?= $template['partials']["formulario"]; ?>