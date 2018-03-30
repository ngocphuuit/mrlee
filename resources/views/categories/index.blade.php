@extends('layouts.app')
@section('content')
<link rel="stylesheet" type="text/css" href="/css/demo.css" />
<link rel="stylesheet" type="text/css" href="/css/component.css" />
<style>
	body {
		background: beige;
	}

	.top-area {
		height: 100px !important;
	}

	.list-image {
		display: -webkit-box;
		width: 92%;
	    margin: 30px auto;
	    padding: 25px;
	    min-height: 400px;
	    height: auto;
	}

	.polaroid-images {
	    margin: 10px 0;
	    float: left;
	}

	.polaroid-images a
	{
		width: 17% !important;
		background: white;
		display: inline;
		float: left;
		margin: 0 15px 30px;
		padding: 10px 10px 25px;
		text-align: center;
		text-decoration: none;
		-webkit-box-shadow: 0 4px 6px rgba(0, 0, 0, .3);
		-moz-box-shadow: 0 4px 6px rgba(0,0,0,.3);
		box-shadow: 0 4px 6px rgba(0,0,0,.3);
		-webkit-transition: all .15s linear;
		-moz-transition: all .15s linear;
		transition: all .15s linear;
		z-index:0;
        position:relative;
	}

	.polaroid-images a:after {
		color: #333;
		font-size: 20px;
		content: attr(title);
		position: relative;
		top:15px;
	}

	.polaroid-images img { 
		display: block;
		width: 100%;
		height: auto;
		max-height: 300px;
	}

	.polaroid-images a:nth-child(2n)
	{
		-webkit-transform: rotate(4deg);  
		-moz-transform: rotate(4deg); 
		transform: rotate(4deg); 
	}
	.polaroid-images a:nth-child(3n) { 
		-webkit-transform: rotate(-24deg);  
		-moz-transform: rotate(-24deg); 
		transform: rotate(-24deg); 
	}
	.polaroid-images a:nth-child(4n)
	{
		-webkit-transform: rotate(14deg);  
		-moz-transform: rotate(14deg); 
		transform: rotate(14deg); 
	}
	.polaroid-images a:nth-child(5n)
	{
		-webkit-transform: rotate(-18deg);  
		-moz-transform: rotate(-18deg); 
		transform: rotate(-18deg); 
	}

	.polaroid-images a:hover{
		-webkit-transform: rotate(0deg); 
		-moz-transform: rotate(0deg);
        transform: rotate(0deg);
		-webkit-transform: scale(1.2); 
		-moz-transform: scale(1.2);
        transform: scale(1.2);
		z-index:10;
		-webkit-box-shadow: 0 10px 20px rgba(0, 0, 0, .7);
		-moz-box-shadow: 0 10px 20px rgba(0,0,0,.7);
        box-shadow: 0 10px 20px rgba(0,0,0,.7);
	}
</style>
<section class="grid-wrap">
		{{ Breadcrumbs::render('categories') }}
		<ul class="grid swipe-down" id="grid" style="min-height: calc(100vh);">
			@foreach($albums as $album)
				<li>
					<a href="/category/{{$album->category->slug}}/albums/{{$album->id}}">
						<img src="/uploads/{{$album->image}}" alt="dummy">
						<h3>{{$album->title}}</h3>
					</a>
				</li>
			@endforeach
		</ul>
<script>
	new GridScrollFx( document.getElementById( 'grid' ), {
		viewportFactor : 0.4
	} );
</script>
</section>
@endsection
