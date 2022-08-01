@extends('master')
@section("content")


@if($product=="No Result")

<h2 class="mt-3">No Product Found </h2>

@else 
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
        <img class="detail-img" src="/image/{{$item['category']}}/{{$item['gallery']}}" alt="">

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
@endif
@endsection