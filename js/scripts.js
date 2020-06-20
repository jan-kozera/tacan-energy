$(document).ready(function(){
	
	$('.caption h3').slideDown('fast');
	$('.caption p').slideDown('slow');
	$('.caption a').slideDown('slow');
	
	function animations() {
		$('.caption h3').slideDown('fast');
		$('.caption p').slideDown('slow');
		$('.caption a').slideDown('slow');
	}
	
	function hide(){
		$('.caption h3').slideUp();
		$('.caption p').slideUp();
		$('.caption a').slideUp();
	}
	
	if($('body').hasClass('home')){
		simpleslider.getSlider({
			container: document.getElementById('slider'),
			prop: 'top',
			duration: 1,
			delay: 5,
			onChange: hide,
			onChangeEnd: animations
		});	
	}else {
		
	}
	
	$('.plus').click(function(){
		var getVal = $('#value').val();
		if(getVal == 500) {
			alert('Maksymalna wartość wynosi 500 zł.')
		}else {
			getVal = Number(getVal) + 25;
			$('#value').val(getVal);
			valChange();
		}
	});
	
	$('.minus').click(function(){
		var getVal = $('#value').val();
		if(getVal == 150){
			alert('Minimalna wartość wynosi 150 zł.')	
		}else {
			getVal = Number(getVal) - 25;
			$('#value').val(getVal);
			valChange();	
		}
	});
	
	$('.sc-more').click(function(){
		$(this).hide();
		$('.sc-hidden').show('slow');
		$('.sc-less').show();
	});
	
	$('.sc-less').click(function(){
		$(this).hide();
		$('.sc-more').show('fast');
		$('.sc-hidden').hide('fast');
	});
	
	$('#contactform').submit(function(){

		var action = $(this).attr('action');

		$("#message").slideUp(500,function() {
		$('#message').hide();

		$.post(action, {
			name: $('#name').val(),
			ndname: $('#ndname').val(),
			email: $('#email').val(),
			phone: $('#phone').val(),
			rodo: $('#rodo').val(),
		},
			function(data){
				document.getElementById('message').innerHTML = data;
				$('#message').slideDown('slow');
				$('#submit').removeAttr('disabled');
				if(data.match('success') != null){
					$('#contactform').slideUp('slow');
					window.location.href = 'https://tacan-energy.pl/dziekujemy';
				}

			}
		);

		});

		return false;

	});
	
	$('#calculatorform').submit(function(){

		var action = $(this).attr('action');

		$("#message").slideUp(500,function() {
		$('#message').hide();
			
		localStorage.setItem("value",'150');

		$.post(action, {
			name: $('#name').val(),
			ndname: $('#ndname').val(),
			email: $('#email').val(),
			phone: $('#phone').val(),
			rodo: $('#rodo').val(),
			value: $('#value').val(),
			power: $('#power').val(),
			energy: $('#energy').val(),
			money: $('#money').val(),
			per: $('#per').val(),
		},
			function(data){
				document.getElementById('message').innerHTML = data;
				$('#message').slideDown('slow');
				$('#submit').removeAttr('disabled');
				if(data.match('success') != null) $('#contactform').slideUp('slow');

			}
		);

		});

		return false;

	});
	
//	if ($(window).width() > 1199){
//		$('#fullpage').fullpage({
//			navigation: false,
//			navigationPosition: 'right'
//		});	
//	}
	
	$('#fp-nav ul li a').click(function(){
		$('#fp-nav ul li a').removeClass('active');
		$(this).addClass('active');
		$('.calculator .section').fadeOut('fast');
		$('.' + $(this).data('ref')).fadeIn('slow');
	});
	
	$('.krok1 .next').click(function(){
		$('.calculator .section').fadeOut('fast');
		$('.calculator .section.krok2').fadeIn('slow');
		$('#fp-nav ul li a').removeClass('active');
		$('#fp-nav ul li:nth-child(2) a').addClass('active');
	});
	
	$('.krok2 .next').click(function(){
		$('.calculator .section').fadeOut('fast');
		$('.calculator .section.krok3').fadeIn('slow');
		$('#fp-nav ul li a').removeClass('active');
		$('#fp-nav ul li:nth-child(3) a').addClass('active');
	});
	
	$('.krok3 .next').click(function(){
		$('.calculator .section').fadeOut('fast');
		$('.calculator .section.krok4').fadeIn('slow');
		$('#fp-nav ul li a').removeClass('active');
		$('#fp-nav ul li:nth-child(4) a').addClass('active');
	});
	
	$('.krok2 .prev').click(function(){
		$('.calculator .section').fadeOut('fast');
		$('.calculator .section.krok1').fadeIn('slow');
		$('#fp-nav ul li a').removeClass('active');
		$('#fp-nav ul li:nth-child(1) a').addClass('active');
	});
	
	$('.krok3 .prev').click(function(){
		$('.calculator .section').fadeOut('fast');
		$('.calculator .section.krok2').fadeIn('slow');
		$('#fp-nav ul li a').removeClass('active');
		$('#fp-nav ul li:nth-child(2) a').addClass('active');
	});
	
	$('.krok4 .prev').click(function(){
		$('.calculator .section').fadeOut('fast');
		$('.calculator .section.krok3').fadeIn('slow');
		$('#fp-nav ul li a').removeClass('active');
		$('#fp-nav ul li:nth-child(3) a').addClass('active');
	});
	
	$('#value').change(function(){
		valChange();
	});
	
	$('#localSafe').click(function(){
		localStorage.setItem("value",$('#value').val());
	});
	
	if(localStorage.length != 0) {
		$('#value').val(localStorage.getItem("value"));
	}
	
	valChange();
	
	$(".dropdown").hover(function(){
        var dropdownMenu = $(".dropdown-menu");
        if(dropdownMenu.is(":hidden")){
            dropdownMenu.toggleClass("open show");
            $(this).toggleClass("show");
        }else {
			dropdownMenu.toggleClass("open show");
            $(this).toggleClass("show");
		}
    });
	
	$('.dropdown').click(function(e){
    	e.stopPropagation();
	});
	
	$('.rodo span').click(function(){
		$('.rodo-more').show();
	});
	
	$('.x').click(function(){
		$('.rodo-more').hide();
	});
	
});


