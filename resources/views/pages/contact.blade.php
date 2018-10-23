@extends('main')

@section('title', 'Contact Us | OWM')

@section('content')
    <!-- Title page -->
    <section class="bg-img1 txt-center p-lr-15 p-tb-92" style="background-image: url('images/contact.jpg');">
        <h2 class="ltext-105 cl0 txt-center">
            Contact
        </h2>
    </section>  


    <!-- Content page -->
    <section class="bg0 p-t-104 p-b-116">
        <div class="container">
            <div class="flex-w flex-tr">
                <div class="size-210 bor10 p-lr-70 p-t-55 p-b-70 p-lr-15-lg w-full-md">
                    @if (session('status'))
                        <div class="alert alert-success alert-dismissable">
                            {{ session('status') }}
                        </div>
                    @endif
                    {!!Form::open()!!}
                        <h4 class="mtext-105 cl2 txt-center p-b-30">
                            Send Us A Message
                        </h4>
                        <div class="bor8 m-b-20 how-pos4-parent {{ $errors->has('email') ? ' has-error' : '' }}">
                            {{Form::email('email',null,['class'=>'stext-111 cl2 plh3 size-116 p-l-62 p-r-30','placeholder'=>'Your Email Address*','required'=>''])}}
                            <img class="how-pos4 pointer-none" src="images/icons/icon-email.png" alt="ICON">
                            <input name="website" type="text" class="website stext-111 cl2 plh3 size-116 p-l-62 p-r-30"/>
                            @if ($errors->has('email'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                        </div>
                        <div class="bor8 m-b-20 {{ $errors->has('subject') ? ' has-error' : '' }}">
                            {{Form::text('subject',null,['class'=>'stext-111 cl2 plh3 size-116 p-lr-28','placeholder'=>'Subject*','required'=>''])}}
                            @if ($errors->has('subject'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('subject') }}</strong>
                                    </span>
                                @endif
                        </div>
                        <div class="bor8 m-b-30 {{ $errors->has('message') ? ' has-error' : '' }}">
                            {{Form::textarea('message',null,['class'=>'stext-111 cl2 plh3 size-120 p-lr-28 p-tb-25','placeholder'=>'Tell Us Anything','required'=>''])}}
                            @if ($errors->has('message'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('message') }}</strong>
                                    </span>
                                @endif
                        </div>
                            {{Form::submit('Send Message',['class'=>'flex-c-m stext-101 cl0 size-121 bg1 bor1 hov-btn2 p-lr-15 trans-04 pointer'])}}
                    {!!Form::close()!!}
                </div>

                <div class="size-210 bor10 flex-w flex-col-m p-lr-93 p-tb-30 p-lr-15-lg w-full-md">
                    <div class="flex-w w-full p-b-42">
                        <span class="fs-18 cl5 txt-center size-211">
                            <span class="lnr lnr-map-marker"></span>
                        </span>

                        <div class="size-212 p-t-2">
                            <span class="mtext-110 cl2">
                                OnlineWeddingMart
                            </span>

                            <p class="stext-115 cl6 size-213 p-t-18">
                               Weddings Made Easy
                            </p>
                        </div>
                    </div>

                    <div class="flex-w w-full">
                        <span class="fs-18 cl5 txt-center size-211">
                            <span class="lnr lnr-envelope"></span>
                        </span>

                        <div class="size-212 p-t-2">
                            <span class="mtext-110 cl2">
                                Enquiries
                            </span>

                            <p class="stext-115 cl1 size-213 p-t-18">
                                admin@onlineweddingmart.com
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>  
    
    
    <!-- Map -->
    <div class="map">
        <div class="size-303" id="google_map" data-map-x="40.691446" data-map-y="-73.886787" data-pin="images/icons/pin.png" data-scrollwhell="0" data-draggable="1" data-zoom="11"></div>
    </div>

    @endsection
