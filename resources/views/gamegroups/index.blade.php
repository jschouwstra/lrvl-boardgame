@extends('layout.master')

@section('content')
<h1>Gamegroups</h1>



@if(Auth::check())
	@if(count($currentUser->gamegroups))
	<div class="row">
		<div class="col-md-10">
			<div class="table-responsive">
				<table class="table table-striped table-hover table-bordered">
					<thead>
						<td>Name</td>
						<td colspan="3">Action</td>
					</thead>
					<tbody>
						@foreach($currentUser->gamegroups as $gamegroup)
							<tr>
								<td>{{ $gamegroup->name }}</td>
								<td>
									<a href="{{ url('/gamegroups', $gamegroup->id) }}">Show more</a>
								</td>
							</tr>
						@endforeach
					</tbody>
				</table>
			</div>

			@else
			<p>
			<span class="alert alert-danger">
			No gamegroups assigned yet.

			</span>
			</p>	
			<p>
			<a href="{{ url('gamegroups/create') }}">
			Add a gamegroup
			</a> to start.
			</p>
	@endif
@else
no login	
@endif
	</div>
</div>	

@endsection