

<h1>Crear Usuario</h1>
<!--
<div id="infoMessage"><?php echo $message; ?></div>
-->
<?php echo form_open("usuarios/create_user"); ?>
<fieldset>
    <legend>Complete los datos.</legend>
    <p>
        <label>Nombre de usuario:</label>
        <?php
            echo form_input($username);
            echo form_error('username');
        ?>
    </p>
    <p>
        <label>First Name:</label>
        <?php 
            echo form_input($first_name);
            echo form_error('first_name');
        ?>
    </p>

    <p>
        <label>Last Name:</label>
        <?php 
            echo form_input($last_name);
            echo form_error('last_name');
        ?>
    </p>

    <p>
        <label>Company Name:</label>
        <?php 
            echo form_input($company);
            echo form_error('company');
        ?>
    </p>

    <p>
        <label>Email:</label>
        <?php 
            echo form_input($email);
            echo form_error('email');
        ?>
    </p>

    <p>
        <label>Phone:</label>
        <?php 
            echo form_input($phone);
            echo form_error('phone');
       ?>
    </p>

    <p>
        <label>Password:</label>
        <?php 
            echo form_input($password);
            echo form_error('password');
        ?>
    </p>

    <p>
        <label>Confirm Password:</label>
        <?php 
            echo form_input($password_confirm);
            echo form_error('password_confirm');
        ?>
    </p>


    <p><?php echo form_submit('submit', 'Create User'); ?></p>

</fieldset>
<?php echo form_close(); ?>
