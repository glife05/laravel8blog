@extends('layouts.app')

@section('content')

	<div class="container">
		<h3>{{$post->title}}</h3>
		<p>{{$post->body}}</p>
		<hr>
		<small>Written on {{$post->created_at}}</small>
		<a href="/posts">Back</a>
	</div>

@endsection