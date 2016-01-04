@extends('layout.master')
@section('content')
<h1>Games</h1>
@if(Auth::check())
@if(count($currentUser->games))
<div class="row">
	<div class="col-md-10">	
		<div class="table-responsive">	
			<table class="table table-striped table-hover table-bordered">
				<thead class="primary">
					<td>Name</td><td>Category</td><td colspan="3">Action</td>
				</thead>
				<tbody>	
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
							<a href="{{ url('/games/'.$Game->id.'/edit') }}">Edit</a>
						</td>
						<td>
							<script>
							function ConfirmDelete()
							{
								var x = confirm("Are you sure you want to delete?");
								if (x)
									return true;
								else
									return false;
							}
							</script>

							{!! Form::open(array('url' => 'games/' . $Game->id, 'class' => '', 'onsubmit' => 'return ConfirmDelete()')) !!}
								{!! Form::hidden('_method', 'delete') !!}
								{!! Form::submit('Delete this game', array('class' => 'btn btn-warning')) !!}
							{!! Form::close() !!}
						</td>
					</tr>	
					@endforeach	
					@else
					<p>
						<span class="alert alert-danger">
							No games assigned yet.
							
						</span>
					</p>	
					<p>
						<a href="{{ url('auth/login') }}">
							Add a game
						</a> to start.
					</p>
					@endif
					@else
					<p>
						<span class="alert alert-danger">
							You need to login to show games.
							
						</span>
					</p>	
					<p>
						Please
						<a href="{{ url('games/create') }}">
							 Sign in
						</a> 
						to show your games.
					</p>
					<p>
						Or					
						<a href="{{ url('auth/register') }}">
							 Register
						</a> 
						to start adding your games.
					</p>
					@endif
				</tbody>
			</table>

			@endsection
