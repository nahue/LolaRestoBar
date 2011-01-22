<?php // Change the css classes to suit your needs

$attributes = array('class' => '', 'id' => '');
echo form_open('menus/eliminar/'.$producto["id"], $attributes); ?>

Esta seguro de que desea eliminar este producto? <?= $producto["nombre"]; ?>
<?php echo form_submit( 'submit', 'Si'); ?>
<?php echo form_close(); ?>
