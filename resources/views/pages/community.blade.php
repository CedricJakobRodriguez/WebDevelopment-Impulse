@extends('layouts.app')

@section('content')
    <div class="jumbotron text-center">
        @guest
            <h1>Engage with us!</h1>
            <p>The community is an environment where you can easily collaborate with us.</p>
            <p><a class="btn btn-primary btn-lg" href="/login" role="button">Login</a> <a class="btn btn-success btn-lg" href="/register" role="button">Register</a></p>
        @else
            @include('dashboard/index')
        @endguest
        
    </div>
@endsection