$(document).ready(function(){
	$(".owl-carousel").owlCarousel({
		item: 1,
		nav: true,
		loop: true,
		margin: 10,
		responsive:{
			0:{
				items:1
			},
			700:{
				items:2
			},
			1000:{
				items:4
			}
		}
	});
  })