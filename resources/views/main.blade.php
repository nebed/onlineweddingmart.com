<!DOCTYPE html>
<html lang="en">
<head>
    <title>@yield('title')</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->  
    <link rel="icon" type="image/png" href="images/icons/favicon.png"/>
<!--===============================================================================================-->
   {!! Html::style('/vendor/bootstrap/css/bootstrap.min.css')!!}
<!--===============================================================================================-->
   {!!Html::style('/fonts/font-awesome/css/font-awesome.min.css')!!}
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
   {!!Html::style('vendor/lazyload/jquery.lazyloadxt.spinner.min.css')!!}
<!--===============================================================================================-->
   {!!Html::style('/vendor/perfect-scrollbar/perfect-scrollbar.css')!!}
<!--===============================================================================================-->
    {!!Html::style('/css/util.css')!!}
{!!Html::style('/css/main.css')!!}
@yield('stylesheet')
<!--===============================================================================================-->
</head>
  <body class="animsition">

    <!--Modal Vendor Register-->
    <div class="modal fade bd-example-modal-lg" id="modal-vendor-register" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
        <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
        </div>
        <div class="modal-body">
            <div class="container-fluid">
                <div class="row">
                  <div class="col-md-4">
                    <img class="img-fluid" src="{!!URL::asset('images/signin1.jpg')!!}">
                  </div>
                  <div class="col-md-8">
                    <div class="txt-center">
                        <h3>"Grow Your Business with OWM"</h3>
                        <h5>Sign Up to access your Dasboard</h5>
                    </div>
                    <br>
                      {!! Form::open(['route'=>'vendor.register']) !!}
                      {{ csrf_field() }}
                {{Form::text('name',null,['class'=>'form-control', 'placeholder'=>'Your Name*' ])}}
                <small id="emailHelp" class="form-text text-danger mb-1">Required*</small>
                {{Form::email('email',null,['class'=>'form-control', 'placeholder'=>'Your Email*'])}}
                <small id="emailHelp" class="form-text text-danger  mb-1">Required*</small>
                {{Form::text('brand_name',null,['class'=>'form-control', 'placeholder'=>'Brand Name*'])}}
                <small id="emailHelp" class="form-text text-danger  mb-1">Required*</small>
                  <select class="form-control" name="service_id">
                    <option value=''>Select Vendor Type*</option>
                    @foreach($servicesmenu as $service)
                    <option value='{{$service->id}}'>{{$service->name}}</option>
                    @endforeach

                  </select>
                  <small id="emailHelp" class="form-text text-danger mb-1">Required*</small>
                  <select class="form-control" name="location_id">
                    <option value=''>City (choose your base city here)*</option>
                    @foreach($locationsmenu as $location)
                    <option value='{{$location->id}}'>{{$location->name}}</option>
                    @endforeach

                  </select>
                  <small id="emailHelp" class="form-text text-danger  mb-1">Required*</small>
                {{Form::password('password',['class'=>'form-control','placeholder'=>'Password*'])}}
               <small id="emailHelp" class="form-text text-danger  mb-1">Required*</small>
                {{Form::password('password_confirmation',['class'=>'form-control', 'placeholder'=>'Confirm Password*'])}}
                <small id="emailHelp" class="form-text text-danger  mb-1">Required*</small>
                {{Form::submit('Sign Up',['class'=>'submit btn bg1 hov-btn2 form-control cl0'])}}

                {!! Form::close() !!}
                <div class="txt-center mt-5">
                        <p>Already have an Accout? <a>Sign In</a>
                 </div>

                 <div class="">
                    <a href="#" id="launch-vendor-login" class="btn flex-c-m trans-04 p-lr-25" data-toggle="modal" data-target=".vendorlogin">
                            Vendor Login
                        </a>
                 </div>

                  </div>
                </div>
            </div>
        </div>
    </div>
  </div>
</div>

