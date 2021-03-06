<!DOCTYPE HTML>
<html>
<head>
<title>Codeguru Interactive Learning</title>
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
<!-- start slider -->
<link href="css/slider.css" rel="stylesheet" type="text/css" media="all" />
<script type="text/javascript" src="js/modernizr.custom.28468.js"></script>
<script type="text/javascript" src="js/jquery.cslider.js"></script>
	<script type="text/javascript">
			$(function() {

				$('#da-slider').cslider({
					autoplay : true,
					bgincrement : 450
				});

			});
		</script>
<!-- Owl Carousel Assets -->
<link href="css/owl.carousel.css" rel="stylesheet">
<script src="js/owl.carousel.js"></script>
		<script>
			$(document).ready(function() {

				$("#owl-demo").owlCarousel({
					items : 4,
					lazyLoad : true,
					autoPlay : true,
					navigation : true,
					navigationText : ["", ""],
					rewindNav : false,
					scrollPerPage : false,
					pagination : false,
					paginationNumbers : false,
				});

			});
		</script>
		<!-- //Owl Carousel Assets -->
<!--font-Awesome----->
   	<link rel="stylesheet" href="fonts/css/font-awesome.min.css">
<!--font-Awesome-->
</head>


<body>
<div class="header_bg">
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
</div>
</div>
<div class="container">
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
                <li><a href="https://judgement.bccfilkomub.top/">Excercises</a></li>
                <li><a href="{{ url('/about') }}">About</a></li>
                <li><a href="{{ url('/blog') }}">Blog</a></li>
                <li><a href="{{ url('/contact') }}">Contact</a></li>
              </ul>
            </div><!-- /.navbar-collapse -->
		    <!-- start soc_icons -->
		</nav>
		<div class="soc_icons navbar-right">
            <ul class="nav navbar-nav">
            @if (Route::has('login'))
            @if (Auth::check())
                <li><a href="#">{{ Auth::user()->name }}</a></li>
                <li><a href="{{ route('logout') }}"onclick="event.preventDefault();
                document.getElementById('logout-form').submit();">Sign Out</a>
                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                {{ csrf_field() }}</form>
                </li>
            @else   
                <li><a href="{{ url('/register') }}">Sign Up</a></li>
                <li><a href="{{ url('/login') }}">Sign In</a></li>
            @endif
            @endif  
            </ul>   
        </div>
	</div>
</div>
<div class="main_bg"><!-- start main -->
	<div class="container">
		<div class="about details row">
			<h2>Pengenalan Pemrograman Java</h2>
			<!--<img src="images/det_pic.jpg" alt="" class="img-responsive"/>-->
			<h4>Apa itu Java?</h4>
			<p class="para">Java adalah bahasa pemrograman berorientasi objek murni yang dibuat berdasarkan kemampuan-kemampuan terbaik bahasa pemrograman objek sebelumnya (C++, Ada, Simula). Java diciptakan oleh James Gosling, developer dari Sun Microsystems pada tahun 1991.</p>
			<h4>Karakteristik Java antara lain :</h4>
			<ul class="para">
				<li>Sederhana (Simple)</li>
				<li>Berorientasi Objek (Object Oriented)</li>
				<li>Terdistribusi (Distributed)</li>
				<li>Interpreted</li>
				<li>Aman (Secure)</li>
				<li>Architecture Neutral</li>
				<li>Portable</li>
				<li>Performance</li>
				<li>Dinamis</li>
			</ul>
			<h4>Macam-macam Java 2 Software Developer Kit (J2SDK) antara lain :</h4>
			<ul class="para">
				<li>J2SE (Java 2 Standard Edition)</li>
				<li>J2EE (Java 2 Enterprise Edition)</li>
				<li>J2ME (Java 2 Micro Edition)</li>
			</ul>
			<a href="{{ url('/java') }}" class="fa-btn btn-1 btn-1e">Back Course</a>
			<a href="{{ url('/java2') }}" class="fa-btn btn-1 btn-1e">Next Course</a>
		</div>
	</div>
</div><!-- end main -->






















<div class="footer_bg"><!-- start footer -->
	<div class="container">
		<div class="row  footer">
			<div class="copy text-center">
				<p class="link"><span>&#169; All rights reserved | Design by CODEGURU</span></p>
			</div>
		</div>
	</div>
</div>
</body>

</html>