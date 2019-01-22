<div class="faq">
	
	<!-- infinite scroll -->
	<div class="question-feed">
	<!-- .questions will be added to .questions-feed -->
		@for ($i = 0; $i < 5; $i++)
			@include('inc._questions')
		@endfor
	</div>

	<!-- status elements -->
	<div class="scroller-status">
		<div class="infinite-scroll-request loader-ellips"><img class="faq-loader" src="/img/content/loading.gif" alt="loading animation"></div>
		<!--
		<p class="infinite-scroll-last">End of content</p>
		<p class="infinite-scroll-error">No more questions to load</p>
		-->
	</div>
	
	<!-- pagination has path -->
	<a class="pagination__next" href="/questions/1"></a>
</div>