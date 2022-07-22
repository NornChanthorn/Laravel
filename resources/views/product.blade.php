@extends('master')
@section("content")

<div class="container custom-product" style="border: solid black 2px ; background-color:white">
  <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
    <div class="carousel-inner">
      @foreach ($product as $item)
      <div class="carousel-item {{$item['id']==1?'active':''}}">
        <a href="detail/{{$item['id']}}">
          <img class="slider-img" src="{{$item['gallery']}}" class="d-block w-100" alt="...">
          <div class="carousel-caption">
            <h3 style="color:black">{{$item['name']}}</h3>
            <p style="color:black">{{$item['description']}}</p>
          </div>
        </a>
      </div>
      @endforeach
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Next</span>
    </button>
  </div>
  <div class="trending-wrapper">
    <h3>Trending Product</h3>
    <div class="carousel-inner">
      @foreach ($product as $item)
      <div class="trending-item">
        <a href="detail/{{$item['id']}}">
          <img class="trending-image" src="{{$item['gallery']}}" class="d-block w-100" alt="...">
          <div class="">
            <h3 style="color:black">{{$item['name']}}</h3>
        </a>
      </div>
    </div>
    @endforeach
  </div>
</div>
</div>

@endsection