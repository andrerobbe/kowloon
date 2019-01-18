var navbarFaq = document.querySelectorAll('.question-feed')[0];
var infScroll = new InfiniteScroll( navbarFaq, {
	// options
	path: '.pagination__next',
	append: '.question',
	history: false, //disables URL changes so going back a page isn't screwed
});


var contactFaq = document.querySelectorAll('.question-feed')[1];
var infScroll = new InfiniteScroll( contactFaq, {
	// options
	path: '.pagination__next',
	append: '.question',
	history: false, //disables URL changes so going back a page isn't screwed
});