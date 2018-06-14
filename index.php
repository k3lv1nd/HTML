<!DOCTYPE html>
<html>
<head>
	<title>HTML-LESSON</title>
	<style type="text/css">
		div.container{
			margin: 50px;
		}
		h1{
			text-align: center;
		}
	</style>
</head>
<body>
<div class="container">
	<h1>This is Basic HTML</h1>
	<h2>
		This is The Header
	</h2>
	<hr>
	<h3>Below is an example of a paragraph</h3>
	
	<p>
		Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
		tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
		quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
		consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
		cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
		proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
	</p>
	<hr>
	<div style="width: 100%;height: 250px">
		<div style="width: 45%;float: left;">
			<h3>Graphics Demo in html Using svg</h3>
			<svg width="400" height="110">
			  <rect width="300" height="100" style="fill:rgb(0,0,255);stroke-width:3;stroke:rgb(0,0,0)" /> 
			</svg>	
		</div>
		<div style="width: 45%;float: left;">
			<h3>Audio Demo </h3>
		  <audio controls style="margin-top: 25px;">
		  	<source src="videos/cole world.mp3" type="audio/mp3">
		  </audio>
		</div>
	</div>



	<hr>
	<div style="width: 100%; height: 250px;">
		<div style="width: 45%; float: left;">
			<h3>Multimedia Demo in html</h3>
			<video width="400" height="200" controls>
			  <source src="videos/movie.mp4" type="video/mp4">
			  <source src="videos/movie.mp4" type="video/mp4">
			</video>
		</div>
		<div style="width: 45%; float: right;">
			<h3>Google Maps Demo</h3>
			<div id="map" style="width:400px;height:250px;background:yellow"></div>
		</div>
	</div>


	<hr>

	
</div>

<script>
function myMap() {
var mapOptions = {
    center: new google.maps.LatLng(-1.288811, 36.823219),
    zoom: 10,
    mapTypeId: google.maps.MapTypeId.HYBRID
}
var map = new google.maps.Map(document.getElementById("map"), mapOptions);
}
</script>
<script 
    src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBu-916DdpKAjTmJNIgngS6HL_kDIKU0aU&callback=myMap"></script>
</body>
</html>