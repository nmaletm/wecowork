
<div class="users form">
<?php echo $this->Form->create('Place', array(
	'inputDefaults' => array(
		'div' => 'form-group',
		'wrapInput' => false,
		'class' => 'form-control'
	),
	'class' => 'well'
)); ?>
    <fieldset>
    <?php
        echo $this->Form->input('name', array('label' => 'Cercar espai', 'placeholder' => "Quin és el seu nom o la seva adreça?"));
    ?>
	<?php echo $this->Form->submit('Cercar', array(
		'div' => 'form-group',
		'class' => 'btn btn-default'
	)); ?>
    </fieldset>
<?php echo $this->Form->end(); ?>
</div>
<?php if(count($places)){ ?> 
				<table class="table">
				 	<thead>
				 		<tr>
							<th>Nom</th>
							<th>Teléfon</th>
							<th>Adreça</th>
						</tr>
				 	</thead>
				 	<tbody>
						<!-- loop to print all the offers -->
						<?php foreach ($places as $place): ?>
							<tr>
								<td>
									<?php echo $this->Html->link($place['Place']['name'],
									array('controller' => 'places', 'action' => 'view', 
									$place['Place']['id'])); ?>
								</td>
								<td><?php echo $place['Place']['phone']; ?></td>
								<td><?php echo $place['Place']['address']; ?></td>
							</tr>
						<?php endforeach; ?>
					</tbody>
				 </table>
<?php } ?>