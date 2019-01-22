@extends('layouts.app')

@section('content')

@include('inc.slideshow')
<div class="wrapper">

	<!-- Breadcrumbs -->
	<div class="breadcrumb">
		<img src="/img/logo/logo.png" alt="Kowloon Logo">
		<div class="dot other"></div>
		<div class="arrow-left"></div><span>Others</span>
		<div class="arrow-left"></div><span>Splash 'n Fun</span>
	</div>

	<h1 class="heading h-l uppercase">Other Articles.</h1>

	<!-- Filter -->
	<h2 id="article-filter" class="txt-l font-title">Filter <span id="article-filter-arrow" class="arrow-right article-arrow"></span></h2>

	<div class="article-filters other">
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
			<select>
				<option>Sort by relevance</option>
				<option>Price: low to high</option>
				<option>Price: high to low</option>
				<option>Latest</option>
				<option>Oldest</option>
			</select>
			<p class="txt-m">Other items: <span>5 of 56</span></p>
		</div>

		<div class="articles">
			<!-- Top 4 items -->
			<div class="hot-items">
				@for ($i = 0; $i < 4; $i++)
					@include('inc.items/itemOther')
				@endfor
			</div>

			<!-- Featured article -->
			<div class="featured-article">
				@include('inc.items/itemOtherFeatured')
			</div>
		</div>
	</div>
	<!-- End of Content -->

</div>
@endsection