<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css">
    <link rel="stylesheet" href="{{ url('style.css') }}">
    <link href='https://unpkg.com/boxicons@2.1.1/css/boxicons.min.css' rel='stylesheet'>
    <title>Admin</title>
</head>
<body>
    

<nav class="sidebar close">
        <header>
            <div class="image-text">

                <div class="text logo-text ">
                    <span class="name effect ">Admin </span>
                    <span class="profession effect">Page</span>
                </div>
            </div>

            <i class='bx bx-chevron-right toggle'></i>
        </header>

        <div class="menu-bar">
            <div class="menu">

                

                <ul class="menu-links">
                    <li class="nav-link">
                        <a href="{{ route('customers.index') }}">
                            <i class='bx bx-bar-chart-alt-2 icon'></i>
                            <span class="text nav-text">Customer </span>
                        </a>
                    </li>

                    <li class="nav-link">
                        <a href="{{ route('products.index') }}">
                            <i class='bx bx-book-open icon'></i>
                            <span class="text nav-text">Product</span>
                        </a>
                    </li>

                    <li class="nav-link">
                        <a href="table.html">
                            <i class='bx bx-table icon'></i>
                            <span class="text nav-text">Order</span>
                        </a>
                    </li>

                  

                </ul>
            </div>

           
        </div>

    </nav>



<script>
        const body = document.querySelector('body'),
                sidebar = body.querySelector('nav'),
                toggle = body.querySelector(".toggle"),
                searchBtn = body.querySelector(".search-box"),
                modeSwitch = body.querySelector(".toggle-switch"),
                modeText = body.querySelector(".mode-text");


                toggle.addEventListener("click" , () =>{
                sidebar.classList.toggle("close");
                })

                searchBtn.addEventListener("click" , () =>{
                sidebar.classList.remove("close");
                })

       </script>
</body>
</html>











 
