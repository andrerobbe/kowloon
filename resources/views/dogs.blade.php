@extends('layouts.app')

@section('content')

@include('inc.slideshow')
<div class="wrapper">

	<!-- Breadcrumbs -->
	<div class="breadcrumb">
		<img src="/img/logo/logo.png" alt="Kowloon Logo">
		<div class="dot dog"></div>
		<div class="arrow-left"></div><span>Dogs</span>
		<div class="arrow-left"></div><span>Splash 'n Fun</span>
	</div>

	<h1 class="heading h-l uppercase">Dog Articles.</h1>

	<!-- Filter -->
	<h2 id="article-filter" class="txt-l font-title">Filter <span id="article-filter-arrow" class="arrow-right article-arrow"></span></h2>

	<div class="article-filters dog">
		<!-- Checkboxes -->
		<div>
			<h3 class="txt-xxl">By collection</h3>
			<section class="categories">
				<label class="checkbox">Splash 'n Fun
					<input type="checkbox" checked="">
					<span class="checkmark"></span>
				</label>
				<label class="checkbox">Luxury
					<input type="checkbox">
					<span class="checkmark"></span>
				</label>
				<label class="checkbox">New
					<input type="checkbox">
					<span class="checkmark"></span>
				</label>
				<label class="checkbox">On Sale
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
	

	<!-- Content -->
	<div class="content">
		<div class="filter-info">
			<div class="select-box">
				<select>
					<option>Sort by relevance</option>
					<option>Price: low to high</option>
					<option>Price: high to low</option>
					<option>Latest</option>
					<option>Oldest</option>
				</select>
			</div>
			<p class="txt-m">Dog items: <span>5 of 56</span></p>
		</div>

		<div class="articles">
			<!-- Top 4 items -->
			<div class="hot-items">
				@for ($i = 0; $i < 4; $i++)
					@include('inc.items/itemDog')
				@endfor
			</div>

			<!-- Featured article -->
			<div class="featured-article">
				@include('inc.items/itemDogFeatured')
			</div>
		</div>
	</div>
	<!-- End of Content -->


	<!-- Infite scroller -->
	<div class="infinite-articles">
		<div class="article-feed">
		<!-- .articles will be added to .article-feed -->
			@for ($i = 0; $i < 16; $i++)
				@include('inc.items/itemDog')
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
		<a class="article__next" href="/article/1"></a>
	</div>
</div>
@endsection