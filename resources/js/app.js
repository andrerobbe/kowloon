
/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

require('./bootstrap');

window.Vue = require('vue');

/**
 * The following block of code may be used to automatically register your
 * Vue components. It will recursively scan this directory for the Vue
 * components and automatically register them with their "basename".
 *
 * Eg. ./components/ExampleComponent.vue -> <example-component></example-component>
 */

// const files = require.context('./', true, /\.vue$/i)
// files.keys().map(key => Vue.component(key.split('/').pop().split('.')[0], files(key).default))

//Vue.component('example-component', require('./components/ExampleComponent.vue').default);

/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */

const app = new Vue({
    el: '#app'
});






var currentLogo = '';

var slideIndex = 2; 	// Slide 1 is active on start
var slideTimer = 500;	// Time between slides in ms, ms so clicking feels responsive
var seconds;			// Global timer, reset on clicking another slide

/*
 * SlideShow
 */
function showNextSlide() {
	var slides = document.getElementsByClassName("mySlides");
	var dots = document.getElementsByClassName("dot");

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

function changeSlide(e){
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


/*
 * Navigation
 */
function hamburgerMenu(){
	var navbar 			= document.getElementsByClassName('navbar-vertical')[0];
	var navbarLogo 	 	= document.getElementById('navbar-logo').getElementsByTagName('img')[0];
	var navbarLogoLong	= document.getElementById('logo-long').getElementsByTagName('img')[0];
	
	navbar.classList.toggle('active');
	navbarLogo.classList.toggle('inactive');
	navbarLogoLong.classList.toggle('inactive');

	//mobile
	var mobileNav		= document.getElementById('mobile-menu');
	mobileNav.classList.toggle('active');
}




function eventHandler(){
	/*
	 * Navigation
	 */
	var navbar = document.getElementById('nav-burger');
	navbar.addEventListener("click", hamburgerMenu);
	var mobileNav		= document.getElementById('mobile-menu');
	mobileNav.addEventListener("click", hamburgerMenu);

	/*
	 * slideShow
	 */
	 startSlideShow();

	 var dots = document.getElementsByClassName("dot");
	 for ( var i = 0; i < dots.length; i++ ) {
		dots[i].addEventListener("click", changeSlide);
	}
}

eventHandler();
