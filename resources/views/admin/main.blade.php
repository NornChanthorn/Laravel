@if(Session::has('admin'))



@extends('adminmaster')
@section('content')



  

                <div class="container-fluid w-100 vh-100 d-flex justify-content-center align-items-center flex-column gap-3">

                                       <a href="{{ route('customers.index') }}"class="w-25 link-container">
                                            <i class='bx bx-bar-chart-alt-2 icon'></i>
                                            <span class="text nav-text">Customer </span>
                                        </a>
                         
                          
                                       <a href="{{ route('products.index') }}" class="w-25 link-container">
                                            <i class='bx bx-book-open icon'></i>
                                            <span class="text nav-text">Product</span>
                                        </a>
                      
                                        <a href="{{ route('orders.index') }}"  class="w-25 link-container">
                                            <i class='bx bx-book-open icon'></i>
                                            <span class="text nav-text">Order</span>
                                        </a>
                                       <div class="d-flex  justify-content-between w-25 p-2">
                                             <a  href="/logout">Logout</a>
                                             <a  href="/">Back</a>
                                       </div>
                </div>
                 
@else 

{{ redirect()->to('login')->send(); }}

       
@endif


@endsection





<!--  
<ul>
                                    <li class="nav-link  bg-danger">
                                        <a href="{{ route('customers.index') }}">
                                            <i class='bx bx-bar-chart-alt-2 icon'></i>
                                            <span class="text nav-text">Customer </span>
                                        </a>
                                    </li>

                                    <li class="nav-link">
                                        <a href="{{ route('products.index') }}">
                                            <i class='bx bx-book-open icon'></i>
                                            <span class="text nav-text">Product</span>
                                        </a>
                                    </li>

                                    <li class="nav-link">
                                       <a href="{{ route('products.index') }}">
                                            <i class='bx bx-book-open icon'></i>
                                            <span class="text nav-text">Product</span>
                                        </a>
                                    </li>
                            </ul> -->