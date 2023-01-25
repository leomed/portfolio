$(document).ready(function(){
	
// ANIMACION DEL PARRAFO DE INTRO//
$('.introduction').css({
	marginTop: '-400px'
});

$('.introduction').animate({
	marginTop: '0px'
},1500);

// ANIMACION DEL PARRAFO DE INTRO//




//ANIMACION DE ICONOS DE WHAT CAN I DO//
$('.ideas-img').css({
	opacity: 0
});

$('.ideas-img').animate({
	opacity: 1
},2000);


//ANIMACION DE ICONOS DE WHAT CAN I DO//






//ANIMACION DEl subtitulo//
$('.h2-container').css({
	opacity: 0
});

$('.h2-container').animate({
	opacity: 1
},2000);

//ANIMACION DEl subtitulo//





//ANIMACION DE titulo//
$('.tittle').css({
	opacity: 0
});

$('.tittle').animate({
	opacity: 1
},2000);

//ANIMACION DE titulo//
/**************************************************/



$(window).scroll(function(){

if ($(window).scrollTop() > 600){
    $('.skills-container').css({
			opacity: 0
			
		
		});

		$('.skills-container').animate({
			opacity: 1
			
		},3000);
		

	
}
});


$('#contact-link').on('click' , function(){
	$('html, body').animate({
		scrollTop: 2500
	},1000);

});


	$('#work-link').on('click' , function(){
	$('html, body').animate({
		scrollTop: 1000
	},1000);

});
	



});


