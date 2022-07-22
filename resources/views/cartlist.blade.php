@extends('master')
@section('content')
<div class="container custom-product " style="background-color:white">
    <div class="col-sm-11">
        <div class="trending-wrapper">

            <h4>Your Cart List</h4>

            <a class="btn btn-success" href="ordernow">Order Now</a>

            <div class="container">
                @foreach ($product as $item)
                <div class="row search-item cart-list-divider">

                    <div class="col mt-3">
                        <a href="detail/{{$item->id}}">
                            <img class="trending-image" src="{{$item->gallery}}" class="d-block w-100" alt="...">
                        </a>
                    </div>

                    <div class="col mt-2">
                        <div class="">
                            <h2 style="color:black">{{$item->name}}</h2>
                            <h5 style="color:black">{{$item->description}}</h5>
                        </div>
                    </div>

                    <div class="col mt-3">
                        <a href="/removecart/{{$item->cart_id}}" class="btn btn-danger">Remove from cart</a>
                    </div>

                </div>
                @endforeach
            </div>

            <a class="btn btn-success" href="ordernow">Order Now</a>
            
        </div>
    </div>
</div>
@endsection