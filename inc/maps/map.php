<script type="text/javascript"><!--
var center = null;
var map = null;
var bounds = new google.maps.LatLngBounds();
function initialize() {
  var myOptions = {
    zoom: 8,
    center: new google.maps.LatLng(54.40624,-124.25916),
    mapTypeId: google.maps.MapTypeId.ROADMAP
  }
  map = new google.maps.Map(document.getElementById("map"), myOptions);
google.maps.event.addListener(map, 'zoom_changed', function() {
    zoomChangeBoundsListener = 
        google.maps.event.addListener(map, 'bounds_changed', function(event) {
            if (this.getZoom() > 15 && this.initialZoom == true) {
                // Change max/min zoom here
                this.setZoom(15);
                this.initialZoom = false;
            }
        google.maps.event.removeListener(zoomChangeBoundsListener);
    });
});
map.initialZoom = true;	
	// Add markers to the map
	// For some reason, the php tags need to be broken up before the last bracket to work
	<?php foreach ($markers as $marker){ echo $marker; ?> 
	<?php } ?>
		center = bounds.getCenter();
		map.fitBounds(bounds);	
}

var infoBubble = new InfoBubble({
	minWidth: 100,
	padding: 10,
	borderRadius: 10,
	borderWidth: 4, 
	borderColor: '#fff',
	backgroundColor: '#fff',
	backgroundImage: '',		
	background: '#685 url(<?php bloginfo('template_directory'); ?>/graphics/paper_2_trans.png)',		
	backgroundClassName: 'phoney',	
	arrowSize: 15,
	arrowPosition: 50,
	arrowStyle: 0
});


var markers = [];	
function createMarker(latlng, html) {
	var contentString = html;
	var marker = new google.maps.Marker({
		position: latlng,
		map: map
	});
	bounds.extend(latlng);
	google.maps.event.addListener(marker, 'click', function() {
		infoBubble.setContent(contentString);
		infoBubble.open(map, marker);
	});
	markers.push(marker);
}	
--></script>