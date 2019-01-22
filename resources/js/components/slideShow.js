/*
 *
 * SlideShow
 *
 */

var slideIndex = 2; 	// Slide 1 is active on start
var slideTimer = 800;	// Time between slides, using miliseconds so clicking feels responsive
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



/*
 *
 * If global variable seconds hits zero, showNextSlide
 *
 * Check the time every 50 miliseconds
 * If a dot is clicked, timer is reset and slideIndex is set
 * Will showNextSlide after maximum 50 miliseconds
 * 
 */
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
	//only startSlideShow on pages that have slideShowContainer
	var slideShowContainer = document.getElementsByClassName("slideshow-container")[0];
	if (slideShowContainer) { startSlideShow(); }
	
	var dots = document.getElementsByClassName("dot-slides");
	for ( var i = 0; i < dots.length; i++ ) {
		dots[i].addEventListener("click", changeSlide);
	}
}

eventHandlerSlideShow();