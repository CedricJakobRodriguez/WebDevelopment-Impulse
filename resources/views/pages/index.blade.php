@extends('layouts.app')

@section('content')
    @include('inc.carousel')

    <section class="jumbotron text-center bg-light">
      <div class="container">
        <h1>What we do best</h1>
        <p class="lead text-muted"> Impulse is a analytics consultancy that specialises <br> in analysis, modeling en simualtion <br> of medical data and physiology </h2></p>
        <p>
          <a href="/services" class="btn btn-primary my-2">Services</a>
        </p>
      </div>
    </section>

    
    <section class="jumbotron text-center bg-light">
      <div class="container">
        <h1>Engineering together</h1>
        <p class="lead text-muted"> Impulse is a engineering consultancy that specialises <br> in merging the mechanical, electrical en software domain <br> for product development </h2></p>
        <p>
          <a href="/community" class="btn btn-primary my-2">Community</a>
        </p>
      </div>
    </section>
@endsection