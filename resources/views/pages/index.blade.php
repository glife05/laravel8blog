@extends('layouts.app')

@section('content')

 <div class="jumbotron text-center">
 	<h1>Welcome</h1>
 	<p>Please Login or Register to access your dashboard</p>
 	<p><a href="/login" class="btn btn-primary btn-lg" role="button">Login</a>
 	<a href="/register" class="btn btn-success btn-lg" role="button">Register</a></p>
 </div>

@endsection