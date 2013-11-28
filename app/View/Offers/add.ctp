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
	    <legend>Crear Oferta</legend>
    <?php
        echo $this->Form->input('title', array('label' => "Títol", 'placeholder' => "Títol"));
        echo $this->Form->input('information', array('label' => 'Informació', 'placeholder' => "Informació"));
    ?>
	<?php echo $this->Form->submit('Crear', array(
		'div' => 'form-group',
		'class' => 'btn btn-default'
	)); ?>
    </fieldset>
<?php echo $this->Form->end(); ?>
</div>