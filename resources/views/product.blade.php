{{-- con extend collego il layout alle varie sezioni del mio sitom, in questo caso la homepage --}}
@extends('layouts.app')

{{-- con section collego lo yield alla mia homepage in modo da poter inserire il contenuto --}}
@section('content')
  @include('partials.jumbo')
  <section id="blue-strip">
    <div class="container">

      <div class="comic-thumb-container">
        <div class="comic-thumb-wrapper">
          <span class="uppercase">{{ $comic['type'] }}</span>
          <img src="{{ $comic['thumb'] }}" alt="{{ $comic['series'] }}">
          <span class="uppercase">View Gallery</span>
        </div>

      </div>
    </div>
  </section>
  <section id="">
    <div class="container">
      <h1>{{$comic['title']}}</h1>
    </div>
  </section>

@endsection
