<!-- app/View/Users/login.ctp -->
<?php echo $this->Session->flash('auth'); ?>

<?php echo $this->Form->create('User', array(
	'inputDefaults' => array(
		'div' => 'form-group',
		'label' => array(
			'class' => 'col col-md-3 control-label'
		),
		'wrapInput' => 'col col-md-9',
		'class' => 'form-control'
	),
	'class' => 'well form-horizontal'
)); ?>
	<?php echo $this->Form->input('username', array(
		'placeholder' => "Nom d'usuari",
		'label' => "Nom d'usuari"
	)); ?>
	<?php echo $this->Form->input('password', array(
		'placeholder' => 'Contrasenya',
		'label' => 'Contrasenya'
	)); ?>
	<div class="form-group">
		<?php echo $this->Form->submit('Iniciar sessió', array(
			'div' => 'col col-md-9 col-md-offset-3',
			'class' => 'btn btn-default'
		)); ?>
	</div>
<?php echo $this->Form->end(); ?>