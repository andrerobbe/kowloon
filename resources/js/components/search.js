/*
 *
 * Search
 *
 */

function focusInput(){
	var searchInput = document.getElementsByClassName("search-input")[0];
	var faqInput = document.getElementsByClassName("search-input")[1];
	var searchOverlay = document.getElementsByClassName("overlay-search")[0];
	var faqOverlay = document.getElementsByClassName("overlay-faq")[0];

	//focus input field if overlay is active
	if (searchOverlay.classList.contains('active')) { searchInput.focus();}
	if (faqOverlay.classList.contains('active')) { faqInput.focus();}
}

function checkInputToShowLabel(){
	var searchInput 		= document.getElementsByClassName("search-input");
	var searchLabelMobile 	= document.getElementById("search-mobile");
	var searchLabelDesktop  = document.getElementById("search-desktop");
	var searchLabelFaq 		= document.getElementById("search-faq");

	//if input is empty, show the label
	setInterval(function(){

		//check value of Search Page
		if 		(searchInput[0].value == '') {
			searchLabelMobile.classList.add('active');
			searchLabelDesktop.classList.add('active');
		}
		else if (searchInput[0].value != '') {
			searchLabelMobile.classList.remove('active');
			searchLabelDesktop.classList.remove('active');
		}

		//check value of Faq Page
		if 		(searchInput[1].value == '') { searchLabelFaq.classList.add('active'); }
		else if (searchInput[1].value != '') { searchLabelFaq.classList.remove('active'); }
	}, 300); //check input every 300ms
}

function clearInput(){
	var searchInput = document.getElementsByClassName("search-input");
	for ( var i = 0; i < searchInput.length; i++){
		searchInput[i].value = '';
	}
}


function eventHandlerSearch(){
	checkInputToShowLabel();

	var search 		= document.getElementById("nav-search");
	var faq 		= document.getElementById("nav-faq");
	search.addEventListener("click", focusInput);
	faq.addEventListener("click", focusInput);
	
	var searchLabel = document.getElementsByClassName("search-label");
	for (var i = 0; i < searchLabel.length; i++){
		searchLabel[i].addEventListener("click", focusInput);
	}

	var clearBtn	= document.querySelectorAll("button.sprite.clear");
	for (var i = 0; i < clearBtn.length; i++){
		clearBtn[i].addEventListener("click", clearInput);
	}
}

eventHandlerSearch();