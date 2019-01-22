/*
 *
 * InfinteScroll
 *
 */

//hide loading img when at bottom
window.onscroll = function(ev) {
    if ((window.innerHeight + window.scrollY) >= document.body.offsetHeight) {
        // you're at the bottom of the page
        var loadingImg = document.getElementsByClassName('infinite-scroll-request')[0];
        loadingImg.classList.add('disable');
    }
};


// FAQ overlay
var navbarFaq = document.querySelector('.question-feed');
if (navbarFaq) {
	var infScroll = new InfiniteScroll( navbarFaq, {
		// options
		path: '.question__next',
		append: '.question',
		history: false, //disables URL changes so going back a page isn't screwed
	});
}

var articles = document.querySelector('.article-feed');
if (articles){
	var infScroll = new InfiniteScroll( articles, {
		// options
		path: '.article__next',
		append: '.item-small',
		history: false, //disables URL changes so going back a page isn't screwed
	});
}