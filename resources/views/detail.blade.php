@extends('master')
@section("content")

<div class="container" >
  <div class="detail-container">

    <div class="col ">
       <img class="detail-img shadow-lg" src="/image/{{$product['category']}}/{{$product['gallery']}}" alt="">              

    </div>

    <div class="col mt-3">

      <a href="/">Go Back</a>
      <!-- <div class="des">
        <h4>{{$product->name}}</h4>
        <h5>Price : $ {{$product->price}}</h5>
        <h6>Details : {{$product->description}}</h6>
        <h6>Category : {{$product->category}}</h6>
      </div> -->
        <div class="des d-flex justify-content-center aligns-item-start flex-column gap-3">
            <h4>{{$product->name}}</h4>
            <p> <span class="text-dark">Price</span>  : $ {{$product->price}}</p>
            <p><span class="text-dark">Details</span> : {{$product->description}}</p>
            <p><span class="text-dark">Category</span>: {{$product->category}}</p>
           
        </div>
       

      <br>
      
      <form action="/add_to_cart" method="POST">
        @csrf
        <input type="hidden" name="product_id" value="{{$product['id']}}">
        <button class="btn btn-add-to-cart">Add to Cart</button>
      </form>
      <br>
      <!-- <button class="btn btn-success">Buy now</button> -->
    </div>
  </div>
</div>

@endsection