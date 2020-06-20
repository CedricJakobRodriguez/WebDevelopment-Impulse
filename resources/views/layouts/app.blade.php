@extends('layouts.shell')

@section('structure')
    <div id="app">
        <main >
            @include('inc/messages')
            @yield('content')
        </main>
    </div>
@endsection
