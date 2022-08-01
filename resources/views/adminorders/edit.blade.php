
@extends('adminmaster')
@section('content')

<div class="container p-5 d-flex justify-content-center align-items-center flex-column">
<h3>Edit Customer</h3>
                <form action="{{ route('orders.update',$order->id) }}" method="POST" class="w-75">
                @csrf
                        @method('PUT')


                        <div class="row">
                    <div class="col-xs-12 col-sm-12 col-md-12">
                        <div class="form-group">
                            <strong>Product Id</strong>
                            <input type="text" name="product_id" class="form-control" placeholder="Product Id"  value="{{ $order->product_id }}">
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-12 col-md-12">
                        <div class="form-group">
                            <strong>Customer Id</strong>
                            <input type="text" name="customer_id" class="form-control" placeholder="Customer Id" value="{{ $order->customer_id }}">
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-12 col-md-12">
                        <div class="form-group">
                            <strong>Status</strong>
                            <input type="text" name="status" class="form-control" placeholder="Status" value="{{ $order->status }}">
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-12 col-md-12">
                        <div class="form-group">
                            <strong>Payment Method</strong>
                            <input type="text" name="payment_method" class="form-control" placeholder="Payment Method" value="{{ $order->payment_method }}">
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-12 col-md-12">
                        <div class="form-group">
                            <strong>Payment Status</strong>
                            <input type="text" name="payment_status" class="form-control" placeholder="Payment Status" value="{{ $order->payment_status }}">
                        </div>
                    </div>

                    <div class="col-xs-12 col-sm-12 col-md-12">
                        <div class="form-group">
                            <strong>Address</strong>
                            <input type="text" name="address" class="form-control" placeholder="Address" value="{{ $order->address }}">
                        </div>
                    </div>
                    
                    
                
                    <div class="col-xs-12 col-sm-12 col-md-12 text-center">
                            <button type="submit" class="btn btn-primary w-100" style="background-color:#1d7874">Edit</button>
                    </div>
                </div>

</form>


                
                      
</div>


    @endsection