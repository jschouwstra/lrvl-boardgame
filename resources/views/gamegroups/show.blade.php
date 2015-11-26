@extends('layout.master')
	@section('content')
	<h1>{{$gamegroup->name}}</h1>
	@foreach($gamegroup->games as $game)
		{{$game->name}}</br>
	@endforeach
@endsection
