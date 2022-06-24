@extends('layouts.main')

@section('content')
  <div class="banner" style="background-image: linear-gradient(rgba(0,0,0,0.1), rgba(0,0,0,0.1)), url('/images/image 3.png');">
    <div class="category" id="banner-container">
      <p><a href="">Bikinis and swimsuits</a></p>
      <p><a href="">Coats</a></p>
      <p><a href="">Jackets and Suit Jackets</a></p>
      <p><a href="">Jeans</a></p>
      <p><a href="">Shirts</a></p>
      <p><a href="">Shorts</a></p>
      <p><a href="">Skirts</a></p>
      <p><a href="">Trousers</a></p>
      <p><a href="">T-shirts and tops</a></p>
    </div>
  </div>
  <!-- <div class="container">
    @foreach ($items as $item)
      <div class="card-index" style="background-image: url({{$item -> img}})">
        <div class="index-info">
          <p><?php echo rand(30, 150); ?></p>
          <p>{{$item -> brand}}</p>
        </div>
      </div>
    @endforeach
  </div> -->
@endsection
