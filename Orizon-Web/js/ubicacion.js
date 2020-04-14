$(function() {
	// Parallax effect binding to onscroll event:
	$(window).scroll(function() {
		var scroll_ratio = 0.5;
		var scroll_front = $(this).scrollTop();
		var scroll_back  = scroll_front * scroll_ratio;
		$('div.capa_trasera').css('top', scroll_back +'px');
	});
});

$(window).on('load', function() {
	// Load-Overlay fadeout when page finish loading:
	$('#load-overlay').fadeOut();
	$('body').css('overflow-y', 'auto');
});

var map;

function initMap() {
	
	var mapOptions = {
		center: {
			lat: -45.6772923,
			lng: -70.5470254
		},
		zoom: 10
	}
	map = new google.maps.Map(document.getElementById('mapa-ubicacion'), mapOptions);
	
	var markerOptions = {
		position: {
			lat: -45.6772923,
			lng: -70.5470254
		},
		map: map,
		title: 'Orizon'
	}
	var markerA = new google.maps.Marker(markerOptions);
	markerA.addListener('click', function(event) {
		window.open('https://www.google.com/maps/place/ORIZON/@-45.6772923,-70.5470254,9.83z/data=!4m11!1m5!8m4!1e2!2s117041339481273383468!3m1!1e1!3m4!1s0xbdf1fdb6cb18b779:0xc12e6a72b3ca283c!8m2!3d-45.6991157!4d-70.3447521', '_blank');
	});
	/*
	var markerB = new google.maps.Marker({position: {
		lat: -45.7886748,
		lng: -68.1116962
	}, map: map});
	*/
}