@extends('layout.master')
@section('content')
	<h1>New Gamegroup</h1>
	<div class="row">
		<div class="col-md-6">	
			{!! Form::open(['url' => 'gamegroups']) !!}
			<div class="form-group">
				{!! Form::label('name', 'Name:') !!}
				{!! Form::text('name', null, ['class' => 'form-control']) !!}
			</div>
			<div class="form-group">
				{!! Form::submit('Add Gamegroup', ['class' => 'btn btn-primary form-control']) !!}
			</div>
			{!! Form::close() !!}
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