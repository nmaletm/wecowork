<!-- app/View/Users/addCoworker.ctp -->
<div class="users form">
<?php echo $this->Form->create('Coworker'); ?>
    <fieldset>
	    <legend>Registrar Coworker</legend>
    <?php
        echo $this->Form->input('username', array('label' => "Nom d'usuari"));
        echo $this->Form->input('password', array('label' => 'Contrasenya')); 
        echo $this->Form->input('email', array('label' => 'Correu'));
        echo $this->Form->input('name', array('label' => 'Nom'));
    ?>
    </fieldset>
<?php echo $this->Form->end('Registrar'); ?>
</div>
