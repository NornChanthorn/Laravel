
@extends('master')
@section('content')

<tr>
            <td>{{ $customer->name }}</td>
            <td>{{ $customer->email}}</td>
            <td>{{ $customer->password }}</td>
          
            
</tr>

@endsection