@extends('layout.master')
@section('content')
@if($game)
	<h1>Edit Game {{ $game->name }}</h1>
	<div class="row">
		<div class="col-md-6">	
 	{!! Form::model($game, ['method' => 'PATCH', 'action' => ['GameController@update', $game->id]]) !!}
 				<div class="form-group">
					{!! Form::label('name', 'Name:') !!}
					{!! Form::text('name', $game->name, ['class' => 'form-control']) !!}
				</div>

				{!! Form::label('category_id', 'Category:') !!}

				<div class="form-group">	
				{{ $game->category->name }}
					<select name="category_id" class="hide_category_id">
						@foreach($category as $category)
							<option value="{{ $category->id }}">
								{{ $category->name }}
							</option>
						@endforeach
					</select>
					<a href="#" class="show_category_id">Change</a>
				</div>
				<div class="form-group">
				{!! Form::submit('Update Game', ['class' => 'btn btn-primary form-control']) !!}
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
@else
No game selected
@endif

<script>
$( ".hide_category_id" ).prop("disabled","disabled");

$('.show_category_id').click(function(){
alert("show!");
$( ".hide_category_id" ).prop("disabled",false);

});

</script>


@endsection