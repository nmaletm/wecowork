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

<h3> Ofertes Actuals 
	<?php echo $this->Html->link('Afegir Oferta',
					array('controller' => 'offers', 'action' => 'add', 
					$place['Place']['id'])); ?>
  	<!-- <a href="add" class="btn btn-default pull-right">Afegir Oferta</a> -->
 </h3>

