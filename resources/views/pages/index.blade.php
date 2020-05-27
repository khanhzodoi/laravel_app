@extends('layouts.app')

@section('content')
    <div class="jumbotron text-center">
        <h1>{{ $title }}</h1>
        <p>This is index view</p>
        <p>
            <a href="" class="btn btn-primary btn-lg" href="/login" role="button">Login</a>
            <a href="" class="btn btn-primary btn-lg" href="/register" role="button">Register</a>
        </p>
    </div>
    
@endsection         