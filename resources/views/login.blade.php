

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

        <div class="col-md mt-3 " data-aos="fade-right" style="text-align:center">
            <img src="pic.png" class="img-responsive" alt="">
        </div>

        <div class="col-md" style="margin:5% 3% 5% 0%; text-align:center">
            <h3>EXISTING CUSTOMER</h3>
            <h6 class="mb-3">Welcome to SOUVENIR </h6>
            <div class="container custom-login" style="padding:20px; background-color:#0097a7">
                <form action="/login" method="POST">

                    <div class="form-floating mb-3">
                        @csrf
                        <input type="email" value="" name="email" value="{{old('email')}}" class="form-control border-success" id="floatingInput" placeholder="name@example.com" required>
                        <label for="floatingInput">Email address</label>

                        @isset($error)
                        <span class="badge rounded-pill bg-danger fs-6 mt-2">{{$error}}</span>
                        @endisset

                    </div>
                    <div class="form-floating">
                        <input type="password" value="" name="password" class="form-control border-success" id="floatingPassword" placeholder="Password" required>
                        <label for="floatingPassword">Password</label>

                        @isset($error1)
                        <span class="badge rounded-pill bg-danger fs-6 mt-2">{{$error1}}</span>
                        @endisset

                    </div>
                    <div class="form-floating mt-3">
                        <button type="submit" style="width:100%; background-color:#00ba99; border: white solid 1px" class="btn btn-primary btn-lg btn-block">LOGIN</button>
                    </div>
                    <div class="mt-3">
                        <a style="text-align:center; color:white" href="/"><span>Forgot password?</span></a>

                        <hr>
                    </div>
                    <div style="text-align:center;">
                        <a href="register"><button type="button" style="width:60%; background-color:#00b05f;border: white solid 1px" class="btn btn-primary btn-lg btn-block">REGISTER</button></a>
                    </div>
                </form>

            </div>
        </div>

    </div>
</div>

@endsection

@endif
