
@extends('adminmaster')
@section('content')
<div class="container mt-5">
    <h3 class="mb-3">Order Information</h3>
                        <div class="pull-right mb-4">
                            <a class="btn btn-success" href="{{ route('orders.create') }}" style="background-color:#1d7874">Add New Order</a>
                        </div>
            <table class="table table-bordered">
                    <tr>
                        <th>No</th>
                        <th>Product Id</th>
                        <th>Product Customer</th>
                        <th>Status</th>
                        <th>Payment Method</th>
                        <th>Payment Status</th>
                        <th>Address</th>
                        <th>Action</th>
                    </tr>
                    @foreach ($orders as $order)
                    <tr>
                        <td>{{ ++$i }}</td>
                        <td>{{ $order->product_id }}</td>
                        <td>{{ $order->customer_id }}</td>
                        <td>{{ $order->status }}</td>
                        <td>{{ $order->payment_method }}</td>
                        <td>{{ $order->payment_status }}</td>
                        <td>{{ $order->address }}</td>


                        <td>
                            <form action="{{ route('orders.destroy',$order->id) }}" method="POST">
            
                                <a class="btn " href="{{ route('orders.show',$order->id) }}">Show</a>
                
                                <a class="btn " href="{{ route('orders.edit',$order->id) }}">Edit</a>
            
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