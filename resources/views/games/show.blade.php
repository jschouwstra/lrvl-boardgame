@extends('layout.master')
@section('content')
	@if($game)
		<h1>{{$game->name}}</h1>
	@else
		No games
	@endif
@endsection
