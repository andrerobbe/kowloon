<div class="overlay overlay-faq">
	<div class="wrapper">

		<!-- Close btn -->
		<div class="close-btn">
			<button id="close-faq" class="btn sprite esc"><span>esc</span></button>
		</div>

		<h1 class="heading h-l font-title">Frequently Asked Questions</h1>

		<!-- Search Results -->
		<div class="search-results">
			<input type="text" name="search" placeholder="" class="search-input">
			<button for="search" class="btn search-label active">
				<h1 class="heading h-l"><span class="sprite search-bold"></span>Search on keyword<span class="sprite break"></span></h1>
			</button>
		</div>
		<button class="btn sprite clear"><span>Clear</span></button>
		<div class="description">
			<p>Don’t find what you’re looking for?</p>
			<p>You can always contact our <a href="">customer service</a>. We're happy to help you!</p>
		</div>

		<!-- infinite scroll -->
		<div class="question-feed">
		<!-- .questions will be added to .questions-feed -->
			@include('inc.questionsImport')
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
</div>