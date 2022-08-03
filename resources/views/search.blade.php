@extends('master')
@section("content")


@if($product=="No Result")

<h2 class="mt-3">No Product Found </h2>

@else 
<!-- <div class="container custom-product" style="border: solid black 2px">

  
  <div class="trending-wrapper">
    <h2>Result for product search</h2>
    <div class="carousel-inner">
      @foreach ($product as $item)
      <div class="search-item">
        <a href="detail/{{$item['id']}}">
        <img class="detail-img" src="/image/{{$item['category']}}/{{$item['gallery']}}" alt="">

          <div class="">
            <h2 style="color:black">{{$item['name']}}</h2>
            <h5 style="color:black">{{$item['description']}}</h5>
        </a>
      </div>
    </div>
    @endforeach
  </div>
</div>
</div> -->














<div class="container mt-5">


            <div class="main_dashboard">
                <div class="col1">
                 <h3>Search Product</h3>
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


 

<!-- Overlay Animation  -->




     

 </div>

</div>

















@endif
@endsection