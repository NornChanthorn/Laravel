
@extends('adminmaster')
@section('content')

<div class="container p-5 d-flex justify-content-center align-items-center flex-column">
   <h3>Product</h3>
                <form action="{{ route('products.store') }}"  method="POST" class="w-75">
                    @csrf
                
                    <div class="row">
                        <div class="col-xs-12 col-sm-12 col-md-12 my-2">
                            <div class="form-group">
                                <strong>Name:</strong>
                                <input type="text" name="name" class="form-control" placeholder="Name">
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-12 col-md-12 my-2" >
                            <div class="form-group">
                                <strong>Price</strong>
                                <input type="text" name="price" class="form-control" placeholder="Price">
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-12 col-md-12 my-2">
                            <div class="form-group">
                                <strong>Category</strong>
                                <input type="text" name="category" class="form-control" placeholder="Category">
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-12 col-md-12 my-2">
                            <div class="form-group">
                                <strong>Descrption</strong>
                                <input type="text" name="description" class="form-control" placeholder="description">
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-12 col-md-12 my-2">
                            <div class="form-group">
                                <strong>Gallery</strong>
                                <input type="file" name="gallery" class="form-control" placeholder="Gallery">
                            </div>
                        </div>
                    
                        <div class="col-xs-12 col-sm-12 col-md-12 text-center my-2">
                                <button type="submit" class="btn btn-primary w-100">Submit</button>
                        </div>
                    </div>
                
                </form>
</div>


@endsection