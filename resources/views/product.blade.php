@extends('master')
@section("content")
<!-- 
<div class="container custom-product" style="border: solid black 2px ; background-color:white">
  <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
    <div class="carousel-inner">
      @foreach ($product as $item)
      <div class="carousel-item {{$item['id']==1?'active':''}}">
        <a href="detail/{{$item['id']}}">
          <img class="slider-img" src="{{$item['gallery']}}" class="d-block w-100" alt="...">
          <div class="carousel-caption">
            <h3 style="color:black">{{$item['name']}}</h3>
            <p style="color:black">{{$item['description']}}</p>
          </div>
        </a>
      </div>
      @endforeach
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Next</span>
    </button>
  </div>
  <div class="trending-wrapper">
    <h3>Trending Product</h3>
    <div class="carousel-inner">
      @foreach ($product as $item)
      <div class="trending-item">
        <a href="detail/{{$item['id']}}">
          <img class="trending-image" src="{{$item['gallery']}}" class="d-block w-100" alt="...">
          <div class="">
            <h3 style="color:black">{{$item['name']}}</h3>
        </a>
      </div>
    </div>
    @endforeach
  </div>
</div>
</div> -->


<div class="slide_container mt-4">
  <?php
  // echo "<h1>$hello</h1>"
  ?>
  <div class="slider  ">
    <div class="slides">
      <!--radio buttons start-->
      <input type="radio" name="radio-btn" id="radio1">
      <input type="radio" name="radio-btn" id="radio2">
      <input type="radio" name="radio-btn" id="radio3">
      <input type="radio" name="radio-btn" id="radio4">
      <!--radio buttons end-->
      <!--slide images start-->
      <div class="slide first ">
        <img src="{{url('./image/bracelet/6mmlockpinkred_600x.webp')}}" alt="">
      </div>
      <div class="slide">
        <img src="{{url('./image/necklace/dorjenecklace_600x.webp')}}" alt="">
      </div>
      <div class="slide">
        <img src="{{url('./image/ring/ring1.webp')}}" alt="">
      </div>
      <div class="slide">
        <img src="{{url('./image/bracelet/Orb6SOSBB_600x.webp')}}" alt="">
      </div>
      <!--slide images end-->
      <!--automatic navigation start-->
      <div class="navigation-auto">
        <div class="auto-btn1"></div>
        <div class="auto-btn2"></div>
        <div class="auto-btn3"></div>
        <div class="auto-btn4"></div>
      </div>
      <!--automatic navigation end-->
    </div>
    <!--manual navigation start-->
    <div class="navigation-manual">
      <label for="radio1" class="manual-btn"></label>
      <label for="radio2" class="manual-btn"></label>
      <label for="radio3" class="manual-btn"></label>
      <label for="radio4" class="manual-btn"></label>
    </div>
    <!--manual navigation end-->
  </div>
</div>



<!-- Product -->

<div class="container mt-3">


  <div class="main_dashboard">
    <div class="col1">
      <h3>Popular Product</h3>
      <p>Lorem ipsum dolor sit amet consectetur</p>
    </div>

  </div>

  <div class="card-1-container gap-2">

    @foreach ($product as $item)



    <a href="detail/{{$item['id']}}">

      <div class="col col1">

        <div class="image">
          <div class="image_img">
            <img src="./image/{{$item['category']}}/{{$item['gallery']}}" alt="">

            <div class="buy_now">
              <h6>{{$item['name']}}</h6>
            </div>
            <!-- <div class="buy_now">
                                                        <h6>{{$item['gallery']}}</h6>
                                                    </div>
                                                    <div class="buy_now">
                                                        <h6>{{$item['category']}}</h6>
                                                    </div> -->
          </div>

          <div class="image_overlay blur">

            <h6>{{$item['description']}}</h6>
            <br><br>
            <h3>{{$item['price']}} $</h3>
            <div class="star-icon">
              <i class="bi bi-star-fill"></i>
              <i class="bi bi-star-fill"></i>
              <i class="bi bi-star-fill"></i>
              <i class="bi bi-star-fill"></i>
              <i class="bi bi-star-fill last-star"></i>
            </div>
          </div>
        </div>
      </div>
    </a>
    @endforeach
  </div>
  <div class="text-center m-3 mt-3"><a href="/allProduct">View More</a></div>
  <!-- Overlay Animation  -->
</div>
</div>

<!-- Product -->





















@endsection