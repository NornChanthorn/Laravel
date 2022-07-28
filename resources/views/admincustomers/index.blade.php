
@extends('adminmaster')
@section('content')
<div class="container mt-5">
    <h3 class="mb-3">Customer Information</h3>
            <table class="table table-bordered">
                    <tr>
                        <th>No</th>
                        <th>Name</th>
                        <th>Email</th>
                    
                        <th>Action</th>
                    </tr>
                    @foreach ($customers as $customer)
                    <tr>
                        <td>{{ ++$i }}</td>
                        <td>{{ $customer->name }}</td>
                        <td>{{ $customer->email }}</td>

                        <td>
                            <form action="{{ route('customers.destroy',$customer->id) }}" method="POST">
            
                                <a class="btn " href="{{ route('customers.show',$customer->id) }}">Show</a>
                
                                <a class="btn " href="{{ route('customers.edit',$customer->id) }}">Edit</a>
            
                                @csrf
                                @method('DELETE')
                
                                <button type="submit" class="btn ">Delete</button>
                            </form>
                        </td>
                    </tr>
                    @endforeach

                    
                </table>
                <div class="pull-right">
                            <a class="btn btn-success" href="{{ route('customers.create') }}">Add New Customer</a>
                        </div>
</div>
    

    @endsection