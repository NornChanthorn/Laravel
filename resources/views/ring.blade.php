@extends('master')
@section("content")



<!-- Product -->

<div class="container">


<div class="main_dashboard mt-5">
                <div class="col1">
                 <h3>Ring</h3>
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




<!-- Product -->

@endsection

