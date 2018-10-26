<!DOCTYPE html>
<html lang="en">
<head>
    <title>OWM | OnlineWeddingMart</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->  
    <link rel="icon" type="image/png" href="{{URL::asset('images/icons/favicon.png')}}"/>
<!--===============================================================================================-->
   <link rel="stylesheet" href="{{ URL::asset('vendor/bootstrap/css/bootstrap.min.css') }}">
<!--===============================================================================================-->
   <link rel="stylesheet" href="{!!URL::asset('fonts/font-awesome/css/font-awesome.min.css')!!}">
<!--===============================================================================================-->
   <link rel="stylesheet" href="{!!URL::asset('fonts/iconic/css/material-design-iconic-font.min.css')!!}">
<!--===============================================================================================-->
    <link rel="stylesheet" href="{!!URL::asset('fonts/linearicons-v1.0.0/icon-font.min.css')!!}">
<!--===============================================================================================-->
   <link rel="stylesheet" href="{!!URL::asset('vendor/animate/animate.css')!!}">
<!--===============================================================================================-->  
   <link rel="stylesheet" href="{!!URL::asset('vendor/css-hamburgers/hamburgers.min.css')!!}">
<!--===============================================================================================-->
   <link rel="stylesheet" href="{!!URL::asset('vendor/animsition/css/animsition.min.css')!!}">
<!--===============================================================================================-->
   <link rel="stylesheet" href="{!!URL::asset('vendor/select2/select2.min.css')!!}">
<!--===============================================================================================-->  
   <link rel="stylesheet" href="{!!URL::asset('vendor/daterangepicker/daterangepicker.css')!!}">
<!--===============================================================================================-->
    <link rel="stylesheet" href="{!!URL::asset('vendor/slick/slick.css')!!}">
<!--===============================================================================================-->
   <link rel="stylesheet" href="{!!URL::asset('vendor/MagnificPopup/magnific-popup.css')!!}">
   <link rel="stylesheet" href="{!!URL::asset('vendor/lazyload/jquery.lazyloadxt.spinner.min.css')!!}">
<!--===============================================================================================-->
   <link rel="stylesheet" href="{!!URL::asset('vendor/perfect-scrollbar/perfect-scrollbar.css')!!}">
<!--===============================================================================================-->
    <link rel="stylesheet" href="{!!URL::asset('css/util.css')!!}">
<link rel="stylesheet" href="{!!URL::asset('css/main.css')!!}">
<!--===============================================================================================-->
</head>

