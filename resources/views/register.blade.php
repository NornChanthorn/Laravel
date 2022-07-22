@extends('master')
@section("content")

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
                <form action="register" method="POST">
                    @csrf
                    <div class="form-floating mb-3">
                        <input type="text" name="name" class="form-control" id="floatingInput" placeholder="username" required>
                        <label for="floatingInput">Username</label>
                    </div>
                    
                    <div class="form-floating mb-3">
                        <input type="email" name="email" class="form-control" id="floatingInput" placeholder="name@example.com" required>
                        <label for="floatingInput">Email address</label>
                    </div>

                    <div class="form-floating">
                        <input type="password" name="password" class="form-control" id="password" placeholder="Password" required>
                        <label for="floatingPassword">Password</label>
                    </div>

                    <div class="form-floating mt-3">
                        <input type="password" name="password_confirmation" class="form-control" id="confirmpassword" placeholder="Confirm password" required>
                        <label for="floatingPassword">Comfirm password</label>
                        <div class="form-text confirm-message"></div>
                    </div>

                    <div class="form-floating mt-3">
                        <button type="submit" style="width:100%; background-color:#00ba99; border: white solid 1px" class="btn btn-primary btn-lg btn-block">Register</button>
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