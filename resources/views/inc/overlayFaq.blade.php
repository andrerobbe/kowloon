<div class="overlay overlay-faq">
	<div class="wrapper">

		<!-- Close btn -->
		<div class="close-btn">
			<button id="close-faq" class="btn sprite esc"><span>esc</span></button>
		</div>

		<h1 class="heading h-l font-title">Frequently Asked Questions</h1>

		<!-- Search Results -->
		<div class="search-results">
			<input type="text" name="search" class="search-input">
			<button for="search" class="btn search-label active" id="search-faq">
				<h1 class="heading h-l"><span class="sprite search-bold"></span>Search on keyword<span class="sprite break"></span></h1>
			</button>
		</div>
		<button class="btn sprite clear"><span>Clear</span></button>
		<div class="description">
			<p>Don’t find what you’re looking for?</p>
			<p>You can always contact our <a href="/contact">customer service</a>. We're happy to help you!</p>
		</div>
		
		
		<!-- Infinite scroll -->
		<div class="faq">
			<div class="question-feed">
			<!-- .questions will be added to .questions-feed -->
				@for ($i = 0; $i < 5; $i++)
					@include('inc._questions')
				@endfor
			</div>

			<!-- status elements -->
			<div class="scroller-status">
				<div class="infinite-scroll-request loader-ellips"><img src="/img/content/loading.gif" alt="loading animation"></div>
				<!--
				<p class="infinite-scroll-last">End of content</p>
				<p class="infinite-scroll-error">No more questions to load</p>
				-->
			</div>
			
			<!-- pagination has path -->
			<a class="question__next" href="/question/1"></a>
		</div>		
	</div>
</div>