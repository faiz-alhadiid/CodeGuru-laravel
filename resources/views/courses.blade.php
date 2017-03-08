<!DOCTYPE HTML>
<html>
<head>
<title>Codeguru Interactive Learning | Courses</title>
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
		        <li class="active"><a href="{{ url('/courses') }}">Courses</a></li>
		        <li><a href="{{ url('/about') }}">About</a></li>
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
		<div class="technology row">
			<h2>our courses</h2>
			<div class="technology_list">
				<h4>1. Java</h4>
				<div class="col-md-10 tech_para">
					<p class="para">Belajar pemrograman java</p>
					<p class="para">Disini akan diajarkan mengenai dasar-dasar pemrograman java sampai dengan konsep object oriented programming (OOP)</p>
				</div>
				<div class="col-md-2 images_1_of_4 bg1 pull-right">
					<span class="bg"><img class="logo11" src="images/java-logo-vector.png"/></span>
				</div>
				<div class="clearfix"></div>
				<div class="read_more">
					<a href="{{ url('java') }}" class="fa-btn btn-1 btn-1e">read more</a>
				</div>	
			</div>
			<div class="technology_list1">
				<h4>2. HTML5 & CSS</h4>
				<div class="col-md-10 tech_para">
					<p class="para">Belajar pemrograman web dengan html5 dan css</p>
				</div>
				<div class="col-md-2 images_1_of_4 bg1">
					<span class="bg"><img class="logo11" src="images/html5-logo.jpg"/></span>
				</div>
				<div class="clearfix"></div>
				<div class="read_more">
					<a href="{{ url('htmlcss') }}" class="fa-btn btn-1 btn-1e">read more</a>
				</div>	
			</div>
			<div class="technology_list1">
				<h4>3. C++</h4>
				<div class="col-md-10 tech_para">
					<p class="para">Belajar bahasa pemrograman C++</p>
				</div>
				<div class="col-md-2 images_1_of_4 bg1">
					<span class="bg"><img class="logo11" src="images/logo-cpp.png"/></span>
				</div>
				<div class="clearfix"></div>
				<div class="read_more">
					<a href="{{ url('cpp') }}" class="fa-btn btn-1 btn-1e">read more</a>
				</div>	
			</div>
			<!--
			<div class="technology_list1">
				<h4>4. There are many variations of passages of Lorem Ipsum available ?</h4>
				<div class="col-md-10 tech_para">
					<p class="para">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
				</div>
				<div class="col-md-2 images_1_of_4 bg1">
					<span class="bg"><i class="fa fa-files-o"></i> </span>
				</div>
				<div class="clearfix"></div>
				<div class="read_more">
					<a href="single-page.html" class="fa-btn btn-1 btn-1e">read more</a>
				</div>	
			</div>
			-->
			<!--
			<ul class="pagination">
			  <li><a href="#">&laquo;</a></li>
			  <li><a href="#">1</a></li>
			  <li><a href="#">2</a></li>
			  <li><a href="#">3</a></li>
			  <li><a href="#">4</a></li>
			  <li><a href="#">5</a></li>
			  <li><a href="#">&raquo;</a></li>
			</ul>
			-->
			
		</div>
	</div>
</div><!-- end main -->
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