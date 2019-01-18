/*
 *
 * Search
 *
 */


function searchHandler(){
	var searchInput = document.getElementsByClassName("search-input")[0];
	var faqInput = document.getElementsByClassName("search-input")[1];
	var searchOverlay = document.getElementsByClassName("overlay-search")[0];
	var faqOverlay = document.getElementsByClassName("overlay-faq")[0];

	if (searchOverlay.classList.contains('active')) { searchInput.focus();}
	if (faqOverlay.classList.contains('active')) { faqInput.focus();}
}

function checkInput(){
	var searchBtn = document.getElementsByClassName("search-label");
	var searchInput = document.getElementsByClassName("search-input")[0];
	
	//check input every 200ms
	setInterval(function(){
		//if empty show label
		 for (var i = 0; i < searchBtn.length; i++){
		 	if (searchInput.value == '') {
		 		searchBtn[i].classList.add('active');
		 	}
		 	else{
		 		searchBtn[i].classList.remove('active');
		 	}
		 }
	}, 400);
}

function eventHandlerSearch(){
	checkInput();
	var searchBtn = document.getElementsByClassName("search-label");

	for (var i = 0; i < searchBtn.length; i++){
		searchBtn[i].addEventListener("click", searchHandler);
	}


	var search 		= document.getElementById("nav-search");
	var faq 		= document.getElementById("nav-faq");

	search.addEventListener("click", searchHandler);
	faq.addEventListener("click", searchHandler);
}

eventHandlerSearch();