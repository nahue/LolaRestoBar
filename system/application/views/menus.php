<h1>Administrar Menús</h1>

<?= $this->session->flashdata('mensaje'); ?>
<table class="normal tablesorter fullwidth">
    <thead>
        <tr>
            <th class="header">Nombre</th>
            <th class="header">Vigencia</th>
            <th class="header">Valor</th>
            <th class="header">Acciones</th>
        </tr>
    </thead>
    <tbody>
        <?php
        $class = "even";

        foreach ($productos as $p): ?>
            <? $class = ($class=='even') ? 'odd' : 'even'; ?>
            <tr class="<?= $class ?>">
                <td><?= $p["nombre"] ?></td>
                <td><?= $this->fechas->cambiaf_a_castellano($p["vigencia"]) ?></td>
                <td><? 
                    if ($p["precio"] < 0)
                       echo "<font color='red'>- $".abs($p["precio"])."</font>";
                    else
                       echo "<font color='green'>$".$p["precio"]."</font>";

                        ?></td>
                <td>
                    <a href="<?= site_url("menus/eliminar/" . $p["id"]) ?>" title="Eliminar este producto" class="tooltip table_icon">
                        <img src="<?= base_url() ?>media/template1/assets/icons/actions_small/trash.png" alt="" />
                    </a>
                    <a href="<?= site_url("menus/editar/" . $p["id"]) ?>" title="Editar este producto" class="tooltip table_icon">
                        <img src="<?= base_url() ?>media/template1/assets/icons/actions_small/pencil.png" alt="" />
                    </a>
                </td>
            </tr>
        <? endforeach; ?>
    </tbody>
</table>
<hr />
<?php echo anchor("/menus/agregar", "Agregar",array('class' => 'button_link')); ?>
