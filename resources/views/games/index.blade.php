@extends('layout.master')
@section('content')
<h1>Games</h1>
<div class="row">
	<div class="col-md-10">	
		<div class="table-responsive">	
			<table class="table table-striped table-hover table-bordered">
				<thead class="primary">
					<td>Name</td><td>Category</td><td colspan="3">Action</td>
				</thead>
				<tbody>	
				@if(Auth::check())
					@if($currentUser->games)
					@foreach($currentUser->games as $Game)
							<tr>
								<td>{{ $Game->name }}</td>
								<td>
									{{ $Game->category->name }}
								</td>
								<td>	
									<a href="{{ url('/games', $Game->id) }}">
										Show more</button>
									</a>
								</td>
							
								<td>
									<a href="{{ url('/games/edit', $Game->id) }}">Edit</a>
								</td>
								<td>
									<a href="{{ url('/games/delete', $Game->id) }}">Delete</a>
								</td>
							</tr>	
					@endforeach	
				</tbody>
			</table>
						@else
						no game assigned
					@endif
				@else
				no login
				@endif


@endsection
