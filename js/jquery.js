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
$('.can-img').css({
	opacity: 0
});

$('.can-img').animate({
	opacity: 1
},2000);


//ANIMACION DE ICONOS DE WHAT CAN I DO//






//ANIMACION DEl subtitulo//
$('.h2content').css({
	opacity: 0
});

$('.h2content').animate({
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
    $('.skills').css({
			opacity: 0
			
		
		});

		$('.skills').animate({
			opacity: 1
			
		},3000);
		

	
}
});



		



});


