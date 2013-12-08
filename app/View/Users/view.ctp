<!-- <?= $this->Session->read('Auth.User.username'); ?> -->

<div class"row">
	<div class="col-md-8">
		<section id="places" class="section_card" style="border-radius:5px; border-style:solid; border-width:1px; border-color:#d9d9d9">
			<div class="header" style="border-style:solid; border-width:1px; border-color:#d9d9d9; border-radius:5px;background-color: #fafafa ;box-shadow: 0 1px 6px #d9d9d9; padding-top: 1px; padding-right:10px; padding-left:10px; padding-bottom:10px">
				<h3>
					<span class="glyphicon glyphicon-home" style="padding-right:10px;padding-left:10px"> 
					</span>
					Espais de cowork

					<? if($isOwner) { ?>
					<?php echo $this->Html->link('Gestionar Espais',
											array(
													'controller' => 'places', 
													'action' => 'index', 
													$user['User']['id']
												),
											array('class' => 'btn btn-primary pull-right')
										); ?>
					<? } ?>
				</h3>
				
			</div>
			<div class="body" style="padding-top:5px">
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
		<br>
		<br>
		<? if($isOwner) { ?>
			<section id="messages" class="section_card" style="border-radius:5px; border-style:solid; border-width:1px; border-color:#d9d9d9">
				<div class="header" style="border-style:solid; border-width:1px; border-color:#d9d9d9; border-radius:5px;background-color: #fafafa ;box-shadow: 0 1px 6px #d9d9d9; padding-top: 1px; padding-right:10px; padding-left:10px; padding-bottom:10px">
					<h3>
						<span class="glyphicon glyphicon-envelope" style="padding-right:10px; padding-left:10px"> 
						</span>
						Missatges
						<?php echo $this->Html->link('Nou Missatge',
												array(
														'controller' => 'places', 
														'action' => 'add', 
														$user['User']['id']
													),
												array('class' => 'btn btn-primary pull-right')
											); ?>
					</h3>
					
				</div>
				<div class="body" style="padding-top:5px">
					<div style="text-align:center">
							<h3 style="color:#8a8888"></i> No tens cap Missatge</h3>
					</div>
				</div>
			</section>
		<? } ?>
	</div>
	<div id="user_info_tab" class="col-md-4">
		<div class="user_avatar">
			<div style="width:180px; height:180px; background:url('/img/photo.php?filetype=png&type=users&id=<?php echo $user['User']['username']; ?>&default=no_user') center center; background-size: cover;" class="img-rounded">
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
		<? if (!$isOwner) { ?>
			<br>
			<a href="#contactOwnerModal" type="button" class="btn btn-primary btn-md" data-toggle="modal">
	  				<span class="glyphicon glyphicon-send"></span> 
	  				Contactar amb <?php echo $user['User']['username']; ?>
			</a>

			<!-- Contact Modal -->
			<div id="contactOwnerModal" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
				<div class="modal-header">
					<h3> Quin és el teu missatge per <?php echo $user['User']['username']; ?> ? </h3>
				</div>
				<div class="modal-body">
					<textarea class="required" name="the_text" placeholder="Escriu aqui el teu missatge" cols="30" rows="5"></textarea>
				</div>
				<div class="modal-footer">
					<button class="btn" data-dismiss="modal" aria-hidden="true">Tancar</button>
					<button class="btn btn-primary" data-dismiss="modal" aria-hidden="true">Enviar</button>
				</div>
			</div>
		<? } ?>
	</div>
</div>