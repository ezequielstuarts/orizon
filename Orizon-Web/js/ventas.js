$(function(){
	$('.lista_puntos_venta ul li').click(function() {
		$('.lista_puntos_venta ul li').removeClass('active');
		var li = $(this);
		if(li.is('.active')) {
			li.removeClass('active');
		} else {
			li.addClass('active');
		}
		
		var coords = li.data('coords');
		try {
			coords = coords.split(',');
			// console.log('Latitud: '+ coords[0] +'\nLongitud: '+ coords[1]);
			var mapOffset = $('#mapa-ventas').offset();
			// console.log('mapOffset: '+ mapOffset.top);
			$('html, body').animate({
				scrollTop: mapOffset.top - 150
			}, 400, function() {
				var position = {
					lat: (coords[0] * 1),
					lng: (coords[1] * 1)
				};
				marker.setPosition(position);
				map.panTo(position);
				map.setZoom(10);
			});
		} catch(e) {
			console.log(e);
		}
	});
});

$(window).on('load', function() {
	// Load-Overlay fadeout when page finish loading:
	$('#load-overlay').fadeOut();
	$('body').css('overflow-y', 'auto');
});

var map;
var marker;

function initMap() {
	
	var puntoVenta = $('.lista_puntos_venta ul li.active');
	var coords = puntoVenta.data('coords');
	var title = puntoVenta.html();
	coords = coords.split(',');
	console.log('Latitud: '+ coords[0] +'\nLongitud: '+ coords[1]);
	
	var mapOptions = {
		center: {
			lat: (coords[0] * 1),
			lng: (coords[1] * 1)
		},
		zoom: 10
	}
	map = new google.maps.Map(document.getElementById('mapa-ventas'), mapOptions);
	
	var markerOptions = {
		position: {
			lat: (coords[0] * 1),
			lng: (coords[1] * 1)
		},
		map: map,
		title: 'Orizon - '+ title
	}
	marker = new google.maps.Marker(markerOptions);
}