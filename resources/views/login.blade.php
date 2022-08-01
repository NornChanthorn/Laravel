

@extends('master')
@section("content")

@if(Session::has('customer') && Session::get('customer')['role'] =="user")

{{ redirect()->to('/')->send(); }}

@elseif(Session::has('admin') && Session::get('admin')['role'] =="admin")

{{ redirect()->to('admin/main')->send(); }}

@else 

<style>
    .btn-primary:hover {
        opacity: 0.8;
    }
</style>





<div class="container">
    <div class="row">

        <div class="col-md" style="text-align:center">
            <img src="pic.png" class="img-responsive" alt="">
        </div>

        <div class="col-md" style="margin:5% 3% 5% 0%; text-align:center">
            <div class="container custom-login" style=" border-radius:20px; background-color:#0097a7">
                <form action="login" method="POST">
                    <div class="form-floating mb-3">
                        @csrf
                        <input type="email" name="email" class="form-control" id="floatingInput" placeholder="name@example.com" required>
                        <label for="floatingInput">Email address</label>
                       
                    </div>
                    <div class="form-floating">
                        <input type="password" name="password" class="form-control" id="floatingPassword" placeholder="Password" required>
                        <label for="floatingPassword">Password</label>
                    </div>
                    <div class="form-floating mt-3">
                        <button type="submit" style="width:100%; background-color:#00ba99; border: white solid 1px" class="btn btn-primary btn-lg btn-block">Login</button>
                    </div>
                    <div style="text-align:center; color:white" class="mt-3">
                        <span>Forgot password?</span>
                   
                        <hr>
                    </div>

                           
                    <div style="text-align:center;">
                        <a href="register"><button type="button" style="width:60%; background-color:#00b05f;border: white solid 1px" class="btn btn-primary btn-lg btn-block">Create account</button></a>
                    </div>

                  
                     
                </form>
                
              
                @isset($error)
                        <div class="card">
                            <div class="text-danger">
                                {{$error}}
                            </div>
                        </div>
                @endisset





            </div>
        </div>

    </div>
</div>

@endsection

@endif
