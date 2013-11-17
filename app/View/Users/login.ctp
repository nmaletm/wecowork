<!-- app/View/Users/login.ctp -->
<div class="users form">
<?php echo $this->Session->flash('auth'); ?>
<?php echo $this->Form->create('User'); ?>
    <fieldset>
        <legend><?php echo "Si us plau, introdueix una contrasenya i un nom d'usuari"; ?></legend>
        <?php echo $this->Form->input('username');
        echo $this->Form->input('password');
    ?>
    </fieldset>
<?php echo $this->Form->end('Iniciar sessió'); ?>
</div>