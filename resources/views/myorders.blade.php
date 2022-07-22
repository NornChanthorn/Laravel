@extends('master')
@section('content')
<div class="container custom-product " style="background-color:white">
    <div class="col-sm-11">
        <div class="trending-wrapper">
            <h4>My Orders list</h4>

            <div class="container">
                @foreach ($orders as $item)
                <div class="row search-item cart-list-divider">

                    <div class="col mt-3">
                        <a href="detail/{{$item->id}}">
                            <img class="trending-image" src="{{$item->gallery}}" class="d-block w-100" alt="...">
                        </a>
                    </div>

                    <div class="col mt-2">
                        <div class="">
                            <h2 style="color:black">Name : {{$item->name}}</h2>
                            <h5 style="color:black">Delivery Status : {{$item->status}}</h5>
                            <h5 style="color:black">Address : {{$item->address}}</h5>
                            <h5 style="color:black">Payment Status : {{$item->payment_status}}</h5>
                            <h5 style="color:black">Payment Method : {{$item->payment_method}}</h5>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </div>
</div>
@endsection