<!--<body>-->


    <body class="">
    <!-- Header -->
    <header class="header-v3">
        <!-- Header desktop -->
        <div class="container-menu-desktop">
            <div class="wrap-menu-desktop">
                <nav class="limiter-menu-desktop p-l-45">
                    
                    <!-- Logo desktop -->       
                    <a href="#" class="logo">
                        <img src={{URL::asset("images/icons/logo-02.png")}} alt="IMG-LOGO">
                    </a>

                    <!-- Menu desktop -->
                    <div class="menu-desktop">
                        <ul class="main-menu">
                            <li>
                                <a href="/vendors/all">Vendors</a>
                                <ul class="sub-menu">
                                    @foreach($servicesmenu as $servicemenu)
                                    <li><a href="/vendors/all/{{$servicemenu->slug}}">{{$servicemenu->name}}</a></li>
                                    @endforeach
                                </ul>
                            </li>

                            <li>
                                <a href="/blog/category/real-wedding">Real Wedding</a>
                            </li>

                            <li>
                                <a href="/blog/category/destination-wedding">Destination Wedding</a>
                            </li>

                            <li class="label1" data-label1="hot">
                                <a href="/honeymoon-package">HoneyMoon Package</a>
                            </li>

                            <li>
                                <a href="/blog">Blog</a>
                            </li>

                            <li>
                                <a href="/about">About</a>
                            </li>

                            <li>
                                <a href="/contact">Contact</a>
                            </li>
                        </ul>
                    </div>  

                    <!-- Icon header -->
                    <div class="wrap-icon-header flex-w flex-r-m h-full">

                        @unless(Auth::guard('vendor')->check() || Auth::guard('customer')->check() )
                        <div class="flex-c-m h-full p-r-25 bor6">
                            <div class="icon-header-item cl0 trans-04 p-lr-11">
                               <a class="btn mtext-104 cl0 size-101 bg1 hov-btn2 p-lr-10 trans-04" type="button" href="{{route('login.customer')}}">Login</a>
                            </div>
                        </div>
                        @endunless

                        @if(Auth::guard('vendor')->check() || Auth::guard('customer')->check())
                        <div class="flex-c-m h-full p-r-25 bor6">
                            <div class="icon-header-item cl0 hov-cl1 trans-04 p-lr-11 js-show-cart">
                                <i class="zmdi zmdi-account"></i>
                            </div>
                        </div>
                        @endif
                            
                        <div class="flex-c-m h-full p-lr-19">
                            <div class="icon-header-item cl0 hov-cl1 trans-04 p-lr-11 ">
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
                <a href="/"><img src="{{URL::asset('/images/icons/logo-01.png')}}" alt="IMG-LOGO"></a>
            </div>
            @unless(Auth::guard('vendor')->check() || Auth::guard('customer')->check() )
            <!-- Icon header -->
            <div class="wrap-icon-header flex-w flex-r-m h-full m-r-15">
                <div class="flex-c-m h-full p-r-5">
                    <div class="icon-header-item cl0 trans-04 p-lr-11">
                        <a href="{{route('login.customer')}}" class="btn mtext-104 cl0 hov-btn2 size-40 bg1 p-lr-10 trans-04" type="button">Login</a>
                    </div>
                </div>
            </div>
            @endunless
            <!-- Icon header -->
            <div class="wrap-icon-header flex-w flex-r-m m-r-15">
                <div class="icon-header-item cl2 hov-cl1 trans-04 p-r-11 js-show-modal-search">
                    <i class="zmdi zmdi-search"></i>
                </div>
                @if(Auth::guard('vendor')->check() || Auth::guard('customer')->check())
                <div class="icon-header-item cl2 hov-cl1 trans-04 p-r-11 p-l-10 js-show-cart">
                    <i class="zmdi zmdi-account"></i>
                </div>
                @endif

            </div>

            <!-- Button show menu -->
            <div class="btn-show-menu-mobile hamburger hamburger--squeeze">
                <span class="hamburger-box">
                    <span class="hamburger-inner"></span>
                </span>
            </div>
        </div>


        <!-- Menu Mobile -->
        <div class="menu-mobile">
            <ul class="main-menu-m">
                <li>
                    <a href="/vendors/all">Vendors</a>
                    <ul class="sub-menu-m">
                        @foreach($servicesmenu as $servicemenu)
                            <li><a href="/vendors/all/{{$servicemenu->slug}}">{{$servicemenu->name}}</a></li>
                        @endforeach
                    </ul>
                    <span class="arrow-main-menu-m">
                        <i class="fa fa-angle-right" aria-hidden="true"></i>
                    </span>
                </li>

                <li>
                    <a href="/blog/real-wedding">Real Wedding</a>
                </li>

                <li>
                    <a href="/honeymoon-package/blog" class="label1 rs1" data-label1="hot">Honey-Moon Package</a>
                </li>

                <li>
                    <a href="/blog">Blog</a>
                </li>

                <li>
                    <a href="/about">About</a>
                </li>

                <li>
                    <a href="/contact">Contact</a>
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


     <!-- Cart -->
    <div class="wrap-header-cart js-panel-cart">
        <div class="s-full js-hide-cart"></div>
        @if(Auth::guard('vendor')->check())
        <div class="header-cart flex-col-l p-l-65 p-r-25">
            <div class="header-cart-title flex-w flex-sb-m p-b-8">
                <span class="mtext-103 cl2">
                   {{ Auth::guard('vendor')->user()->name }}
                </span>

                <div class="fs-35 lh-10 cl2 p-lr-5 pointer hov-cl1 trans-04 js-hide-cart">
                    <i class="zmdi zmdi-close"></i>
                </div>
            </div>
            
            <div class="header-cart-content flex-w js-pscroll">
                <ul class="header-cart-wrapitem w-full">
                    <li class="header-cart-item flex-w flex-t m-b-12">
                        <div class="header-cart-item-txt p-t-8">
                            <a href="/vendor/profile" class="header-cart-item-name m-b-18 hov-cl1 trans-04">
                               Profile
                            </a>
                        </div>
                    </li>

                    <li class="header-cart-item flex-w flex-t m-b-12">
                        
                        <div class="header-cart-item-txt p-t-8">
                            <a href="/vendor/projects" class="header-cart-item-name m-b-18 hov-cl1 trans-04">
                                Projects
                            </a>
                        </div>
                    </li>

                    <li class="header-cart-item flex-w flex-t m-b-12">
                       
                        <div class="header-cart-item-txt p-t-8">
                            <a href="/vendor/reviews" class="header-cart-item-name m-b-18 hov-cl1 trans-04">
                                Reviews
                            </a>
                        </div>
                    </li>
                </ul>

                <div class="w-full">
                    <div class="header-cart-buttons flex-w w-full">
                        {!!Form::open(['route'=>'vendor.logout'])!!}
                        {{Form::submit('Logout',['class'=>'flex-c-m stext-101 cl0 size-107 bg1 hov-btn2 bor2 p-lr-15 trans-04 m-r-8 m-b-10'])}}
                        {!!Form::close()!!}
                    </div>
                </div>
            </div>
        </div>
        @endif
        @if(Auth::guard('customer')->check())
        <div class="header-cart flex-col-l p-l-65 p-r-25">
            <div class="header-cart-title flex-w flex-sb-m p-b-8">
                <span class="mtext-103 cl2">
                   {{ Auth::guard('customer')->user()->name }}
                </span>

                <div class="fs-35 lh-10 cl2 p-lr-5 pointer hov-cl1 trans-04 js-hide-cart">
                    <i class="zmdi zmdi-close"></i>
                </div>
            </div>
            
            <div class="header-cart-content flex-w js-pscroll">
                
                <div class="w-full">
                    <div class="header-cart-total w-full p-tb-40">
                        Total: $75.00
                    </div>

                    <div class="header-cart-buttons flex-w w-full">
                        {!!Form::open(['route'=>'customer.logout'])!!}
                        {{Form::submit('Logout',['class'=>'flex-c-m stext-101 cl0 size-107 bg3 bor2 hov-btn3 p-lr-15 trans-04 m-r-8 m-b-10'])}}
                        {!!Form::close()!!}
                    </div>
                </div>
            </div>
        </div>
        @endif
        @if(Auth::guard('web')->check())
        <div class="header-cart flex-col-l p-l-65 p-r-25">
            <div class="header-cart-title flex-w flex-sb-m p-b-8">
                <span class="mtext-103 cl2">
                   {{ Auth::user()->name }}
                </span>

                <div class="fs-35 lh-10 cl2 p-lr-5 pointer hov-cl1 trans-04 js-hide-cart">
                    <i class="zmdi zmdi-close"></i>
                </div>
            </div>
            
            <div class="header-cart-content flex-w js-pscroll">
                
                <div class="w-full">
                    <div class="header-cart-total w-full p-tb-40">
                        Total: $75.00
                    </div>

                    <div class="header-cart-buttons flex-w w-full">
                        {!!Form::open(['route'=>'logout'])!!}
                        {{Form::submit('Logout',['class'=>'flex-c-m stext-101 cl0 size-107 bg3 bor2 hov-btn3 p-lr-15 trans-04 m-r-8 m-b-10'])}}
                        {!!Form::close()!!}
                    </div>
                </div>
            </div>
        </div>
        @endif
    </div>



    <!-- Slider -->
    <section class="section-slide">
        <div class="wrap-slick1 rs2-slick1">
            <div class="slick1">
                <div class="item-slick1 bg-overlay1" style="background-image: url(images/slide-05.jpg);" data-thumb="images/thumb-01.jpg" data-caption="Women’s Wear">
                    <div class="container h-full">
                    @include('partials.messages')
                        <div class="flex-col-c-m h-full p-t-100 p-b-60 respon5">
                            <div class="layer-slick1 animated visible-false" data-appear="fadeInUp" data-delay="800">
                                <h3 class="ltext-107 cl0 p-t-22 p-b-22 txt-center respon2">
                    Weddings Made Easy
                </h3>
                <p class="stext-110 txt-center cl0 p-t-22 p-b-22 respon2">Your Wedding, Your Way.
