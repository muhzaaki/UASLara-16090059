@php
use Illuminate\Support\Facades\DB;
@endphp
<!-- Header -->
<header class="header1">
<!-- Header desktop -->
<div class="container-menu-header">
<div class="wrap_header">
    <!-- Logo -->
    @php($homeslogopc = DB::table('home')->get())
    @foreach ($homeslogopc as $hmslogopc)
        
   
    <a href="" class="logo">
        <img src="{{asset('private/resources/images/'.'/'.$hmslogopc->logo)}}" alt="IMG-LOGO" >
    </a>
    @endforeach
    <!-- Menu -->
    <div class="wrap_menu">
        <nav class="menu">
            <ul class="main_menu">
                <li>
                    <a href="{{url('/')}}">Home</a>
                </li>
                @php($cats = DB::table('categories')->select('nama_kategori')->distinct()->get())
              
                @foreach ($cats as $item)   
                <li>
                <a href="#">{{ ucfirst(trans($item->nama_kategori)) }}</a>
                    <ul class="sub_menu"> 
                        @php($subcats = DB::table('categories')->select('sub_kategori')->where('nama_kategori','=',$item->nama_kategori)
                        ->get())
                        @foreach ($subcats as $sub)                 
                            <li><a href="{{ url('cat'.'/'.$sub->sub_kategori, []) }}">{{ ucfirst(trans($sub->sub_kategori))}}</a></li>                                      
                        @endforeach                 
                    </ul>
                </li>
                @endforeach

                <li>
                    <a href="{{url('/about')}}">About Us</a>
                </li>
            </ul>
        </nav>
    </div>
    

    <!-- Header Icon -->
    <div class="header-icons">
        <button  class="searchlogo" id="searchIcon" onclick="openForm()"> <i class="fas fa-search"></i></button>
        
            <div class="form-popup" id="myForm">
                    {!! Form::open(array('url' =>  url('/search', [])   ,'method' => 'POST')) !!}
                    {{Form::text("search",
                                old("search") ? old("search") : (!empty($user) ? $user->search : null),
                                [
                                    "id" => "inputSearch",
                                    "placeholder" => "  find something  ",
                                ])
                            }}
                
                {{ Form::button('<i class="fa fa-search"></i>', ['type' => 'submit', 'class' => 'btn'] )  }}
 
                <button type="button" class="btn cancel" onclick="closeForm()"><i class="fas fa-times"></i> </button>
                {!! Form::close() !!}  

            </div>

    </div>
</div>
</header>

<!-- Header Mobile -->
<div class="wrap_header_mobile">
        <!-- Logo moblie -->
        @php($homeslogo = DB::table('home')->get() )
        @foreach ($homeslogo as $hmslg)
            
        
        <a href="index.html" class="logo-mobile">
            <img src="{{asset('private/resources/images'.'/'.$hmslg->logo)}}" alt="IMG-LOGO"  >
        </a>
        @endforeach
        <!-- Button show menu -->
        <div class="btn-show-menu">
            <!-- Header Icon mobile -->
            <div class="header-icons-mobile">

            <button id="menuMobile" onclick="popupMobile()" class="buttonMobile"> <i class="fa fa-bars "></i></button>
            <button id="ClosemenuMobile" onclick="closeMobile()" class="closeButtonMobile"> <i class="fa fa-times "></i></button> 
            
            </div>
        </div>
</div>


<!-- Menu Mobile -->
<div class="wrap-side-menu" id="wrap-side-menu" >
    <nav class="side-menu">
        <ul class="main-menu">
                @php($cats = DB::table('categories')->select('sub_kategori')->distinct()->get())
            <li class="item-menu-mobile">
                <a href="{{ url('/', []) }}">Home</a>   
                @foreach ($cats as $item)   
                <a href="{{ url('cat'.'/'.$item->sub_kategori, []) }}">{{ ucfirst(trans($item->sub_kategori)) }}</a>
                @endforeach    
                <a href="{{ url('about', []) }}">About Us</a>
            </li>
            <li class="item-menu-mobile">
              
                        <a href="https://web.facebook.com/mr.daa19"><i class="fab fa-facebook-f" aria-hidden="true"></i></a>
                        <a href="https://www.instagram.com/mr.daa/" ><i class="fab fa-instagram" aria-hidden="true"></i></a>
                        <a href="https://wa.me/6289644058987"><i class="fab fa-whatsapp" aria-hidden="true"></i></a>
                        <a href="mailto:dwi.aji.a@gmail.com?subject=About Your Web" ><i class="fas fa-envelope" aria-hidden="true"></i></a>
                        <a href="https://twitter.com/Mr_DAA" ><i class="fab fa-twitter" aria-hidden="true"></i></a>
             </li>
             <br>
        </ul>
    </nav>
</div>


