$(document).ready(function(){



	$('.content .content-form .forms .form-register').css({
		'display': 'none'
	});

	$('header .menu #home').css({
		'display': 'none'
	});

	var altura = $('header').offset().top;

	$(window).on('scroll', function(){
		
		if ( $(window).scrollTop() > altura ){
			$('body > header').addClass('menu-fijo');
			$('body > header').css({
				'background-color': 'rgba(16, 148, 82, 1)',
				'box-shadow': '2px 2px 5px #c3c3c3',
				'transition': 'all 0.9s linear'
				
			});
			$('body > header ul li a').css({
				'color': 'white'
			});
		} else {
			$('body > header').removeClass('menu-fijo');
			$('body > header').css({
				'background-color': 'transparent',
				'box-shadow': '2px 2px 5px transparent'
			});
			$('body > header ul li a').css({
				'color': 'rgba(16, 148, 82, 1)'
			});
			$('body > header ul li ul li a').css({
				'color': 'white'
			});
		}

	});

	$('.image3 .content-faq .faqs div div .section-1 h3').click(function(){
		$('.image3 .content-faq .faqs div div .section-1 .body-faqs').toggle('slow');
	});

	$('.image3 .content-faq .faqs div div .section-2 h3').click(function(){
		$('.image3 .content-faq .faqs div div .section-2 .body-faqs').toggle('slow');
	});

	$('.image3 .content-faq .faqs div div .section-3 h3').click(function(){
		$('.image3 .content-faq .faqs div div .section-3 .body-faqs').toggle('slow');
	});

	$('.image3 .content-faq .faqs div div .section-4 h3').click(function(){
		$('.image3 .content-faq .faqs div div .section-4 .body-faqs').toggle('slow');
	});

	$('#Diseño').click(function(){
		$('.Diseño').css({
			'display': 'block',
		});
		$('.AT').css({
			'display': 'none',
		});
		$('.MS').css({
			'display': 'none',
		});
		$('.MR').css({
			'display': 'none',
		});
		$('.INST').css({
			'display': 'none',
		});
		$('.SW').css({
			'display': 'none',
		});
	});

	$('#AT').click(function(){
		$('.Diseño').css({
			'display': 'none',
		});
		$('.AT').css({
			'display': 'block',
		});
		$('.MS').css({
			'display': 'none',
		});
		$('.MR').css({
			'display': 'none',
		});
		$('.INST').css({
			'display': 'none',
		});
		$('.SW').css({
			'display': 'none',
		});
	});

	$('#MS').click(function(){
		$('.AT').css({
			'display': 'none',
		});
		$('.MS').css({
			'display': 'block',
		});
		$('.MR').css({
			'display': 'none',
		});
		$('.INST').css({
			'display': 'none',
		});
		$('.SW').css({
			'display': 'none',
		});
		$('.Diseño').css({
			'display': 'none',
		});
	});

	$('#MR').click(function(){
		$('.AT').css({
			'display': 'none',
		});
		$('.MS').css({
			'display': 'none',
		});
		$('.MR').css({
			'display': 'block',
		});
		$('.INST').css({
			'display': 'none',
		});
		$('.SW').css({
			'display': 'none',
		});
		$('.Diseño').css({
			'display': 'none',
		});
	});

	$('#INST').click(function(){
		$('.AT').css({
			'display': 'none',
		});
		$('.MS').css({
			'display': 'none',
		});
		$('.MR').css({
			'display': 'none',
		});
		$('.INST').css({
			'display': 'block',
		});
		$('.SW').css({
			'display': 'none',
		});
		$('.Diseño').css({
			'display': 'none',
		});
	});


	$('.content .content-form .options .opc-login button').click(function(){
		$('.content .content-form #login').removeClass('mover');
		$('.content .content-form #login').addClass('mover-atras');

		$('.content .content-form .forms .form-register').fadeOut('slow');
		$('.content .content-form .forms .form-login').fadeIn('slow');
	});

	$('.content .content-form .options .opc-register button').click(function(){
		$('.content .content-form #login').removeClass('mover-atras');
		$('.content .content-form #login').addClass('mover');

		$('.content .content-form .forms .form-login').fadeOut('slow');
		$('.content .content-form .forms .form-register').fadeIn('slow');
	});

	$('header .menu ul #login').click(function(){
		$('header .menu ul .submenu').slideToggle('slow');
	});



	$('#content-service .row .inst .img-wrap-inst .capa').hover(function(){
		$('#content-service .row .inst .img-wrap-inst .capa').css({'cursor': 'pointer'});
		$('#content-service .row .inst .img-wrap-inst img').css({'transform': 'scale(1.1)'});
	});
	
	$('#content-service .row .inst button').hover(function(){
		$(this).css({'cursor': 'pointer'});
		$('#content-service .row .inst .img-wrap-inst img').css({'transform': 'scale(1.1)'});
	});

	$('#content-service .row .inst .img-wrap-inst img').hover(function(){
		$('#content-service .row .inst .img-wrap-inst img').css({'transform': 'scale(1.1)', 'cursor': 'pointer'});
	});

	$('#content-service .row .inst .img-wrap-inst img').mouseout(function(){
		$('#content-service .row .inst .img-wrap-inst img').css({'transform': 'scale(1)'});
	});





	$('#content-service .row .diseño .img-wrap-diseño .capa').hover(function(){
		$('#content-service .row .diseño .img-wrap-diseño .capa').css({'cursor': 'pointer'});
		$('#content-service .row .diseño .img-wrap-diseño img').css({'transform': 'scale(1.1)'});
	});
	
	$('#content-service .row .diseño button').hover(function(){
		$(this).css({'cursor': 'pointer'});
		$('#content-service .row .diseño .img-wrap-diseño img').css({'transform': 'scale(1.1)'});
	});

	$('#content-service .row .diseño .img-wrap-diseño img').hover(function(){
		$('#content-service .row .diseño .img-wrap-diseño img').css({'transform': 'scale(1.1)', 'cursor': 'pointer'});
	});

	$('#content-service .row .diseño .img-wrap-diseño img').mouseout(function(){
		$('#content-service .row .diseño .img-wrap-diseño img').css({'transform': 'scale(1)'});
	});




	$('#content-service .row .asistencia .img-wrap-asistencia .capa').hover(function(){
		$('#content-service .row .asistencia .img-wrap-asistencia .capa').css({'cursor': 'pointer'});
		$('#content-service .row .asistencia .img-wrap-asistencia img').css({'transform': 'scale(1.1)'});
	});
	
	$('#content-service .row .asistencia button').hover(function(){
		$(this).css({'cursor': 'pointer'});
		$('#content-service .row .asistencia .img-wrap-asistencia img').css({'transform': 'scale(1.1)'});
	});

	$('#content-service .row .asistencia .img-wrap-asistencia img').hover(function(){
		$('#content-service .row .asistencia .img-wrap-asistencia img').css({'transform': 'scale(1.1)', 'cursor': 'pointer'});
	});

	$('#content-service .row .asistencia .img-wrap-asistencia img').mouseout(function(){
		$('#content-service .row .asistencia .img-wrap-asistencia img').css({'transform': 'scale(1)'});
	});



	$('#content-service .row .mr .img-wrap-mr .capa').hover(function(){
		$('#content-service .row .mr .img-wrap-mr .capa').css({'cursor': 'pointer'});
		$('#content-service .row .mr .img-wrap-mr img').css({'transform': 'scale(1.1)'});
	});
	
	$('#content-service .row .mr button').hover(function(){
		$(this).css({'cursor': 'pointer'});
		$('#content-service .row .mr .img-wrap-mr img').css({'transform': 'scale(1.1)'});
	});

	$('#content-service .row .mr .img-wrap-mr img').hover(function(){
		$('#content-service .row .mr .img-wrap-mr img').css({'transform': 'scale(1.1)', 'cursor': 'pointer'});
	});

	$('#content-service .row .mr .img-wrap-mr img').mouseout(function(){
		$('#content-service .row .mr .img-wrap-mr img').css({'transform': 'scale(1)'});
	});


	

	$('#abrir').click(function(){
		$('#solicitud').addClass('is-active');
	});

	$('#cerrar').click(function(){
		$('#solicitud').removeClass('is-active');
	});

	$('.button').click(function(){
		$('#solicitud').removeClass('is-active');
	});
	
	$('#solicitud .modal-card section form .opc label').click(function(){
		if($('#solicitud .modal-card section form .opc #check').prop('checked') == false)
		{
			$('#solicitud .modal-card section form .opc #check').prop('checked',true);
			
		}
		else
		{
			$('#solicitud .modal-card section form .opc #check').prop('checked',false);
		}
	});
	
	if ($('#solicitud .modal-card section form .opc label span').hasClass('icon-radio-checked'))
	{
		$codigo = 1;
		$.ajax({
			url:"../user-login/solicitud.php",
			method:"POST",
			data:{codigo:codigo},
			cache:"false",
			success:function(data) {
	
			}
			});
	}

/////////////////////////////////////////////////////////////////////


	$('#select-date').click(function(){
		$('#solicitud').addClass('is-active');
	});

	$('#reporte').click(function(){
		$('#create-report').addClass('is-active');
	});

	$('#cerrar').click(function(){
		$('#create-report').removeClass('is-active');
	});

	$('.button').click(function(){
		$('#create-report').removeClass('is-active');
	});
	
	// $('#solicitud .modal-card section form .opc label').click(function(){
	// 	if($('#solicitud .modal-card section form .opc #check').prop('checked') == false)
	// 	{
	// 		$('#solicitud .modal-card section form .opc #check').prop('checked',true);
			
	// 	}
	// 	else
	// 	{
	// 		$('#solicitud .modal-card section form .opc #check').prop('checked',false);
	// 	}
	// });
	
});
