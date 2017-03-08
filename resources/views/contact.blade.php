<!DOCTYPE HTML>
<html>
<head>
<title>Codeguru Interactive Learning | Contact</title>
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
<!--font-Awesome-->
   	<link rel="stylesheet" href="fonts/css/font-awesome.min.css">
<!--font-Awesome-->
</head>
<body>
<div class="header_bg1">
<div class="container">
	<div class="row header">
		<div class="logo navbar-left">
			<h1><a href="index.html"><img class="kiri" src="images/logo-code.jpg"/></a></h1>
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
		        <li><a href="{{ url('/about') }}">About</a></li>
		        <li><a href="{{ url('/blog') }}">Blog</a></li>
		        <li class="active"><a href="{{ url('/contact') }}">Contact</a></li>
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
		<div class="main row">
			<iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d246.96474979439049!2d112.6148459842008!3d-7.953814886731693!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xd600c9c3727a93aa!2sFakultas+Ilmu+Komputer+Universitas+Brawijaya+(FILKOM)!5e0!3m2!1sen!2sid!4v1488539076220" width="1100" height="450" frameborder="0" style="border:0" allowfullscreen></iframe><br><small><a href="https://www.google.co.id/maps/place/Fakultas+Ilmu+Komputer+Universitas+Brawijaya+(FILKOM)/@-7.9538149,112.614846,21z/data=!4m5!3m4!1s0x0:0xd600c9c3727a93aa!8m2!3d-7.9537361!4d112.6148388?hl=en" style="font-family: 'Open Sans', sans-serif;color:#555555;text-shadow:0 1px 0 #ffffff; text-align:left;font-size:12px;padding: 5px;">View Larger Map</a></small>
		</div>
	</div>
</div><!-- end main -->
<div class="main_btm"><!-- start main_btm -->
	<div class="container">
		<div class="main row">
			    <div class="col-md-4 company_ad">
				    <h2>find Address :</h2>
      				<address>
      					 <p>Gedung B 1.8<p>	
						 <p>Fakultas Ilmu Komputer</p>
						 <p>Universitas Brawijaya - Malang</p>
						 <p>Indonesia</p>
				   	</address>
				</div>
				<div class="col-md-8">
				  <div class="contact-form">
				  	<h2>Contact Us</h2>
					    <form method="post" action="contact-post.html">
					    	<div>
						    	<span>name</span>
						    	<span><input type="username" class="form-control" id="userName"></span>
						    </div>
						    <div>
						    	<span>e-mail</span>
						    	<span><input type="email" class="form-control" id="inputEmail3"></span>
						    </div>
						    <div>
						    	<span>subject</span>
						    	<span><textarea name="userMsg"> </textarea></span>
						    </div>
						   <div>
						   		<label class="fa-btn btn-1 btn-1e"><input type="submit" value="submit us"></label>
						  </div>
					    </form>
				    </div>
  			</div>		
  			<div class="clearfix"></div>		
	</div> 
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