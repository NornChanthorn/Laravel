@extends('master')
@section("content")

<style>
    .btn-primary:hover {
        opacity: 0.8;
    }

</style>
<div class="container">
    <div class="row">

        <div class="col-md img-responsive mb-3" style="text-align:center">
            <img src="https://cdn.shopify.com/s/files/1/0010/5083/7047/products/Sid_and_Link_Men_s_context_fdfbe630-5cce-4eb3-b50d-20b5ab792d2b.jpg?v=1600974641" width="100%" class="img-responsive" alt="">
        </div>

        <div class="col-md" style="text-align:center">
        <h3>REGISTER</h3>
            <h6 class="mb-3 text-light">Let's be our SOUVENIR family</h6>
            <div class="container" style="border-radius:0px; padding:20px; background-color:black">
                <form action="/register" method="POST">
                    @csrf
                    <div class="form-floating mb-3">
                        <input type="text" name="name" style="border-radius:0px;" class="form-control" id="floatingInput" placeholder="username" required>
                        <label for="floatingInput">Username</label>
                    </div>
                    
                    <div class="form-floating mb-3">
                        <input type="email" name="email" style="border-radius:0px;" class="form-control" id="floatingInput" placeholder="name@example.com" required>
                        <label for="floatingInput">Email address</label>
                    </div>


                    <div class="form-floating">
                        <input type="password" name="password" style="border-radius:0px;" class="form-control" id="password" placeholder="Password" required>
                        <label for="floatingPassword">Password</label>
                    </div>

                    <div class="form-floating mt-3">
                        <input type="password" name="password_confirmation" style="border-radius:0px;" class="form-control" id="confirmpassword" placeholder="Confirm password" required>
                        <label for="floatingPassword">Comfirm password</label>
                        @isset($error)
                        <span class="badge rounded-pill bg-danger fs-6 mt-2">{{$error}}</span>
                        @endisset
                    </div>

                    <div class="form-floating">
                        <input type="hidden" name="role"  value ="user" class="form-control" placeholder="Password" required>
                        
                    </div>

                    <div class="form-floating mt-3">
                        <button type="submit" style="border-radius:0px; width:100%; background-color:#00ba99; border: white solid 1px" class="btn btn-primary btn-lg btn-block">CREATE ACCOUNT</button>
                    </div>

                    <div style="text-align:center; color:white" class="mt-3">
                        <span>Already have an account?<a href="login" style="text-decoration:none; color:white"><b> Login</b></a></span>
                    </div>

                </form>
            </div>
        </div>

    </div>
</div>

@endsection