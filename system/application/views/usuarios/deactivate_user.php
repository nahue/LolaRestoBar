

	<h1>Desactivar Usuario</h1>
    
	<p>Seguro de que quiere desactivar el usuario '<?php echo $user->username; ?>' de
           <?= $user->first_name." ".$user->last_name?>

            ?</p>
	
    <?php echo form_open("usuarios/deactivate/".$user->id);?>
    	
      <p>
      	Si:
		<input type="radio" name="confirm" value="yes" checked="checked" />
      	No:
		<input type="radio" name="confirm" value="no" />
      </p>
      
      <?php echo form_hidden($csrf); ?>
      <?php echo form_hidden(array('id'=>$user->id)); ?>
      
      <p><?php echo form_submit('submit', 'Enviar');?></p>

    <?php echo form_close();?>
