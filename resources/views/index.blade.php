@extends('layouts.app')

@section('content')

@include('inc.slideshow')
<div class="wrapper">
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

	<div class="hot-items">
		<h1>Hot Items</h1>
		<section>
			<img src="" alt="">
			<p>Cooling Mat</p>
		</section>
	</div>
	<div class="subscribe">
		<div class="bg-pattern">
			<h2>Discover amazing Kowloon deals!</h2>
			<p>only in our newsletter</p>			
		</div>
		<div>
			<h3>Subscribe to our newsletter</h3>
			<p>Lorem ipsum dolor sit amet</p>

			{!! Form::open(['url' => '/submit', 'class' => 'form-controller']) !!}
				{{Form::label('email', '')}}
				{{Form::text('email', '', ['class' => '', 'placeholder' => "example@name.com", 'required', 'email'])}}
				{{Form::submit('OK', ['class' => ''])}}
			{!! Form::close() !!}

		</div>
	</div>
</div>

@endsection