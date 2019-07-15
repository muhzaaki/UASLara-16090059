@extends('backend/template')

@section('head')
<style>
h4{
    color:white;
}
</style>
<script src="https://cdn.ckeditor.com/4.11.4/full/ckeditor.js"></script>

  
<script>
var d,h,m,s,animate;

function init(){
    d=new Date();
    h=d.getHours();
    m=d.getMinutes();
    s=d.getSeconds();
    clock();
};

function clock(){
    s++;
    if(s==60){
        s=0;
        m++;
        if(m==60){
            m=0;
            h++;
            if(h==24){
                h=0;
            }
        }
    }
    $('sec',s);
    $('min',m);
    $('hr',h);
    animate=setTimeout(clock,1000);
};

function $(id,val){
    if(val<10){
        val='0'+val;
    }
    document.getElementById(id).innerHTML=val;
};

window.onload=init;
</script>  
    
@endsection


@php
    use App\cat;
@endphp

  	<!-- NAVIGATION MENU -->

    <div  class="navbar-nav navbar-inverse navbar-fixed-top">
        <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          @php($hdr = DB::table('home')->get())
          @foreach ($hdr as $lgo)  
          <a class="navbar-brand" href="#"><img style="height:30px;width:50px" src="{{ asset('private/resources/images'.'/'.$lgo->logo) }}" alt=""></a>
          @endforeach 
        </div> 
          <div class="navbar-collapse collapse">
            <ul class="nav navbar-nav">
              <li><a href="{{ url('admin', []) }}"><i class="icon-home icon-white"></i> Home</a></li>                            
              <li><a href="{{ url('admin/article', []) }}"><i class="icon-th icon-white"></i> Article</a></li>
              <li><a href="{{ url('admin/cat', []) }}"><i class="icon-lock icon-white"></i> Category</a></li>
              <li class="active"><a href="#"><i class="icon-user icon-white"></i> New Category</a></li>
              <li ><a href="{{ url('logout', []) }}"><i class="icon-lock icon-white"></i> Logout</a></li>
  
            </ul>
          </div><!--/.nav-collapse -->
        </div>
    </div>
    @section('main')
    <div class="container">
            <div class="row">
      <!-- FIRST ROW OF BLOCKS -->     


<div class="col-lg-12">


<!--main content start-->
<section id="main-content">
        @if (session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif

    @if (session('error'))
        <div class="alert alert-success">
            {{ session('error') }}
        </div>
    @endif
    <section class="wrapper site-min-height">
    <div>
        <h4><i class="fa fa-angle-right"></i>Nama Kategori</h4>
        <div class="row mt">
            <div class="col-sm-12">
                    {!! Form::open(array('url' =>  url('admin/cat', [])   ,'method' => 'POST')) !!}
                    {{Form::text("Categori",
                                old("Categori") ? old("Categori") : (!empty($user) ? $user->judul : null),
                                [
                                    "class" => "form-group",
                                    "placeholder" => "Masukan Nama Kategori",
                                ])
                            }}
                     @if ($errors->has('Categori'))
                     <p class="text-danger">{{ $errors->first('Categori') }}</p>
                 @endif
            </div>
        </div>      
    </div>
    <br>
    <div>
        <h4><i class="fa fa-angle-right"></i>Sub Kategori</h4>
        <div class="row mt">
            <div class="col-sm-12">
                    {{Form::text("Tags",
                                old("Tags") ? old("Tags") : (!empty($user) ? $user->judul : null),
                                [
                                    "class" => "form-group",
                                    "placeholder" => "Masukan Sub Kategori",
                                ])
                            }}
                     @if ($errors->has('Tags'))
                     <p class="text-danger">{{ $errors->first('Tags') }}</p>
                 @endif
            </div>
        </div>      
    </div>      
    <br>
    <div>
        <div class="row mt">
            <div style="margin-left:10px;">
                    {{Form::submit('Submit Form',
                    [
                        "class" => "btn btn-success"
                    ])
                }}
            </div>
        </div>  
    </div>    
    {!! Form::close() !!}   
    </section><!--/wrapper -->
</section><!-- /MAIN CONTENT -->  

</div>
      <br>
     
    </div> <!-- /container -->
    </div>
    @endsection

  
