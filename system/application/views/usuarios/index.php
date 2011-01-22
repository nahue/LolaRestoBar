
<h1>Usuarios</h1>


<div id="infoMessage"><?php echo $message; ?></div>

<table class="normal tablesorter fullwidth">
    <thead>
        <tr>
            <th class="header">Nombre</th>
            <th class="header">Apellido</th>
            <th class="header">E-mail</th>
            <th class="header">Grupo</th>
            <th class="header">Estado</th>
        </tr>
    </thead>
    <tbody>
        <?php
        $class = "even";
        foreach ($users as $user): ?>
        <? $class = ($class=='even') ? 'odd' : 'even'; ?>
            <tr class="<?= $class ?>">
                <td><?php echo $user['first_name'] ?></td>
                <td><?php echo $user['last_name'] ?></td>
                <td><?php echo $user['email']; ?></td>
                <td><?php echo $user['group_description']; ?></td>
                <td><?php echo ($user['active']) ? anchor("usuarios/deactivate/" . $user['id'], 'Activo') : anchor("usuarios/activate/" . $user['id'], 'Inactivo'); ?></td>
            </tr>
        <?php endforeach; ?>
        </tbody>    
    </table>

<?php echo anchor("/usuarios/create_user", "Crear un Usuario",array('class' => 'button_link')); ?>


