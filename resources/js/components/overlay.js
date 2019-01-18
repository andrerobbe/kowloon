/*
 *
 * Overlay
 *
 */

function closeSearch(){
	var search = document.getElementsByClassName("overlay-search")[0];
	search.classList.remove('active');
}

function closeFaq(){
	var faq = document.getElementsByClassName("overlay-faq")[0];
	faq.classList.remove('active');
}

function searchHandler(){
	var search 		= document.getElementsByClassName("overlay-search")[0];
	var searchIcon 	= document.getElementById('nav-search');
	search.classList.toggle('active');
	searchIcon.classList.toggle('active');

	//close
	closeFaq();
	closeHamburgerMenu();
}

function faqHandler(){
	var faq 		= document.getElementsByClassName("overlay-faq")[0];
	var faqIcon 	= document.getElementById('nav-faq');
	
	faq.classList.toggle('active');
	faqIcon.classList.toggle('active');

	//close
	closeSearch();
	closeHamburgerMenu();
}

function toggleFilter(){
	var filter 		= document.getElementsByClassName('advanced-filter')[0];
	var filterArrow = document.getElementById('filter-arrow');
	filter.classList.toggle('active');
	filterArrow.classList.toggle('active');
}

function eventHandlerOverlay(){
	 var search 		= document.getElementById("nav-search");
	 var closeSearch 	= document.getElementById("close-search");
	 var faq 			= document.getElementById("nav-faq");
	 var closeFaq 		= document.getElementById("close-faq");
	 var filter			= document.getElementById('adv-filter');
	 
	 search.addEventListener("click", searchHandler);
	 closeSearch.addEventListener("click", closeSearch);
	 faq.addEventListener("click", faqHandler);
	 closeFaq.addEventListener("click", closeFaq);
	 filter.addEventListener("click", toggleFilter);
}

eventHandlerOverlay();






/*
 *
 * Navigation
 *
 */


function closeHamburgerMenu(){
	var navbar 			= document.getElementsByClassName('navbar-vertical')[0];
	var navbarLogo 	 	= document.getElementById('navbar-logo').getElementsByTagName('img')[0];
	var navbarLogoLong	= document.getElementById('logo-long').getElementsByTagName('img')[0];
	
	navbar.classList.remove('active');
	navbarLogo.classList.remove('inactive');
	navbarLogoLong.classList.add('inactive');

	//mobile
	var mobileNav		= document.getElementById('mobile-menu');
	mobileNav.classList.remove('active');
}