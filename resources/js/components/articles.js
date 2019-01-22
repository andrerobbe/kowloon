/*
 *
 * Articles
 *
 */
 
function toggleFilter(){
	var filterOptions 	= document.querySelector('.article-filters');
	var filterArrow 	= document.getElementById('article-filter-arrow');

	filterOptions.classList.toggle('active');

	if ( filterArrow.classList.contains('arrow-right') ){
		filterArrow.classList.remove('arrow-right');
		filterArrow.classList.add('arrow-down');
	}
	else if ( filterArrow.classList.contains('arrow-down') ){
		filterArrow.classList.add('arrow-right');
		filterArrow.classList.remove('arrow-down');
	}
}

function eventHandlerArticle(){
	var filterTxt = document.getElementById('article-filter');
	filterTxt.addEventListener("click", toggleFilter);
}

eventHandlerArticle();