@extends('main')

@section('title','Vendors | OWM')

@section('stylesheet')
	<meta name="csrf-token" content="{{ csrf_token() }}">
@endsection

@section('content')
	<!-- Product -->
	<div class="bg0 m-t-23 p-b-140">
		<div class="container">
			<div class="flex-w flex-sb-m p-b-52">
				<div class="flex-w flex-l-m filter-tope-group m-tb-10">
					<a href="/vendors/all" class="stext-106 cl6 hov1 bor3 trans-04 m-r-32 m-tb-5 {{ Request::is('vendors/all') ? "how-active1" : "" }}" >
						All Vendors
					</a>
                    @foreach($servicesmenu as $service)
					<a href="/vendors/all/{{$service->slug}}" class="stext-106 cl6 hov1 bor3 trans-04 m-r-32 m-tb-5 {{ Request::is('vendors/all/$service->slug') ? "how-active1" : "" }}" >
						{{$service->name}}
					</a>
                    @endforeach
				</div>

				<div class="flex-w flex-c-m m-tb-10">
					<div class="flex-c-m stext-106 cl6 size-104 bor4 pointer hov-btn3 trans-04 m-r-8 m-tb-4 js-show-filter">
						<i class="icon-filter cl2 m-r-6 fs-15 trans-04 zmdi zmdi-filter-list"></i>
						<i class="icon-close-filter cl2 m-r-6 fs-15 trans-04 zmdi zmdi-close dis-none"></i>
						 Filter
					</div>

					<div class="flex-c-m stext-106 cl6 size-105 bor4 pointer hov-btn3 trans-04 m-tb-4 js-show-search">
						<i class="icon-search cl2 m-r-6 fs-15 trans-04 zmdi zmdi-search"></i>
						<i class="icon-close-search cl2 m-r-6 fs-15 trans-04 zmdi zmdi-close dis-none"></i>
						Search
					</div>
				</div>
				
				<!-- Search product -->
				<div class="dis-none panel-search w-full p-t-10 p-b-15">
					<div class="bor8 dis-flex p-l-15">
						<button class="size-113 flex-c-m fs-16 cl2 hov-cl1 trans-04">
							<i class="zmdi zmdi-search"></i>
						</button>

						<input class="mtext-107 cl2 size-114 plh2 p-r-15" type="text" name="search-product" placeholder="Search">
					</div>	
				</div>

				<!-- Filter -->
				<div class="dis-none panel-filter w-full p-t-10">
					<div class="wrap-filter flex-w bg6 w-full p-lr-40 p-t-27 p-lr-15-sm">
						<div class="filter-col1 p-r-15 p-b-27">
							<div class="mtext-102 cl2 p-b-15">
								Sort By
							</div>

							<ul>
								<li class="p-b-6">
									<a href="#" class="filter-link stext-106 trans-04">
										Default
									</a>
								</li>

								<li class="p-b-6">
									<a href="#" class="filter-link stext-106 trans-04">
										Popularity
									</a>
								</li>

								<li class="p-b-6">
									<a href="#" class="filter-link stext-106 trans-04">
										Average rating
									</a>
								</li>

								<li class="p-b-6">
									<a href="#" class="filter-link stext-106 trans-04 filter-link-active">
										Newness
									</a>
								</li>

								<li class="p-b-6">
									<a href="#" class="filter-link stext-106 trans-04">
										Price: Low to High
									</a>
								</li>

								<li class="p-b-6">
									<a href="#" class="filter-link stext-106 trans-04">
										Price: High to Low
									</a>
								</li>
							</ul>
						</div>

						<div class="filter-col2 p-r-15 p-b-27">
							<div class="mtext-102 cl2 p-b-15">
								Price
							</div>

							<ul>
								<li class="p-b-6">
									<a href="#" class="filter-link stext-106 trans-04 filter-link-active">
										All
									</a>
								</li>

								<li class="p-b-6">
									<a href="#" class="filter-link stext-106 trans-04">
										$0.00 - $50.00
									</a>
								</li>

								<li class="p-b-6">
									<a href="#" class="filter-link stext-106 trans-04">
										$50.00 - $100.00
									</a>
								</li>

								<li class="p-b-6">
									<a href="#" class="filter-link stext-106 trans-04">
										$100.00 - $150.00
									</a>
								</li>

								<li class="p-b-6">
									<a href="#" class="filter-link stext-106 trans-04">
										$150.00 - $200.00
									</a>
								</li>

								<li class="p-b-6">
									<a href="#" class="filter-link stext-106 trans-04">
										$200.00+
									</a>
								</li>
							</ul>
						</div>

						<div class="filter-col3 p-r-15 p-b-27">
							<div class="mtext-102 cl2 p-b-15">
								Color
							</div>

							<ul>
								<li class="p-b-6">
									<span class="fs-15 lh-12 m-r-6" style="color: #222;">
										<i class="zmdi zmdi-circle"></i>
									</span>

									<a href="#" class="filter-link stext-106 trans-04">
										Black
									</a>
								</li>

								<li class="p-b-6">
									<span class="fs-15 lh-12 m-r-6" style="color: #4272d7;">
										<i class="zmdi zmdi-circle"></i>
									</span>

									<a href="#" class="filter-link stext-106 trans-04 filter-link-active">
										Blue
									</a>
								</li>

								<li class="p-b-6">
									<span class="fs-15 lh-12 m-r-6" style="color: #b3b3b3;">
										<i class="zmdi zmdi-circle"></i>
									</span>

									<a href="#" class="filter-link stext-106 trans-04">
										Grey
									</a>
								</li>

								<li class="p-b-6">
									<span class="fs-15 lh-12 m-r-6" style="color: #00ad5f;">
										<i class="zmdi zmdi-circle"></i>
									</span>

									<a href="#" class="filter-link stext-106 trans-04">
										Green
									</a>
								</li>

								<li class="p-b-6">
									<span class="fs-15 lh-12 m-r-6" style="color: #fa4251;">
										<i class="zmdi zmdi-circle"></i>
									</span>

									<a href="#" class="filter-link stext-106 trans-04">
										Red
									</a>
								</li>

								<li class="p-b-6">
									<span class="fs-15 lh-12 m-r-6" style="color: #aaa;">
										<i class="zmdi zmdi-circle-o"></i>
									</span>

									<a href="#" class="filter-link stext-106 trans-04">
										White
									</a>
								</li>
							</ul>
						</div>

						<div class="filter-col4 p-b-27">
							<div class="mtext-102 cl2 p-b-15">
								Tags
							</div>

							<div class="flex-w p-t-4 m-r--5">
								<a href="#" class="flex-c-m stext-107 cl6 size-301 bor7 p-lr-15 hov-tag1 trans-04 m-r-5 m-b-5">
									Fashion
								</a>

								<a href="#" class="flex-c-m stext-107 cl6 size-301 bor7 p-lr-15 hov-tag1 trans-04 m-r-5 m-b-5">
									Lifestyle
								</a>

								<a href="#" class="flex-c-m stext-107 cl6 size-301 bor7 p-lr-15 hov-tag1 trans-04 m-r-5 m-b-5">
									Denim
								</a>

								<a href="#" class="flex-c-m stext-107 cl6 size-301 bor7 p-lr-15 hov-tag1 trans-04 m-r-5 m-b-5">
									Streetstyle
								</a>

								<a href="#" class="flex-c-m stext-107 cl6 size-301 bor7 p-lr-15 hov-tag1 trans-04 m-r-5 m-b-5">
									Crafts
								</a>
							</div>
						</div>
					</div>
				</div>
			</div>

			<section class="sec-product bg0 p-t-10 p-b-35">
        <div class="container">
              <!-- Tab panes -->
              @foreach($services as $service)
              <p class="text-left mtext-104">
              	{{$service->name}}
              </p>
               <p class="text-right mtext-104"><a href="/vendors/all/{{$service->slug}}">View More </a><i class="fa fa-angle-right fs-16" aria-hidden="true"></i></p>
                <div class="tab-content p-t-9">
                    <!-- - -->
                    <div class="tab-pane fade show active" id="best-seller" role="tabpanel">
                        <!-- Slide2 -->
                        <div class="wrap-slick2">
                            <div class="slick2">
                                @foreach($service->vendorspreview as $vendor)
                                <div class="item-slick2 col-sm-6 col-md-3 p-b-40">
                                    <!-- Block2 -->
                                    <div class="block2">
                                       <div class="block2-pic hov-img0">
								<img data-src="{{URL::asset('/images/'.$vendor->image)}}" alt="IMG-PRODUCT">
							</div>
							<div class="block2-txt bg1 flex-w flex-t p-3">
								<div class="block2-txt-child1 flex-col-l ">
									<a vendorid="{{$vendor->id}}" href="/profile/{{$vendor->slug}}" class="stext-110 cl0 hov-cl2 trans-04 vendor-name p-b-6">
										{{$vendor->brand_name}}
									</a>
									<span class="stext-105 cl0">
										<i class="icon-filter cl0 m-r-6 fs-22 trans-04 zmdi zmdi-pin"></i>
										{{$vendor->location->name}}
									</span>
								</div>
								<div class="block2-txt-child2 flex-col-r p-t-3">
									<h1 class="fs-20 cl0">
									<span class="badge bg11 badge-dark"><i class="zmdi zmdi-star"></i> {{!empty($vendor->reviews->average('rating')) ? round($vendor->reviews->average('rating'),1):"0.0"}}</span>
									</h1>
									<a href="#" class="btn-addwish-b2 dis-block p-t-2 pos-relative js-addwish-b2">
										<i class="icon-filter hov-cl2 cl0 m-r-6 fs-20 trans-04 zmdi zmdi-favorite"></i>
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
        @endforeach
        <div class="flex-c-m flex-w w-full p-t-45 p-b-20">
				<a href="#" class="flex-c-m stext-101 cl0 size-126 bg1 bor1 hov-btn2 p-lr-15 trans-04">
					Load More
				</a>
			</div>
    </section>

		</div>
	</div>
		
	<!-- Back to top -->
	<div class="btn-back-to-top" id="myBtn">
		<span class="symbol-btn-back-to-top">
			<i class="zmdi zmdi-chevron-up"></i>
		</span>
	</div>

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
		$('.js-addwish-b2, .js-addwish-detail').on('click', function(e){
			e.preventDefault();
		});

		$('.js-addwish-b2').each(function(){
			$(this).on('click', function(){
				var nameProduct = $(this).parent().parent().find('.vendor-name').html();
			    var vendorId = $(this).parent().parent().parent().parent().find('.vendor-name').attr('vendorid');
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
			           swal('The Vendor', "has been added to your shortlist !", "success");
			       },
			       error: function() {
			          swal('The Vendor', "was not shortlisted, you need to be signed in!", "error");
			       }
			   });

				$(this).addClass('js-addedwish-b2');
				$(this).off('click');
			});
		});

		$('.js-addwish-detail').each(function(){
			var nameProduct = $(this).parent().parent().parent().find('.js-name-detail').html();

			$(this).on('click', function(){
				swal(nameProduct, "has been shortlisted !", "success");

				$(this).addClass('js-addedwish-detail');
				$(this).off('click');
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