Find the best wedding vendors </p>
                            </div>

                                                <div class="row txt-center justify-content-md-center">
                        {!! Form::open(['route' => 'find.vendors']) !!}
                                <div class="input-group respon3">
                      <select name='service_id' class="mtext-104 size-117 custom-select" id="inputGroupSelect04">
                        <option selected>Select Vendor Type</option>
                        @foreach($servicesmenu as $servicemenu)
                        <option value="{{$servicemenu->id}}">{{$servicemenu->name}}</option>
                        @endforeach
                      </select>
                      <select name='location_id' class="mtext-104 size-117 custom-select" id="inputGroupSelect04">
                        <option selected>Select City</option>
                        @foreach($locationsmenu as $locationmenu)
                        <option value="{{$locationmenu->id}}">{{$locationmenu->name}}</option>
                        @endforeach
                      </select>
                      <div class="input-group-append">
                        {{ Form::submit('Get Started',['class'=>'btn mtext-104 cl0 size-101 bg1 hov-btn2 p-lr-15 trans-04']) }}
                      </div>
                    </div>
                    {!! Form::close() !!}
                        </div>
                                
                        </div>
                    </div>
                </div>

                
            </div>
        </div>
    </section>


    <!-- Banner -->
    <div class="sec-banner bg0 p-t-95 p-b-35">
        <div class="container">
            <div class="p-b-32">
                <h3 class="ltext-107 cl5 txt-center respon2">
                    Find Vendors at Every Budget
                </h3>
                <p class="stext-110 txt-center cl5 respon2">Photographers, venues, makeup artists & more at your budget & style.</p>
            </div>
            <div class="flex-w flex-c-m">
                <div class="size-202 m-lr-auto respon4">
                    <!-- Block1 -->
                    <div class="block1 wrap-pic-w">
                        <img data-src="images/banner-04.jpg" alt="IMG-BANNER">

                        <a href="/vendors/all/wedding-dress" class="block1-txt ab-t-l s-full flex-col-l-sb p-lr-38 p-tb-34 trans-03 respon3">
                            <div class="block1-txt-child1 flex-col-l">
                                <span class="block1-name ltext-102 trans-04 p-b-8">
                                    Wedding Dress
                                </span>
                            </div>

                            <div class="block1-txt-child2 p-b-4 trans-05">
                                <div class="block1-link stext-101 cl0 trans-09">
                                    View All
                                </div>
                            </div>
                        </a>
                    </div>
                </div>

                <div class="size-202 m-lr-auto respon4">
                    <!-- Block1 -->
                    <div class="block1 wrap-pic-w">
                        <img data-src="images/banner-05.jpg" alt="IMG-BANNER">

                        <a href="/vendors/all/groom-wear" class="block1-txt ab-t-l s-full flex-col-l-sb p-lr-38 p-tb-34 trans-03 respon3">
                            <div class="block1-txt-child1 flex-col-l">
                                <span class="block1-name ltext-102 trans-04 p-b-8">
                                    Groom Wear
                                </span>
                            </div>

                            <div class="block1-txt-child2 p-b-4 trans-05">
                                <div class="block1-link stext-101 cl0 trans-09">
                                    View All
                                </div>
                            </div>
                        </a>
                    </div>
                </div>

                <div class="size-202 m-lr-auto respon4">
                    <!-- Block1 -->
                    <div class="block1 wrap-pic-w">
                        <img data-src="images/banner-07.jpg" alt="IMG-BANNER">

                        <a href="/vendors/all/traditional-wear" class="block1-txt ab-t-l s-full flex-col-l-sb p-lr-38 p-tb-34 trans-03 respon3">
                            <div class="block1-txt-child1 flex-col-l">
                                <span class="block1-name ltext-102 trans-04 p-b-8">
                                    Traditional Wears
                                </span>
                            </div>

                            <div class="block1-txt-child2 p-b-4 trans-05">
                                <div class="block1-link stext-101 cl0 trans-09">
                                    View All
                                </div>
                            </div>
                        </a>
                    </div>
                </div>


                <div class="size-202 m-lr-auto respon4">
                    <!-- Block1 -->
                    <div class="block1 wrap-pic-w">
                        <img data-src="images/banner-13.jpg" alt="IMG-BANNER">

                        <a href="/vendors/all/wedding-cakes" class="block1-txt ab-t-l s-full flex-col-l-sb p-lr-38 p-tb-34 trans-03 respon3">
                            <div class="block1-txt-child1 flex-col-l">
                                <span class="block1-name ltext-102 trans-04 p-b-8">
                                    Wedding Cakes
                                </span>
                            </div>

                            <div class="block1-txt-child2 p-b-4 trans-05">
                                <div class="block1-link stext-101 cl0 trans-09">
                                    View All
                                </div>
                            </div>
                        </a>
                    </div>
                </div>

                <div class="size-202 m-lr-auto respon4">
                    <!-- Block1 -->
                    <div class="block1 wrap-pic-w">
                        <img data-src="images/banner-08.jpg" alt="IMG-BANNER">

                        <a href="/vendors/all/bridal-makeup" class="block1-txt ab-t-l s-full flex-col-l-sb p-lr-38 p-tb-34 trans-03 respon3">
                            <div class="block1-txt-child1 flex-col-l">
                                <span class="block1-name ltext-102 trans-04 p-b-8">
                                    Bridal MakeUp
                                </span>
                            </div>

                            <div class="block1-txt-child2 p-b-4 trans-05">
                                <div class="block1-link stext-101 cl0 trans-09">
                                    View All
                                </div>
                            </div>
                        </a>
                    </div>
                </div>

                <div class="size-202 m-lr-auto respon4">
                    <!-- Block1 -->
                    <div class="block1 wrap-pic-w">
                        <img data-src="images/banner-09.jpg" alt="IMG-BANNER">

                        <a href="/vendors/all/wedding-photography" class="block1-txt ab-t-l s-full flex-col-l-sb p-lr-38 p-tb-34 trans-03 respon3">
                            <div class="block1-txt-child1 flex-col-l">
                                <span class="block1-name ltext-102 trans-04 p-b-8">
                                    Wedding Photography
                                </span>
                            </div>

                            <div class="block1-txt-child2 p-b-4 trans-05">
                                <div class="block1-link stext-101 cl0 trans-09">
                                    View All
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
            <div class="p-t-9 flex-c-m flex-w w-full respon3">
                <a href="/vendors/all" class="flex-c-m stext-101 cl0 size-126 bg1 hov-btn2 p-lr-15 trans-04">
                    Browse All Categories
                </a>
            </div>
        </div>
    </div>


    <!--Hire Us -->

    <div class="sec-banner bg0 p-t-30 p-b-35">
        <div class="container">
            <div class="p-b-32">
                <h3 class="ltext-107 cl5 txt-center respon2">
                    Hire OWM To Help You Save
                </h3>
                <p class="stext-110 txt-center cl5 respon2">The Best Experience with your budget in mind</p>
            </div>
            <div class="row">
                <div class="col-md-6 col-lg-4 p-b-30 m-lr-auto">
                    <!-- Block1 -->
                    <div class="block1 wrap-pic-w">
                        <img data-src="images/banner-10.jpg" alt="IMG-BANNER">

                        <a href="/contact" class="block1-txt ab-t-l s-full flex-col-c-sa p-lr-38 p-tb-38 trans-03 respon3">
                            <div class="block1-txt-child1 flex-col-l">
                                <span class="block1-name ltext-102 trans-04 p-b-8">
                                    Planning Services
                                </span>
                                <span class="block1-name stext-110 txt-center respon2">The Best Experience with your budget in mind</span>
                            </div>

                            <div class="block1-txt-child3 p-b-4 trans-05">
                                <button class="btn btn-outline-light mtext-104 cl0 size-101 p-lr-15 trans-09" type="button">Contact Us</button>
                            </div>
                        </a>
                    </div>
                </div>

                <div class="col-md-6 col-lg-4 p-b-30 m-lr-auto">
                    <!-- Block1 -->
                    <div class="block1 wrap-pic-w">
                        <img data-src="images/banner-11.jpg" alt="IMG-BANNER">

                        <a href="/contact" class="block1-txt ab-t-l s-full flex-col-c-sa p-lr-38 p-tb-38 trans-03 respon3">
                            <div class="block1-txt-child1 flex-col-l">
                                <span class="block1-name ltext-102 trans-04 p-b-8">
                                   OWM Helper
                                </span>
                                 <span class="block1-name stext-110 txt-center respon2">The Best Experience with your budget in mind</span>
                            </div>

                            <div class="block1-txt-child3 p-b-4 trans-05">
                                <button class="btn btn-outline-light mtext-104 cl0 size-101 p-lr-15 trans-09" type="button">Try It</button>
                            </div>
                        </a>
                    </div>
                </div>

                <div class="col-md-6 col-lg-4 p-b-30 m-lr-auto">
                    <!-- Block1 -->
                    <div class="block1 wrap-pic-w">
                        <img data-src="images/banner-12.jpg" alt="IMG-BANNER">

                        <a href="/contact" class="block1-txt ab-t-l s-full flex-col-c-sa p-lr-38 p-tb-38 trans-03 respon3">
                            <div class="block1-txt-child1 flex-col-l">
                                <span class="block1-name ltext-102 trans-04 p-b-8">
                                    Home Services
                                </span>
                                <span class="block1-name stext-110 txt-center respon2">The Best Experience with your budget in mind</span>
                            </div>

                            <div class="block1-txt-child3 p-b-4 trans-05">
                                <button class="btn btn-outline-light mtext-104 cl0 size-101 p-lr-15 trans-09" type="button">Know More</button>
                            </div>
                        </a>
                    </div>
                </div>

                
            </div>
        </div>
    </div>

    <!--Hire Us End -->


    <!--Blog Slides-->

    <section class="sec-product bg0 p-t-30 p-b-35">
        <div class="container">
            <div class="p-b-32">
                <h3 class="ltext-107 cl5 txt-center respon2">
                    Read Experiences and Advice
                </h3>
                <p class="stext-110 txt-center cl5 respon2">Spicy Gist from people that have been in your shoes + professional advice from experienced planners</p>
            </div>

                <!-- Tab panes -->
                <div class="tab-content p-t-9">
                    <!-- - -->
                    <div class="tab-pane fade show active" id="best-seller" role="tabpanel">
                        <!-- Slide2 -->
                        <div class="wrap-slick2">
                            <div class="slick2">
                                @foreach($posts as $post)
                                <div class="item-slick2 col-sm-6 col-md-4 p-b-40">
                                    <!-- Block2 -->
                                    <div class="block2">
                                        <div class="block2-pic hov-img0">
                                            <img data-src="{{URL::asset('images/thumbs/'.$post->image)}}" alt="IMG-POST">
                                        </div>

                                        <div class="p-t-15">
                            <div class="stext-107 flex-w p-b-14">
                                <span class="m-r-3">
                                    <span class="cl4">
                                        By
                                    </span>

                                    <span class="cl5">
                                        Admin
                                    </span>
                                </span>

                                <span>
                                    <span class="cl4">
                                        on
                                    </span>

                                    <span class="cl5">
                                        {{date('F j, Y',strtotime($post->created_at))}}
                                    </span>
                                </span>
                            </div>

                            <h4 class="p-b-12">
                                <a href="{{route('blog.single', $post->slug)}}" class="mtext-101 cl2 hov-cl1 trans-04">
                                    {{$post->title}}
                                </a>
                            </h4>

                            <p class="stext-108 cl6">
                                {!!substr($post->body, 0,56)!!}{{strlen($post->body) >150 ? "..." : ""}}
                            </p>
                        </div>
                                    </div>
                                </div>
                                @endforeach


                        </div>
                    </div>
                </div>

                <div class="flex-c-m flex-w w-full respon3">
                <a href="/blog" class="flex-c-m stext-101 cl0 size-126 bg1 hov-btn2 p-lr-15 trans-04">
                    Read The Blog
                </a>
            </div>
        </div>
    </section>

    <!-- Blog Slides End-->


    <!-- Footer -->
