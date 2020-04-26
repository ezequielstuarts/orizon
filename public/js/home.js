$(function() {

	// Parallax effect binding to onscroll event:
	$(window).scroll(function() {
		// console.log('scroll event');
		var scroll_ratio = 0.5;
		var scroll_front = $(this).scrollTop();
		var scroll_back  = scroll_front * scroll_ratio;
		$('div.fondo_home').css('top', scroll_back +'px');
		// console.log('onready');
		evalBottleIcons(0);
		if(scroll_front>300){
			$(".mouse-scroll").fadeOut( 500 );
		}else{
			$(".mouse-scroll").fadeIn( 500 );
		}
	});
	// Adding click event to bottle icons:
	$('div.iconosbotella ul li').click(function() {
		var icon = $(this).data('icon');
		hideBottleIcons();
		setTimeout(function() {
			showWaterInfo(icon);
		},1000);
	});
	// Adding click event to close bottle icon:
	$('img.fuerza_agua_cerrar').click(function() {
		var icon = $(this).data('icon');
		hideWaterInfo(icon);
		setTimeout(function() {
			showBottleIcons();
		},600);
	});



	
		
	
	
		

});

$(window).on('load', function() {
	loaded = true;
	// home-overlay fadeout when page finish loading:
	$('#load-overlay').fadeOut();
	$('body').css('overflow-y', 'auto');
	// Slide up of bottle after page load:
	setTimeout(function() {
		$('div.botella').removeClass('botella_ini');
	}, 800);
	// Check Y-scroll to show bottle icons:
	setTimeout(function() {
		evalBottleIcons();
		animateBubbles();
		// $('.gotas_container .gota_agua').css('background-image', 'url(img/1920/'+ fondos[0] +')').removeClass('gota_oculta');
	}, 1800);

	$(".mouse-scroll").delay( 500 ).fadeIn( 300 );

	setInterval(function() {

	$(".arrow.a").delay( 200 ).fadeIn( 100 );
	$(".arrow.b").delay( 250 ).fadeIn( 100 );
	$(".arrow.c").delay( 300 ).fadeIn( 100 );
	$(".arrow.a").delay( 300 ).fadeOut( 50 );
	$(".arrow.b").delay( 400 ).fadeOut( 50 );
	$(".arrow.c").delay( 450 ).fadeOut( 50 );

	}, 1500); 
	

});




var start = true;
var loaded = false;
var waterIcon = false;
var fondos = [
	'burbuja1.png',
	'burbuja2.png',
	'burbuja3.png'
];
function evalBottleIcons() {
	if(loaded) {
		// alert('running evalBottleIcons()');
		// console.log('running evalBottleIcons()');
		var bottleIcons = $('div.iconosbotella ul li');
		// console.log(bottleIcons.first().css('opacity'));
		if( bottleIcons.first().is('hidden') == 0 ) {
			// console.log('calling showBottleIcons() | opacity: '+ bottleIcons.first().css('opacity'));
			var bottom_of_bottleicons = $('div.iconosbotella').offset().top + $('div.iconosbotella').outerHeight();
			// console.log('bottom of bottleicons: '+ bottom_of_bottleicons);
			var bottom_of_wiewport = $(window).scrollTop() + window.innerHeight;
			// console.log('bottom of wiewport: '+ bottom_of_wiewport);
			var bottom_offset = 0;
			var triggerPosition = (bottom_of_wiewport + bottom_offset) - bottom_of_bottleicons;
			// console.log('triggerPosition: '+ triggerPosition);
			if(triggerPosition > 0 && start) {
				// console.log('triggerPosition reached | value: '+ triggerPosition);
				showBottleIcons();
				start = false;
			}
		}
	}
}

function showBottleIcons(items, index, callbackEnd) {
	items = items ? items : $('div.iconosbotella ul li');
	index = index ? index : 0;
	// console.log('running showBottleIcons() | index: '+ index);
	if(items[index]) {
		fadingTime = 'fast';
		waitingTime = 200;
		// console.log('running showBottleIcons() | index: '+ index +' exists');
		$(items[index]).fadeIn(fadingTime);
		setTimeout(function() { showBottleIcons(items, ++index); }, waitingTime);
	} else {
		if(callbackEnd) {
			callbackEnd();
		}
	}
}

function hideBottleIcons(items, index, callbackEnd) {
	items = items ? items : $('div.iconosbotella ul li');
	index = (index || index === 0) ? index : items.length - 1;
	// console.log('running hideBottleIcons() | index: '+ index);
	if(items[index]) {
		fadingTime = 'fast';
		waitingTime = 200;
		$(items[index]).fadeOut(fadingTime);
		setTimeout(function() { hideBottleIcons(items, --index); }, waitingTime);
	} else {
		if(callbackEnd) {
			// console.log('running hideBottleIcons() callback - index: '+ index);
			callbackEnd();
		}
	}
}

function showWaterInfo(icon) {
	$('#fuerza-agua-'+ icon).fadeIn(400);
}

function hideWaterInfo(icon) {
	$('#fuerza-agua-'+ icon).fadeOut(400);
}

function animateBubbles() {
	setTimeout( function() { bubbleLoop(2) }, 200);
	setTimeout( function() { bubbleLoop(4) }, 600);
	setTimeout( function() { bubbleLoop(1) }, 1000);
	setTimeout( function() { bubbleLoop(6) }, 1400);
	setTimeout( function() { bubbleLoop(3) }, 1800);
	setTimeout( function() { bubbleLoop(5) }, 2000);
	setTimeout( function() { bubbleLoop(7) }, 200);
	setTimeout( function() { bubbleLoop(8) }, 600);
	setTimeout( function() { bubbleLoop(9) }, 1000);
	setTimeout( function() { bubbleLoop(10) }, 1400);
	setTimeout( function() { bubbleLoop(11) }, 1800);
	setTimeout( function() { bubbleLoop(12) }, 2000);
	setTimeout( function() { bubbleLoop(13) }, 1000);
	setTimeout( function() { bubbleLoop(14) }, 1400);
	setTimeout( function() { bubbleLoop(15) }, 1800);
	setTimeout( function() { bubbleLoop(16) }, 2000);
}
function bubbleLoop(i) {
	var gota = $('#gota-'+ i);
	var f = Math.floor(Math.random() * 3);
	// console.log('gota-'+ i +' - fondo: '+ f);
	gota.css('background-image', 'url(img/1920/'+ fondos[f] +')').removeClass('gota_start gota_oculta');
	setTimeout( function() { gota.addClass('gota_oculta'); }, 1700);
	setTimeout( function() { gota.addClass('gota_start'); }, 2000);
	setTimeout( function() { bubbleLoop(i); }, 4000);
}


