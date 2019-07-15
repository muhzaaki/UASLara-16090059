@extends('frontend/template')
@section('main')
    @php
        use App\article;
        use App\cat;
    @endphp

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
                            <h2>Search Result For : "{{ $p }}"</h2>
                            </div>
                        </div>
                        @foreach ($data as $item)
                            @if($item->kategori=="News")
                                @php($cat =3)
                            @else
                                @php($cat=4)
                            @endif
                        <!-- post -->
                        <div class="col-md-12">
                            <div class="post post-row">
                            <a class="post-img" href="article/{{$item->id}}"><img src="{{ asset('private/resources/images').'/'.$item->foto }}" alt=""></a>
                                <div class="post-body">
                                    <div class="post-meta">
                                    <a class="post-category cat-{{$cat}}" href="cat/{{$item->kategori}}">{{$item->kategori}}</a>
                                        <span class="post-date">{{$item->created_at->format('M d, Y')}}</span>
                                    </div>
                                <h3 class="post-title"><a href="article/{{$item->id}}">{{$item->judul}}</a></h3>
                                <p>{{ substr($item->preview,0,151).'.....'}}</p>
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
                    <div class="aside-widget text-center">
    
                    </div>
                    <!-- /ad -->
                    
                    <!-- catagories -->
                    <div class="aside-widget">
                        <div class="section-title">
                            <h2>Catagories</h2>
                        </div>
                        <div class="tags-widget">
                            <ul>
                    
                                    @php($categori = cat::all())
                                    @foreach ($categori as $items)
                                    @if ($items->nama_kategori = "News")
                                        @php($no =3)
                                    @else 
                                        @php($no=4)
                                    @endif
                                    
                                    <li style="margin:1px;"><a href="{{ url('cat'.'/'.$items->sub_kategori, []) }}" >{{$items->sub_kategori}}</a></li> 
                                    @endforeach
                            </ul>
                        </div>
                    </div>
                    <!-- /tags -->

                    <div class="col-md-12">
                            <!-- post widget -->
          
	<div class="aside-widget">	
            <div class="section-title">
                    <h2>Most Read</h2>
            </div>	
                @php($mostread = article::orderBy('view','desc')->take(3)->get())
                @foreach ($mostread as $item)
                    @if ($item->kategori=="News")
                        @php($cat=3)
                    @else 
                        @php($cat=4)
                    @endif    
                
            <!-- post -->
            <div class="col-md-12">
                <div class="post">
                    <div class="post-meta">
                    <a class="post-category cat-{{$cat}}" href="{{ url('cat'.'/'.$item->kategori, []) }}">{{$item->kategori}}</a>
                        <span class="post-date">{{$item->created_at->format('M d, Y')}}</span>
                    </div>
                    <a class="post-img" href="{{ url('article'.'/'.$item->id, []) }}"><img src="{{asset('private/resources/images').'/'.$item->foto}}" alt=""></a>
                    <div class="post-body">
            
                        <h3 class="post-title"><a href="{{ url('article'.'/'.$item->id, []) }}">{{$item->judul}}</a></h3>
                    </div>
                </div>
            </div>
            <!-- /post -->
           
        </div>
        @endforeach
            

                </div>
            </div>
            <!-- /row -->
        </div>
        <!-- /container -->
    </div>
    <!-- /section -->
@endsection
@section('footer')
    
@endsection