<footer class="bg3 p-t-75 p-b-32">
        <div class="container">
            <div class="row">
                <div class="col-sm-6 col-lg-3 p-b-50">
                    <h4 class="stext-301 cl0 p-b-30">
                        Categories
                    </h4>

                    <ul>
                        @foreach($servicesmenu as $servicemenu)
                        <li class="p-b-10">
                            <a href="/vendors/all/{{$servicemenu->slug}}" class="stext-107 cl7 hov-cl1 trans-04">
                                {{$servicemenu->name}}
                            </a>
                        </li>
                        @endforeach
                    </ul>
                </div>

                <div class="col-sm-6 col-lg-3 p-b-50">
                    <h4 class="stext-301 cl0 p-b-30">
                        Help
                    </h4>

                    <ul>
                        <li class="p-b-10">
                            <a href="/blog/category/real-wedding" class="stext-107 cl7 hov-cl1 trans-04">
                                Real Weddings
                            </a>
                        </li>

                        <li class="p-b-10">
                            <a href="/blog" class="stext-107 cl7 hov-cl1 trans-04">
                                Blog 
                            </a>
                        </li>

                        <li class="p-b-10">
                            <a href="/privacy-policy" class="stext-107 cl7 hov-cl1 trans-04">
                               Privacy Policy
                            </a>
                        </li>
                    </ul>
                </div>

                <div class="col-sm-6 col-lg-3 p-b-50">
                    <h4 class="stext-301 cl0 p-b-30">
                        GET IN TOUCH
                    </h4>

                    <p class="stext-107 cl7 size-201">
                        Any questions? Let us know  at the coffee shop close to your house, just around the corner
                    </p>

                    <div class="p-t-27">
                        <a href="https://facebook.com/o_weddingmart" class="fs-18 cl7 hov-cl1 trans-04 m-r-16">
                            <i class="fa fa-facebook"></i>
                        </a>

                        <a href="https://instagram.com/o_weddingmart" class="fs-18 cl7 hov-cl1 trans-04 m-r-16">
                            <i class="fa fa-instagram"></i>
                        </a>

                        <a href="https://pinterest.com/o_weddingmart" class="fs-18 cl7 hov-cl1 trans-04 m-r-16">
                            <i class="fa fa-pinterest-p"></i>
                        </a>
                    </div>
                </div>

                <div class="col-sm-6 col-lg-3 p-b-50">
                    <h4 class="stext-301 cl0 p-b-30">
                        Newsletter
                    </h4>

                    <form>
                        <div class="wrap-input1 w-full p-b-4">
                            <input class="input1 bg-none plh1 stext-107 cl7" type="text" name="email" placeholder="email@example.com">
                            <div class="focus-input1 trans-04"></div>
                        </div>

                        <div class="p-t-18">
                            <button class="flex-c-m stext-101 cl0 size-103 bg1 bor1 hov-btn2 p-lr-15 trans-04">
                                Subscribe
                            </button>
                        </div>
                    </form>
                </div>
            </div>

            <div class="p-t-40">
                <div class="flex-c-m flex-w p-b-18">
                    <a href="#" class="m-all-1">
                        <img src="{{URL::asset('/images/icons/icon-pay-01.png')}}" alt="ICON-PAY">
                    </a>

                    <a href="#" class="m-all-1">
                        <img src="{{URL::asset('/images/icons/icon-pay-02.png')}}" alt="ICON-PAY">
                    </a>

                    <a href="#" class="m-all-1">
                        <img src="{{URL::asset('/images/icons/icon-pay-03.png')}}" alt="ICON-PAY">
                    </a>

                    <a href="#" class="m-all-1">
                        <img src="{{URL::asset('/images/icons/icon-pay-04.png')}}" alt="ICON-PAY">
                    </a>

                    <a href="#" class="m-all-1">
                        <img src="{{URL::asset('images/icons/icon-pay-05.png')}}" alt="ICON-PAY">
                    </a>
                </div>

                <p class="stext-107 cl6 txt-center">
