@extends('master')
@section('content')
<div class="container d-flex justify-content-center aligns-items-center custom-product " >
    <div class="col-sm-11 d-flex justify-content-center aligns-items-center ">
        <div class="trending-wrapper">
            <h3 class="mb-4">My Orders list</h3>

            <div class="bg-light mb-3">
                @foreach ($orders as $item)
                <div class="myorder-container mt-3 mb-3">

                    <div class="col mt-3">
                        <a href="detail/{{$item->id}}">
                        <img src="./image/{{$item->category}}/{{$item->gallery}}" class="img-responsive image-size shadow-lg"alt="">  
                        </a>
                    </div>

                    <div class="col mt-3">
                        <div class="text-start text-dark">
                            <h2 class="text-dark mb-5">Name : {{$item->name}}</h2>
                            <p>Delivery Status : {{$item->status}}</p>
                            <p>Address : {{$item->address}}</p>
                            <p>Quantity : {{$item->qty}}</p>
                            <p>Total : {{$item->total}}$</p>
                            <p>Payment Status : {{$item->payment_status}}</p>
                            <p>Payment Method : {{$item->payment_method}}</p>
                            <!-- <h5 style="color:black">Delivery Status : {{$item->status}}</h5>
                            <h5 style="color:black">Address : {{$item->address}}</h5>
                            <h5 style="color:black">Payment Status : {{$item->payment_status}}</h5>
                            <h5 style="color:black">Payment Method : {{$item->payment_method}}</h5> -->
                        </div>
                    </div>

                </div>
                @endforeach
            </div>
        </div>
    </div>
</div>
@endsection