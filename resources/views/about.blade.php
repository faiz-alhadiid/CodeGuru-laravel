<!DOCTYPE HTML>
<html>
<head>
<title>Codeguru Interactive Learning | About</title>
<!-- Bootstrap -->
<link href="css/bootstrap.min.css" rel='stylesheet' type='text/css' />
<link href="css/bootstrap.css" rel='stylesheet' type='text/css' />
<meta name="viewport" content="width=device-width, initial-scale=1">
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
 <!--[if lt IE 9]>
     <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
     <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
<![endif]-->
<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
<!-- start plugins -->
<script type="text/javascript" src="js/jquery.min.js"></script>
<script type="text/javascript" src="js/bootstrap.js"></script>
<script type="text/javascript" src="js/bootstrap.min.js"></script>
<!----font-Awesome----->
   	<link rel="stylesheet" href="fonts/css/font-awesome.min.css">
<!----font-Awesome----->
</head>
<body>
<div class="header_bg1">
<div class="container">
	<div class="row header">
		<div class="logo navbar-left">
			<h1><a href="{{ url('/home') }}"><img class="kiri" src="images/logo-code.jpg"/></a></h1>
		</div>
		<div class="h_search navbar-right">
			<form>
				<input type="text" class="text" value="Enter text here" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Enter text here';}">
				<input type="submit" value="search">
			</form>
		</div>
		<div class="clearfix"></div>
	</div>
	<div class="row h_menu">
		<nav class="navbar navbar-default navbar-left" role="navigation">
		    <!-- Brand and toggle get grouped for better mobile display -->
		    <div class="navbar-header">
		      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
		        <span class="sr-only">Toggle navigation</span>
		        <span class="icon-bar"></span>
		        <span class="icon-bar"></span>
		        <span class="icon-bar"></span>
		      </button>
		    </div>
		    <!-- Collect the nav links, forms, and other content for toggling -->
		    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
		      <ul class="nav navbar-nav">
		        <li><a href="{{ url('/home') }}">Home</a></li>
		        <li><a href="{{ url('/courses') }}">Courses</a></li>
		        <li><a href="http://judgement.bccfilkomub.top">Exercises</a></li>
		        <li  class="active"><a href="{{ url('/about') }}">About</a></li>
		        <li><a href="{{ url('/blog') }}">Blog</a></li>
		        <li><a href="{{ url('/contact') }}">Contact</a></li>
		      </ul>
		    </div><!-- /.navbar-collapse -->
		    <!-- start soc_icons -->
		</nav>
		<div class="soc_icons navbar-right">
			<ul class="nav navbar-nav">
			@if (Auth::guest())
				<li><a href="{{ url('/register') }}">Sign Up</a></li>
				<li><a href="{{ url('/login') }}">Sign In</a></li>
			@else
				<li><a href="#">{{ Auth::user()->name }}</a></li>
				<li><a href="{{ route('logout') }}"onclick="event.preventDefault();
                document.getElementById('logout-form').submit();">Sign Out</a>
 				<form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                {{ csrf_field() }}</form>
                </li>
            @endif                
			</ul>	
		</div>
	</div>
	<div class="clearfix"></div>
</div>
</div>
<div class="main_bg"><!-- start main -->
	<div class="container">
		<div class="about row">
		<h2>about us</h2>
		<div class="main row">
			<div class="col-md-6 content_left">
				<img src="images/logo-code.jpg" alt="" class="img-responsive">
			</div>
			<div class="col-md-6 content_right">
				<h4><span>CODEGURU</span></h4>
				<p class="para">CodeGuru adalah Web untuk belajar bahasa Pemrograman. Projek ini dikerjakan oleh mahasiswa Fakultas Ilmu Komputer Universitas Brawijaya. Untuk sementara ini, Web ini masih dalam tahap rintisan. </p>
			</div>
		</div>

		</div>
	</div>
</div><!-- end main -->
<div class="main_btm"><!-- start main_btm -->
	<div class="container">
	</div>
</div>
<div class="footer_bg"><!-- start footer -->
	<div class="container">
		<div class="row  footer">
			<div class="copy text-center">
				<p class="link"><span>&#169; All rights reserved | Design by CODEGURU</a></span></p>
			</div>
		</div>
	</div>
</div>
</body>
</html>