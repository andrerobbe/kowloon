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
 * Update: turns out I had the same variable names as function names ..
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

function toggleSearchOverlay(){
	var search 		= document.getElementsByClassName("overlay-search")[0];
	var searchIcon 	= document.getElementById('nav-search');
	search.classList.toggle('active');
	searchIcon.classList.toggle('active');

	//Close Nav & FAQ
	closeFaq();
	closeNavigation();
}

function toggleFaqOverlay(){
	var faq 		= document.getElementsByClassName("overlay-faq")[0];
	var faqIcon 	= document.getElementById('nav-faq');
	
	faq.classList.toggle('active');
	faqIcon.classList.toggle('active');

	//Close Nav & Search
	closeSearch();
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
	 var closeSearchBtn	= document.getElementById("close-search");
	 var closeFaqBtn	= document.getElementById("close-faq");
	 var faq 			= document.getElementById("nav-faq");
	 var filter			= document.getElementById('adv-filter');
	 
	 search.addEventListener("click", toggleSearchOverlay);
	 closeSearchBtn.addEventListener("click", closeSearch);
	 closeFaqBtn.addEventListener("click", closeFaq);
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