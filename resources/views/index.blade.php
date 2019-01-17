@extends('layouts.app')

@section('content')

@include('inc.slideshow')
<div class="wrapper">
	@include('inc._msg')

	<!-- Navigation -->
	<div class="navigation">
		<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Laboriosam dicta cumque est quas reiciendis officiis iste consequatur sequi delectus autem asperiores veniam recusandae commodi, adipisci dolorum voluptas provident, rem quae!</p>
		<ul>
			<li class="sprite dog"><a href="/dog">Dogs</a></li>
			<li class="divider-vertical"></li>
			<li class="sprite cat"><a href="/cats">Cats</a></li>
			<li class="divider-vertical"></li>
			<li class="sprite fish"><a href="/fish">Fish</a></li>
			<li class="divider-vertical"></li>
			<li class="sprite bird"><a href="/birds">Birds</a></li>
			<li class="divider-vertical"></li>
			<li class="sprite hamster"><a href="/small-animals">Small Animals</a></li>
			<li class="divider-vertical"></li>
			<li class="sprite plus"><a href="/other">Other</a></li>
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
		<a href="">Visit the store</a>
	</div>

	<!-- Subscribe -->
	<div class="subscribe">
		<div class="bg-pattern">
			<h2 class="heading h-xl align-center">Discover amazing Kowloon deals!</h2>
			<p class="txt-xxl font-title align-center">only in our newsletter</p>
		</div>
		<div class="sub-form-bg">
			<div class="sub-form">
				<h3 class="txt-xxl font-txt">Subscribe to our newsletter</h3>
				<p>Lorem ipsum dolor sit amet</p>

				{!! Form::open(['url' => '/subscribe', 'class' => 'form-controller']) !!}
					{{Form::text('email', '', ['class' => '', 'placeholder' => "example@name.com", 'required', 'email'])}}
					{{Form::submit('OK', ['class' => 'btn btn-primary txt-xl'])}}
				{!! Form::close() !!}
			</div>
		</div>
	</div>

</div>
@endsection