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

        <div class="col-md img-responsive mb-3" style=" text-align:center" >
            <img src="https://cdn.shopify.com/s/files/1/0010/5083/7047/products/Sid_and_Link_Men_s_context_fdfbe630-5cce-4eb3-b50d-20b5ab792d2b.jpg?v=1600974641" width="100%" alt="">
        </div>
        
        <div class="col-md" style=" text-align:center">
            <h3 >Welcome</h3>
            <h6 class="mb-3 text-light">Welcome to SOUVENIR </h6>
            <div class="container" style="border-radius:0px; padding:20px; background-color:black">
                <form action="/login" method="POST">
                @csrf
                    <div class="form-floating mb-3">
                        <input type="email" style="border-radius:0px;" name="email" class="form-control border-success" id="floatingInput" placeholder="name@example.com" required>
                        <label for="floatingInput">Email address</label>
                        @isset($error)
                        <span class="badge rounded-pill bg-danger fs-6 mt-2">{{$error}}</span>
                        @endisset
                    </div>
                    <div class="form-floating">
                        <input type="password" style="border-radius:0px;" name="password" class="form-control border-success" id="floatingPassword" placeholder="Password" required>
                        <label for="floatingPassword">Password</label>
                        @isset($error1)
                        <span class="badge rounded-pill bg-danger fs-6 mt-2">{{$error1}}</span>
                        @endisset
                    </div>
                    <div class="form-floating mt-3">
                        <button type="submit" style="width:100%; background-color:#00ba99; border: white solid 1px ;border-radius:0px;" class="btn btn-primary btn-lg btn-block">LOGIN</button>
                    </div>
           
                    <div style="text-align:center;">
                        <a href="register"><button type="button" style="width:60%;border-radius:0px; background-color:#00b05f;border: white solid 1px" class="btn btn-primary btn-lg btn-block">REGISTER</button></a>
                    </div>
                </form>
            </div>
        </div>

    </div>
</div>

@endsection
@endif
