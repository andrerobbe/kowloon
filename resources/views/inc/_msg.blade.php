@if(count($errors) > 0)
	@foreach($errors->all() as $error)
		<p class="alert alert-danger lead">
			{{$error}}
		</p>
	@endforeach
@endif

@if(session('error'))
	<p class="alert alert-danger lead">
		{{session('error')}}
	</p>
@endif

@if(session('succes'))
	<p class="alert alert-success lead">
		{{session('succes')}}
	</p>
@endif