@extends('frontend/template')
@php
    use App\cat;
    use App\Post;
@endphp
@section('main')
<div>

<!-- section -->
<div class="section"  >
    <!-- container -->

        <!-- row -->
        <div class="row">
            <!-- Post content -->
            <div class="col-md-8">
                <div class="section-row sticky-container">
                        <div class="row">
                                <div class="col-md-10">
                                                    <div class="post-meta">
                                                            <a href="javascript:void(0)"  ><i style="font-size:40px;" class="fab fa-facebook"></i></a>
                                                            <a href="javascript:void(0)" ><i style="font-size:40px;" class="fab fa-telegram"></i></a>
                                                            <a href="#" ><i style="font-size:40px;" class="fab fa-twitter"></i></a>
                                                            <a href="#" ><i style="font-size:40px;" class="fab fa-whatsapp"></i></a>
                                                            <br>    
                                                    </div>
                                                <h1>{{"About Us"}}</h1>
                                                </div>
                                            </div>
                   
                            <br>
                    <div class="main-post">
                  <p>Nama : Zaki Yulianto</p>
                  <br>
                  <p>Kelas : 6A</p>
                  <br>
                  <p>Nim : 16090059</p>
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
       
                    @php($data = Post::orderBy('view','desc')->limit(2)->get())
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