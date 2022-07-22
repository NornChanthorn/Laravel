@extends('master')
@section("content")

<div class="container custom-product" style="border: solid black 2px">

  <div class="col-sm-4">
    <a href="#">Filter</a>
  </div>
  <div class="trending-wrapper">
    <h2>Result for product search</h2>
    <div class="carousel-inner">
      @foreach ($product as $item)
      <div class="search-item">
        <a href="detail/{{$item['id']}}">
          <img class="trending-image" src="{{$item['gallery']}}" class="d-block w-100" alt="...">
          <div class="">
            <h2 style="color:black">{{$item['name']}}</h2>
            <h5 style="color:black">{{$item['description']}}</h5>
        </a>
      </div>
    </div>
    @endforeach
  </div>
</div>
</div>

@endsection