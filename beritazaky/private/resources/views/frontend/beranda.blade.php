@extends('frontend/template')
@php
	use App\article;
	use App\homes;
@endphp
@section('main')
<div  style="top:-5%;position:relative;">
<div id="demo" class="carousel slide" data-ride="carousel">
		<!-- Indicators -->
		<ul class="carousel-indicators">
		  <li data-target="#demo" data-slide-to="0" class="active"></li>
		  <li data-target="#demo" data-slide-to="1"></li>
		  <li data-target="#demo" data-slide-to="2"></li>
		</ul>
		
		<!-- The slideshow -->
		<div class="carousel-inner">
		  <div class="carousel-item active">
				@php($home = homes::all()	)
				@foreach ($home as $hmsslider)
						
				
			<img src="{{asset('private/resources/images'.'/'.$hmsslider->slider1)}}" alt="Los Angeles" width="1100" height="500">
		  </div>
		  <div class="carousel-item">
			<img src="{{asset('private/resources/images').'/'.$hmsslider->slider2}}" alt="Chicago" width="1100" height="500">
		  </div>
		  <div class="carousel-item">
			<img src="{{asset('private/resources/images'.'/'.$hmsslider->slider3)}}" alt="New York" width="1100" height="500">
			</div>
		
			@endforeach
		</div>
		
		<!-- Left and right controls -->
		<a class="carousel-control-prev" href="#demo" data-slide="prev">
		  <span class="carousel-control-prev-icon"></span>
		</a>
		<a class="carousel-control-next" href="#demo" data-slide="next">
		  <span class="carousel-control-next-icon"></span>
		</a>
	  </div>
	</div>
<div class="container">

	{{-- main post --}}
<!-- section -->
<div class="section">
<!-- container -->
<div class="container">
<!-- row -->
<div class="row">
<div class="col-md-8">
	<div class="row">
		<div class="col-md-12">
			<div class="section-title">
				<h2>Recent Post</h2>
			</div>
		</div>
		@foreach ($data as $item)	
		@if($item->kategori=="News")
		@php($cat=3)
		@else
		@php($cat=4)							
		@endif
		<!-- post -->
		<div class="col-md-12">
			<div class="post post-row">
			<a class="post-img"  href="article/{{$item->id}}"><img style="height:200px;" src="{{ asset("private/resources/images").'/'.$item->foto }}" alt=""></a>
				<div class="post-body">
					<div class="post-meta">
					<a class="post-category cat-{{$cat}}" href="cat/{{$item->kategori}}">{{$item->kategori}}</a>
					<span class="post-date">{{$item->created_at->format('M d, Y')}}</span>
					</div>
				<h3 class="post-title"><a href="article/{{$item->id}}">{{strtoupper($item->judul)}}</a></h3>
				<p >{{ substr($item->preview,0,151)."....."}}</p>
				</div>
			</div>
		</div>
		<!-- /post -->
		@endforeach
		{{$data->links()}}
		
	</div>
</div>

<div class="col-md-4">
	<!-- ad -->

	<!-- /ad -->
	
	<!-- catagories -->
	<div class="aside-widget">	
		
	<div class="section-title">
			<h2>Most Read</h2>
	</div>	
	@foreach ($mostread as $item)
	@if($item->kategori=="News")
	@php($cat=3)
	@else
	@php($cat=4)							
	@endif
	<!-- post -->
	<div class="col-md-12">
		<div class="post">
			<div class="post-meta">
			<a class="post-category cat-{{$cat}}" href="cat/{{$item->kategori}}">{{$item->kategori}}</a>
				<span class="post-date">{{ ($item->created_at)->format('M d, Y') }}</span>
			</div>
		<a class="post-img" href="article/{{$item->id}}"><img style="height:200px" src="{{asset('private/resources/images').'/'.$item->foto}}" alt=""></a>
			<div class="post-body">
	
			<h3 class="post-title"><a href="article/{{$item->id}}">{{$item->judul}}</a></h3>
			</div>
		</div>
	</div>
	<!-- /post -->
	@endforeach
	
	</div>
	<!-- /catagories -->
	
		
		</div>
</div>
<!-- /row -->
</div>
<!-- /container -->
</div>
<!-- /section -->
</div>

				<hr>
				


@endsection

@section('footer')
	<div class="footer">
	<footer class="footer-text">
	<p>&copy;Copyright By<a href="" target="_blank"> Esportpedia Team</a></p>
	<p>Media & Broadcasting company established in 2019 from Indonesia.</p>
	</footer>
	<p>&copy; 2019 | Framework Programming Poltek Tegal </p>
	<div style="position:relative;bottom:100px;z-index:1;" class="w3-tooltip w3-right">
	<a class="w3-button w3-theme" href="#myPage"><span class="w3-xlarge">
	<i class="fa fa-chevron-circle-up"></i></span></a>
	</div>
	</div>
@endsection