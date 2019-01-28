@extends('layout')
@section('title', 'Home')
@section('content')
	<h1>My {{ $foo }} first Website!</h1> 	{{-- {!! $foo !!} --}}
	<ul>
		@foreach($tasks as $task)
			<li>{{ $task }}</li>
		@endforeach
	</ul>Î
@endsection

@section('naslov')

@endsection
