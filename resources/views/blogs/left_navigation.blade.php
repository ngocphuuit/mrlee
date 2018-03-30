<style>
	.img-recent-post {
		min-height: 61px;
	}
</style>
<div class="col-xs-12 col-sm-4 col-md-3" style="margin-top: 15px">
	<aside class="aside-section">
		<div class="categories-wrapper">
			<div class="info-wrap">
				<h2>Dịch Vụ</h2>
			</div>
			<ul>
			    @foreach($categories as $category)
					<li>
						<a href="/category/{{$category->slug}}">{{$category->name}}</a>
					</li>
				@endforeach
			</ul>
		</div>
		<div class="categories-wrapper recent-post">
			<div class="info-wrap">
				<h2>Bài đăng gần nhất</h2>
			</div>
			@foreach($recent_blogs as $recent_blog)
				<div class="recent-post-wrapper">
					<figure>
						<a href="/blog/{{$recent_blog->id}}"><img src="/uploads/{{$recent_blog->image}}" alt="" class="img-recent-post"></a>
					</figure>
					<div class="recent-update">
						<span>{{$recent_blog->created_at->format('Y-m-D')}}</span>
						<h4><a href="/blog/<%= post.id %>">{{$recent_blog->title}}</a></h4>
					</div>
				</div>
			@endforeach
		</div>
		<div class="categories-wrapper tag">
			<div class="info-wrap">
				<h2>Thẻ</h2>
			</div>
			<ul class="activities clearfix">
				@foreach($categories as $category)
					<li>
						<a href="/category/{{$category->slug}}">{{$category->name}}</a>
					</li>
				@endforeach
			</ul>
		</div>
	</aside>
</div>