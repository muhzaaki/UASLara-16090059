<!doctype html>
<html><head>

    <meta charset="utf-8">
    
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="Carlos Alvarez - Alvarez.is">

    <link rel="stylesheet" type="text/css" href="{{ asset('private/assets/backend/bootstrap/css/bootstrap.min.css') }}" />

    <link href="{{ asset('private/assets/backend/css/main.css') }}" rel="stylesheet">
    <link href="{{ asset('private/assets/backend/css/font-style.css') }}" rel="stylesheet">
    <link href="{{ asset('private/assets/backend/css/flexslider.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">
    <script type="text/javascript" src="{{ asset('private/assets/backend/js/jquery.js') }}"></script>    
    <script type="text/javascript" src="{{ asset('private/assets/backend/bootstrap/js/bootstrap.min.js') }}"></script>

	<script type="text/javascript" src="{{ asset('private/assets/backend/js/lineandbars.js') }}"></script>
    
	<script type="text/javascript" src="{{ asset('private/assets/backend/js/dash-charts.js') }}"></script>
	<script type="text/javascript" src="{{ asset('private/assets/backend/js/gauge.js') }}"></script>
	
	<!-- NOTY JAVASCRIPT -->
	<script type="text/javascript" src="{{ asset('private/assets/backend/js/noty/jquery.noty.js') }}"></script>
	<script type="text/javascript" src="{{ asset('private/assets/backend/js/noty/layouts/top.js') }}"></script>
	<script type="text/javascript" src="{{ asset('private/assets/backend/js/noty/layouts/topLeft.js') }}"></script>
	<script type="text/javascript" src="{{ asset('private/assets/backend/js/noty/layouts/topRight.js') }}"></script>
	<script type="text/javascript" src="{{ asset('private/assets/backend/js/noty/layouts/topCenter.js') }}"></script>
	
	<!-- You can add more layouts if you want -->
	<script type="text/javascript" src="{{ asset('private/assets/backend/js/noty/themes/default.js') }}"></script>
    <!-- <script type="text/javascript" src="assets/js/dash-noty.js"></script> This is a Noty bubble when you init the theme-->
	<script type="text/javascript" src="http://code.highcharts.com/highcharts.js"></script>
	<script src="{{ asset('private/assets/backend/s/jquery.flexslider.js') }}j" type="text/javascript"></script>

    <script type="text/javascript" src="{{ asset('private/assets/backend/js/admin.js') }}"></script>
      
    <style type="text/css">
      body {
        padding-top: 20px;
      }
      .navbar-nav {
	  background-color: #190061;
	  background-image: none;
	}
  
      .footer-distributed{
 
        box-shadow: 0 1px 1px 0 rgba(0, 0, 0, 0.12);
        box-sizing: border-box;
        width: 100%;
        text-align: left;
        font: normal 16px sans-serif;
      
       
        margin-top: 200px;
      }
      
      .footer-distributed .footer-left p{
        color:  #8f9296;
        font-size: 14px;
        margin: 0;
      }
      
      /* Footer links */
      
      .footer-distributed p.footer-links{
        font-size:18px;
        font-weight: bold;
        color:  #ffffff;
        margin: 0 0 10px;
        padding: 0;
      }
      
      .footer-distributed p.footer-links a{
        display:inline-block;
        line-height: 1.8;
        text-decoration: none;
        color:  inherit;
      }
      
      .footer-distributed .footer-right{
        float: right;
        margin-top: 6px;
        max-width: 180px;
      }
      
      .footer-distributed .footer-right a{
        display: inline-block;
        width: 35px;
        height: 35px;
        
        border-radius: 2px;
      
        font-size: 20px;
        color: #ffffff;
        text-align: center;
        line-height: 35px;
      
        margin-left: 3px;
      }
      
      /* If you don't want the footer to be responsive, remove these media queries */
      
      @media (max-width: 600px) {
      
        .footer-distributed .footer-left,
        .footer-distributed .footer-right{
          text-align: center;
        }
      
        .footer-distributed .footer-right{
          float: none;
          margin: 0 auto 20px;
        }
      
        .footer-distributed .footer-left p.footer-links{
          line-height: 1.8;
        }
      }
    </style>


    <!-- Le HTML5 shim, for IE6-8 support of HTML5 elements -->
    <!--[if lt IE 9]>
      <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->
    @yield('head')

  	<!-- Google Fonts call. Font Used Open Sans & Raleway -->
	<link href="http://fonts.googleapis.com/css?family=Raleway:400,300" rel="stylesheet" type="text/css">
    <link href="http://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet" type="text/css">
    <link rel="stylesheet" type="text/css" href="//cdn.datatables.net/1.10.12/css/jquery.dataTables.min.css">
    <script src="https://code.jquery.com/jquery-3.3.1.js"></script>
    <script type="text/javascript" src="{{ asset('private/assets/backend/js/datatables/jquery.dataTables.js') }}"></script>
    <script>
    $(document).ready(function() {
    $('#example').DataTable();
  
} );
    </script>
    </head>  
    <body>
    
          
            @yield('main')


  <footer   class="footer-distributed">

<div class="footer-right">


        <a href="https://web.facebook.com/mr.daa19"><i class="fab fa-facebook-f" aria-hidden="true"></i></a>
        <a href="https://www.instagram.com/mr.daa/" ><i class="fab fa-instagram" aria-hidden="true"></i></a>
        <a href="https://wa.me/6289644058987"><i class="fab fa-whatsapp" aria-hidden="true"></i></a>
        <a href="https://twitter.com/Mr_DAA" ><i class="fab fa-twitter" aria-hidden="true"></i></a>
</div>

<div class="footer-left">

      <p class="footer-links">
              <a href="#">Home</a>
              ·
              <a href="#">About Us</a>

      @php($ftr = DB::table('home')->get())
      @foreach ($ftr as $fttr)
        <p>&copy; {{$fttr->footer}} </p>
        @endforeach
        
</div>

</footer>
            
</body> 
    </html>