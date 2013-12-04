<!-- app/View/Places/view.ctp -->
<?php echo $this->Html->script('https://maps.googleapis.com/maps/api/js?sensor=false');?>
<script>
      function initialize() {
        var map_canvas = document.getElementById('map_canvas');
        var map_options = {
          center: new google.maps.LatLng(44.5403, -78.5463),
          zoom: 8,
          mapTypeId: google.maps.MapTypeId.ROADMAP
        }
        var map = new google.maps.Map(map_canvas, map_options)
      }
      google.maps.event.addDomListener(window, 'load', initialize);
    </script>
<div class"row">
	<div class="col-md-8">
		<h1>
			<?php echo $place['Place']['name']?>
		</h1>
		<address>
		  <a href="<?php echo $place['Place']['website']?>">
		  	<?php echo $place['Place']['website']?>
		  </a> <br>
		  <strong>
		  	<span class="glyphicon glyphicon-earphone" style="padding-right:5px;"> 
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
		<div class="place_avatar pull-right" style="width:300px; height:300px; background:url('http://www.hubsarasota.com/files/coworking-4.jpg') center center; background-size: cover;" class="img-rounded">
		</div>
		<br>
		<p class="pull-right" style="margin-top:10px">
			<em><?php echo $place['Place']['address']?></em>
		</p>
		<br>
		 <div id="map_canvas" class="pull-right" style="width: 300px; height: 300px; background-color: #CCC"></div>
	</div>
</div>

