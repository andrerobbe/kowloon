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

	//focus input field if overlay is active
	if (searchOverlay.classList.contains('active')) { searchInput.focus();}
	if (faqOverlay.classList.contains('active')) { faqInput.focus();}
}

function checkInput(){
	var searchLabel = document.getElementsByClassName("search-label");
	var searchInput = document.getElementsByClassName("search-input");

	//if input is empty, show the label
	setInterval(function(){
	 	//check value of Search Page
	 	if 		(searchInput[0].value == '') { searchLabel[0].classList.add('active'); }
	 	else if (searchInput[0].value != '') { searchLabel[0].classList.remove('active'); }
	 	//check value of Faq Page
	 	if 		(searchInput[1].value == '') { searchLabel[1].classList.add('active'); }
	 	else if (searchInput[1].value != '') { searchLabel[1].classList.remove('active'); }
	}, 300); //check input every 300ms
}

function eventHandlerSearch(){
	checkInput();

	var search 		= document.getElementById("nav-search");
	var faq 		= document.getElementById("nav-faq");
	search.addEventListener("click", searchHandler);
	faq.addEventListener("click", searchHandler);
	
	var searchLabel = document.getElementsByClassName("search-label");
	for (var i = 0; i < searchLabel.length; i++){
		searchLabel[i].addEventListener("click", searchHandler);
	}	
}

eventHandlerSearch();