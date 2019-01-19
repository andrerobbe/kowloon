/*
 *
 * Overlay
 *
 */

/*
 *
 * BUGG FIX NOTE:
 * 
 * closeSearch() and closeFaq() are for some reason not defined as eventListener.
 * Any other function name works ..
 *
 */

function closeSearchHandler(){
	var search = document.getElementsByClassName("overlay-search")[0];
	search.classList.remove('active');
}

function closeFaqHandler(){
	var faq = document.getElementsByClassName("overlay-faq")[0];
	faq.classList.remove('active');
}

function toggleSearchOverlay(){
	var search 		= document.getElementsByClassName("overlay-search")[0];
	var searchIcon 	= document.getElementById('nav-search');
	search.classList.toggle('active');
	searchIcon.classList.toggle('active');

	//Close Nav & FAQ
	closeFaqHandler();
	closeNavigation();
}

function toggleFaqOverlay(){
	var faq 		= document.getElementsByClassName("overlay-faq")[0];
	var faqIcon 	= document.getElementById('nav-faq');
	
	faq.classList.toggle('active');
	faqIcon.classList.toggle('active');

	//Close Nav & Search
	closeSearchHandler();
	closeNavigation();
}

function toggleAdvancedFilter(){
	var filter 		= document.getElementsByClassName('advanced-filter')[0];
	var filterArrow = document.getElementById('filter-arrow');
	filter.classList.toggle('active');

	if ( filterArrow.classList.contains('arrow-right') ){
		filterArrow.className = "arrow-down";
	}
	else if ( filterArrow.classList.contains('arrow-down') ){
		filterArrow.className = "arrow-right";
	}
}


function eventHandlerOverlay(){
	 var search 		= document.getElementById("nav-search");
	 var closeSearch 	= document.getElementById("close-search");
	 var closeFaq 		= document.getElementById("close-faq");
	 var faq 			= document.getElementById("nav-faq");
	 var filter			= document.getElementById('adv-filter');
	 
	 search.addEventListener("click", toggleSearchOverlay);
	 closeSearch.addEventListener("click", closeSearchHandler);
	 closeFaq.addEventListener("click", closeFaqHandler);
	 faq.addEventListener("click", toggleFaqOverlay);
	 filter.addEventListener("click", toggleAdvancedFilter);
}

eventHandlerOverlay();






/*
 *
 * Navigation
 *
 */


function closeNavigation(){
	var navbar 			= document.getElementsByClassName('navbar-vertical')[0];
	var navbarLogo 	 	= document.getElementById('navbar-logo').getElementsByTagName('img')[0];
	var navbarLogoLong	= document.getElementById('logo-long').getElementsByTagName('img')[0];
	var navbarOther 	= document.getElementById('nav-other');
	
	navbar.classList.remove('active');
	navbarOther.classList.remove('active');
	
	navbarLogo.classList.remove('inactive');
	navbarLogoLong.classList.add('inactive');

	//mobile
	var mobileNav		= document.getElementById('mobile-menu');
	mobileNav.classList.remove('active');
}