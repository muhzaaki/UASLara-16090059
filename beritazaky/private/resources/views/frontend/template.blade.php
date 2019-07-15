<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <link rel="stylesheet" href="{{ asset('private/assets/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{ asset('private/assets/css/style1.css')}}">
    <link rel="stylesheet" href="{{ asset('private/assets/css/main.css') }}">
    <link rel="stylesheet" href="{{ asset('private/assets/css/post.css') }}">
    <link rel="stylesheet" href="{{ asset('private/assets/css/util.css') }}">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">
    <script type="text/javascript" src="{{ asset('private/assets/js/test.js') }}"></script>
    <script type="text/javascript" src="{{ asset('private/assets/js/bootstrap.min.js')}}"> </script>
    <script type="text/javascript" src="{{ asset('private/assets/js/jquery_3_3_1.min.js')}}"></script>
    <script type="text/javascript" src="{{ asset('private/assets/js/hmtl5shiv.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('private/assets/js/respond.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('private/assets/js/main.js') }}"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
    <style>
		body{
	height: 100%;
	font-family: Montserrat-Regular, sans-serif;
  font-weight: 400;
  background-color: #5cdb95;
  /* #7FDBFF */
  font-size: 16px;
  font-weight: 300;
  color: black;
  margin: 0;
  padding: 0;
  overflow-x: hidden;
  
}
a{
	color: #05386B;	
	font-family: Helvatica;
}
    .footer-distributed{
	background-color: #292c2f;
	box-shadow: 0 1px 1px 0 rgba(0, 0, 0, 0.12);
	box-sizing: border-box;
	width: 100%;
	text-align: left;
	font: normal 16px sans-serif;

	padding: 45px 50px;
	margin-top: 80px;
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
	background-color:  #33383b;
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
</head>
<body>
    
        @include('frontend/navbar')
        @yield('main')
    
 

    @include('frontend/footer')



</body>
</html>