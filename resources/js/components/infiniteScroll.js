var elem = document.querySelector('.question-feed');
var infScroll = new InfiniteScroll( elem, {
	// options
	path: '.pagination__next',
	append: '.question',
});