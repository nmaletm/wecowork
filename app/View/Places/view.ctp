<!-- app/View/Places/view.ctp -->

<h1>
	<?php echo $place['Place']['name']?>
</h1>

<address>
  <a href="mailto:#">
  	<?php echo $place['Place']['website']?>
  </a>
  <?php echo $place['Place']['phone']?>
</address>

<<?php echo $place['Place']['aditionalInfo']?>