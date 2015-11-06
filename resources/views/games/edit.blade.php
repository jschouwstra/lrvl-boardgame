@extends('layout.master')
@section('content')
	<h1>Edit Game</h1>

	@if($game)
		<h1>{{$game->name}}</h1>
	@else
		No games
	@endif
@endsection