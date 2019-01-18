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