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
					</thead>
					<tbody>
						@foreach($currentUser->gamegroups as $gamegroup)
							<tr>
								<td>
									<a href="{{ url('/gamegroups', $gamegroup->id) }}">{{ $gamegroup->name }}</a>
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
<p>
	<span class="alert alert-danger">
		You need to login to show your gamegroups.
		
	</span>
</p>	
<p>
	Please
	<a href="{{ url('auth/login') }}">
		 Sign in
	</a> 
	to show your gamegroups.
</p>
<p>
	Or					
	<a href="{{ url('auth/register') }}">
		 Register
	</a> 
	to start adding your gamegroups.
</p>
@endif
	</div>
</div>	

@endsection