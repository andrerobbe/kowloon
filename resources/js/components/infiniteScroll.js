/*
 *
 * InfinteScroll
 *
 */

var navbarFaq = document.querySelectorAll('.question-feed')[0];
if (navbarFaq) {
	var infScroll = new InfiniteScroll( navbarFaq, {
		// options
		path: '.pagination__next',
		append: '.question',
		history: false, //disables URL changes so going back a page isn't screwed
	});
}

var contactFaq = document.querySelectorAll('.question-feed')[1];
if (contactFaq){
	var infScroll = new InfiniteScroll( contactFaq, {
		// options
		path: '.pagination__next',
		append: '.question',
		history: false, //disables URL changes so going back a page isn't screwed
	});
}

//hide loading img when at bottom
window.onscroll = function(ev) {
    if ((window.innerHeight + window.scrollY) >= document.body.offsetHeight) {
        // you're at the bottom of the page
        var loadingImg = document.getElementsByClassName('infinite-scroll-request')[0];
        loadingImg.classList.add('disable');
    }
};