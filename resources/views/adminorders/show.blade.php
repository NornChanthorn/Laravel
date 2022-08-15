


@extends('adminmaster')
@section('content')

<div class="container mt-5">


<table class="table table-bordered">
                    <tr>
                        <th>Product ID</th>
                        <th>Customer ID</th>
                        <th>Status</th>
                        <th>Payment Method</th>
                        <th>Payment Status</th>
                        <th>Qty</th>
                        <th>Total</th>
                        <th>Address</th>
                    
                       
                    </tr>

                    <tr>
                       <td>{{ $order->product_id }}</td>
                        <td>{{ $order->customer_id }}</td>
                        <td>{{ $order->status }}</td>
                        <td>{{ $order->payment_method }}</td>
                        <td>{{ $order->payment_status }}</td>
                        <td>{{ $order->qty }}</td>
                        <td>{{ $order->total}} $</td>
                        <td>{{ $order->address }}</td>

                    </tr>
                    

                    
 </table>

 <a class="p-2"  href="/admin/orders">Back</a>


</div>
@endsection