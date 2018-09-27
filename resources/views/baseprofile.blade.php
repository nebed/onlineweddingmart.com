<!DOCTYPE html>
<html lang="en">
<head>
    <title>Dashboard</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->  
    <link rel="icon" type="image/png" href="images/icons/favicon.png"/>
<!--===============================================================================================-->
   {!! Html::style('/vendor/bootstrap/css/bootstrap.min.css')!!}
<!--===============================================================================================-->
   {!!Html::style('/fonts/font-awesome-4.7.0/css/font-awesome.min.css')!!}
<!--===============================================================================================-->
   {!!Html::style('/fonts/iconic/css/material-design-iconic-font.min.css')!!}
<!--===============================================================================================-->
    {!!Html::style('/fonts/linearicons-v1.0.0/icon-font.min.css')!!}
<!--===============================================================================================-->
   {!!Html::style('/vendor/animate/animate.css')!!}
<!--===============================================================================================-->  
   {!!Html::style('/vendor/css-hamburgers/hamburgers.min.css')!!}
<!--===============================================================================================-->
    {!!Html::style('/vendor/animsition/css/animsition.min.css')!!}
<!--===============================================================================================-->
   {!!Html::style('/vendor/select2/select2.min.css')!!}
<!--===============================================================================================-->  
   {!!Html::style('/vendor/daterangepicker/daterangepicker.css')!!}
<!--===============================================================================================-->
    {!!Html::style('/vendor/slick/slick.css')!!}
<!--===============================================================================================-->
   {!!Html::style('/vendor/MagnificPopup/magnific-popup.css')!!}
<!--===============================================================================================-->
   {!!Html::style('/vendor/perfect-scrollbar/perfect-scrollbar.css')!!}
<!--===============================================================================================-->
    {!!Html::style('/css/util.css')!!}
{!!Html::style('/css/main.css')!!}
@yield('stylesheet')
<!--===============================================================================================-->
</head>
  <body class="animsition">
    
    <!-- Header -->
    <!-- Header -->
    <header class="header-v2">
        <!-- Header desktop -->
        <div class="container-menu-desktop">
            <div class="wrap-menu-desktop how-shadow1">
                <nav class="limiter-menu-desktop p-l-45">
                    
                    <!-- Logo desktop -->       
                    <a href="#" class="logo">
                        <img src="{{URL::asset('/images/icons/logo-02.png')}}" alt="IMG-LOGO">
                    </a>

                    <!-- Menu desktop -->
                    <div class="menu-desktop">
                        <ul class="main-menu">
                            <li>
                                <a href="index.html">Vendors</a>
                                <ul class="sub-menu">
                                    <li><a href="index.html">Homepage 1</a></li>
                                    <li><a href="home-02.html">Homepage 2</a></li>
                                    <li><a href="home-03.html">Homepage 3</a></li>
                                </ul>
                            </li>

                            <li>
                                <a href="product.html">Real Wedding</a>
                            </li>

                            <li>
                                <a href="blog.html">Destination Wedding</a>
                            </li>

                            <li class="label1" data-label1="hot">
                                <a href="shoping-cart.html">Honey-Moon Package</a>
                            </li>

                            <li>
                                <a href="blog.html">Blog</a>
                            </li>

                            <li>
                                <a href="about.html">About</a>
                            </li>

                            <li>
                                <a href="contact.html">Contact</a>
                            </li>
                        </ul>
                    </div>  

                    <!-- Icon header -->
                    <div class="wrap-icon-header flex-w flex-r-m">                           
                        <div class="flex-c-m h-full p-r-25 bor6">
                            <div class="icon-header-item cl0 hov-cl1 trans-04 p-lr-22 p-r-11 icon-header-noti js-show-cart" data-notify="2">
                                <i class="zmdi zmdi-shopping-cart"></i>
                            </div>
                        </div>
                            
                        <div class="flex-c-m h-full p-lr-19">
                            <div class="icon-header-item cl0 hov-cl1 trans-04 p-lr-22 js-show-sidebar">
                                <i class="zmdi zmdi-menu"></i>
                            </div>
                        </div>
                    </div>

                </nav>
            </div>  
        </div>

        <!-- Header Mobile -->
       <div class="wrap-header-mobile">
            <!-- Logo moblie -->        
            <div class="logo-mobile">
                <a href="index.html"><img src="{{URL::asset('/images/icons/logo-01.png')}}" alt="IMG-LOGO"></a>
            </div>

            <!-- Icon header -->
            <div class="wrap-icon-header flex-w flex-r-m m-r-15">
                <div class="icon-header-item cl2 hov-cl1 trans-04 p-r-11 js-show-modal-search">
                    <i class="zmdi zmdi-search"></i>
                </div>

                <div class="icon-header-item cl2 hov-cl1 trans-04 p-r-11 p-l-10 icon-header-noti js-show-cart" data-notify="2">
                    <i class="zmdi zmdi-shopping-cart"></i>
                </div>

                <a href="#" class="dis-block icon-header-item cl2 hov-cl1 trans-04 p-r-11 p-l-10 icon-header-noti" data-notify="0">
                    <i class="zmdi zmdi-favorite-outline"></i>
                </a>
            </div>

            <!-- Button show menu -->
            <div class="btn-show-menu-mobile hamburger hamburger--squeeze">
                <span class="hamburger-box">
                    <span class="hamburger-inner"></span>
                </span>
            </div>
        </div>



        <!-- Menu Mobile -->
        <!-- Menu Mobile -->
        <div class="menu-mobile">

            <ul class="main-menu-m">
                <li>
                    <a href="index.html">Home</a>
                    <ul class="sub-menu-m">
                        <li><a href="index.html">Homepage 1</a></li>
                        <li><a href="home-02.html">Homepage 2</a></li>
                        <li><a href="home-03.html">Homepage 3</a></li>
                    </ul>
                    <span class="arrow-main-menu-m">
                        <i class="fa fa-angle-right" aria-hidden="true"></i>
                    </span>
                </li>

                <li>
                    <a href="product.html">Shop</a>
                </li>

                <li>
                    <a href="shoping-cart.html" class="label1 rs1" data-label1="hot">Features</a>
                </li>

                <li>
                    <a href="blog.html">Blog</a>
                </li>

                <li>
                    <a href="about.html">About</a>
                </li>

                <li>
                    <a href="contact.html">Contact</a>
                </li>
            </ul>
        </div>

        <!-- Modal Search -->
        <div class="modal-search-header flex-c-m trans-04 js-hide-modal-search">
            <button class="flex-c-m btn-hide-modal-search trans-04">
                <i class="zmdi zmdi-close"></i>
            </button>

            <form class="container-search-header">
                <div class="wrap-search-header">
                    <input class="plh0" type="text" name="search" placeholder="Search...">

                    <button class="flex-c-m trans-04">
                        <i class="zmdi zmdi-search"></i>
                    </button>
                </div>
            </form>
        </div>
    </header>
    @yield('content')

     {!!Html::script('/vendor/jquery/jquery-3.2.1.min.js')!!}
{!!Html::script('/vendor/bootstrap/js/popper.js')!!}

  {!!Html::script('/vendor/bootstrap/js/bootstrap.min.js')!!}
  {!!Html::script('/vendor/animsition/js/animsition.min.js')!!}

<!--===============================================================================================-->
    {!!Html::script('/vendor/select2/select2.min.js')!!}
    {!!Html::script('/js/main.js')!!}
    @yield('script')
        
</body>
</html>