<!-- Modal Vendor Login -->
    <div id="modal-vendor-login" class="modal fade vendorlogin" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
        <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
        </div>
        <div class="modal-body">
            <div class="container-fluid">
                <div class="row">
                  <div class="col-md-4">
                     <img class="img-fluid" src="{!!URL::asset('images/signin.jpg')!!}">
                  </div>
                  <div class="col-md-8">
                    <div class="txt-center">
                        <h3>"Grow Your Business with OWM"</h3>
                        <h5>Sign In to access your Dasboard</h5>
                    </div>
                    <br>
                      {!! Form::open(['route'=>'vendor.login']) !!}
                      {{ csrf_field() }}
                {{Form::email('email',null,['class'=>'form-control mb-1', 'placeholder'=>'Your Email*'])}}
                {{Form::password('password',['class'=>'form-control mb-1','placeholder'=>'Password*'])}}
                {{Form::submit('Sign In',['class'=>'submit btn bg1 hov-btn2 form-control cl0'])}}

                {!! Form::close() !!}
                <div class="txt-center mt-5">
                        <p>Don't have an account? <a>Sign Up</a>
                 </div>

                 <div class="">
                    <a href="#" id="launch-vendor-register" class="btn flex-c-m trans-04 p-lr-25" data-toggle="modal" data-target=".bd-example-modal-lg">
                            Vendor Sign Up
                        </a>
                 </div>
                 
                  </div>
                </div>
            </div>
        </div>
    </div>
  </div>
</div>
    
    <!-- Header -->
    <!-- Header -->
    <header class="header-v2">
        <!-- Header desktop -->
        <div class="container-menu-desktop">
            <div class="wrap-menu-desktop how-shadow1">
                <nav class="limiter-menu-desktop p-l-45">
                    
                    <!-- Logo desktop -->       
                    <a href="/" class="logo">
                        <img src="{{URL::asset('/images/icons/logo-02.png')}}" alt="IMG-LOGO">
                    </a>

                    <!-- Menu desktop -->
                    <div class="menu-desktop">
                        <ul class="main-menu">
                            <li>
                                <a href="/vendors/all/">Vendors</a>
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
                            <div class="icon-header-item cl0 hov-cl2 trans-04 p-lr-11 js-show-cart">
                                <i class="zmdi zmdi-account"></i>
                            </div>
                        </div>
                        @endif
                            
                        <div class="flex-c-m h-full p-lr-19">
                            <div class="icon-header-item cl0 hov-cl2 trans-04 p-lr-11 ">
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
                        <a href="{{route('login.vendor')}}" class="btn mtext-104 cl0 hov-btn2 size-40 bg1 p-lr-10 trans-04" type="button">Login</a>
                    </div>
                </div>
            </div>
            @endunless
            <!-- Icon header -->
            <div class="wrap-icon-header flex-w flex-r-m m-r-15">
                <div class="icon-header-item cl2 hov-cl1 trans-04 p-r-11 js-show-modal-search">
                    <i class="zmdi zmdi-search"></i>
                </div>
                @if(Auth::check())
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
                    <a href="/blog/category/real-wedding">Real Wedding</a>
                </li>

                <li>
                    <a href="/blog/category/destination-wedding">Destination Wedding</a>
                </li>

                <li>
                    <a href="/honeymoon-package" class="label1 rs1" data-label1="hot">HoneyMoon Package</a>
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
                        {{Form::submit('Logout',['class'=>'flex-c-m stext-101 cl0 size-107 bg3 bor2 hov-btn3 p-lr-15 trans-04 m-r-8 m-b-10'])}}
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
                        Profile
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
                        Profile
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

    @yield('content')

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
                        Any questions? Let us know  at admin@onlineweddingmart.com
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

     {!!Html::script('/vendor/jquery/jquery-3.2.1.min.js')!!}
      {!!Html::script('vendor/lazyload/jquery.lazyloadxt.min.js')!!}
{!!Html::script('/vendor/bootstrap/js/popper.js')!!}

  {!!Html::script('/vendor/bootstrap/js/bootstrap.min.js')!!}
  {!!Html::script('/vendor/animsition/js/animsition.min.js')!!}

<!--===============================================================================================-->
    {!!Html::script('/vendor/select2/select2.min.js')!!}
    {!!Html::script('/js/main.js')!!}
        <script>

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
    @yield('script')
        
</body>
</html>