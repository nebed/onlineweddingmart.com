@extends('main')

@section('title','Vendor Profile | OWM')

@section('stylesheet')
	<meta name="csrf-token" content="{{ csrf_token() }}">
@endsection

@section('content')

	<!-- breadcrumb -->
	<div class="container">
		<div class="bread-crumb flex-w p-l-25 p-r-15 p-t-30 p-lr-0-lg">
			<a href="/vendors/all" class="stext-109 cl8 hov-cl1 trans-04">
				Vendors
				<i class="fa fa-angle-right m-l-9 m-r-10" aria-hidden="true"></i>
			</a>

			<a href="/vendors/all/{{$profile->service->slug}}" class="stext-109 cl8 hov-cl1 trans-04">
				{{$profile->service->name}}
				<i class="fa fa-angle-right m-l-9 m-r-10" aria-hidden="true"></i>
			</a>

			<span class="stext-109 cl4">
				{{$profile->name}}
			</span>
		</div>
	</div>
		

	<!-- Product Detail -->
	<section class="sec-product-detail bg0 p-t-65 p-b-60">
		<div class="container">
			<div class="row">
				<div class="col-md-6 col-lg-7 p-b-30">
					<div class="p-l-25 p-r-30 p-lr-0-lg">
						<div class="wrap-slick3 flex-sb flex-w">
							<div class="wrap-slick3-arrows flex-sb-m flex-w"></div>

							<div class="slick3 gallery-lb">
									<div class="wrap-pic-w pos-relative">
										<img data-src="{{URL::asset('/images/'.$profile->image)}}" alt="IMG-PRODUCT">
									</div>
							</div>
						</div>
					</div>
				</div>
					
				<div class="col-md-6 col-lg-5 p-b-30">
					<div class="p-r-50 p-t-5 p-lr-0-lg">
						<h4 vendorid="{{$profile->id}}" id="vendor" class="mtext-105 cl2 js-name-detail p-b-14">
							{{$profile->name}}
						</h4>

						<span class="mtext-114 cl2">
							<i class="icon-filter m-r-6 fs-22 trans-04 zmdi zmdi-pin"></i>
							{{$profile->location->name}}
						</span>

						<h1 class="ltext-103 cl0">
							<span class="badge bg11 badge-dark"><i class="zmdi zmdi-star"></i> {{!empty($profile->reviews->average('rating')) ? round($profile->reviews->average('rating'),1):"0.0"}}</span>
						</h1>
						<p class="stext-102">{{$profile->reviews->count()}} Reviews</p>


						
						<!--  -->
						<div class="p-t-20">
							<div class="flex-w p-b-10 fs-35 cl13">
								<i class="fa fa-phone" aria-hidden="true"> {{$profile->contact_number}}</i>
							</div>

							<div class="flex-w p-b-10">
								<a href="{{$profile->instagram_url}}" target="_blank" class="flex-c-m stext-101 cl0 size-101 bg1 bor1 hov-btn2 p-lr-15 trans-04">View on Instagram</a>
							</div>

							<div class="flex-w p-b-10">
								<div class="size-204 flex-w flex-m respon6-next">
									<button class="flex-c-m stext-101 cl0 size-101 bg1 bor1 hov-btn2 p-lr-15 trans-04 js-addwish-detail">
										Shortlist
									</button>
								</div>
							</div>	
						</div>

						<!--  -->
						<div class="flex-w flex-m p-l-100 p-t-20 respon7">
							<div class="flex-m bor9 p-r-10 m-r-11">
								<a href="#" class="fs-14 cl3 hov-cl1 trans-04 lh-10 p-lr-5 p-tb-2 js-addwish-detail tooltip100" data-tooltip="Add to Wishlist">
									<i class="zmdi zmdi-favorite"></i>
								</a>
							</div>

							<a href="{{$profile->facebook_url}}" class="fs-14 cl3 hov-cl1 trans-04 lh-10 p-lr-5 p-tb-2 m-r-8 tooltip100" data-tooltip="Facebook">
								<i class="fa fa-facebook"></i>
							</a>

							<a href="{{$profile->instagram_url}}" class="fs-14 cl3 hov-cl1 trans-04 lh-10 p-lr-5 p-tb-2 m-r-8 tooltip100" data-tooltip="Instagram">
								<i class="fa fa-instagram"></i>
							</a>
						</div>
					</div>
				</div>
			</div>

			<div class="bor10 m-t-50 p-t-20 p-b-40">
				<!-- Tab01 -->
				<div class="tab01">
					<!-- Nav tabs -->
					<ul class="nav nav-tabs" role="tablist">
						<li class="nav-item p-b-10">
							<a class="nav-link active" data-toggle="tab" href="#description" role="tab">Description</a>
						</li>

						<li class="nav-item p-b-10">
							<a class="nav-link" data-toggle="tab" href="#information" role="tab">Portfolio Albums ({{$profile->projects->count()}})</a>
						</li>

						<li class="nav-item p-b-10">
							<a class="nav-link" data-toggle="tab" href="#reviews" role="tab">Reviews ({{$profile->reviews->count()}})</a>
						</li>
					</ul>

					<!-- Tab panes -->
					<div class="tab-content p-t-43">
						<!-- - -->
						<div class="tab-pane fade show active" id="description" role="tabpanel">
							<div class="how-pos2 p-lr-15-md">
								<p class="stext-102 cl6">
									{{$profile->additional_info}}
								</p>
							</div>
						</div>

						<!-- - -->
						<div class="tab-pane fade" id="information" role="tabpanel">
							<div class="tz-gallery">

						        <div class="row">

						        	@foreach($profile->projects as $project)

						            <div class="col-sm-6 col-md-4">
						                <div class="thumbnail">
						                	<figure class="figure">
						                    <a class="lightbox" href="{{route('project.view', $project->slug)}}">
						                        <img src="{{ $project->first_image }}" alt="{{$project->name}}">
						                    </a>
						                	</figure>
						                    <div class="caption">
						                        <h5 class="mtext-104 cl2">{{$project->name}}</h5>
						                    </div>
						                </div>
						            </div>
						            @endforeach
						        </div>

						    </div>
						</div>

						<!-- - -->
						<div class="tab-pane fade" id="reviews" role="tabpanel">
							<div class="row">
								<div class="col-sm-10 col-md-8 col-lg-6 m-lr-auto">
									<div class="p-b-30 m-lr-15-sm">

										@foreach($profile->reviews as $review)
										<!-- Review -->
										<div class="flex-w flex-t p-b-68">
											<div class="wrap-pic-s size-109 bor0 of-hidden m-r-18 m-t-6">
												<img data-src="{{ "https://www.gravatar.com/avatar/" . md5(strtolower(trim($review->customer->email))). "?s=50&d=monsterid" }}" alt="AVATAR">
											</div>

											<div class="size-207">
												<div class="flex-w flex-sb-m p-b-17">
													<span class="mtext-107 cl2 p-r-20">
														{{$review->customer->name}}
													</span>

													<span class="fs-18 cl11">
														@for ($i = 0; $i <= $review->rating; $i++)
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


										
										<!-- Add review -->
										<form id="addreview" class="w-full" action="{{route('add.review')}}" method='POST' >
											{{csrf_field()}}
											<h5 class="mtext-108 cl2 p-b-7">
												Add a review
											</h5>

											<p class="stext-102 cl6">
												Your email address will not be published. Required fields are marked *
											</p>

											<div class="flex-w flex-m p-t-50 p-b-23">
												<span class="stext-102 cl3 m-r-16">
													Your Rating
												</span>
												<input type="hidden" name="vendor_id" value="{{$profile->id}}">

												<span class="wrap-rating fs-18 cl11 pointer">
													<i class="item-rating pointer zmdi zmdi-star-outline"></i>
													<i class="item-rating pointer zmdi zmdi-star-outline"></i>
													<i class="item-rating pointer zmdi zmdi-star-outline"></i>
													<i class="item-rating pointer zmdi zmdi-star-outline"></i>
													<i class="item-rating pointer zmdi zmdi-star-outline"></i>
													<input class="dis-none" type="number" name="rating">
												</span>
											</div>

											<div class="row p-b-25">
												<div class="col-12 p-b-5">
													<label class="stext-102 cl3" for="review">Your review</label>
													<textarea class="size-110 bor8 stext-102 cl2 p-lr-20 p-tb-10" id="review" name="comment"></textarea>
												</div>
											</div>

											<button class="flex-c-m stext-101 cl0 size-112 bg1 bor11 hov-btn1 p-lr-15 trans-04 m-b-10">
												Submit
											</button>
										</form>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>

		<div class="bg6 flex-c-m flex-w size-302 m-t-73 p-tb-15">
			<span class="stext-107 cl6 p-lr-25">
				{{$profile->service->name}}
			</span>
		</div>
	</section>


	<!-- Related Products -->
	<section class="sec-relate-product bg0 p-t-45 p-b-105">
		<div class="container">
			<div class="p-b-45">
				<h3 class="ltext-106 cl5 txt-center">
					Browse Similar Vendors
				</h3>
			</div>

			<!-- Slide2 -->
			<div class="wrap-slick2">
				<div class="slick2">
					@foreach($similarvendors as $similarvendor)
					<div class="item-slick2 p-l-15 p-r-15 p-t-15 p-b-15">
						<!-- Block2 -->
						<div class="block2">
							<div class="block2-pic hov-img0">
								<img data-src="{{URL::asset('images/'.$similarvendor->image)}}" alt="Vendor-image">
							</div>

							<div class="block2-txt bg1 flex-w flex-t p-3 p-t-14">
								<div class="block2-txt-child1 flex-col-l ">
									<a href="/profile/{{$similarvendor->slug}}" class="stext-110 cl0 hov-cl2 trans-04 vendor-name p-b-6">
										{{$similarvendor->name}}
									</a>

									<span class="stext-105 cl0">
										<i class="icon-filter cl0 m-r-6 fs-15 trans-04 zmdi zmdi-pin"></i>
										{{$similarvendor->location->name}}
									</span>
								</div>

								<div class="block2-txt-child2 flex-r p-t-3">
									<a href="#" class="btn-addwish-b2 stext-110 dis-block pos-relative js-addwish-b2">
										<i class="icon-filter tsize1 hov-cl2 cl0 m-r-6 fs-15 trans-04 zmdi zmdi-favorite"></i>
									</a>
								</div>
							</div>
						</div>
					</div>
					@endforeach
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>

