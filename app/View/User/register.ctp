<?php echo $this->Form->create('BoostCake', array(
	'inputDefaults' => array(
		'div' => 'form-group',
		'label' => array(
			'class' => 'col col-md-3 control-label'
		),
		'wrapInput' => 'col col-md-9',
		'class' => 'form-control'
	),
	'class' => 'well form-horizontal',
	'method' => 'post'
)); ?>
	<?php echo $this->Form->input('name', array(
		'placeholder' => 'Nom'
	)); ?>
	<?php echo $this->Form->input('email', array(
		'placeholder' => 'Email'
	)); ?>
	<?php echo $this->Form->input('password', array(
		'placeholder' => 'contrasenya'
	)); ?>
	<?php echo $this->Form->input('password2', array(
		'placeholder' => 'Repetir contrasenya',
		'type' => 'password'
	)); ?>
	<?php echo $this->Form->input('remember', array(
		'wrapInput' => 'col col-md-9 col-md-offset-3',
		'label' => 'Remember me',
		'class' => false
	)); ?>
	<div class="form-group">
		<?php echo $this->Form->submit('Registrar', array(
			'div' => 'col col-md-9 col-md-offset-3',
			'class' => 'btn btn-default'
		)); ?>
	</div>
<?php echo $this->Form->end(); ?>