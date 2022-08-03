
@extends('adminmaster')
@section('content')
<div class="container p-5 d-flex justify-content-center align-items-center flex-column">

<h3>Edit Product</h3>
                <form action="{{ route('products.update',$product->id) }}" method="POST" class="w-75">
                @csrf
                        @method('PUT')
                
                        <div class="row">
                            <div class="col-xs-12 col-sm-12 col-md-12">
                                <div class="form-group">
                                    <strong>Name:</strong>
                                    <input type="text" name="name" value="{{ $product->name }}" class="form-control" placeholder="Name">
                                </div>
                            </div>

                            <div class="col-xs-12 col-sm-12 col-md-12">
                                <div class="form-group">
                                    <strong>Price:</strong>
                                    <input type="text" name="price" value="{{ $product->price}}" class="form-control" placeholder="Price">
                                </div>
                            </div>


                            <div class="col-xs-12 col-sm-12 col-md-12">
                                <div class="form-group">
                                    <strong>Category</strong>
                                    <input type="text" name="category" value="{{ $product->category }}" class="form-control" placeholder="Category">
                                </div>
                            </div>


                            <div class="col-xs-12 col-sm-12 col-md-12">
                                <div class="form-group">
                                    <strong>Descrption</strong>
                                    <input type="text" name="description" value="{{ $product->description }}" class="form-control" placeholder="Description">
                                </div>
                            </div>
                            

                            <div class="col-xs-12 col-sm-12 col-md-12">
                                <div class="form-group">
                                    <strong>Gallery</strong>
                                    <input type="text" name="gallery" value="{{ $product->gallery }}" class="form-control" placeholder="gallery">
                                </div>
                            </div>
                            <div class="col-xs-12 col-sm-12 col-md-12 text-center mt-4">
                            <button type="submit" class="btn btn-primary w-100" style="background-color:#1d7874" >Edit</button>
                            </div>
                        </div>
                
                    </form>

                    <a class="p-2 mt-2"  href="/admin/products">Back</a>

</div>







    @endsection