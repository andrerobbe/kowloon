@extends('layouts.app')

@section('content')

@include('inc.slideshow')
<div class="wrapper">
	@include('inc._msg')

	<!-- Navigation -->
	<div class="navigation">
		<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Laboriosam dicta cumque est quas reiciendis officiis iste consequatur sequi delectus autem asperiores veniam recusandae commodi, adipisci dolorum voluptas provident, rem quae!</p>
		<ul>
			<li class="sprite dog"><a href="/dogs" class="align-center uppercase">Dogs</a></li>
			<li class="divider-vertical"></li>
			<li class="sprite cat"><a href="/cats" class="align-center uppercase">Cats</a></li>
			<li class="divider-vertical"></li>
			<li class="sprite fish"><a href="/fish" class="align-center uppercase">Fish</a></li>
			<li class="divider-vertical"></li>
			<li class="sprite bird"><a href="/birds" class="align-center uppercase">Birds</a></li>
			<li class="divider-vertical"></li>
			<li class="sprite hamster"><a href="/small-animals" class="align-center uppercase">Small Animals</a></li>
			<li class="divider-vertical"></li>
			<li class="sprite plus"><a href="/other" class="align-center uppercase">Other</a></li>
		</ul>
	</div>

	<!-- Hot Items -->
	<div class="hot-items">
		<h1 class="heading h-l">Hot Items.</h1>
		<ul>
			<li>@include('inc.item')</li>
			<li>@include('inc.item')</li>
			<li>@include('inc.item')</li>
			<li>@include('inc.item')</li>
		</ul>
		<a href="/dogs">Visit the store</a>
	</div>

	<!-- Subscribe -->
	@include('inc.subscribe')
</div>
@endsection