

@extends('adminmaster')
@section('content')
<tr>
            <h1>Hi</h1>
            <td>{{ $product->name }}</td>
            <td>{{ $product->price }}</td>
            <td>{{ $product->category }}</td>
            <td>{{ $product->description }}</td>
            <td>{{ $product->gallery }}</td>

            
</tr>

@endsection 