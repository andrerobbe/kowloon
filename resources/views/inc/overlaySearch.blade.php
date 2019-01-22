<div class="overlay overlay-search">
	<div class="wrapper">

		<!-- Close btn  -->
		<div class="close-btn">
			<button id="close-search" class="btn sprite esc"><span>esc</span></button>
		</div>
		
		<!-- Advanced filter -->
		<h2 id="adv-filter">Advanced Filter <span id="filter-arrow" class="arrow-right"></span></h2>
		<div class="filter advanced-filter">

			<!-- Checkboxes -->
			<div>
				<h3 class="txt-xxl">Category</h3>
				<section class="categories">
					<label class="checkbox">Dogs
						<input type="checkbox">
						<span class="checkmark"></span>
					</label>
					<label class="checkbox">Cats
						<input type="checkbox">
						<span class="checkmark"></span>
					</label>
					<label class="checkbox">Fish
						<input type="checkbox">
						<span class="checkmark"></span>
					</label>
					<label class="checkbox">Birds
						<input type="checkbox">
						<span class="checkmark"></span>
					</label>
					<label class="checkbox">Other
						<input type="checkbox">
						<span class="checkmark"></span>
					</label>
				</section>
			</div>

			<!-- Price Slider -->
			@include('inc.priceSlider')
		</div>
		

		<!-- Search Results -->
		<div class="search-results">
			<input type="text" name="search" class="search-input">
			<!-- Desktop Label -->
			<button for="search" class="btn search-label active" id="search-desktop">
				<h1 class="heading h-l"><span class="sprite search-bold"></span>Just start typing and hit <span class="sprite break"></span> to search</h1>
			</button>
			<!-- Mobile Label -->
			<button for="search" class="btn search-label active" id="search-mobile">
				<h1 class="heading h-l"><span class="sprite search-bold"></span>Type to search</h1>
			</button>
		</div>
		<button class="btn sprite clear"><span>Clear</span></button>
		<div class="description">
			<p>Don’t find what you’re looking for? Maybe use fewer words or a more general search term.</p>
			<p>If you still have no luck you can contact our <a href="" class="font-txt">customer service</a>.</p>
		</div>
	</div>
</div>