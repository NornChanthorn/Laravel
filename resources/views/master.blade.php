<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>E-comm Project</title>
    <link href="https://fonts.googleapis.com/css2?family=Baloo+2:wght@700&display=swap" rel="stylesheet">

    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=PT+Sans+Narrow:wght@400;700&family=PT+Sans:ital,wght@0,400;0,700;1,400;1,700&family=Roboto:ital,wght@0,100;0,300;0,400;1,100;1,300;1,400&display=swap"
        rel="stylesheet">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
    <!-- JavaScript Bundle with Popper -->
     <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
      <link rel="stylesheet" href="{{ url('style.css') }}">
      <link rel="stylesheet" href="{{ url('slider.css') }}">
      <link rel="stylesheet" href="{{ url('navbar.css') }}">
      <link rel="stylesheet" href="{{ url('card.css') }}">
      <link rel="stylesheet" href="{{ url('footer.css') }}">
      <link rel="stylesheet" href="{{ url('detail.css') }}">
      <link rel="stylesheet" href="{{ url('cart.css') }}">
      <link rel="stylesheet" href="{{ url('cartList.css') }}">
      <link rel="stylesheet" href="{{ url('myorder.css') }}">







</head>

<body>
    {{View::make('header')}}
    @yield('content')
    {{View::make('footer')}}

    <script src="{{ url('sidenav.js') }}"></script>
    <script src="{{ url('slider.js') }}"></script>

</body>

<style>
    /* .custom-login {
        padding: 50px;
    }

    .custom-product,h5{
        font-size: 18px;
    }

    img.slider-img {
        height: 400px !important
    }
    .trending-image{
        height: 100px;
    }
    .trending-item{
        float: left;
        width: 20%;
    }
    .trending-wrapper{
        margin: 30px;
    }
    .detail-img{
        height: 200px;
    }
    .search-box{
        width: 500px !important;
    }
    .cart-list-divider{
        border-bottom: 1px solid red;
    } */
</style>

</html>