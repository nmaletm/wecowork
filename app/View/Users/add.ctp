<!-- app/View/Users/add.ctp -->
<div class="users form">
<?php echo $this->Form->create('Coworker'); ?>
    <fieldset>
    <?php
        echo $this->Form->input('name', array('label' => 'Nom'));
        echo $this->Form->input('username', array('label' => "Nom d'usuari"));
        echo $this->Form->input('password', array('label' => 'Contrasenya')); 
    ?>
    </fieldset>
<?php echo $this->Form->end('Registrar'); ?>
</div>

<div class="users form">
<?php echo $this->Form->create('Company'); ?>
    <fieldset>
    <?php
        echo $this->Form->input('name', array('label' => 'Nom'));
        echo $this->Form->input('username', array('label' => "Nom d'usuari"));
        echo $this->Form->input('password', array('label' => 'Contrasenya')); 
    ?>
    </fieldset>
<?php echo $this->Form->end('Registrar'); ?>
</div>