
<h1>Portada de l'usuari!</h1>

<ul>
	<li><a href="/users/logout">Logout</a></li>
</ul>

<?= $this->Session->read('Auth.User.username'); ?>

<h3> Espais Actuals 
	<?php echo $this->Html->link('Afegir Espai',
					array('controller' => 'places', 'action' => 'add', 
					$user['User']['id'])); ?>
  	<!-- <a href="add" class="btn btn-default pull-right">Afegir Oferta</a> -->
 </h3>

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
					<?php echo $this->Html->link($offer['Place']['name'],
					array('controller' => 'places', 'action' => 'view', 
					$place['Place']['id'])); ?>
				</td>
				<td><?php echo $offer['Place']['phone']; ?></td>
				<td><?php echo $offer['Place']['address']; ?></td>
			</tr>
		<?php endforeach; ?>
	</tbody>
 </table>