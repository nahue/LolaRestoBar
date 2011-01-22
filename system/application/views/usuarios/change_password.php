<h1>Cambiar Contraseña</h1>


<?php echo form_open("usuarios/change_password"); ?>
<fieldset>

    <p>
        <label>Contraseña anterior:</label>
        
        <?php
        echo form_input($old_password);
        echo form_error('vieja');
        ?>
    </p>

    <p>
        <label>Contraseña nueva:</label>
        <?php
        echo form_input($new_password);
        echo form_error('nueva');
        ?>
    </p>

    <p>
        <label>Confirmar contraseña nueva:</label>
        <?php
        echo form_input($new_password_confirm);
        echo form_error('confirma_nueva');
        ?>
    </p>

    <?php echo form_input($user_id); ?>
        <p><?php echo form_submit('submit', 'Cambiar'); ?></p>
    </fieldset>
<?php echo form_close(); ?>