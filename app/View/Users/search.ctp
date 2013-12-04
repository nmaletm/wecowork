
<div class="users form">
<?php echo $this->Form->create('User', array(
	'inputDefaults' => array(
		'div' => 'form-group',
		'wrapInput' => false,
		'class' => 'form-control'
	),
	'class' => 'well'
)); ?>
    <fieldset>
    <?php
        echo $this->Form->input('username', array('label' => 'Cercar usuari', 'placeholder' => "Quin és el seu nom, email o nom d'usuari?"));
    ?>
	<?php echo $this->Form->submit('Buscar', array(
		'div' => 'form-group',
		'class' => 'btn btn-default'
	)); ?>
    </fieldset>
<?php echo $this->Form->end(); ?>
</div>