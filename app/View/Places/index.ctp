<!-- app/View/Places/index.ctp -->
<section id="places" class="section_card" style="border-radius:5px; border-style:solid; border-width:1px; border-color:#d9d9d9">
			<div class="header" style="border-style:solid; border-width:1px; border-color:#d9d9d9; border-radius:5px;background-color: #fafafa ;box-shadow: 0 1px 6px #d9d9d9; padding-top: 1px; padding-right:10px; padding-left:10px; padding-bottom:10px">
				<h3>
					<span class="glyphicon glyphicon-home" style="padding-right:10px;padding-left:10px"> 
					</span>
					Espais de cowork
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
			<div class="body" style="padding-top:5px">
				<table class="table">
				 	<thead>
				 		<tr>
							<th>Nom</th>
							<th>Teléfon</th>
							<th>Adreça</th>
							<th></th>
							<th></th>
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
								<td>
									<button type="button" class="btn btn-default btn-lg">
  										<span class="glyphicon glyphicon-edit"></span> Editar
									</button>
								</td>
								<td>
									<button type="button" class="btn btn-danger btn-lg">
  										<span class="glyphicon glyphicon-remove-circle"></span>
									</button>
								</td>
							</tr>
						<?php endforeach; ?>
					</tbody>
				 </table>
			</div>
		</section>