<!-- app/View/Users/addCompany.ctp -->
<div class="users form">
<?php echo $this->Form->create('Space'); ?>
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
<?php echo $this->Form->end('Registrar'); ?>
</div>