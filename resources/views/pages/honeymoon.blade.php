@extends('main')

@section('title','HoneyMoon Packages | OWM')

@section('content')

	<!-- Title page -->
	<section class="bg-img1 txt-center p-lr-15 p-tb-92" style="background-image: url({{asset('images/'.'bg-02.jpg')}});">
		<h2 class="ltext-105 cl0 txt-center">
			All Posts
		</h2>
	</section>	

	<!-- Content page -->
	<section class="bg0 p-t-62 p-b-60">
		<div class="container">
			<div class="row">
				<div class="col-md-8 col-lg-9 p-b-80">
					<div class="p-r-45 p-r-0-lg">
						@foreach($posts as $post)
						<!-- item blog -->
						<div class="p-b-63">
							<a href="{{route('blog.single', $post->slug)}}" class="hov-img0 how-pos5-parent">
								<img data-src="{{asset('images/'.$post->image)}}" alt="IMG-BLOG">

								<div class="flex-col-c-m size-123 bg9 how-pos5">
									<span class="ltext-107 cl2 txt-center">
									{{date('j',strtotime($post->created_at))}}
									</span>

									<span class="stext-109 cl3 txt-center">
										{{date('M Y',strtotime($post->created_at))}}
									</span>
								</div>
							</a>

							<div class="p-t-32">
								<h4 class="p-b-15">
									<a href="{{route('blog.single', $post->slug)}}" class="ltext-108 cl2 hov-cl1 trans-04">
										{{$post->title}}
									</a>
								</h4>

								<p class="stext-117 cl6">
									{!!substr($post->body, 0,56)!!}{{strlen($post->body) >150 ? "..." : ""}}
								</p>

								<div class="flex-w flex-sb-m p-t-18">
									<span class="flex-w flex-m stext-111 cl2 p-r-30 m-tb-10">
										<span>
											<span class="cl4">By</span> Admin  
											<span class="cl12 m-l-4 m-r-6">|</span>
										</span>

										<span>
											{{$post->category->name}}  
											<span class="cl12 m-l-4 m-r-6">|</span>
										</span>

										<span>
											8 Comments
										</span>
									</span>

									<a href="{{route('blog.single', $post->slug)}}" class="stext-101 cl2 hov-cl1 trans-04 m-tb-10">
										Continue Reading

										<i class="fa fa-long-arrow-right m-l-9"></i>
									</a>
								</div>
							</div>
						</div>
						@endforeach

						

						<!-- Pagination -->
						<div class="flex-l-m flex-w w-full p-t-10 m-lr--7">
							{{$posts->links('vendor.pagination.owm')}}
						</div>
					</div>
				</div>

				<div class="col-md-4 col-lg-3 p-b-80">
					<div class="side-menu">
						<div class="bor17 of-hidden pos-relative">
							<input class="stext-103 cl2 plh4 size-116 p-l-28 p-r-55" type="text" name="search" placeholder="Search">

							<button class="flex-c-m size-122 ab-t-r fs-18 cl4 hov-cl1 trans-04">
								<i class="zmdi zmdi-search"></i>
							</button>
						</div>

						<div class="p-t-55">
							<h4 class="mtext-112 cl2 p-b-33">
								Categories
							</h4>

							<ul>
								@foreach($blogcategories as $category)
								<li class="bor18">
									<a href="/blog/category/{{$category->slug}}" class="dis-block stext-115 cl6 hov-cl1 trans-04 p-tb-8 p-lr-4">
										{{$category->name}}
									</a>
								</li>
								@endforeach
							</ul>
						</div>

						<div class="p-t-65">
							<h4 class="mtext-112 cl2 p-b-33">
								Featured Vendors
							</h4>

							<ul>
								@foreach($vendors as $vendor)
								<li class="flex-w flex-t p-b-30">
									<a href="/profile/{{$vendor->slug}}" class="wrao-pic-w size-214 hov-ovelay1 m-r-20">
										<img data-src="{{URL::asset('images/'.$vendor->image)}}" alt="PRODUCT">
									</a>

									<div class="size-215 flex-col-t p-t-8">
										<a href="/profile/{{$vendor->slug}}" class="stext-116 cl8 hov-cl1 trans-04">
											{{$vendor->brand_name}}
										</a>

										<span class="stext-105 cl0">
										<i class="icon-filter cl0 m-r-6 fs-22 trans-04 zmdi zmdi-pin"></i>
										{{$vendor->location->name}}
										</span>
									</div>
								</li>
								@endforeach
							</ul>
						</div>

						<div class="p-t-50">
							<h4 class="mtext-112 cl2 p-b-27">
								Tags
							</h4>

							<div class="flex-w m-r--5">
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
		</div>
	</section>	


@endsection