Copyright ©<script>document.write(new Date().getFullYear());</script> All rights reserved | This website is made with <i class="fa fa-heart-o" aria-hidden="true"></i> by <a href="https://twitter.com/uchenebed" target="_blank">UcheNebed</a>

                </p>
            </div>
        </div>
    </footer>


    <!-- Back to top -->
    <div class="btn-back-to-top" id="myBtn">
        <span class="symbol-btn-back-to-top">
            <i class="zmdi zmdi-chevron-up"></i>
        </span>
    </div>


    <script src="{!!URL::asset('vendor/jquery/jquery-3.2.1.min.js')!!}"></script>
    <script src="{!!URL::asset('vendor/lazyload/jquery.lazyloadxt.min.js')!!}"></script>
<!--===============================================================================================-->
    <script src="{!!URL::asset('vendor/animsition/js/animsition.min.js')!!}"></script>
<!--===============================================================================================-->
   <script src="{!!URL::asset('vendor/bootstrap/js/popper.js')!!}"></script>
  <script src="{!!URL::asset('vendor/bootstrap/js/bootstrap.min.js')!!}"></script>
<!--===============================================================================================-->
    <script src="{!!URL::asset('vendor/select2/select2.min.js')!!}"></script>
    <script>
        $(".js-select2").each(function(){
            $(this).select2({
                minimumResultsForSearch: 20,
                dropdownParent: $(this).next('.dropDownSelect2')
            });
        })
    </script>
