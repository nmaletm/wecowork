<!-- app/View/Places/index.ctp -->
<h1> All Places </h1>
<table>
	<tr>Nom</tr>
	<tr>Teléfon</tr>
	<tr>Adreça</tr>
	<!-- loop to print all the places -->
	<?php foreach ($places as $place): ?>
		<tr>
			<td><?php echo $place['name']; ?></td>
			<td><?php echo $place['phone']; ?></td>
			<td><?php echo $place['address']; ?></td>
		</tr>
	<?php endforeach; ?>
</table>