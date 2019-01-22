@extends('layouts.app')

@section('content')

<div class="wrapper">
	<!-- Logo -->
	<div class="logo-big"><a href="/"><img src="/img/logo/kowloon-big.png" alt="Kowloon Logo"></a></div>
	
	<div class="article-details">
		@include('inc._msg')

		<!-- Item overview -->



		<!-- Related Products -->
		<div class="related-products">
			<h3 class="heading h-m uppercase">Related Products</h3>
			<div class="product-slider">
				@for ($i = 0; $i < 10; $i++)
					@include('inc.items/itemDog')
				@endfor
			</div>
			
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