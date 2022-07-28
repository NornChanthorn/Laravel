
@extends('adminmaster')
@section('content')
<div class="container p-5 d-flex justify-content-center align-items-center flex-column">
<h3>Edit Customer</h3>
                <form action="{{ route('customers.update',$customer->id) }}" method="POST" class="w-75">
                @csrf
                        @method('PUT')
                
                        <div class="row">
                            <div class="col-xs-12 col-sm-12 col-md-12">
                                <div class="form-group">
                                    <strong>Name:</strong>
                                    <input type="text" name="name" value="{{ $customer->name }}" class="form-control" placeholder="Name">
                                </div>
                            </div>

                            <div class="col-xs-12 col-sm-12 col-md-12">
                                <div class="form-group">
                                    <strong>Email</strong>
                                    <input type="text" name="email" value="{{ $customer->email}}" class="form-control" placeholder="Email">
                                </div>
                            </div>


                            <div class="col-xs-12 col-sm-12 col-md-12">
                                <div class="form-group">
                                    <strong>Password</strong>
                                    <input type="text" name="password" value="{{ $customer->password }}" class="form-control" placeholder="Password">
                                </div>
                            </div>


                        

                        
                            <div class="col-xs-12 col-sm-12 col-md-12 text-center mt-3">
                            <button type="submit" class="btn btn-primary w-100">Submit</button>
                            </div>
                        </div>
                
                    </form>
</div>


    @endsection