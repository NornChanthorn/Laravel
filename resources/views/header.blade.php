<?php
use App\Http\Controllers\ProductController;
use Illuminate\Support\Facades\Session;
$total = 0;
if (Session::has('customer')) {
  $total = ProductController::cartItem();
}
?>


 <nav class="navbar navbar-expand-lg navbar-light nav-bk">
  <div class="container-fluid">

          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarTogglerDemo03" aria-controls="navbarTogglerDemo03" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>

          <a class="navbar-brand text-white fw-bold" href="/">Souvenir</a>
    
  <div class="collapse navbar-collapse" id="navbarTogglerDemo03">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">

      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        
              <li class="nav-item dropdown">
                <a class=" text-white nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                  Category
                </a>
                <ul class="dropdown-menu">
                  <li><a class="dropdown-item" href="/bracelet">Bracelet</a></li>
                  <li><a class="dropdown-item" href="/necklace">Necklace</a></li>
                  <li><hr class="dropdown-divider"></li>
                  <li><a class="dropdown-item" href="/ring">Ring</a></li>
                  <li><a class="dropdown-item" href="/other">Other</a></li>

                </ul>
              </li>
        
      </ul>

        
        <form action="/search" class="d-flex justify-content-center align-items-center">
          <input class="form-control me-2 search-box" name="query" type="search" placeholder="Search" aria-label="Search">
          <button class="btn search-btn " type="submit">Search</button>
        </form>

      </ul>

      @if(Session::has('customer') && Session::get('customer')['role'] =="user")
      <div class="dropdown" style="margin-right:10px; margin-left:10px">

        <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
          {{Session::get('customer')['name']}}
          {{Session::get('customer')['id']}}
        </button>

        <ul class="dropdown-menu">
          <li><a class="dropdown-item" href="/logout">Logout</a></li>
        </ul>

      </div>

         <a href="/myorders" style="text-decoration:none " class="text-white mx-1">MyOrder</a>
        <a href="/cartlist" style="text-decoration:none " class="text-white mx-2">Cart({{$total}})</a>
      @elseif (Session::has('admin') && Session::get('admin')['role'] =="admin") 
                <div class="dropdown" style="margin-right:10px; margin-left:10px">

                    <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
                    {{Session::get('admin')['name']}}
                    
                    </button>

                    <ul class="dropdown-menu">
                      <li><a class="dropdown-item" href="/logout">Logout</a></li>
                      <li><a class="dropdown-item" href="admin/main">Backend</a></li>

                    </ul>

             </div>
             <div>
             @else
      
        <a href="/login" style="text-decoration:none " class="text-white mx-1">Login</a>
        <a href="/register" style="text-decoration:none " class="text-white mx-2">Register</a>
        @endif
        <!-- <a href="/admin" style="text-decoration:none " class="text-white mx-2">Admin</a> -->

      </div>
     
    </div>
    
  </div>
</nav>  








