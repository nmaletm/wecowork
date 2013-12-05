<!-- app/View/Places/view.ctp -->
<?php echo $this->Html->script('https://maps.googleapis.com/maps/api/js?sensor=false');?>
<script type="text/javascript">
      function initialize() {
        var map_canvas = document.getElementById('map_canvas');
        var map_options = {
          center: new google.maps.LatLng(44.5403, -78.5463),
          zoom: 8,
          mapTypeId: google.maps.MapTypeId.ROADMAP
        }
        var map = new google.maps.Map(map_canvas, map_options)
        codeAddress(map);
      }
      google.maps.event.addDomListener(window, 'load', initialize);

     geocoder = new google.maps.Geocoder();

  function codeAddress(map) {
    //In this case it gets the address from an element on the page, but obviously you  could just pass it to the method instead
    var address = '<?php echo $place['Place']['address']?>';

    geocoder.geocode( { 'address': address}, function(results, status) {
      if (status == google.maps.GeocoderStatus.OK) {
        //In this case it creates a marker, but you can get the lat and lng from the location.LatLng
        map.setCenter(results[0].geometry.location);
        var marker = new google.maps.Marker({
            map: map, 
            position: results[0].geometry.location
        });
      } 
    });
  }

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

		<section id="offfers" class="section_card" >
			<div class="header" style="border-width: 1px; border-radius:5px;background-color: #fafafa ;box-shadow: 0 1px 6px #d9d9d9; padding-top: 1px; padding-right:10px; padding-left:10px; padding-bottom:10px">
				<h3 style="color:#8a8888">
					Ofertes Actuals 
					<?php echo $this->Html->link('Afegir Oferta',
							array('controller' => 'offers', 'action' => 'add', 
							$place['Place']['id']),
							array('class' => 'btn btn-primary pull-right')); ?>
				</h3>
				
			</div>
			<div class="body" style="padding-top:5px">
				<div class="row-fluid">
					 <?php foreach ($offers as $offer): ?>
						<div class="col-md-1">
							<div style="background-color: #333; width:50px; height:50px; background:url('https://cdn1.iconfinder.com/data/icons/customicondesignoffice2/256/FAQ.png') center center; background-size: cover;" class="img-circle">
							<td>
								<?php echo $this->Html->link($offer['Offer']['title'],
								array('controller' => 'offers', 'action' => 'view', 
								$offer['Offer']['id'])); ?>
							</td>
						</div>
					<?php endforeach; ?>
				</div>
			</div>
		</section>

		 <section id="opinions" class="section_card" >
			<div class="header" style="border-width: 1px; border-radius:5px;background-color: #fafafa ;box-shadow: 0 1px 6px #d9d9d9; padding-top: 1px; padding-right:10px; padding-left:10px; padding-bottom:10px">
				<h3 style="color:#8a8888">
					Opinió dels usuaris
					<?php echo $this->Html->link('Escriu la teva opinió',
							array('controller' => 'opinions', 'action' => 'add', 
							$place['Place']['id']),
							array('class' => 'btn btn-primary pull-right')); ?>
				</h3>
				
			</div>
			<div class="body" style="padding-top:5px">
				 <table class="table" style="border-top: none">
				 	<tbody>
						<?php foreach ($opinions as $opinion): ?>
								<tr>
									<td class="col-md-1" style="border-top:none">
										<div>
											<div style="background-color: #333; width:50px; height:50px; background:url('http://www.progressoutofpoverty.org/sites/all/themes/orbit_theme/images/no_user.gif') center center; background-size: cover;" class="img-rounded">
											</div>
											<?php echo $this->Html->link($opinion['Opinion']['coworker'],
													array('controller' => 'users', 'action' => 'view', 
													$opinion['Opinion']['coworkerid'])); ?>
										</div>
									</td>
									<td style="border-top:none">
										<p style="box-shadow: 0 1px 6px #3276b1; position:relative; padding:15px; border-color:#3276b1; border-style:solid; border-radius:10px; border-width:0px">
											<?php echo $opinion['Opinion']['qualification']; ?>
											<?php echo $opinion['Opinion']['text']; ?>
										</p>
									</td>
								</tr>	
						<?php endforeach; ?>
					</tbody>
				</table>
			</div>
		</section>	
	</div>
	<div class="col-md-4">
		<div class="place_avatar pull-right" style="width:300px; height:300px; background:url('http://www.hubsarasota.com/files/coworking-4.jpg') center center; background-size: cover;" class="img-circle">
		</div>
		<br>
		<p class="pull-right" style="margin-top:10px">
			<em><?php echo $place['Place']['address']?></em>
		</p>
		<br>
		 <div id="map_canvas" class="pull-right" style="width: 300px; height: 300px; background-color: #CCC"></div>
	</div>
</div>

