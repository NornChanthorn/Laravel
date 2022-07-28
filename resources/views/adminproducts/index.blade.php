
    
@extends('adminmaster')
@section('content')
<div class="container mt-5">

            <table class="table table-bordered">
                    <tr>
                        <th>No</th>
                        <th>Name</th>
                        <th>price</th>
                        <th width="280px">Action</th>
                    </tr>
                    @foreach ($products as $product)
                    <tr>
                        <td>{{ ++$i }}</td>
                        <td>{{ $product->name }}</td>
                        <td>{{ $product->price }}</td>
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

                <div class="pull-right">
                        <a class="btn btn-success" href="{{ route('products.create') }}"> Create New Product</a>
                 </div>
</div>
   

    @endsection