<!--===============================================================================================-->
    <script src="{!!URL::asset('vendor/daterangepicker/moment.min.js')!!}"></script>
    <script src="{!!URL::asset('vendor/daterangepicker/daterangepicker.js')!!}"></script>
<!--===============================================================================================-->
    <script src="{!!URL::asset('vendor/slick/slick.min.js')!!}"></script>
    <script src="{!!URL::asset('js/slick-custom.js')!!}"></script>
<!--===============================================================================================-->
    <script src=portstaf"></script>  wetin de eloper sirve 
    <script>
        $('.parallax100').parallax100();
    </script>
<!--===============================================================================================-->
    <script src="{!!URL::asset('vendor/MagnificPopup/jquery.magnific-popup.min.js')!!}"></script>
    <script>
        $('#launch-vendor-login').click(function(){
            $('#modal-vendor-register').modal('hide');
        });

        $('#launch-vendor-register').click(function(){
            $('#modal-vendor-login').modal('hide');
        });

        $('.gallery-lb').each(function() { // the containers for all your galleries
            $(this).magnificPopup({
                delegate: 'a', // the selector for gallery item
                type: 'image',
                gallery: {
                    enabled:true
                },
                mainClass: 'mfp-fade'
            });
        });
    </script>
<!--===============================================================================================-->
    <script src="{!!URL::asset('vendor/isotope/isotope.pkgd.min.js')!!}"></script>
<!--===============================================================================================-->
    <script src="{!!URL::asset('vendor/sweetalert/sweetalert.min.js')!!}"></script>
    <script>
        $('.js-addwish-b2').on('click', function(e){
            e.preventDefault();
        });

        /*---------------------------------------------*/

        $('.js-addcart-detail').each(function(){
            var nameProduct = $(this).parent().parent().parent().parent().find('.js-name-detail').html();
            $(this).on('click', function(){
                swal(nameProduct, "is added to cart !", "success");
            });
        });
    </script>
<!--===============================================================================================-->
    <script src="{!!URL::asset('vendor/perfect-scrollbar/perfect-scrollbar.min.js')!!}"></script>
    <script>
        $('.js-pscroll').each(function(){
            $(this).css('position','relative');
            $(this).css('overflow','hidden');
            var ps = new PerfectScrollbar(this, {
                wheelSpeed: 1,
                scrollingThreshold: 1000,
                wheelPropagation: false,
            });

            $(window).on('resize', function(){
                ps.update();
            })
        });
    </script>
<!--===============================================================================================-->
    <script src="{!!URL::asset('js/main.js')!!}"></script>

</body>
</html>