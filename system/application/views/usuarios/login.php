<? if ($message): ?>
<div class="notification error" style="cursor: auto; ">
						<span></span>
						<div class="text">
                                                    <p>
                                                        <strong>Error!</strong>
                                                        <?php echo $message; ?>
                                                    </p>
						</div>
					</div>
<? endif; ?>

    <?php echo form_open("usuarios/login"); ?>
    <div class="one_half">
        <p><input name="username" value="usuario" class="field" onblur="if (jQuery(this).val() == &quot;&quot;) { jQuery(this).val(&quot;usuario&quot;); }" onclick="jQuery(this).val(&quot;&quot;);" /></p>
        <p><input type="checkbox" class="iphone" name="remember"/><label class="fix">Recordarme</label></p>
    </div>

    <div class="one_half last">
        <p><input type="password" name="password" value="asdf1234" class="field" onblur="if (jQuery(this).val() == &quot;&quot;) { jQuery(this).val(&quot;asdf1234&quot;); }" onclick="jQuery(this).val(&quot;&quot;);">	</p>
        <p><?php echo form_submit('submit', 'Entrar'); ?></p>
    </div>

    <?php echo form_close(); ?>
