@extends('layouts.app')

@section('content')

	<div class="container">
		<h3>{{$post->title}}</h3>
		<p>{{$post->body}}</p>

		<hr>
		<small>Written on {{$post->created_at}}</small>
		<a href="/posts">Back</a>

	</div>

	<div class="container">
		<hr>

		<a href="/posts/{{$post->id}}/edit" class="btn btn-secondary">Edit Post</a>

		<hr>

		{!!Form::open(['action'=>['App\Http\Controllers\PostsController@destroy',$post->id],'method'=>'POST'])!!}

			{{Form::hidden('_method','DELETE')}}

			{{Form::submit('DELETE',['class'=>'btn btn-danger'])}}


		{!! Form::close()!!}
		
		
	</div>

@endsection