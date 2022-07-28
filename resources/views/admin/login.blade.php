@if(Session::has('admin'))

{{ redirect()->to('admin/main')->send(); }}


@else
@extends('adminmaster')
@section('content')
<div class="_container">
     

     <div class=" d-flex justify-content-center align-items-center main ">
          
                <div class="_col _col1">

                
                            <h3>Admin </h3>
                            <h3></h3>
                            <p class="mb-5"><small>Where are you going?</small></p>
                           

                                    <form action="admin" method="POST" class="mt-3">
                                                <div class="mb-3">
                                                    @csrf
                                                    <label for="exampleInputEmail1" class="form-label">Email address</label>
                                                    <input type="email" class="form-control" id="exampleInputEmail1" name="email" aria-describedby="emailHelp">
                                                    <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
                                                </div>
                                                <div class="mb-3">
                                                    <label for="exampleInputPassword1" class="form-label">Password</label>
                                                    <input type="password" class="form-control" name="password" id="exampleInputPassword1">
                                                    <div id="emailHelp" class="form-text">Type the password that been provide</div>

                                                </div>
                                            
                                                <button type="submit" class="btn w-100 submit-btn">Submit</button>
                                        </form>


                                        @isset($error)
                                                <div class="text-danger mt-3">
                                                    {{$error}}
                                                </div>
                                        @endisset
                
                </div>

                <div class="_col _col2">
                      <img src="{{ url('./image/formbk.png')}}" alt="">
                </div>
    
            
      </div>


             


@endsection

@endif