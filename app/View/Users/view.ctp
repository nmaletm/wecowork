<?= $this->Session->read('Auth.User.username'); ?>

<div class"row">
	<div class="col-md-8">
		<section id="places" class="section_card" style="border-style:solid; border-width:1px; border-color:#d9d9d9">
			<div class="header" style="box-shadow: 0 1px 6px #d9d9d9">
				<h3> 
					<span class="glyphicon glyphicon-home"> 
					</span>
					Espais
					<?php echo $this->Html->link('Afegir Espai',
											array(
													'controller' => 'places', 
													'action' => 'add', 
													$user['User']['id']
												),
											array('class' => 'btn btn-primary pull-right')
										); ?>
				</h3>
				
			</div>
			<div class="body">
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
		</section>
	

		 
	</div>
	<div id="user_info_tab" class="col-md-4">
		<div class="user_avatar">
			<!--<img src="http://www.progressoutofpoverty.org/sites/all/themes/orbit_theme/images/no_user.gif" class="img-rounded"/>-->
			<!--<div style="width:200px; height:200px; background:url('/img/users/<?php echo $user['User']['username']; ?>.png') center center; background-size: cover;" class="img-rounded">
			</div> -->
			<div style="width:200px; height:200px; background:url('/img/users/nmaletm.png') center center; background-size: cover;" class="img-rounded">
			</div>
			
			<h2 class="fn"> <?php echo $user['User']['name']; ?> </h2>
			<p>
				<em> <?php echo $user['User']['username']; ?> </em>
			</p>
		</div>
		<div class="user_info">
			<span class="glyphicon glyphicon-envelope"> 
			</span>
			<b>E-mail</b>
			<?php echo $user['User']['email']; ?>
			<br>
			<span class="glyphicon glyphicon-globe"> 
			</span>
			<b>Website</b>
			<a href="<?php echo $user['User']['website']; ?>"> <?php echo $user['User']['website']; ?> </a>
		</div>
	</div>
</div>