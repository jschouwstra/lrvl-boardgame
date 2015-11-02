@extends('layout.master')
@section('content')
<h1>Games</h1>
<div class="row">
	<div class="col-md-10">	
		<div class="table-responsive">	
			<table class="table table-striped table-hover table-bordered">
				<thead class="primary">
					<td>Name</td><td>Category</td>
				</thead>
				<tbody>	
					@foreach($games as $game)
					<tr>
						<td>{{ $game->name }}</td>
						@if($game->category)
							<td>{{ $game->category->name }}</td>
						@endif
					</tr>
					@endforeach	
				</tbody>
			</table>
		</div>
	</div>
</div>
@if(Auth::check())
	@if($currentUser->games)
	@foreach($currentUser->games as $Game)
		{{ $Game->name }}
	@endforeach	
		@else
		no game assigned
	@endif
	@else
	no login
@endif


@endsection
