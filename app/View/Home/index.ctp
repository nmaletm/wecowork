

<div class="users form">
<?php echo $this->Form->create('Place', array(
	'action' => 'search'
)); ?>
	<div class="input-group">
		<input type="text" class="form-control" name="data[Place][name]">
		<span class="input-group-btn">
			<button class="btn btn-default" type="button">Cercar!</button>
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