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
					<?php echo $this->Html->link($offer['Offer']['title'],
					array('controller' => 'offers', 'action' => 'view', 
					$offer['Offer']['id'])); ?>
				</td>
				<td><?php echo $offer['Offer']['publicationdate']; ?></td>
				<td><?php echo $offer['Offer']['information']; ?></td>
			</tr>
		<?php endforeach; ?>
	</tbody>
</table>