

<div class="users form">
<?php echo $this->Form->create('Place', array(
	'action' => 'search'
)); ?>
   <div class="input-group">
      <?php
        echo $this->Form->input('name', array('placeholder' => "Que estas cercant?", 'class' => 'form-control'));
    	?>
      <span class="input-group-btn">
        <?php echo $this->Form->submit('Cercar!', array(
			'div' => 'form-group',
			'class' => 'btn btn-default'
		)); ?>
      </span>
  </div>
<?php echo $this->Form->end(); ?>
</div>

<style type="text/css">
body{
  height: 100%;
  width: 100%;
  background: url('/img/home/1.jpg') repeat scroll center center / cover;
}

</style>