@extends('master')
@section('content')
<div class="container custom-product ">
    <div class="col-sm-11">
        <div class="trending-wrapper">

            <h4>Your Cart List</h4>
      @if($product =="No order")
         <div class="container p-5">
             <h3 class="text-center">No Order Yet</h3>
         </div>
      
      @else    
        <div class="container">
           
                @foreach ($product as $item)
                  
                <div class="row search-item cart_divider">

                    <div class="col mt-3">
                        <a href="detail/{{$item->id}}">
                            <img class="trending-image" src="./image/{{$item->category}}/{{$item->gallery}}" class="d-block w-100" alt="...">
                        </a>
                    </div>

                    <div class="col mt-3">
                        <div class="des1">
                            <h4 style="color:black">{{$item->name}}</h4>
                            <h6 style="color:black">{{$item->description}}</h6>
                        </div>
                    </div>

                    <div class="col mt-3 price">
                       <h5 style="color: blue;"> $ {{$item->price}}</h5>
                    </div>

                    <div class="col mt-3">
                        <a href="/removecart/{{$item->cart_id}}" class="btn btn-danger remove">Remove from cart</a>
                    </div>

                    
                </div>
                @endforeach
                <div class="row">
                    <a class="btn btn-success btnOrder " href="ordernow">Order Now</a>
                </div>
                
             </div>


          
            
        </div>
        @endif
    </div>
</div>
</div>
@endsection

