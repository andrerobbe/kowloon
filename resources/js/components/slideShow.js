/*
 *
 * SlideShow
 *
 */

var slideIndex = 2; 	// Slide 1 is active on start
var slideTimer = 800;	// Time between slides in ms, ms so clicking feels responsive
var seconds;			// Global timer, reset on clicking another slide


function showNextSlide() {
	var slides = document.getElementsByClassName("mySlides");
	var dots = document.getElementsByClassName("dot-slides");

	//active class on slides and dots
	for ( var i = 0; i < slides.length; i++ ) {
		slides[i].classList.remove('active');
		dots[i].classList.remove('active');
	}
	slides[slideIndex - 1].classList.add('active');
	dots[slideIndex - 1].classList.add('active');

	slideIndex++;
	if (slideIndex > slides.length) {slideIndex = 1} 
}

function changeSlide(){
	//change id and reset timer
	slideIndex = this.id.substring(4);
	seconds = 0;
}

function startSlideShow(n){
	seconds = slideTimer;	

	setInterval(function(){
		seconds--;
		if ( seconds <= 0 ) {
			showNextSlide();
			seconds = slideTimer;
		}
	}, 10)
}


function eventHandlerSlideShow(){
	 startSlideShow();
	 var dots = document.getElementsByClassName("dot-slides");
	 for ( var i = 0; i < dots.length; i++ ) {
		dots[i].addEventListener("click", changeSlide);
	}
}

eventHandlerSlideShow();