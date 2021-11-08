<?php include'db_connect.php' ?>
<div class="col-lg-12">
	<div class="card card-outline card-primary">
		<div class="card-header">
			<div class="card-tools">
				<a class="btn btn-block btn-sm btn-default btn-flat border-primary " href="./index.php?page=new_parcel"><i class="fa fa-plus"></i> Add New</a>
			</div>
		</div>
		<div class="card-body">
			<div id="map" style="width: 100%; height: 80vh;"></div>
		</div>
	</div>
</div>
<style>
	table td{
		vertical-align: middle !important;
	}
</style>

<script>
	function initMap() {
		var mapOptions = {
		zoom: 18,
		center: {<?php echo'lat:'. $latitudes[0] .', lng:'. $longitudes[0] ;?>}, //{lat: --- , lng: ....}
		mapTypeId: google.maps.MapTypeId.SATELITE
		};

		var map = new google.maps.Map(document.getElementById('map'),mapOptions);

		var RouteCoordinates = [
			<?php
				$i = 0;
			while ($i < count($coordinates)) {
				echo $coordinates[$i];
				$i++;
			}
			?>
		];

		var RoutePath = new google.maps.Polyline({
		path: RouteCoordinates,
		geodesic: true,
		strokeColor: '#1100FF',
		strokeOpacity: 1.0,
		strokeWeight: 10
		});

		mark = 'img/mark.png';
		flag = 'img/flag.png';

		startPoint = {<?php echo'lat:'. $latitudes[0] .', lng:'. $longitudes[0] ;?>};
		endPoint = {<?php echo'lat:'.$latitudes[$lastcount] .', lng:'. $longitudes[$lastcount] ;?>};

		var marker = new google.maps.Marker({
			position: startPoint,
			map: map,
			icon: flag,
			title:"Start point!",
			animation: google.maps.Animation.DROP
		});

		var marker = new google.maps.Marker({
		position: endPoint,
		map: map,
		icon: mark,
		title:"End point!",
		animation: google.maps.Animation.BOUNCE
	});

		RoutePath.setMap(map);
	}

	google.maps.event.addDomListener(window, 'load', initialize);
</script>

<!--remenber to put your google map key-->
<script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyC-dFHYjTqEVLndbN2gdvXsx09jfJHmNc8&callback=initMap"></script>
