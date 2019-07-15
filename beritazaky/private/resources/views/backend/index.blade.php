@extends('backend/template')

@section('head')
  <!-- DATA TABLE CSS -->
  <link href="{{ asset('private/assets/backend/css/table.css') }}" rel="stylesheet">

  <script type="text/javascript" src="{{ asset('private/assets/backend/js/jquery.js') }}"></script>    
  <script type="text/javascript" src="{{ asset('private/assets/backend/bootstrap/js/bootstrap.min.js') }}"></script>

  <script type="text/javascript" src="{{ asset('private/assets/backend/js/admin.js') }}"></script>


  <!-- Le HTML5 shim, for IE6-8 support of HTML5 elements -->
  <!--[if lt IE 9]>
    <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
  <![endif]-->
      
    <!-- Google Fonts call. Font Used Open Sans -->
    <link href="http://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet" type="text/css">

  <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
    <!-- DataTables Initialization -->

<style>
h4{
    color:white;
}
</style>
<script src="https://cdn.ckeditor.com/4.11.4/full/ckeditor.js"></script>

    
@endsection


@php
    use App\logs;
    use App\homes;
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
              <li ><a href="{{ url('logout', []) }}"><i class="icon-lock icon-white"></i> Logout</a></li>
  
            </ul>
          </div><!--/.nav-collapse -->
        </div>
    </div>
    @section('main')
    <div class="container">
@php($home = homes::whereId(1)->get())

      

            <!-- CONTENT -->
          <div class="row">
              <div class="col-sm-12">
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
            <h4 style="color:white;"><strong>Home Settings</strong></h4>
            <section class="wrapper site-min-height">
                  <div>
                      <div>
                          <h4><i class="fa fa-angle-right"></i>Footer</h4>
                          
                          <div class="row mt">
                              <div class="col-sm-5">
                               
                                    @foreach ($home as $homes)
                                      {!! Form::open(array('url' =>  url('admin/home', [$homes->id]),'method' => 'POST','enctype'=>'multipart/form-data')) !!}
                                      @method('PUT')
                                      {{Form::text("Footer",
                                                  old("Footer") ? old("Footer") : (!empty($user) ? $home->footer : $homes->footer ),
                                                  [
                                                      "class" => "form-group",
                                                      "placeholder" => "Masukan Footer",
                                                  ])
                                              }}
                                       @if ($errors->has('Footer'))
                                       <p class="text-danger">{{ $errors->first('Footer') }}</p>
                                   @endif
                              </div>
                          </div>      
                      </div>
                      <br>
                      <div>
                         
                          <div class="row mt">
                              <div class="col-sm-5">
                                    <h4><i class="fa fa-angle-right"></i>Jumlah Post Tampil</h4>
                                  {!! Form::number('numbering', $homes->numbering,
                                   [ 'class' => 'form-group',
                                   "placeholder" => "jumlah numbering"
                                   ]) 
                                   !!}
                                       @if ($errors->has('numbering'))
                                       <p class="text-danger">{{ $errors->first('numbering') }}</p>
                                   @endif
                              </div>
                              <div class="col-sm-4">
                                    <h4><i class="fa fa-angle-right"></i>Jumlah Mostread Tampil</h4>
                                {!! Form::number('mostread', $homes->mostread,
                                 [ 'class' => 'form-group',
                                 "placeholder" => "jumlah mostread"
                                 ]) 
                                 !!}
                                     @if ($errors->has('mostread'))
                                     <p class="text-danger">{{ $errors->first('mostread') }}</p>
                                 @endif
                            </div>
                          </div>      
                      </div>       
                        <br>
                      <div>
                          <div class="row mt">
                              <div class="col-sm-5">
                                    <h4><i class="fa fa-angle-right"></i>Logo</h4>
                                    <img style="width:200px; height:200px" src="{{ asset('private/resources/images'.'/'.$homes->logo) }}" alt="">
                                  {{Form::file("logo",
                                  [
                                      "class" => "btn btn-success"
                                  ])
                              }}
                                       @if ($errors->has('logo'))
                                       <p class="text-danger">{{ $errors->first('logo') }}</p>
                                   @endif
                              </div>
                              <div class="col-sm-4">
                                    <h4><i class="fa fa-angle-right"></i>slider1 (Recommend pixel : 1920 x 520 )</h4>
                                    <img style="width:450px; height:200px" src="{{ asset('private/resources/images'.'/'.$homes->slider1) }}" alt="">
                                  {{Form::file("slider1",
                                  [
                                      "class" => "btn btn-danger",
                                   
                                  ])
                              }}
                                       @if ($errors->has('slider1'))
                                       <p class="text-danger">{{ $errors->first('slider1') }}</p>
                                   @endif
                              </div>
                          </div>      
                      </div>           
                      <br>
                      <div>
                          
                          <div class="row mt">
                              <div class="col-sm-5">
                                    <h4><i class="fa fa-angle-right"></i>slider2 (Recommend pixel : 1920 x 520 )</h4>
                                    <img style="width:450px; height:200px" src="{{ asset('private/resources/images'.'/'.$homes->slider2) }}" alt="">
                                  {{Form::file("slider2",
                                  [
                                      "class" => "btn btn-danger"
                                  ])
                              }}
  
                                       @if ($errors->has('slider2'))
                                       <p class="text-danger">{{ $errors->first('slider2') }}</p>
                                   @endif
                              </div>
                              <div class="col-sm-4">
                                    <h4><i class="fa fa-angle-right"></i>slider3 (Recommend pixel : 1920 x 520 )</h4>
                                    <img style="width:450px; height:200px" src="{{ asset('private/resources/images'.'/'.$homes->slider3) }}" alt="">
                                {{Form::file("slider3",
                                [
                                    "class" => "btn btn-danger"
                                ])
                            }}

                                     @if ($errors->has('slider3'))
                                     <p class="text-danger">{{ $errors->first('slider3') }}</p>
                                 @endif
                            </div>
                          </div>      
                      </div>      
                      <br>
                      <div>
                      
                        <div class="row mt">

                        </div>      
                    </div>      
                    <br>
                      <div>
                          <div class="row mt">
                              <div style="margin-left:10px;">
                                      {{Form::submit('Save Changes',
                                      [
                                          "class" => "btn btn-success"
                                      ])
                                  }}
                                  @endforeach
                              </div>
                          </div>  
                      </div>    
                      {!! Form::close() !!} 
                  </div>

<hr>
              <h4 style="color:white;"><strong>Data Table Logs</strong></h4>
              <table class="table table-striped table-bordered" id="example">
              <thead>
                <tr>
                  <th>ID</th>
                  <th>Action</th>
                  <th>Time</th>
                </tr>
              </thead>
              <tbody>
                @php($i = 1)
                @php($data = logs::orderBy('id','desc')->get())
                @foreach ($data as $item)
                <tr class="odd gradeX">
                    <td class="center"> {{$i}}</td>
                    @php($i = $i + 1)
                  <td>{{$item->isi}}</td>
                  <td>{{$item->created_at->format('M d, Y')}}</td>
                </tr>
                @endforeach
              </tbody>
            </table><!--/END SECOND TABLE -->
            <br>
            <br>
          </div><!--/span12 -->
          
          @endsection
            </div><!-- /row -->
           </div> <!-- /container -->
              <br>	
      
            
                <br>
        <!-- FOOTER -->	
      
                    </div><!-- /row -->
                </div><!-- /container -->	
             
          </div><!-- /footerwrap -->
   
   
   </div>

