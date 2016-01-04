@extends('layout.master')
@section('content')
<h1>Gamegroup</h1>
<h2>{{$gamegroup->name}}</h2>
<div class="row">
<div class="col-md-10">
<div class="row">
	<div class="col-md-5">
	<hr>
	<p>
	<a href="#">
	<span class="btn btn-primary form-control" style="font-size:18px;">
		<span class="glyphicon glyphicon-plus fa-6x">
		</span> Add Games
	</span>
	</a>
	</p>
	<div id="addGames">	
		<div class="table-responsive">
			<table class="table table-striped table-hover table-bordered">
				<thead>
				</thead>
				<tbody>
				@foreach($currentUser->games as $game)						
				<tr>
					<td>
						<label style="width:100%;">
							{!! Form::checkbox('id','value') !!}&nbsp;&nbsp;&nbsp;
							{{ $game->name }}
						</label>
					</td>
				</tr>
				@endforeach
				</tbody>
			</table>	
		</div>
		<div class="form-group">
			{!! Form::submit('Add Game', ['class' => 'btn btn-primary form-control']) !!}
		</div>
	</div>
</div>
</div>

<hr>	
</div>
</div>	

@if(count($gamegroup->games))
<div class="row">
	<div class="col-md-10">
		<div class="table-responsive">
			<table class="table table-striped table-hover table-bordered">
				<thead>
					<td>Name</td>
					<td>Category</td>
				</thead>
				<tbody>
						@foreach($gamegroup->games as $game)
							<tr>
								<td>{{ $game->name }}</td>
								<td>{{ $game->category->name }}</td>
							</tr>
						@endforeach
				</tbody>	
			</table>
		</div>
	</div>
</div>
@else
No games
@endif
@endsection
