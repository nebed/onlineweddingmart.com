@extends('main')

@section('title', 'Reviews | OWM')

@section('content')
    <div class="container-fluid mt-3 mb-3">
     @include('partials.messages')
        <div class="col-md-9 mx-auto">
            <div class="row">
                <nav class="col-md-3 mb-3">
                    <div class="card text-white bg1">
                      <div class="card-header">
                        <h5><i class="zmdi zmdi-account"></i>   Profile</h5>
                      </div>
                      <div class="card-body text-left">
                       <div class="sidebar-sticky">
                        <ul class="nav flex-column">
                          <li class="nav-item">
                          <a style="color:#ffff;" class="nav-link active" href="{{route('vendor.profile')}}"><i class="zmdi zmdi-info"></i><strong class="card-text">    Business Profile</strong></a>
                          </li>
                           <li class="nav-item">
                        <a style="color:#ffff;" class="nav-link" href="{{route('vendor.projects')}}"><i class="zmdi zmdi-collection-image-o"></i><strong class="card-text">    Business Gallery</strong></a>
                        </li>
                        <li class="nav-item">
                        <a style="color:#ffff;" class="nav-link" href="{{route('vendor.reviews')}}"><i class="zmdi zmdi-star"></i><strong class="card-text">    Reviews</strong></a>
                        </li>
                        </ul>
                      </div>
                      </div>
                    </div>
                </nav>
                <main class="col-md-9">
                    <div class="card block">
                      <div class="card-header text-white bg1">
                       <h5>Reviews</h5>
                      </div>
                      <div class="card-body">
                        @foreach($vendor->reviews as $review)

                      <div class="flex-w flex-t p-b-4">
                      <div class="wrap-pic-s size-109 bor0 of-hidden m-r-18 m-t-6">
                        <img class="img-fluid" src="{{ "https://www.gravatar.com/avatar/" . md5(strtolower(trim($review->customer->email))). "?s=50&d=monsterid" }}" alt="AVATAR">
                      </div>

                      <div class="size-207">
                        <div class="flex-w flex-sb-m p-b-17">
                          <span class="mtext-107 cl2 p-r-20">
                           {{$review->customer->name}}
                          </span>

                          <span class="fs-18 cl11">
                            @for($i=0; $i<=$review->rating; $i++)
                              <i class="zmdi zmdi-star"></i>
                            @endfor
                          </span>
                        </div>

                        <p class="stext-102 cl6">
                          {{$review->comment}}
                        </p>
                      </div>
                    </div>
                    @endforeach
                      </div>
                    </div>
                </main>
            </div>
        </div>
       <!-- <div class="col-md-6 mx-auto">
            <div class="row">

            </div>
        </div> -->
    </div>
    @endsection