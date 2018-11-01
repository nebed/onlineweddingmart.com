@extends('main')

@section('title', 'User Profile | OWM')

@section('content')

<section class="bg-img1 txt-center p-lr-15 p-tb-92" style="background-image: url('{{URL::asset('images/contact.jpg')}}');">
    @if($customer->wedding)
		<h2 class="ltext-105 cl0 txt-center">
			{{$customer->wedding->name}}
		</h2>
    <h4 class="mtext-105 cl0 txt-center">
      in {{$eta->format('%y').' years, '.$eta->format('%m').' months & '.$eta->format('%d').' days.'}}
    </h4>
    @endif

</section>

<div class="container-fluid mt-3 mb-3">

	<div class="col-md-12">
		<div class="row">
			<div class="col-md-3">
				<div class="card card-border-color">
                <div class="card-header mtext-104 bg1 cl0">Profile</div>
                <div class="card-body text-center mtext-104">
                 <table class="table table-sm table-striped">
                    <tbody>
                      <tr>
                        <td>
                      	<a href="#yourwedding">Your Wedding
                    	</a></td>
                      </tr>
                      <tr>
                        <td>
                      	<a href="#checklist">Checklist
                      	</a></td>
                      </tr>
                      <tr>
                      	<td>
                      	<a href="#shortlist">Shortlist
                      	</a></td>
                      </tr>
                      <tr>
                        <td>
                      	<a href="#finalized">Finalized
                    	</a></td>
                      </tr>
                      <tr>
                        <td>
                      	<a href="#reviews">Reviews
                    	</a></td>
                      </tr>
                    </tbody>
                  </table>
                </div>
              </div>
			</div>
			<div class="col-md-6">
				<!--Your Wedding -->
				<div id="yourwedding" class="card card-border-color">
	                <div class="card-header mtext-104 bg1 cl0">Your Wedding</div>
	                <div class="card-body">
	                	@if($customer->wedding)
	                  <p>Use the cheklist to help you plan. </p>
	                  <p>Pick a venue, and all the vendors you'll need.</p>
	                  	@endif
	                  	@if(!$customer->wedding)
	                  		{{Form::open(['route'=>'create.wedding', 'id'=>'createwedding'])}}
	                  		<div class="form-group">
                        	{{ Form::label('name', 'Wedding Name:', ['for'=>'name','class'=>''])}}
                        	{{Form::text('name', null, ['class'=>'form-control','type'=>'text', 'id'=>'wedding-name'])}}
                    		</div>
                    		<div class="form-group">
                        	{{ Form::label('date', 'Date of Wedding', ['for'=>'date','class'=>''])}}
                        	{{Form::text('date', null, ['class'=>'form-control','type'=>'text', 'id'=>'wedding-date','placeholder'=>'Ex: 2018-04-11'])}}
                    		</div>
                    		{{Form::submit('Create Wedding', ['class' => 'submit stext-101 cl0 btn bg1 bor1 hov-btn2 p-lr-15 trans-04'])}}
                    		{{Form::close()}}
	                  	@endif
	                </div>
                </div>

                <!--Checklist-->
                <div id="checklist" class="card card-border-color mt-3">
	                <div class="card-header mtext-104 bg1 cl0">Checklist</div>
	                <div class="card-body">
                    @if($customer->wedding)
                    @if($customer->wedding->checklist)
                    <div class="row">
                      @if(!$customer->wedding->checklist->venues)
  	                  <label class="custom-control custom-checkbox">
                            <input type="checkbox" class="form-control"><a href="/vendors/all/wedding-venue">Pick a Wedding Venue</a>
                      </label>
                      @endif
                    </div>
                    <div class="row">
                      @if(!$customer->wedding->checklist->decorator)
                      <label class="custom-control custom-checkbox">
                            <input type="checkbox" class="form-control"><a href="/vendors/all/wedding-decorators">Hire a decorator for the venue</a>
                      </label>
                      @endif
                    </div>
                    <div class="row">
                      @if(!$customer->wedding->checklist->gown)
                      <label class="custom-control custom-checkbox">
                            <input type="checkbox" class="form-control"><a href="/vendors/all/bridal-wears">Get a Bride Gown</a>
                      </label>
                      @endif
                    </div>
                    <div class="row">
                      @if(!$customer->wedding->checklist->makeup)
                      <label class="custom-control custom-checkbox">
                            <input type="checkbox" class="form-control"><a href="/vendors/all/bridal-makeup">Hire a Good MakeUp Artist</a>
                      </label>
                      @endif
                    </div>
                    <div class="row">
                      @if(!$customer->wedding->checklist->cake)
                      <label class="custom-control custom-checkbox">
                            <input type="checkbox" class="form-control"><a href="/vendors/all/wedding-cakes">Hire a Cake Artist</a>
                      </label>
                      @endif
                    </div>
                    <div class="row">
                      @if(!$customer->wedding->checklist->groom)
                      <label class="custom-control custom-checkbox">
                            <input type="checkbox" class="form-control"><a href="/vendors/all/groom-wears">Get your Groom Suit</a>
                      </label>
                      @endif
                    </div>
                    <div class="row">
                      @if(!$customer->wedding->checklist->traditional)
                      <label class="custom-control custom-checkbox">
                            <input type="checkbox" class="form-control"><a href="/vendors/all/traditional-wears">Get Traditional wears if necessary</a>
                      </label>
                      @endif
                    </div>
                    @endif
                    @endif
	                </div>
                </div>

                <!--Shortlist -->
                <div id="shortlist" class="card card-border-color mt-3">
	                <div class="card-header mtext-104 bg1 cl0">Shortlist</div>
	                <div class="card-body">
                      <ul>
                        @foreach($customer->shortlists as $shortlist)
                        @if(!$shortlist->finalized)
                        <li class="flex-w flex-t p-b-30">
                          <a href="/profile/{{$shortlist->vendor->slug}}" class="wrao-pic-w size-214 m-r-20">
                            <img src="{{URL::asset('images/'.$shortlist->vendor->image)}}" alt="PRODUCT">
                          </a>

                          <div class="size-215 flex-col-t p-t-8">
                            <a href="/profile/{{$shortlist->vendor->slug}}" class="stext-116 cl2 hov-cl1 trans-04">
                              {{$shortlist->vendor->brand_name}}
                            </a>
                            <span class="stext-105 cl2">
                            {{$shortlist->vendor->service->name}}
                            </span>
                            <p><span class="stext-105 cl2">
                            <i class="icon-filter cl2 m-r-6 fs-22 trans-04 zmdi zmdi-pin"></i>
                            {{$shortlist->vendor->location->name}}
                            </span>
                            <span vendorid="{{$shortlist->vendor->id}}" class="stext-105 cl2">
                            <button class="hov-btn2 bg1 btn cl0 finalize-vendor">Finalize</button>
                            </span>
                            </p>
                          </div>
                        </li>
                        @endif
                        @endforeach
                      </ul>
                    </div>
                </div>

                <!--Finalized-->
                <div id="finalized" class="card card-border-color mt-3">
	                <div class="card-header mtext-104 bg1 cl0">Finalized Vendors</div>
	                <div class="card-body">
	                  <ul>
                        @foreach($customer->shortlists as $shortlist)
                        @if($shortlist->finalized)
                        <li class="flex-w flex-t p-b-30">
                          <a href="/profile/{{$shortlist->vendor->slug}}" class="wrao-pic-w size-214 hov-ovelay1 m-r-20">
                            <img src="{{URL::asset('images/'.$shortlist->vendor->image)}}" alt="PRODUCT">
                          </a>

                          <div class="size-215 flex-col-t p-t-8">
                            <a href="/profile/{{$shortlist->vendor->slug}}" class="stext-116 cl8 hov-cl1 trans-04">
                              {{$shortlist->vendor->brand_name}}
                            </a>

                            <span class="stext-105 cl0">
                            <i class="icon-filter cl0 m-r-6 fs-22 trans-04 zmdi zmdi-pin"></i>
                            {{$shortlist->vendor->location->name}}
                            </span>
                          </div>
                        </li>
                        @endif
                        @endforeach
                      </ul>
	                </div>
                </div>

                <!--Reviews-->
                <div id="reviews" class="card card-border-color mt-3">
	                <div class="card-header mtext-104 bg1 cl0">Reviews</div>
	                <div class="card-body">
	                  @foreach($customer->reviews as $review)

                      <div class="flex-w flex-t p-b-4">
                      <div class="wrap-pic-s size-109 bor0 of-hidden m-r-18 m-t-6">
                        <img class="img-fluid" src="{{URL::asset('images/'.$review->vendor->image)}}" alt="AVATAR">
                      </div>

                      <div class="size-207">
                        <div class="flex-w flex-sb-m p-b-17">
                          <span class="mtext-107 cl2 p-r-20">
                           {{$review->vendor->brand_name}}
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

			</div>
			<div class="col-md-3">
				<div class="card card-border-color">
                <div class="card-header mtext-104 bg1 cl0">Contact OWM</div>
                <div class="card-body">
                  <p> Quisque gravida aliquam diam at cursus, quisque laoreet ac lectus a rhoncusac tempus odio. </p>
                  <p>Aliquam posuere volutpat turpis, ut euimod diam pellentesque at. Sed sit amet nulla a dui dignisim euismod. Morbi luctus elementum dictum. Donec convallis mattis elit id varius. Quisque facilisis sapien quis mauris, erat condimentum.</p>
                </div>
              </div>
			</div>
		</div>
	</div>
          
</div>

@endsection

@section('script')

@endsection