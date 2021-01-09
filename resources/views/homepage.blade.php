{{-- con extend collego il layout alle varie sezioni del mio sitom, in questo caso la homepage --}}
@extends('layouts.app')

{{-- con section collego lo yield alla mia homepage in modo da poter inserire il contenuto --}}
@section('content')
  @include('partials.jumbo')
  <section id="series">
    <div class="container">
      <div class="section-title">
        <h2 class="uppercase">current series</h2>
      </div>
      <div class="card-container">
        @foreach ($comics as $key => $item)
          <div class="card">
            {{-- popolo il parametro id del mio url con il valore di $key --}}
            <a href="{{ route('comic-details', ['id' => $key]) }}">
              <div class="comic-img">
                <img src="{{ $item['thumb'] }}" alt="{{ $item['series'] }}">

              </div>
              <div class="comic-title">
                <p class="uppercase">{{ $item['series'] }}</p>

              </div>

            </a>
          </div>
        @endforeach

      </div>
    </div>

  </section>

@endsection
