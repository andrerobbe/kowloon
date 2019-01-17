/*
 *
 * Navigation
 *
 */

var currentLogo = '';

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

function eventHandlerNavigation(){
	var navbar = document.getElementById('nav-burger');
	navbar.addEventListener("click", hamburgerMenu);
	var mobileNav		= document.getElementById('mobile-menu');
	mobileNav.addEventListener("click", hamburgerMenu);
}

eventHandlerNavigation();