<!-- app/View/Places/index.ctp -->
<h1> All Places </h1>
<table>
	<tr>Nom</tr>
	<tr>Teléfon</tr>
	<tr>Adreça</tr>
	<!-- loop to print all the places -->
	<?php foreach ($places as $place): ?>
		<tr>
			<td><?php echo $post['Place']['name']; ?</td>
			<td><?php echo $post['Place']['phone']; ?</td>
			<td><?php echo $post['Place']['address']; ?</td>
		</tr>
	<?php endforeach; ?>
</table>