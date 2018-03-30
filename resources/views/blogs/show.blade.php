@extends('layouts.app')
@section('content')
	<style>
		body {
			background: beige;
		}
		.top-area {
			height: 100px !important;
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
					<div class="col-xs-12 col-sm-8 col-md-9" style="margin-top: 15px; border-right: 1px solid lightgray;">
						<article class="blog-post-wrapper padding">
							<figure><img src="/uploads/{{$blog->image}}" alt="">
							</figure>
							<div class="post-blog blog-single-quotes">
								<span class="timing-blog"><i class="fa fa-calendar"> </i> <span> {{$blog->created_at->format('Y-m-D')}} </span>
								<h2><a>{{$blog->title}}</a></h2>
								<p>
									{!!html_entity_decode($blog->content)!!}
								</p>
							</div>
						</article>
					</div>
					@include('blogs.left_navigation')
				</div>
			</div>
		</div>
		<!-- blog section end here -->
	</div>
	</section>
@endsection
