$(document).ready(function(){
	var options = {
		autoPlay: true,
		autoPlayDelay: 1000,
		pauseOnHover: false,
		nextButton: false,
		prevButton: false,
		preloader: false,
		navigationSkipThreshold: 1000,
		fadeFrameWhenSkipped: false
	};
	var sequence = $("#sequence").sequence(options).data("sequence");
});