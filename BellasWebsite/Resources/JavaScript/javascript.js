
/*
function onLoad() {
	"use strict";
	window.alert("Bundle Deal! By at least 3 bundles and get a FREE sew-in!");
}

*/

function onLoad() {
	"use strict";
	window.swal({title: "Bundle Deal!", text: "Buy at least 3 bundles and get a FREE sew-in! (Salon Only).", confirmButtonColor: "#e246c4", imageUrl: "Vendors/images/bellaPopUp3.png", imageSize: "100x100"});
}

$(document).ready(function(){
	$(".carousel").slick({
	
		slidesToShow: 1,
		slidesToScroll: 1,
		autoplay: true,
		autoplayspeed:1500,
		arrows: false,
		dots: true,
		});
});
