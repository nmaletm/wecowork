<?= $this->Session->read('Auth.User.username'); ?>

<div class"row">
	<div class="col-md-8">
		<h3> Espais Actuals 
			<?php echo $this->Html->link('Afegir Espai',
											array(
													'controller' => 'places', 
													'action' => 'add', 
													$user['User']['id']
												),
											array('class' => 'btn btn-primary pull-right')
										); ?>
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
	</div>
	<div id="user_info_tab" class="col-md-4">
		<div class="user_avatar">
			<img src="http://www.progressoutofpoverty.org/sites/all/themes/orbit_theme/images/no_user.gif" class="img-rounded">
			<h2 class="fn"> <?php echo $user['User']['name']; ?> </h2>
			<p>
				<em> <?php echo $user['User']['username']; ?> </em>
			</p>
		</div>
		<div class="user_info">
			<span> 
				<i class="glyphicon-envelope"></i>
				<b>E-mail</b>
				<?php echo $user['User']['email']; ?>
			</span>
			<span> 
				<i class="glyphicon-globe"></i>
				<b>Website</b>
				<?php echo $user['User']['website']; ?>
			</span>
		</div>
	</div>
</div>