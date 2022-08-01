
@extends('adminmaster')
@section('content')

<div class="container mt-5">


<table class="table table-bordered">
                    <tr>
                        <th>UserName</th>
                        <th>Email</th>
                        <th>Password</th>
                        <th>Role</th>
                    
                       
                    </tr>

                    <tr>
                        <td>{{ $customer->name }}</td>
                        <td>{{ $customer->email}}</td>
                        <td>{{ $customer->password }}</td>
                        <td>{{ $customer->role }}</td>
                    </tr>
                    

                    
 </table>

 <a class="p-2"  href="/admin/customers">Back</a>


</div>
@endsection