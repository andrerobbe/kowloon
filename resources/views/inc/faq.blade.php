<div class="faq">
	<!-- infinite scroll -->
	<div class="question-feed">
	<!-- .questions will be added to .questions-feed -->
		@include('inc._questionsImport')
	</div>

	<!-- status elements -->
	<div class="scroller-status">
		<div class="infinite-scroll-request loader-ellips"></div>
		<p class="infinite-scroll-last">End of content</p>
		<p class="infinite-scroll-error">No more questions to load</p>
	</div>
	<!-- pagination has path -->
	<a class="pagination__next" href="/questions/1">Next</a>
</div>