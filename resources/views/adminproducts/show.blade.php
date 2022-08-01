

@extends('adminmaster')
@section('content')



<div class="container mt-5">


<table class="table table-bordered">
                    <tr>
                        <th>Product</th>
                        <th>Price</th>
                        <th>Category</th>
                        <th>Description</th>
                        <th>Gallery</th>
        
                    
                       
                    </tr>

                    <tr>
                        <td>{{ $product->name }}</td>
                        <td>{{ $product->price }}</td>
                        <td>{{ $product->category }}</td>
                        <td>{{ $product->description }}</td>
                        <td>{{ $product->gallery }}</td>
                    </tr>
                    

                    
 </table>

 <a class="p-2"  href="/admin/products">Back</a>

</div>
@endsection 