
    
@extends('adminmaster')
@section('content')
<div class="container mt-5">
<h3 class="mt-5">Product Information</h3>
<div class="pull-right mb-4">
                        <a class="btn btn-success" href="{{ route('products.create') }}" style="background-color:#1d7874"> Create New Product</a>
                 </div>
            <table class="table table-bordered">
                    <tr>
                        <th>No</th>
                        <th>Name</th>
                      
                        <th width="280px">Action</th>
                    </tr>
                    @foreach ($products as $product)
                    <tr>
                        <td>{{ ++$i }}</td>
                        <td>{{ $product->name }}</td>
                       
                        <td>
                            <form action="{{ route('products.destroy',$product->id) }}" method="POST">
            
                                <a class="btn " href="{{ route('products.show',$product->id) }}">Show</a>
                
                                <a class="btn " href="{{ route('products.edit',$product->id) }}">Edit</a>
            
                                @csrf
                                @method('DELETE')
                
                                <button type="submit" class="btn ">Delete</button>
                            </form>
                        </td>
                    </tr>
                    @endforeach


                </table>

                <a class="p-2 mt-2"  href="/admin/main">Back</a>

               
</div>
   

    @endsection