@extends('frontend/template')
@php
    use App\cat;
@endphp
@section('main')
<div>
    @if(!$item==null)
<!-- section -->
<div class="section"  >
    <!-- container -->
    @if($item->kategori=="News")
        @php($cat=3)
    @else
        @php($cat=4)
    @endif
        <!-- row -->
        <div class="row">
            <!-- Post content -->
            <div class="col-md-8">
                <div class="section-row sticky-container">
                        <div class="row">
                                <div class="col-md-10">
                                    <div class="post-meta">
                                            <a href="javascript:void(0)" onclick="genericSocialShare('http://www.facebook.com/sharer.php?u=[http://localhost/uselesstv/article/{{$item->id}}]')" ><i style="font-size:40px;" class="fab fa-facebook"></i></a>
                                            <a href="javascript:void(0)" ><i style="font-size:40px;" class="fab fa-telegram"></i></a>
                                            <a href="#" ><i style="font-size:40px;" class="fab fa-twitter"></i></a>
                                            <a href="#" ><i style="font-size:40px;" class="fab fa-whatsapp"></i></a>
                                            <br>
                                    <a class="post-category cat-{{$cat}}" href="{{ url('cat'.'/'.$item->kategori, []) }}">{{$item->kategori}}</a>
                                        <span class="post-date">{{$item->created_at->format('M d, Y')}}</span>
                                   
                                    </div>
                                <h1>{{$item->judul}}</h1>
                                </div>
                            </div>
   
                    <div class="main-post">
                        {!! $item->isi !!}
                   </div>
                   
                </div>

                <!-- ad -->

                <!-- ad -->
                                    
            </div>
            <!-- /Post content -->
           
            <!-- aside -->
            <div class="col-md-4">
                <!-- ad -->
            
                <!-- /ad -->
               
                <!-- catagories -->
                <div class="aside-widget">
                    <div class="section-title"><h2>Categories</h2></div>
                    <div class="tags-widget">
                        <ul>
                                @php($categori = cat::all())
                                @foreach ($categori as $items)
                                @if ($items->nama_kategori = "News")
                                    @php($no =3)
                                @else 
                                    @php($no=4)
                                @endif
                                
                                <li style="margin:1px;"><a href="{{ url('cat', [$items->sub_kategori]) }}" >{{$items->sub_kategori}}</a></li> 
                                @endforeach
                        </ul>
                    </div>
                </div>
                <!-- /tags -->
                
            <!-- post widget -->
            <div class="aside-widget">
                    <div class="section-title">
                    <h2>Most Read</h2>
                    </div>
                        @foreach ($data as $item)
                            
                        
                    <div class="post post-widget">
                    <a class="post-img" href="{{ url('article'.'/'.$item->id, []) }}"><img src="{{ asset('private/resources/images').'/'.$item->foto }}" alt=""></a>
                        <div class="post-body">
                        <h3 class="post-title"><a href="{{ url('article', [$item->id]) }}">{{$item->judul}}</a></h3>
                        </div>
                    </div>
                    @endforeach           
             </div>
            <!-- /aside -->
            
        </div>
        <!-- /row -->
      
</div>
<!-- /section -->


</div>       

@else
@include('error.404')
@endif
@endsection
@section('footer')
<p>&copy; 2019 | Framework Programming Poltek Tegal </p>

<script type="text/javascript">
    function genericSocialShare(url){
        window.open(url,'sharer','toolbar=0,status=0,width=648,height=395');
        return true;
    }
    </script>
@endsection