/*
 *
 * Details
 *
 */


function changeActiveImg(){
	var otherSections = document.querySelectorAll('.img-list section');

	for ( var i = 0; i < otherSections.length; i++){
		otherSections[i].classList.remove('active');
	}
	this.classList.add('active');

	var featuredImg 	= document.querySelector('.item-images .featured-img');
	var clickedImg 		= document.querySelector('.img-list .active img');
	featuredImg.src 	= clickedImg.src;

}

function scrollLeft() {
	var productSlider = document.querySelector('.product-slider');
	productSlider.scrollBy(-484, 0);
}

function scrollRight() {
	var productSlider = document.querySelector('.product-slider');
	productSlider.scrollBy(484, 0);
}


function eventHandlerDetails(){
	var imgList 	= document.querySelectorAll('.img-list section');
	for ( var i = 0; i < imgList.length; i++){
		imgList[i].addEventListener('click', changeActiveImg);
	}

	var btnLeft 	= document.querySelector('.scroll-left');
	var btnRight 	= document.querySelector('.scroll-right');
	if (btnLeft) { btnLeft.addEventListener('click', scrollLeft); }
	if (btnRight) { btnRight.addEventListener('click', scrollRight); }
}

eventHandlerDetails();