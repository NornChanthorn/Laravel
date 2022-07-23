<?php
use App\Http\Controllers\ProductController;
use Illuminate\Support\Facades\Session;
$total = 0;
if (Session::has('customer')) {
  $total = ProductController::cartItem();
}
?>


<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <div class="container-fluid">

    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarTogglerDemo03" aria-controls="navbarTogglerDemo03" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

    <a class="navbar-brand" href="/">Souvenir</a>
    
    <div class="collapse navbar-collapse" id="navbarTogglerDemo03">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">

        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="/">Home</a>
        </li>

        

        <form action="/search" class="d-flex">
          <input class="form-control me-2 search-box" name="query" type="search" placeholder="Search" aria-label="Search">
          <button class="btn btn-outline-success" type="submit">Search</button>
        </form>

      </ul>

      @if(Session::has('customer'))
      <div class="dropdown" style="margin-right:10px; margin-left:10px">

        <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
          {{Session::get('customer')['name']}}
        </button>

        <ul class="dropdown-menu">
          <li><a class="dropdown-item" href="/logout">Logout</a></li>
        </ul>

      </div>

      <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="/myorders">MyOrder</a>
        </li>
        <form class="d-flex">
      <a class="nav-link active" aria-current="page" href="/cartlist">Cart({{$total}})</a>
    </form>
      @else
      <div>
        <a href="/login" style="text-decoration:none ">Login</a>
        <a href="/register" style="text-decoration:none ">Register</a>
      </div>
      @endif
    </div>
    
  </div>
</nav>