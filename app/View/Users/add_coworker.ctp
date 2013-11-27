<!-- app/View/Users/addCoworker.ctp -->
<div class="users form">
<?php echo $this->Form->create('Coworker', array(
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
    <fieldset>
	    <legend>Registrar Coworker</legend>
    <?php
        echo $this->Form->input('username', array('label' => "Nom d'usuari", 'placeholder' => "Nom d'usuari"));
        echo $this->Form->input('password', array('label' => 'Contrasenya', 'placeholder' => "Contrasenya")); 
        echo $this->Form->input('email', array('label' => 'Correu', 'placeholder' => "Correu"));
        echo $this->Form->input('name', array('label' => 'Nom', 'placeholder' => "Nom"));
    ?>
    </fieldset>
<?php echo $this->Form->end('Registrar'); ?>
</div>
