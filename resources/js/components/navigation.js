/*
 *
 * Navigation
 *
 */

function hamburgerMenu(){
	var navbar 			= document.getElementsByClassName('navbar-vertical')[0];
	var navbarLogo 	 	= document.getElementById('navbar-logo').getElementsByTagName('img')[0];
	var navbarLogoLong	= document.getElementById('logo-long').getElementsByTagName('img')[0];
	var navbarOther 	= document.getElementById('nav-other');
	
	navbar.classList.toggle('active');
	navbarOther.classList.toggle('active');
	
	navbarLogo.classList.toggle('inactive');
	navbarLogoLong.classList.toggle('inactive');

	//mobile
	var mobileNav		= document.getElementById('mobile-menu');
	mobileNav.classList.toggle('active');
}

function eventHandlerNavigation(){
	var navbar 		= document.getElementById('nav-burger');
	var mobileNav 	= document.getElementById('mobile-menu');
	navbar.addEventListener("click", hamburgerMenu);	
	mobileNav.addEventListener("click", hamburgerMenu);
}

eventHandlerNavigation();
