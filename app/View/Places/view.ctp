<!-- app/View/Places/view.ctp -->

<h1>
	<?php echo $place['Place']['name']?>
</h1>

<div class"row">
	<div class="col-md-8">
		<address>
		  <a href="<?php echo $place['Place']['website']?>">
		  	<?php echo $place['Place']['website']?>
		  </a> <br>
		  <strong>
		  	<span class="glyphicon glyphicon-earphone" style="padding-right:5px;padding-left:5px"> 
			</span> 
			<?php echo $place['Place']['phone']?>
		  </strong>
		</address>
		<?php echo $place['Place']['aditionalinfo']?>
		<h3> Ofertes Actuals 
			<?php echo $this->Html->link('Afegir Oferta',
							array('controller' => 'offers', 'action' => 'add', 
							$place['Place']['id']),
							array('class' => 'btn btn-primary pull-right')); ?>
		  	<!-- <a href="add" class="btn btn-default pull-right">Afegir Oferta</a> -->
		 </h3>

		 <table class="table">
		 	<thead>
		 		<tr>
					<th>Títol</th>
					<th>Date</th>
					<th>Informació</th>
					<th>Espai</th>
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
						<td><?php echo $offer['Offer']['placeid']; ?></td>
					</tr>
				<?php endforeach; ?>
			</tbody>
		 </table>

		 <h3> Opinió dels usuaris
			<?php echo $this->Html->link('Escriu la teva opinió',
							array('controller' => 'opinions', 'action' => 'add', 
							$place['Place']['id']),
							array('class' => 'btn btn-primary pull-right')); ?>
		  	<!-- <a href="add" class="btn btn-default pull-right">Afegir Oferta</a> -->
		 </h3>

		  <table class="table">
		 	<thead>
		 		<tr>
					<th>Autor</th>
					<th>Puntuació</th>
					<th>Opinió</th>
					<th>Data</th>
				</tr>
		 	</thead>
		 	<tbody>
				<!-- loop to print all the opinions -->
				<?php foreach ($opinions as $opinion): ?>
					<tr>
						<td>
							<?php echo $this->Html->link($opinion['Opinion']['coworker'],
							array('controller' => 'users', 'action' => 'view', 
							$opinion['Opinion']['coworkerid'])); ?>
						</td>
						<td><?php echo $opinion['Opinion']['qualification']; ?></td>
						<td><?php echo $opinion['Opinion']['text']; ?></td>
						<td><?php echo $opinion['Opinion']['publicationdate']; ?></td>
					</tr>
				<?php endforeach; ?>
			</tbody>
		 </table>
	</div>
	<div class="col-md-4">
		<div class="place_avatar" style="width:200px; height:200px; background:url('http://www.hubsarasota.com/files/coworking-4.jpg') center center; background-size: cover;" class="img-rounded">
		</div>
		<em><?php echo $place['Place']['address']?></em>
		 <div id="map_canvas" style="width: 300px; height: 300px; background-color: #CCC"></div>
	</div>
</div>

