<!-- app/View/Places/add.ctp -->

<div class="places form">
<?php echo $this->Form->create('Place', array(
	'inputDefaults' => array(
		'div' => 'form-group',
		'wrapInput' => false,
		'class' => 'form-control'
	),
	'class' => 'well'
)); ?>
    <fieldset>
	    <legend>Crear Espai de Coworking</legend>
    <?php
        echo $this->Form->input('name', array('label' => "Nom de l'espai", 'placeholder' => "Nom de l'espai"));
       echo $this->Form->input('address', array('label' => 'Direcció', 'placeholder' => "Direcció")); 
        echo $this->Form->input('phone', array('label' => 'Teléfon', 'placeholder' => "Teléfon"));
        echo $this->Form->input('website', array('label' => 'URL', 'placeholder' => "URL"));
		echo $this->Form->input('aditionalInfo', array('label' => 'Informació Adicional', 'placeholder' => "Informació Adicional"));
    ?>
	<?php echo $this->Form->submit('Crear', array(
		'div' => 'form-group',
		'class' => 'btn btn-default'
	)); ?>
    </fieldset>
<?php echo $this->Form->end(); ?>
</div>