function valChange() {
	var getVal = $('#value').val();
	if(getVal <= 150) {
		$('#power').val('2.71 kW');
		$('#energy').val('1 624 zł');
		$('#money').val('30 848 zł');
		$('#hajs').text('30 848 zł');
		$('#per').val('66 446 zł');
		$('#per1').text('66 446 zł');
	}else if(getVal > 150 && getVal < 175){
		$('#power').val('2.71 kW');
		$('#energy').val('1 624 zł');
		$('#money').val('30 848 zł');
		$('#hajs').text('30 848 zł');
		$('#per').val('66 446 zł');
		$('#per1').text('66 446 zł');
	}else if(getVal >= 175 && getVal < 200){
		$('#power').val('3.22 kW');
		$('#energy').val('1 932 zł');
		$('#money').val('36 717 zł');
		$('#hajs').text('36 717 zł');
		$('#per').val('79 087 zł');
		$('#per1').text('79 087 zł');
	}else if(getVal >= 200 && getVal < 225){
		$('#power').val('3.74 kW');
		$('#energy').val('2 241 zł');
		$('#money').val('42 586 zł');
		$('#hajs').text('42 586 zł');
		$('#per').val('91 728 zł');
		$('#per1').text('91 728 zł');
	}else if(getVal >= 225 && getVal < 250){
		$('#power').val('4.25 kW');
		$('#energy').val('2 550 zł');
		$('#money').val('48 455 zł');
		$('#hajs').text('48 455 zł');
		$('#per').val('104 369 zł');
		$('#per1').text('104 369 zł');
	}
	else if(getVal >= 250 && getVal < 275){
		$('#power').val('4.75 kW');
		$('#energy').val('2 851 zł');
		$('#money').val('54 173 zł');
		$('#hajs').val('54 173 zł');
		$('#per').text('116 686 zł');
	}
	else if(getVal >= 275 && getVal < 300){
		$('#power').val('5.28 kW');
		$('#energy').val('3 168 zł');
		$('#money').val('60 192 zł');
		$('#hajs').text('60 192 zł');
		$('#per').val('129 651 zł');
		$('#per1').text('129 651 zł');
	}
	else if(getVal >= 300 && getVal < 325){
		$('#power').val('5.82 kW');
		$('#energy').val('3 493 zł');
		$('#money').val('66 392 zł');
		$('#hajs').text('66 392 zł');
		$('#per').val('142 940 zł');
		$('#per1').text('142 940 zł');
	}
	else if(getVal >= 325 && getVal < 350){
		$('#power').val('6.34 kW');
		$('#energy').val('3 802 zł');
		$('#money').val('72 230 zł');
		$('#hajs').text('72 230 zł');
		$('#per').val('155 581 zł');
		$('#per1').text('155 581 zł');
	}
	else if(getVal >= 350 && getVal < 375){
		$('#power').val('6.86 kW');
		$('#energy').val('4 118 zł');
		$('#money').val('78 250 zł');
		$('#hajs').text('78 250 zł');
		$('#per').val('168 546 zł');
		$('#per1').text('168 546 zł');
	}
	else if(getVal >= 375 && getVal < 400){
		$('#power').val('7.38 kW');
		$('#energy').val('4 427 zł');
		$('#money').val('84 118 zł');
		$('#hajs').text('84 118 zł');
		$('#per').val('181 187 zł');
		$('#per1').text('181 187 zł');
	}
	else if(getVal >= 400 && getVal < 425){
		$('#power').val('7.88 kW');
		$('#energy').val('4 729 zł');
		$('#money').val('89 837 zł');
		$('#hajs').text('89 837 zł');
		$('#per').val('193 504 zł');
		$('#per1').text('193 504 zł');
	}
	else if(getVal >= 425 && getVal < 450){
		$('#power').val('8.41 kW');
		$('#energy').val('5 045 zł');
		$('#money').val('95 856 zł');
		$('#hajs').text('95 856 zł');
		$('#per').val('206 469 zł');
		$('#per1').text('206 469 zł');
	}
	else if(getVal >= 450 && getVal < 475){
		$('#power').val('8.94 kW');
		$('#energy').val('5 362 zł');
		$('#money').val('101 875 zł');
		$('#hajs').text('101 875 zł');
		$('#per').val('219 434 zł');
		$('#per1').text('219 434 zł');
	}
	else if(getVal >= 475 && getVal < 500){
		$('#power').val('9.45 kW');
		$('#energy').val('5 671 zł');
		$('#money').val('107 744 zł');
		$('#hajs').text('107 744 zł');
		$('#per').val('232 075 zł');
		$('#per1').text('232 075 zł');
	}else if(getVal >= 500){
		$('#power').val('9.97 kW');
		$('#energy').val('5 980 zł');
		$('#money').val('113 612 zł');
		$('#hajs').text('113 612 zł');
		$('#per').val('244 716 zł');
		$('#per1').text('244 716 zł');
	}
}