
<fieldset>
    <legend>Complete los datos</legend>
    <? if (isset($error)): ?>
        <?= $error?>
    
    <? endif; ?>
    
    
<p>
        <label for="nombre">Nombre <span class="required">*</span></label>
        <input id="nombre" type="text" name="nombre" maxlength="25" value="<?php echo set_value('nombre',$producto["nombre"]); ?>"  />
        <?php echo form_error('nombre'); ?>
</p>

<p>
        <label for="descripcion">Vigencia <span class="required">*</span></label>
	
       
        <input type="text" class="fecha" name="vigencia" value="<?php echo set_value('vigencia',$this->fechas->cambiaf_a_castellano($producto["vigencia"])); ?>"/>
        <?php echo form_error('vigencia'); ?>
</p>
<p>
        <label for="precio">Precio <span class="required">*</span></label>
        <input id="precio" type="text" name="precio" maxlength="5" value="<?php echo set_value('precio', $producto["precio"]); ?>"  />
        <?php echo form_error('precio'); ?>
</p>
<p>
    <label>Archivo Word del Menu<span class="required">*</span></label>
    <input type="file" name="userfile" size="20" />
</p>


<p>
        <?php echo form_submit( 'submit', 'Enviar'); echo form_reset('reset','Limpiar');?>
</p>
</fieldset>
<?php echo form_close(); ?>
