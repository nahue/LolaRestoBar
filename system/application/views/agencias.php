<h1>Agencias de Turismo</h1>
<? if ($cambiado): ?>
<div class="notification success">
    <span></span>
    <div class="text">
        <p><strong>Todo OK!</strong> El codigo fue cambiado correctamente.</p>
    </div>
</div>
<? endif; ?>
<?php
$attributes = array('class' => '', 'id' => '');
echo form_open('agencias', $attributes); ?>
<fieldset>
    <legend>Cambiar el codigo</legend>
    <p>
        <label>Codigo Actual:</label>
        <strong><?= isset($codigo) ? $codigo : null ?></strong>
    </p>

    <p>
        <label for="codigo">Cambiar Codigo <span class="required">*</span></label>

        <input id="codigo" type="text" name="codigo" maxlength="20" value="<?php echo set_value('codigo'); ?>"  />
        <?php echo form_error('codigo'); ?>
    </p>
    <p>
        <?php echo form_submit('submit', 'Cambiar Codigo'); ?>
    </p>
</fieldset>
<?= form_close(); ?>