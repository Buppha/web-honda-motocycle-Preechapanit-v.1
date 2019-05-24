<!DOCTYPE html>
<html>
<head>
<meta http-equiv="content-type" content="text/html; charset=UTF-8" />
<title>Google Map Test by Deawx</title>
<script src="http://maps.google.com/maps/api/js?sensor=false"           type="text/javascript"></script>
<style>
html {
  height: auto;
}

body {
  height: auto;
  margin: 0;
  padding: 0;
}
#map {
  height: auto;
  position: absolute;
  bottom:0;
  left:0;
  right:0;
  top:0;
}

@media print {
  #map {
    height: 950px;
  }
}
</style>
</head>
<body>
<div id="map"></div>

<script type="text/javascript">   
 var locations = [   
    ['สาขาสุริยเดชบำรุง', 16.060309, 103.654065,'images/radio-control-model-car.png', 1],  
	['สาขาเทวาภิบาล', 16.053608, 103.649471,'images/festival.png', 2], 
	['สาขาเพลินจิต', 16.059592, 103.656920,'images/workshop.png', 3]
	];    
var map = new google.maps.Map(document.getElementById('map'), {      
zoom: 13,      
center: new google.maps.LatLng(16.058375, 103.650953),      
mapTypeId: google.maps.MapTypeId.ROADMAP   
});    
var infowindow = new google.maps.InfoWindow();    
var marker, i;    for (i = 0; i < locations.length; i++) {        
marker = new google.maps.Marker({        
position: new google.maps.LatLng(locations[i][1], locations[i][2]),       
map: map,
icon: locations[i][3]
});     

google.maps.event.addListener(marker, 'click', (function(marker, i) {        
return function() {         
 infowindow.setContent(locations[i][0]);          
 infowindow.open(map, marker);        
 }      
 })
 (marker, i));    
 }  
 </script>
</body>
</html>
