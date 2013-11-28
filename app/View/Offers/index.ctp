<!-- app/View/Places/index.ctp -->
<h1> All Offers </h1>
<table class="table">
	<thead>
		<tr>
			<th>Títol</th>
			<th>Date</th>
			<th>Informació</th>
		</tr>	
	</thead>
	<tbody>
		<!-- loop to print all the offers -->
		<?php foreach ($offers as $offer): ?>
			<tr>
				<td>
					<?php echo $this->Html->link($place['Offer']['title'],
					array('controller' => 'offers', 'action' => 'view', 
					$place['Offer']['id'])); ?>
				</td>
				<td><?php echo $place['Offer']['publicationdate']; ?></td>
				<td><?php echo $place['Offer']['information']; ?></td>
			</tr>
		<?php endforeach; ?>
	</tbody>
</table>