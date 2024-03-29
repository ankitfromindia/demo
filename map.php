<div class="row">
<div class="col-md-2 col-sm-2 col-xs-2">
<p><button class="btn btn-primary btn-sm" id="map-address-btn"><span>Find It</span></button></p>
</div><!-- .col -->
<div class="col-md-10 col-sm-10 col-xs-10">
<div class="panel panel-default">
<div class="panel-heading">Location Response</div>
<div class="panel-body">
<p>Enter Address: <input id="location-address" type="text" class="form-control" placeholder="Street, City, State"/</p>
<p>Map:</p><div id="map-canvas" style="height: 400px;"></div>
</div>
</div>
</div><!-- .col -->
</div><!-- .row -->
 
<script type="text/javascript" src="http://maps.google.com/maps/api/js?sensor=true"></script>
<script>
"use strict";
var geocoder;
var map;
// setup initial map
function initialize() {
geocoder = new google.maps.Geocoder();	// create geocoder object
var latlng = new google.maps.LatLng(40.6700, -73.9400);	// set default lat/long (new york city)
var mapOptions = {	// options for map
zoom: 8,
center: latlng
}
map = new google.maps.Map(document.getElementById('map-canvas'), mapOptions);	// create new map in the map-canvas div
}
// function to geocode an address and plot it on a map
function codeAddress(address) {
geocoder.geocode( { 'address': address}, function(results, status) {
if (status == google.maps.GeocoderStatus.OK) {
map.setCenter(results[0].geometry.location);	// center the map on address
var marker = new google.maps.Marker({	// place a marker on the map at the address
map: map,
position: results[0].geometry.location
});
} else {
alert('Geocode was not successful for the following reason: ' + status);
}
});
}
 
google.maps.event.addDomListener(window, 'load', initialize);	// setup initial map
 
$(document).ready(function() {
 
// get map button functionality
$("#map-address-btn").click(function(event){
event.preventDefault();	
var address = $("#location-address").val();	// grab the address from the input field
codeAddress(address);	// geocode the address
});
});
</script>