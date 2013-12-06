<!-- app/View/Users/addCompany.ctp -->
<div class="users form">
<?php echo $this->Form->create('Company', array(
	'inputDefaults' => array(
		'div' => 'form-group',
		'wrapInput' => false,
		'class' => 'form-control'
	),
	'class' => 'well'
)); ?>
    <fieldset>
	    <legend>Registrar Empresa</legend>
    <?php
        echo $this->Form->input('username', array('label' => "Nom d'usuari", 'placeholder' => "Nom d'usuari"));
        echo $this->Form->input('password', array('label' => 'Contrasenya', 'placeholder' => "Contrasenya")); 
        echo $this->Form->input('email', array('label' => 'Correu', 'placeholder' => "Correu"));
        echo $this->Form->input('name', array('label' => 'Nom', 'placeholder' => "Nom"));
        echo $this->Form->input('address', array('label' => 'Adreça', 'placeholder' => "Adreça"));
        echo $this->Form->input('nif', array('label' => 'NIF', 'placeholder' => "NIF"));
        echo $this->Form->input('type', array('type' => 'hidden', 'value' => $this->User->companyType);
    ?>
	<?php echo $this->Form->submit('Registrar', array(
		'div' => 'form-group',
		'class' => 'btn btn-default'
	)); ?>
    </fieldset>
<?php echo $this->Form->end(); ?>
</div>