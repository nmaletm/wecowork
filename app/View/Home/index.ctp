
<div class="home-search">

<div class="users form">
<?php echo $this->Form->create('Place', array(
	'inputDefaults' => array(
		'div' => 'form-group',
		'wrapInput' => false,
		'class' => 'form-control',
		'action' => 'search'
	),
	'class' => 'well'
)); ?>
    <fieldset>
    <?php
        echo $this->Form->input('name', array('label' => 'Cercar espai', 'placeholder' => "Quin és el seu nom o la seva adreça?"));
    ?>
	<?php echo $this->Form->submit('Cercar', array(
		'div' => 'form-group',
		'class' => 'btn btn-default'
	)); ?>
    </fieldset>
<?php echo $this->Form->end(); ?>
</div>
</div>
