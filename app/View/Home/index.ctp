


<div class="row">
        <div class="col-lg-12 text-center v-center">
             <h1 class="brand">WeCowork</h1>

            <p class="lead">Cerca el teu espai de cowork!</p>
            <br class="">
            <br class="">
            <br class="">
            
			<?php echo $this->Form->create('Place', array(
				'action' => 'search',
				'class' => 'col-lg-12'
			)); ?>
				<div class="input-group" style="max-width:600px;text-align:center;margin:0 auto;">
					<input type="text" class="form-control" name="data[Place][name]">
					<span class="input-group-btn">
						<button class="btn btn-default" type="button">Cercar!</button>
					</span>
				</div>
			<?php echo $this->Form->end(); ?>
        </div>
    </div>
    <!-- /row -->
    <br class="">
    <br class="">
    <br class="">
    <br class="">
    <br class="">

<style type="text/css">

body{
  height: 100%;
  width: 100%;
  background: url('/img/home/1.jpg') repeat scroll center center / cover;
}

h1 {
  font-size:80px;
  color:#5C5C5C;
  text-shadow: 0px 0px 7px rgba(255, 255, 255, 1);
}

.lead {
	color:#5C5C5C;
	text-shadow: 0px 0px 7px rgba(255, 255, 255, 1);
}
</style>