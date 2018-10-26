@extends('main')

@section('title','Vendor Profile | OWM')

@section('stylesheet')
<link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.css" media="screen">
<link rel="stylesheet" href="{{URL::asset('/css/photos.css')}}">
<meta name="csrf-token" content="{{ csrf_token() }}">
@endsection



@section('content')

	<div class="container-fluid mt-3 mb-3">

	<div class="col-md-12">
		<div class="row">
			<div class="col-md-9">
				<div class="card card-border-color">
                <div class="card-header mtext-104 bg1 cl0">{{$project->name}} Album</div>
                <div class="card-body text-center mtext-104">
                 	<div class="row">
                          @foreach($project->photos as $photo)
                          <div class="col-lg-3 col-md-4 col-xs-6 thumb">
                              <a href="{{$photo->path}}" class="fancybox" rel="ligthbox">
                                  <img  data-src="{{$photo->path}}" class="zoom img-fluid"  alt="">
                                 
                              </a>
                          </div>
                          @endforeach
                        </div>
                </div>
              </div>
			</div>
			
			<div class="col-md-3">
				<div class="card card-border-color">
                <div class="card-header mtext-104 bg1 cl0">Vendor</div>
                <div class="card-body">
                  <div class="block2">
						<div class="block2-pic hov-img0">
							<img data-src="{{URL::asset('/images/'.$project->vendor->image)}}" alt="IMG-PRODUCT">
						</div>
						<div class="block2-txt bg1 flex-w flex-t p-3">
							<div class="block2-txt-child1 flex-col-l ">
								<a vendorid="{{$project->vendor->id}}" href="/profile/{{$project->vendor->slug}}" class="stext-110 cl0 hov-cl2 trans-04 vendor-name p-b-6">
									{{$project->vendor->name}}
								</a>
								<span class="stext-105 cl0">
									<i class="icon-filter cl0 m-r-6 fs-22 trans-04 zmdi zmdi-pin"></i>
										{{$project->vendor->location->name}}
								</span>
							</div>
							<div class="block2-txt-child2 flex-col-r p-t-3">
								<h1 class="fs-20 cl0">
									<span class="badge bg11 badge-dark"><i class="zmdi zmdi-star"></i> {{!empty($project->vendor->reviews->average('rating')) ? round($project->vendor->reviews->average('rating'),1):"0.0"}}</span>
									</h1>
									<a href="#" class="btn-addwish-b2 dis-block pos-relative js-addwish-b2">
										<i class="icon-filter hov-cl2 cl0 m-r-6 fs-20 trans-04 zmdi zmdi-favorite"></i>
									</a>
							</div>
						</div>
					</div>
                </div>
              </div>
			</div>
		</div>
	</div>
          
</div>


@endsection

@section('script')
{{Html::script('/vendor/sweetalert/sweetalert.min.js')}}
    <script src="//cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.js"></script>
     <script>
      $(document).ready(function(){
        $(".fancybox").fancybox({
              openEffect: "none",
              closeEffect: "none"
          });
          
          $(".zoom").hover(function(){
          
          $(this).addClass('transition');
        }, function(){
              
          $(this).removeClass('transition');
        });
      });

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
    </script>
@endsection