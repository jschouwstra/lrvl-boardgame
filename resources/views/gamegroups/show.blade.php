@extends('layout.master')
@section('content')

	@if(count($gamegroup))
		<h1>{{$gamegroup->name}}</h1>
		@if(count($currentUser->gamegroups))
				@foreach($currentUser->gamegroups as $gamegroup)
					@if(count($gamegroup->games))
						@foreach($gamegroup->games as $game)
							{{$game->id}}
						@endforeach
					@else
					<b>no assigned games to gamegroup</b>
					@endif
				@endforeach
	

	
		@else
		<i>No assigned games</i>
		@endif
	@else
		No gamegroups
	@endif
@endsection
