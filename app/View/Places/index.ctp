<!-- app/View/Places/index.ctp -->
<h1> All Places </h1>
<table class="table">
	<thead>
		<tr>
			<th>Nom</th>
			<th>Teléfon</th>
			<th>Adreça</th>
		</tr>	
	</thead>
	<tbody>
		<!-- loop to print all the places -->
		<?php foreach ($places as $place): ?>
			<tr>
				<td><?php echo $place['Place']['name']; ?></td>
				<td><?php echo $place['Place']['phone']; ?></td>
				<td><?php echo $place['Place']['address']; ?></td>
			</tr>
		<?php endforeach; ?>
	</tbody>
</table>