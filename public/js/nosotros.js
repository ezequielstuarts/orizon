
$(function() {
	// Parallax effect binding to onscroll event:
	$(window).scroll(function() {
		// console.log('scroll event');
		var scroll_ratio = 0.5;
		var scroll_front = $(this).scrollTop();
		var scroll_back  = scroll_front * scroll_ratio;
		$('div.capa_trasera').css('top', scroll_back +'px');
	});

	

	$(".lk-mistica").click(function(e) {
	    e.preventDefault();
	    var aid = $("#mistica");
	    $('html,body').animate({scrollTop: $(aid).offset().top + 70},(3000));
	});

	
	
	$('.panel_iconos ul li, button').click(function(){
		$('.panel_iconos ul li').removeClass('active');
		$(this).addClass('active');
		var icon = $(this).data('icon');
		var left = (icon - 1) * -100;
		$('#slider-detalles').css('left', left +'%');
	});

	

	$('.btn-arrow-1').click(function(){
		$(".detalle_icono-int").fadeOut(function(){
			$(".detalle-agua").css("display", "block")
		})
	});
	$('.btn-arrow-2').click(function(){
		$(".detalle_icono-int").fadeOut(function(){
			$(".detalle-mistica").css("display", "block")
		})
		
	});
	$('.btn-arrow-3').click(function(){
		$(".detalle_icono-int").fadeOut(function(){
			$(".detalle-historia").css("display", "block")
		})
	});
	$('.btn-arrow-4').click(function(){
		$(".detalle_icono-int").fadeOut(function(){
			$(".detalle-sustentable").css("display", "block")
		})
	});
	$('.btn-arrow-5').click(function(){
		$(".detalle_icono-int").fadeOut(function(){
			$(".detalle-empresa").css("display", "block")
		})
	});


	//button bottom
	$('.bt1').click(function(){
		
		$('.panel_iconos ul li').removeClass('active');
		$(".btn-arrow-1").addClass('active');
		$(".detalle_icono-int").fadeOut(function(){
			$(".detalle-agua").css("display", "block")
		})
	});
	$('.bt2').click(function(){
		
		$('.panel_iconos ul li').removeClass('active');
		$(".btn-arrow-2").addClass('active');
		$(".detalle_icono-int").fadeOut(function(){
			$(".detalle-mistica").css("display", "block")
		})
	});
	$('.bt3').click(function(){
		
		$('.panel_iconos ul li').removeClass('active');
		$(".btn-arrow-3").addClass('active');
		$(".detalle_icono-int").fadeOut(function(){
			$(".detalle-historia").css("display", "block")
		})
	});
	$('.bt4').click(function(){
		
		$('.panel_iconos ul li').removeClass('active');
		$(".btn-arrow-4").addClass('active');
		$(".detalle_icono-int").fadeOut(function(){
			$(".detalle-sustentable").css("display", "block")
		})
	});
	$('.bt5').click(function(){
		
		$('.panel_iconos ul li').removeClass('active');
		$(".btn-arrow-5").addClass('active');
		$(".detalle_icono-int").fadeOut(function(){
			$(".detalle-empresa").css("display", "block")
		})
	});
	//button bottom



});

$(window).on('load', function() {
	// Load-Overlay fadeout when page finish loading:

	$('#load-overlay').fadeOut();
	$('body').css('overflow-y', 'auto');

});
/**
 * @param String name
 * @return String
 */
function getParameterByName(name) {
    name = name.replace(/[\[]/, "\\[").replace(/[\]]/, "\\]");
    var regex = new RegExp("[\\?&]" + name + "=([^&#]*)"),
    results = regex.exec(location.search);
    return results === null ? "" : decodeURIComponent(results[1].replace(/\+/g, " "));
}

var val = getParameterByName('val');

if(val == "agua"){
	$('.panel_iconos ul li').removeClass('active');
	$('#slider-detalles').css('left', "0%");
	$(".btn-arrow-1").addClass('active');
	$(".detalle_icono-int").fadeOut(function(){
		$(".detalle-agua").css("display", "block")
	})
}
if(val == "mistica"){
	$('.panel_iconos ul li').removeClass('active');
	$('#slider-detalles').css('left', "-100%");
	$(".btn-arrow-2").addClass('active');
	$(".detalle_icono-int").fadeOut(function(){
		$(".detalle-mistica").css("display", "block")
	})
}
if(val == "historia"){
	$('.panel_iconos ul li').removeClass('active');
	$('#slider-detalles').css('left', "-200%");
	$(".btn-arrow-3").addClass('active');
	$(".detalle_icono-int").fadeOut(function(){
		$(".detalle-historia").css("display", "block")
	})
}
if(val == "sustentabilidad"){
	$('.panel_iconos ul li').removeClass('active');
	$('#slider-detalles').css('left', "-300%");
	$(".btn-arrow-4").addClass('active');
	$(".detalle_icono-int").fadeOut(function(){
		$(".detalle-sustentable").css("display", "block")
	})
}