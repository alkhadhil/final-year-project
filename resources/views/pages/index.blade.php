@extends('layouts.app')

@section('content')
    <div class="jumbotron text-center">
        <h1>Welcome To NOTICEBOARD</h1>
        <p>This is the administration system for uploading posts to notice board. Only admin is allowed to login</p>
        <p><a class="btn btn-primary btn-lg" href="/fyp5/public/login" role="button">Login</a> <a class="btn btn-success btn-lg" href="/fyp5/public/register" role="button">Register</a></p>
    </div>
@endsection
