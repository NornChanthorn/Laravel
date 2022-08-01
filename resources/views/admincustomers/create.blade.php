
@extends('adminmaster')
@section('content')
<div class="container p-5 d-flex justify-content-center align-items-center flex-column">
    <h3>Customer</h3>
            <form action="{{ route('customers.store') }}"  method="POST" class="w-75">
                @csrf
            
                <div class="row">
                    <div class="col-xs-12 col-sm-12 col-md-12">
                        <div class="form-group">
                            <strong>Name:</strong>
                            <input type="text" name="name" class="form-control" placeholder="Name">
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-12 col-md-12">
                        <div class="form-group">
                            <strong>Email</strong>
                            <input type="text" name="email" class="form-control" placeholder="Email">
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-12 col-md-12">
                        <div class="form-group">
                            <strong>Password</strong>
                            <input type="text" name="password" class="form-control" placeholder="Password">
                        </div>
                    </div>
                    
                    
                
                    <div class="col-xs-12 col-sm-12 col-md-12 text-center">
                            <button type="submit" class="btn btn-primary w-100"  style="background-color:#1d7874"> Add</button>
                    </div>
                </div>
            
            </form>
</div>


@endsection