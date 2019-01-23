@if(count($errors) > 0)
	@foreach($errors->all() as $error)
		<p class="alert alert-danger">
			{{$error}}
		</p>
	@endforeach
@endif

@if(session('error'))
	<p class="alert alert-danger">
		{{session('error')}}
	</p>
@endif

@if(session('succes'))
	<p class="alert alert-success">
		{{session('succes')}}
	</p>
@endif