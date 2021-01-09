{{-- con extend collego il layout alle varie sezioni del mio sitom, in questo caso la homepage --}}
@extends('layouts.app')

{{-- con section collego lo yield alla mia homepage in modo da poter inserire il contenuto --}}
@section('content')
  @include('partials.jumbo')
  <section id="blue-strip">
    <img src="{{ $comic['thumb'] }}" alt="{{ $comic['series'] }}">
  </section>
  <section id="">
    <div class="container">
      <h1>{{$comic['title']}}</h1>
    </div>
  </section>

@endsection
