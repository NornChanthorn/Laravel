@extends('master')
@section("content")

<div class="container" >
  <div class="row">

    <div class="col-sm-6">
    <img class="detail-img" src="/image/{{$product['category']}}/{{$product['gallery']}}" alt="">              

    </div>

    <div class="col-sm-6">

      <a href="/">Go Back</a>
      <div class="des">
        <h4>{{$product->name}}</h4>
        <h5>Price : $ {{$product->price}}</h5>
        <h6>Details : {{$product->description}}</h6>
        <h6>Category : {{$product->category}}</h6>
      </div>

      <br>
      
      <form action="/add_to_cart" method="POST">
        @csrf
        <input type="hidden" name="product_id" value="{{$product['id']}}">
        <button class="btn btn-primary ">Add to Cart</button>
      </form>
      <br>
      <button class="btn btn-success">Buy now</button>
    </div>
  </div>
</div>

@endsection