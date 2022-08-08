@extends('master')
@section('content')
<div class="container custom-product ">
    <div class="col-sm-11">
        <div class="trending-wrapper">
             <div class="d-flex justify-content-between align-items-center ">
                   <h3>Your Cart List</h3>
                   <a href="/">Back</a>
             </div>
            
      @if($product =="No order")
         <div class="container p-5">
             <h3 class="text-center">No Order Yet</h3>
         </div>
      
      @else    
        <div class="container bg-dark" style="border-radius:0">
           
                @foreach ($product as $item)
                  
                <div class="row search-item cart_divider">

                    <div class="col mt-3">
                        <a href="detail/{{$item->id}}">
                            <img class="trending-image" src="./image/{{$item->category}}/{{$item->gallery}}" class="d-block w-100" alt="...">
                        </a>
                    </div>

                    <div class="col mt-3">
                        <div class="des1">
                            <h3 style="color:white">{{$item->name}}</h3>
                            <h6 style="color:white">{{$item->description}}</h6>
                        </div>
                    </div>

                    <div class="col mt-3 price">
                       <h5 style="color: gold;"> $ {{$item->price}}</h5>
                    </div>

                    <div class="col mt-3">
                        <a href="/removecart/{{$item->cart_id}}" style="border-radius:0" class="btn btn-danger remove">Remove from cart</a>
                    </div>

                </div>
                @endforeach
                <div class="row">
                    <a class="btn btn-success btnOrder " style="border-radius:0" href="ordernow">Order Now</a>
                </div>
                
             </div>


          
            
        </div>
        @endif
    </div>
</div>
</div>
@endsection

