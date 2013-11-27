<!-- app/View/Places/add.ctp -->
<div class="places form">
<?php echo $this->Form->create('Place'); ?>
    <fieldset>
	    <legend>Crear Espai</legend>
    <?php
        echo $this->Form->input('name', array('label' => "Nom"));
        echo $this->Form->input('address', array('label' => 'Direcció')); 
        echo $this->Form->input('phone', array('label' => 'Teléfon'));
        echo $this->Form->input('web', array('label' => 'URL'));
		echo $this->Form->input('aditionalInfo', array('label' => 'Informació Adicional'));
    ?>
    </fieldset>
<?php echo $this->Form->end('Crear'); ?>
</div>