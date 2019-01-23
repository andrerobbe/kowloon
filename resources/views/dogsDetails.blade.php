@extends('layouts.app')

@section('content')

<div class="wrapper">
	<!-- Logo -->
	<div class="logo-big"><a href="/"><img src="/img/logo/kowloon-big.png" alt="Kowloon Logo"></a></div>
	
	<div class="article-details">
		@include('inc._msg')

		<!-- Item overview -->
		<div class="item-overview">

			<!-- Item Content -->
			<div class="item-content">

				<!-- Item Imgs -->
				<div class="item-images">
					<div class="featured-img-container">
						<span class="helper"></span>
						<img src="/img/content/dogs/dog.jpg" alt="Cooling mat for a dog" class="featured-img">
					</div>
					<div class="img-list">
						<section id="img-list-1" class="active">
							<img src="/img/content/dogs/dog.jpg" alt="Cooling mat for a dog">
							<figcaption>A cool dog is</figcaption>
						</section>
						<section id="img-list-2">
							<img src="/img/content/dogs/dog-thumbnail.jpg" alt="Cooling mat for a dog">
							<figcaption>a happy dog</figcaption>
						</section>
						<section id="img-list-3">
							<img src="/img/content/dogs/cooling-mat-detail.jpg" alt="Cooling mat for a dog">
							<figcaption>Box Cover</figcaption>
						</section>
					</div>
				</div>

				<!-- Item Description -->
				<div class="item-description">
					<!-- Breadcrumbs -->
					<div class="breadcrumb">
						<img src="/img/logo/logo.png" alt="Kowloon Logo">
						<div class="dot dog"></div>
						<div class="arrow-left"></div><span>Dogs</span>
						<div class="arrow-left"></div><span>Splash 'n Fun</span>
					</div>
					
					<!-- Item Text -->
					<h1 class="uppercase heading h-l">Cooling Mat</h1>
					<h2 class="uppercase heading h-ml font-txt weight-bold">&euro; 15,49</h1>
					<!-- Colours -->
					
					<div class="item-dots">
						<h3 class="txt-xxl">Colors</h3>
						@for ($i = 0; $i < 3; $i++)
							<span class="dot"></span>
						@endfor
					</div>
					<!-- Description -->
					<h3 class="txt-xxl">Description</h3>
					<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
					tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
					quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
					consequat.</p>
					<!-- Figures -->
					<div class="figures">
						<div class="square"></div>
						<div class="circle"></div>
						<div class="triangle"></div>
					</div>
				</div>
			</div>

			<!-- Item Specifications -->
			<div class="item-specs">
				<h4 class="font-txt txt-xxl">Specifications</h3>
				<section class="font-txt txt-m">
					<h4 class="uppercase txt-m">Dimensions</h4>
					<span><b>S - </b>&Oslash;47x16cm</span>
					<span><b>M - </b>&Oslash;53x18cm</span>
					<span><b>L - </b>&Oslash;59x20cm</span>
				</section>
				<section class="font-txt txt-m">
					<h4 class="uppercase txt-m">Titel</h4>
					<span><b>S - </b>Here will be some technical text</span>
				</section>
			</div>
		</div>


		<!-- Related Products -->
		<div class="related-products">
			<h3 class="heading h-m uppercase">Related Products</h3>
			<div class="product-slider">
				@for ($i = 0; $i < 28; $i++)
					@include('inc.items/itemDog')
				@endfor
			</div>
			<div class="btn scroll-left"><div></div></div>
			<div class="btn scroll-right"><div></div></div>
			<a href="/dogs" class="txt-l">view more</a>
		</div>


		<!-- FAQ -->
		<div class="about-faq">
			<h3 class="heading h-m uppercase">Frequently Asked Questions</h3>
			@for ($i = 0; $i < 3; $i++)
				@include('inc._questions')
			@endfor
			<a href="#" id="more-about-questions">More Questions?</a>
		</div>


		<!-- Subscribe -->
		@include('inc.subscribe')
	</div>

</div>
@endsection