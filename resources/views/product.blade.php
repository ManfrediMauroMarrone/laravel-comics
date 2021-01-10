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
  <section id="comic-main">
    <div class="container">
      <div class="comic-info">
        <h1 class="uppercase">{{$comic['title']}}</h1>
        <div class="comic-status-container">
          <div class="comic-status">
            <div class="price">
              <span>U.S. Price:</span>
              <span class="comic-price">{{ $comic['price'] }}</span>
            </div>
            <div class="availability">
              <span class="comic-availability uppercase">Available</span>
            </div>
            <div class="check">
              <span>Check Availability</span>
            </div>
          </div>
        </div>
        <div class="description-container">
          <p class="comic-description
          ">{{ $comic['description']}}</p>
        </div>

      </div>
      <div class="comic-adv">
        <h5 class="uppercase">Advertisement</h5>
        <img src="{{ asset('/dc-comics/images/visa.jpg') }}" alt="adv">
      </div>
    </div>
  </section>
  <section id="comic-details">
    <div class="container">
      <div class="talent">
        <h2>Talent</h2>
        <ul>
          <li>
            <span class="talent-info">Art by:</span>
            <span class="talent-data">
              @foreach ($comic['artists'] as $artist)
                {{-- utilizzo $loop->last per verificare se un elemento è l'ultimo di un ciclo --}}
                <span><a href="#">{{ $artist }}</a>@if (!$loop->last),@endif</span>

              @endforeach
            </span>
          </li>
          <li>
            <span class="talent-info">Written by:</span>
            <span class="talent-data">
              @foreach ($comic['writers'] as $writer)
                {{-- utilizzo $loop->last per verificare se un elemento è l'ultimo di un ciclo --}}
                <span><a href="#">{{ $writer }}</a>@if (!$loop->last),@endif</span>

              @endforeach
            </span>
          </li>
        </ul>
      </div>
      <div class="specs">
        <h2>Specs</h2>
        <ul>
          <li>
            <span class="talent-info">Series:</span>
            <span class="talent-data uppercase">{{ $comic['series'] }}</span>
          </li>
          <li>
            <span class="talent-info">Price:</span>
            <span class="talent-data">{{ $comic['price'] }}</span>
          </li>
          <li>
            <span class="talent-info">On Sale Date:</span>
            <span class="talent-data">
              {{DateTime::createFromFormat ('Y-m-d', $comic['sale_date'])-> format('M d Y') }}</span>
          </li>
        </ul>
      </div>

    </div>
    <div class="container">
      <div class="icon-box-container">
        <div class="icon-box">
          <a href="#" class="uppercase">
            <span class="icon-box-text">Digital Comics</span>
            <span class="icon-box-img"></span>

          </a>
        </div>
        <div class="icon-box">
          <a href="#" class="uppercase">
            <span class="icon-box-text">Shop DC</span>
            <span class="icon-box-img"></span>

          </a>
        </div>
        <div class="icon-box">
          <a href="#" class="uppercase">
            <span class="icon-box-text">Comic Shop Locator</span>
            <span class="icon-box-img"></span>

          </a>
        </div>
        <div class="icon-box">
          <a href="#" class="uppercase">
            <span class="icon-box-text">Subscriptions</span>
            <span class="icon-box-img"></span>

          </a>
        </div>

      </div>

    </div>
  </section>

@endsection
