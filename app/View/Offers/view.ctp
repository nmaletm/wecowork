<!-- app/View/Places/view.ctp -->

<h1>
	<?php echo $place['Place']['name']?>
</h1>

<address>
  <a href="$place['Place']['website']">
  	<?php echo $place['Place']['website']?>
  </a> <br>
  <?php echo $place['Place']['address']?>  <br>
  <strong>
  	<?php echo $place['Place']['phone']?>
  </strong>
</address>

<?php echo $place['Place']['aditionalinfo']?>