@endsection

@section('script')
	<script>
		$(".js-select2").each(function(){
			$(this).select2({
				minimumResultsForSearch: 20,
				dropdownParent: $(this).next('.dropDownSelect2')
			});
		})
	</script>
<!--===============================================================================================-->
{!!Html::script('/vendor/daterangepicker/moment.min.js')!!}
{!!Html::script('/vendor/daterangepicker/daterangepicker.js')!!}
{!!Html::script('/vendor/slick/slick.min.js')!!}
{!!Html::script('/js/slick-vendor.js')!!}
{{Html::script('/vendor/parallax100/parallax100.js')}}

	<script>
        $('.parallax100').parallax100();
	</script>
<!--===============================================================================================-->
{{Html::script('/vendor/MagnificPopup/jquery.magnific-popup.min.js')}}
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
<!--===============================================================================================-->
        {{Html::script('/vendor/isotope/isotope.pkgd.min.js')}}
        {{Html::script('/vendor/sweetalert/sweetalert.min.js')}}
	<script>
		$('.js-addwish-b2, .js-addwish-detail, .shortlistvendor').on('click', function(e){
			e.preventDefault();
		});

		$('.js-addwish-detail').each(function(){

			$(this).on('click', function(){
				var nameProduct = $(this).parent().parent().parent().find('.js-name-detail').html();
				var vendorId = $(this).parent().parent().parent().parent().find('.js-name-detail').attr('vendorid');
				$.ajaxSetup({
			    headers: {
    			'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
  					}
				});
			   $.ajax({
			       type: "POST",
			       url: '/user/shortlist/create',
			       data: { vendor_id:vendorId },
			       success: function( data ) {
			       		var nameProduct = $('#vendor').html();
			           swal(nameProduct, "has been shortlisted !", "success");
			       },
			       error: function() {
			       		var nameProduct = $('#vendor').html();
			          swal(nameProduct, "was not shortlisted, you need to be signed in!", "error");
			       }
			   });
				$(this).addClass('js-addedwish-detail');
				$(this).off('click');
			});
		});

		$('#addreview').on('submit', function(e) {
       e.preventDefault(); 
       $.ajaxSetup({
        header:$('meta[name="_token"]').attr('content')
    	});
       $.ajax({
           type: "POST",
           url: '/user/addreview',
           data: $(this).serialize(),
           success: function( data ) {
               swal('', "Your review has been added !", "success");
           },
	       error: function() {
	          swal('', "Your review couldn't be added, Are you signed in?", "error");
	       }
       	});
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
{{Html::script('/vendor/perfect-scrollbar/perfect-scrollbar.min.js')}}
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
@endsection