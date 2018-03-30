@extends('layouts.app')
@section('content')
	<style>
		body {
			background: beige;
		}
		.top-area {
			height: 100px !important;
		}
		.previous_page, .active span, .next_page, .read-more-btn, .pagination a {
			margin-right: 10px;
		    border-radius: 0px;
		    font-size: 16px;
		    font-family: "Roboto", serif;
		    padding: 6px 12px;
		    margin-left: -1px;
		    line-height: 1.42857143;
		}
		.previous_page, .next_page, .read-more-btn, .pagination a {
			border: 1px solid #e08e79;
			color: #e08e79;
		}
		.pagination a:hover {
			background-color: antiquewhite;
		}
		.disabled span, .active span {
		    border: 1px solid darkgray !important;
		    color: darkgray !important;
		}
	</style>
	<section class="blog">
	<div class="parallax-window blog" data-parallax="scroll" data-image-src="http://theemon.com/f/forever/Livepreview/wedding/assets/images/blog-banner.jpg">
		<section class="banner">
			<div class="banner-content-wrapper">
				<h1>Blog</h1>
			</div>
		</section>
	</div>
	<div id="content">
		<!-- blog section start here -->
		<div class="blog-page-content">
			<div class="container">
				<div class="row" style="background-color: lightyellow">
					<div class="col-xs-12 col-sm-8  col-md-9 pad-right" style="margin-top: 15px; border-right: 1px solid lightgray;">
					    @foreach ($blogs as $blog)
							<article class="blog-post-wrapper padding">
								<figure><img src="/uploads/{{$blog->image}}" alt="">
								</figure>
								<div class="post-blog">
									<span class="timing-blog"><i class="fa fa-calendar"> </i> <span> {{$blog->created_at->format('Y-m-D')}} </span>
									<h2><a href="#">{{$blog->title}}</a></h2>
									<p>
										{{$blog->description}}
									</p>
									<a href="/blogs/{{$blog->id}}" class="btn btn-default read-more-btn"> READ MORE <i class="fa fa-angle-right"></i></a>
								</div>
							</article>
					    @endforeach
						<div class="next-prev-class">
							{{ $blogs->links() }}
						</div>
					</div>
					@include('blogs.left_navigation')
				</div>
			</div>
		</div>
		<!-- blog section end here -->
	</div>
	</section>
@endsection