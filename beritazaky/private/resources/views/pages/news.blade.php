@extends('template')

@section('main')
<div class="vizew-breadcrumb">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="{{url('/')}}"><i class="fa fa-home" aria-hidden="true"></i> Home</a></li>
                            <li class="breadcrumb-item active" aria-current="page">News</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </div>
    <!-- ##### Breadcrumb Area End ##### -->
    <!-- ##### Archive List Posts Area Start ##### -->
    <div class="vizew-archive-list-posts-area mb-80">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-12 col-lg-8">
                        <!-- Archive Catagory & View Options -->
                        <div class="archive-catagory-view mb-50 d-flex align-items-center justify-content-between">
                            <!-- Catagory -->
                            {{-- <div class="archive-catagory">
                                <h4><i class="fa fa-newspaper-o" aria-hidden="true"></i> News </h4>
                            </div> --}}
                            <!-- View Options -->
                            <div class="view-options">
                                {{-- <a href="archive-grid.html"><i class="fa fa-th-large" aria-hidden="true"></i></a> --}}
                                <a href=""{{url('/games')}}"" class="active"><i class="" aria-hidden="true"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="section-title text-center">
                    <h2>Recent Posts</h2>
                </div>
            </div>

            <!-- post -->
            <div class="col-md-4">
                <div class="post">
                    <a class="post-img" href="blog-post.html"><img src="{{asset('private/resources/images/dota1.jpg')}}" alt=""></a>
                    <div class="post-body">
                        <div class="post-meta">
                            <a class="post-category cat-1" href="category.html">Web Design</a>
                            <span class="post-date">March 27, 2018</span>
                        </div>
                        <h3 class="post-title"><a href="blog-post.html">Pagedraw UI Builder Turns Your Website Design Mockup Into Code Automatically</a></h3>
                    </div>
                </div>
            </div>
            <!-- /post -->

            <!-- post -->
            <div class="col-md-4">
                <div class="post">
                    <a class="post-img" href="blog-post.html"><img src="{{asset('private/resources/images/dota1.jpg')}}" alt=""></a>
                    <div class="post-body">
                        <div class="post-meta">
                            <a class="post-category cat-2" href="category.html">JavaScript</a>
                            <span class="post-date">March 27, 2018</span>
                        </div>
                        <h3 class="post-title"><a href="blog-post.html">Chrome Extension Protects Against JavaScript-Based CPU Side-Channel Attacks</a></h3>
                    </div>
                </div>
            </div>
            <!-- /post -->

            <!-- post -->
            <div class="col-md-4">
                <div class="post">
                    <a class="post-img" href="blog-post.html"><img src="{{asset('private/resources/images/dota1.jpg')}}" alt=""></a>
                    <div class="post-body">
                        <div class="post-meta">
                            <a class="post-category cat-3" href="category.html">Jquery</a>
                            <span class="post-date">March 27, 2018</span>
                        </div>
                        <h3 class="post-title"><a href="blog-post.html">Ask HN: Does Anybody Still Use JQuery?</a></h3>
                    </div>
                </div>
            </div>
            <!-- /post -->

            <div class="clearfix visible-md visible-lg"></div>

            <!-- post -->
            <div class="col-md-4">
                <div class="post">
                    <a class="post-img" href="blog-post.html"><img src="{{asset('private/resources/images/dota1.jpg')}}" alt=""></a>
                    <div class="post-body">
                        <div class="post-meta">
                            <a class="post-category cat-2" href="category.html">JavaScript</a>
                            <span class="post-date">March 27, 2018</span>
                        </div>
                        <h3 class="post-title"><a href="blog-post.html">Why Node.js Is The Coolest Kid On The Backend Development Block!</a></h3>
                    </div>
                </div>
            </div>
            <!-- /post -->

            <!-- post -->
            <div class="col-md-4">
                <div class="post">
                    <a class="post-img" href="blog-post.html"><img src="{{asset('private/resources/images/dota1.jpg')}}" alt=""></a>
                    <div class="post-body">
                        <div class="post-meta">
                            <a class="post-category cat-4" href="category.html">Css</a>
                            <span class="post-date">March 27, 2018</span>
                        </div>
                        <h3 class="post-title"><a href="blog-post.html">CSS Float: A Tutorial</a></h3>
                    </div>
                </div>
            </div>
            <!-- /post -->

            <!-- post -->
            <div class="col-md-4">
                <div class="post">
                    <a class="post-img" href="blog-post.html"><img src="{{asset('private/resources/images/dota1.jpg')}}" alt=""></a>
                    <div class="post-body">
                        <div class="post-meta">
                            <a class="post-category cat-1" href="category.html">Web Design</a>
                            <span class="post-date">March 27, 2018</span>
                        </div>
                        <h3 class="post-title"><a href="blog-post.html">Tell-A-Tool: Guide To Web Design And Development Tools</a></h3>
                    </div>
                </div>
            </div>
            <!-- /post -->
        </div>
        <hr>
                    
@stop


@section('footer')
@stop