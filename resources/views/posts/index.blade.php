@extends('layouts.app')



@section('content')
 
	@if(count($posts)>0)
		@foreach($posts as $post)
			<div class="container">
				<h3>{{$post->title}}</h3>
				<hr>
				<small>Written on{{$post->created_at}}</small>
				<a href="/posts/{{$post->id}}">Show more..</a>
			</div><br>
		@endforeach

		 
	@else

		<p>No posts found</p>
	@endif
@endsection