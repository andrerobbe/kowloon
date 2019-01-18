var elem = document.querySelector('.question-feed');
var infScroll = new InfiniteScroll( elem, {
	// options
	path: '.pagination__next',
	append: '.question',
	history: false, //disables URL changes so going back a page isn't screwed
});