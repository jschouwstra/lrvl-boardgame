@extends('layout.master')
@section('content')
<h1>New Game</h1>
<div class="row">
	<div class="col-md-6">	
		{!! Form::open(['url' => 'games']) !!}
		<div class="form-group">
			{!! Form::label('name', 'Name:') !!}
			{!! Form::text('name', null, ['class' => 'form-control']) !!}
		</div>

		
		{!! Form::label('category_id', 'Category:') !!}
		<div class="form-group">
		<!-- published_at input field-->
		{!! Form::select('category_id', [
				'1' => 'Dice game',
				'2' => 'Card game',
				'3' => 'Board game'
			]
		) !!}
		</div>

		<div class="form-group">
			{!! Form::submit('Add article', ['class' => 'btn btn-primary form-control']) !!}
		</div>

{{-- Todo get this to work $categories instead of hardcoding the list
 --}}{{-- 		{!! Form::select('category', $categories) !!}
 --}}


		{!! Form::close() !!}


		<!-- {{   var_dump($errors)   }} -->
		@if ($errors->any())
			@foreach ($errors->all() as $error)
				<p>
					<span class="alert alert-danger">
						{{$error}}
					</span>
				</p>							
			@endforeach
		@endif

	</div>
</div>
@endsection
