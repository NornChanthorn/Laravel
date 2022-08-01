
@extends('adminmaster')
@section('content')
<div class="container p-5 d-flex justify-content-center align-items-center flex-column">
    <h3>Order</h3>
            <form action="{{ route('orders.store') }}"  method="POST" class="w-75">
                @csrf
            
                <div class="row">
                    <div class="col-xs-12 col-sm-12 col-md-12">
                        <div class="form-group">
                            <strong>Product Id</strong>
                            <input type="text" name="product_id" class="form-control" placeholder="Product Id">
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-12 col-md-12">
                        <div class="form-group">
                            <strong>Customer Id</strong>
                            <input type="text" name="customer_id" class="form-control" placeholder="Customer Id">
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-12 col-md-12">
                        <div class="form-group">
                            <strong>Status</strong>
                            <input type="text" name="status" class="form-control" placeholder="Status">
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-12 col-md-12">
                        <div class="form-group">
                            <strong>Payment Method</strong>
                            <input type="text" name="payment_method" class="form-control" placeholder="Payment Method">
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-12 col-md-12">
                        <div class="form-group">
                            <strong>Payment Status</strong>
                            <input type="text" name="payment_status" class="form-control" placeholder="Payment Status">
                        </div>
                    </div>

                    <div class="col-xs-12 col-sm-12 col-md-12">
                        <div class="form-group">
                            <strong>Address</strong>
                            <input type="text" name="address" class="form-control" placeholder="Address">
                        </div>
                    </div>
                    
                    
                
                    <div class="col-xs-12 col-sm-12 col-md-12 text-center">
                            <button type="submit" class="btn btn-primary w-100"  style="background-color:#1d7874">Add</button>
                    </div>
                </div>
            
            </form>
</div>


@endsection