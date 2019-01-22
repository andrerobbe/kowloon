@extends('layouts.app')

@section('content')

@include('inc.slideshow')
<div class="wrapper">
	@include('inc._msg')

	<!-- Breadcrumbs -->
	<div class="breadcrumb">
		<img src="/img/logo/logo.png" alt="Kowloon Logo">
		<div class="dot dogs"></div>
		<div class="arrow-left"></div><span>Dogs</span>
		<div class="arrow-left"></div><span>Splash 'n Fun</span>
	</div>

	<h1 class="heading h-l uppercase">Dog Articles.</h1>

	<!-- Filter -->
	<h2 id="dog-filter" class="txt-l font-title">Filter <span id="dog-filter-arrow" class="arrow-right article-arrow"></span></h2>
	<div class="dog-filters">

		<!-- Checkboxes -->
		<div>
			<h3 class="txt-xxl">By collection</h3>
			<section class="categories">
				<label class="checkbox">Splash 'n Fun
					<input type="checkbox">
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
		<div class="price-slider">
			<h3 class="txt-xxl">Price Range</h3>
			<section class="range-slider">
				<input value="8" min="8" max="499" step="1" type="range">
				<input value="499" min="8" max="499" step="1" type="range">
				<div class="values">
					<div class="val-1"><span class="euro-sign">&euro;</span><span class="rangeValue-1"></span></div> - <div class="val-2"><span class="euro-sign">&euro;</span><span class="rangeValue-2"></span></div> 
				</div>
			</section>
		</div>
	</div>
	

	<!-- Dog Content -->
	<div class="dog-content">
		<div class="filter-info">
			<select>
				<option>Sort by relevance</option>
				<option>Price: low to high</option>
				<option>Price: high to low</option>
				<option>Latest</option>
				<option>Oldest</option>
			</select>
			<p class="txt-m">Dog items: <span>5 of 56</span></p>
		</div>
		

		<div class="dog-articles">
			<!-- Top 4 items -->
			<div class="hot-items">
					@include('inc.item')
					@include('inc.item')
					@include('inc.item')
					@include('inc.item')
			</div>

			<!-- Featured dog article -->
			<div class="dog-featured">
				<section class="item-section">
					<!-- The dots/circles -->
					<div class="item-dots">
						<span class="dot active"></span>
						<span class="dot"></span>
						<span class="dot"></span>
					</div>
						
					<!-- Hover -->
					<div class="item-img">
						<!-- Hover -->
						<div class="item-hover">
							<img src="/img/content/dog_hover.png" alt="hover overlay">
							<span>view details</span>
						</div>

						<!-- Img -->
						<img src="/img/content/dog.png" alt="Cooling Mat for a dog">
					</div>
					<div class="featured-dog-txt">
						<h4>Cooling Mat</h4>
						<p class="txt-m">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Repellat repudiandae, placeat ipsam quae ullam assumenda quidem dolorum ..</p>
						<div>
							<p>&euro; 15,49</p>
							<a href="/dogs/details" class="btn btn-primary">Want to know more?</a>
						</div>
				</section>
			</div>
		</div>
	</div>
	<!-- End of Content -->


	<!-- Infite scroller -->
	<div class="infinite-content">
		
	</div>
</div>
@endsection