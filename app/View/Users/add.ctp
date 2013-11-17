<!-- app/View/Users/add.ctp -->
<div class="users form">
<?php echo $this->Form->create('User'); ?>
    <fieldset>
        <legend><?php echo 'Registrar'; ?></legend>
        <?php echo $this->Form->input('username');
        echo $this->Form->input('password'); 
        echo $this->Form->input('type', array(
            'options' => array('coworker' => 'Coworker', 'empresa' => 'Empresa de cowork')
        ));
    ?>
    </fieldset>
<?php echo $this->Form->end('Registrar'); ?>
</div>