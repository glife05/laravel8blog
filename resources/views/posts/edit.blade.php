@extends('layouts.app')


@section('content')
<h3>Edit Post</h3>
 
	 {!! Form::open(['action'=>['App\Http\Controllers\PostsController@update',$post->id],'method'=>'POST']) !!}
	 	<div class="form-group">
	 		{{Form::label('Title')}}
	 		{{Form::text('title',$post->title,['class'=>'form-control','placeholder'=>'Title'])}}

	 		{{FOrm::label('body','Body')}}
	 		{{Form::textarea('body',$post->body,['class'=>'form-control','placeholder'=>'Enter your message here'])}}
	 		
	 	</div>
	 	{{Form::hidden('_method','PUT')}}

	 	{{Form::submit('Update Post',['class'=>'btn btn-primary'])}}
	 {!!Form::close()!!}
	
@endsection