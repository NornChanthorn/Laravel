@extends('master')
@section("content")

<div class="container mb-4" >
  <div class="detail-container">

    <div class="col">
       <img class="detail-img shadow-lg" src="/image/{{$product['category']}}/{{$product['gallery']}}" style="width: 420px; " alt="">              

    </div>

    <div class="col mt-3">

      <div class="mx-2"><a href="/">Go Back</a></div>
      <!-- <div class="des">
        <h4>{{$product->name}}</h4>
        <h5>Price : $ {{$product->price}}</h5>
        <h6>Details : {{$product->description}}</h6>
        <h6>Category : {{$product->category}}</h6>
      </div> -->
        <div class="des d-flex justify-content-center aligns-item-start flex-column gap-3">
            <h3>{{$product->name}}</h3>
          
                <h4><span class="text-dark">Price : </span> <span style="color:#1d7874 ;">${{$product->price}}</span></h4>
                <p><span class="text-dark">Details : </span> {{$product->description}}</p>
               <p><span class="text-dark">Category : </span> {{$product->category}}</p>
                @if($product->is_in_stock==1)
                <h4><span class="text-danger">In Stock</h4>
                              
                  <form action="/add_to_cart" method="POST">
                    @csrf
                    <div class="d-flex justify-content-between align-items-center">
                          <input class="w-25 mb-3" type="number"   min="1"  max="20" value="1" name="qty">
                          <input type="hidden" name="product_id" value="{{$product['id']}}">
                          <button class="btn btn-add-to-cart">Add to Cart</button>
                    </div>
                    
                  </form>

                @endif


                @if($product->is_in_stock==0)
                <h4><span class="text-danger">Out Of Stock</h4>
                                   

                @endif
          
           
            
          
            
           
        </div>
       

      <br>
    
      <br>
      <!-- <button class="btn btn-success">Buy now</button> -->
    </div>
  </div>
</div>

@endsection