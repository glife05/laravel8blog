@extends('layouts.app')



@section('content')
 
	 {!! Form::open(['action'=>'App\Http\Controllers\PostsController@store','method'=>'POST']) !!}
	 	<div class="form-group">
	 		{{Form::label('Title')}}
	 		{{Form::text('title','',['class'=>'form-control','placeholder'=>'Title'])}}

	 		{{FOrm::label('body','Body')}}
	 		{{Form::textarea('body','',['class'=>'form-control','placeholder'=>'Enter your message here'])}}
	 		
	 	</div>
	 	{{Form::submit('Create Post',['class'=>'btn btn-primary'])}}
	 {!!Form::close()!!}
	
@endsection