<!-- app/View/Places/add.ctp -->

<div class="opinions form">
<?php echo $this->Form->create('Opinion', array(
	'inputDefaults' => array(
		'div' => 'form-group',
		'wrapInput' => false,
		'class' => 'form-control'
	),
	'class' => 'well'
)); ?>
    <fieldset>
	    <legend>Escriu la teva opinió</legend>
    <?php

        echo $this->Form->input('text', array('label' => "La teva opinió", 'placeholder' => "Gràcies a la teva opinió la resta d'usuaris ho tindràn més fàcil al escollir un espai. Moltes Gràcies!"));
        echo $this->Form->input('qualification', array('options' => array(1, 2, 3, 4, 5),'empty' => '(La teva puntuació)'));
    ?>
	<?php echo $this->Form->submit('Enviar', array(
		'div' => 'form-group',
		'class' => 'btn btn-default'
	)); ?>
    </fieldset>
<?php echo $this->Form->end(); ?>
</div>