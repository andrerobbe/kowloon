/*
 *
 * Details
 *
 */

function scrollLeft() {
	var productSlider = document.querySelector('.product-slider');
	productSlider.scrollBy(-484, 0);
}

function scrollRight() {
	var productSlider = document.querySelector('.product-slider');
	productSlider.scrollBy(484, 0);
}


function eventHandlerDetails(){
	var btnLeft 	= document.querySelector('.scroll-left');
	var btnRight 	= document.querySelector('.scroll-right');
	if (btnLeft) { btnLeft.addEventListener('click', scrollLeft); }
	if (btnRight) { btnRight.addEventListener('click', scrollRight); }
}

eventHandlerDetails();