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
                <li class="active"><a href="{{ url('/home') }}">Home</a></li>
                <li><a href="{{ url('/courses') }}">Courses</a></li>
                <li><a href="http://judgement.bccfilkomub.top">Exercises</a></li>
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
<div class="slider_bg"><!-- start slider -->
    <div class="container">
        <div id="da-slider" class="da-slider text-center">
            <div class="da-slide">
                <h2>Interactive Learning</h2>
                <p>Dengan Interactive Learning, proses pembelajaran akan menjadi lebih efisien.<span class="hide_text"> setiap orang dapat menulis sendiri code pada halaman yang telah disediakan serta dapat langsung dijalankan pada halaman teserbut</span></p>
                <h3 class="da-link"><a href="{{ url('/about') }}" class="fa-btn btn-1 btn-1e">view more</a></h3>
            </div>
            <div class="da-slide">
                <h2>Online Tutorial</h2>
                <p>Setiap orang dapat belajar pemrograman dengan video yang telah di sediakan.<span class="hide_text">Video tutorial dapat di akses dari chanel BCC filkom</span></p>
                <h3 class="da-link"><a href="{{ url('/about') }}" class="fa-btn btn-1 btn-1e">view more</a></h3>
            </div>
            <div class="da-slide">
                <h2>Klinik Coding</h2>
                <p>Proker yang ditujukan untuk membahas soal pemrograman agar lebih memahami materi sebelum ujian<span class="hide_text">Akan diberi pemberitahuan jika kelas untuk klinik coding sudah dibuka</span></p>
                <h3 class="da-link"><a href="{{ url('/about') }}" class="fa-btn btn-1 btn-1e">view more</a></h3>
            </div>
            <!--
            <div class="da-slide">
                <h2>online educations</h2>
                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.<span class="hide_text"> Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</span></p>
                <h3 class="da-link"><a href="single-page.html" class="fa-btn btn-1 btn-1e">view more</a></h3>
            </div>
            -->
       </div>
    </div>
</div><!-- end slider -->
<div class="main_bg"><!-- start main -->
    <div class="container">
        <div class="main row">
            <div class="col-md-3 images_1_of_4 text-center">
                <span class="bg"><img class="logo11" src="images/java-logo-vector.png"/></span>
                <h4><a>Java</a></h4>
                <p class="para">Belajar bahasa pemrograman java</p>
                <a href="{{ url('java') }}" class="fa-btn btn-1 btn-1e">read more</a>
            </div>
            <div class="col-md-3 images_1_of_4 bg1 text-center">
                <span class="bg"><img class="logo11" src="images/html5-logo.jpg"/></span>
                <h4><a>HTML & CSS</a></h4>
                <p class="para">Belajar pemrograman web dengan menggunakan HTML5 dan CSS</p>
                <a href="{{ url('htmlcss') }}" class="fa-btn btn-1 btn-1e">read more</a>
            </div>
            <div class="col-md-3 images_1_of_4 bg1 text-center">
                <span class="bg"><img class="logo11" src="images/logo-cpp.png"/></span>
                <h4><a>C++</a></h4>
                <p class="para">Belajar bahasa pemrograman C++</p>
                <a href="{{ url('cpp') }}" class="fa-btn btn-1 btn-1e">read more</a>
            </div>  
            <!--    
            <div class="col-md-3 images_1_of_4 bg1 text-center">
                <span class="bg"><i class="fa fa-shield"></i> </span>
                <h4><a href="#">Contrary  belief</a></h4>
                <p class="para">There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour.</p>
                <a href="single-page.html" class="fa-btn btn-1 btn-1e">read more</a>
            </div>
            --> 
        </div>
    </div>
</div><!-- end main -->
<!--
<div class="main_btm"><!-- start main_btm -->
<!--
    <div class="container">
        <div class="main row">
            <div class="col-md-6 content_left">
                <img src="images/pic1.jpg" alt="" class="img-responsive">
            </div>
            <div class="col-md-6 content_right">
                <h4>Lorem Ipsum is simply <span>dummy text of the ornare  </span> vulputate printing and  There are many variations of passages.</h4>
                <p class="para">There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form alteration in some form, by injected humour, or randomised words which don't look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be sure there isn't anything embarrassing hidden in the middle of text. All the Lorem Ipsum generators on the Internet tend to repeat predefined chunks as necessary, making this the first true generator on the Internet. It uses a dictionary of over 200 Latin words. </p>
                <a href="single-page.html" class="fa-btn btn-1 btn-1e">read more</a>
            </div>
        </div>
-->
                <!----start-img-cursual---->
<!--
                <div id="owl-demo" class="owl-carousel text-center">
                        <div class="item">
                            <div class="cau_left">
                                <img class="lazyOwl" data-src="images/c1.jpg" alt="Lazy Owl Image">
                            </div>
                            <div class="cau_left">
                                <h4><a href="#">vehicula diam</a></h4>
                                <p>
                                    Lorem ipsum dolor amet,consectetur adipisicing elit, sed do eiusmod tempor incididunt dolore magna aliqua.
                                </p>
                            </div>
                        </div>
                        <div class="item">
                            <div class="cau_left">
                                <img class="lazyOwl" data-src="images/c2.jpg" alt="Lazy Owl Image">
                            </div>
                            <div class="cau_left">
                                <h4><a href="#">Morbi nunc</a></h4>
                                <p>
                                    Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium,
                                </p>
                            </div>
                        </div>
                        <div class="item">
                            <div class="cau_left">
                                <img class="lazyOwl" data-src="images/c3.jpg" alt="Lazy Owl Image">
                            </div>
                            <div class="cau_left">
                                <h4><a href="#">Lorem ipsum</a></h4>
                                <p>
                                    On the other hand, we denounce with righteous indignation and dislike men who are so beguiled  pleasure of the moment,
                                </p>
                            </div>
                        </div>
                        <div class="item">
                            <div class="cau_left">
                                <img class="lazyOwl" data-src="images/c4.jpg" alt="Lazy Owl Image">
                            </div>
                            <div class="cau_left">
                                <h4><a href="#">Sed faucibus</a></h4>
                                <p>
                                    Lorem ipsum dolor amet,consectetur adipisicing elit, sed do eiusmod tempor incididunt dolore magna aliqua.
                                </p>
                            </div>
                        </div>
                        <div class="item">
                            <div class="cau_left">
                                <img class="lazyOwl" data-src="images/c2.jpg" alt="Lazy Owl Image">
                            </div>
                            <div class="cau_left">
                                <h4><a href="#">Lorem ipsum</a></h4>
                                <p>
                                    Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium,
                                </p>
                            </div>
                        </div>
                        <div class="item">
                            <div class="cau_left">
                                <img class="lazyOwl" data-src="images/c3.jpg" alt="Lazy Owl Image">
                            </div>
                            <div class="cau_left">
                                <h4><a href="#">Lorem ipsum</a></h4>
                                <p>
                                    On the other hand, we denounce with righteous indignation and dislike men who are so beguiled  pleasure of the moment,
                                </p>
                            </div>
                        </div>
                        <div class="item">
                            <div class="cau_left">
                                <img class="lazyOwl" data-src="images/c4.jpg" alt="Lazy Owl Image">
                            </div>
                            <div class="cau_left">
                                <h4><a href="#">vehicula diam</a></h4>
                                <p>
                                    Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium,
                                </p>
                            </div>
                        </div>
                        <div class="item">
                            <div class="cau_left">
                                <img class="lazyOwl" data-src="images/c1.jpg" alt="Lazy Owl Image">
                            </div>
                            <div class="cau_left">
                                <h4><a href="#">Lorem ipsum</a></h4>
                                <p>
                                    On the other hand, we denounce with righteous indignation and dislike men who are so beguiled  pleasure of the moment,
                                </p>
                            </div>
                        </div>
                        <div class="item">
                            <div class="cau_left">
                                <img class="lazyOwl" data-src="images/c2.jpg" alt="Lazy Owl Image">
                            </div>
                            <div class="cau_left">
                                <h4><a href="#">Lorem ipsum</a></h4>
                                <p>
                                    Lorem ipsum dolor amet,consectetur adipisicing elit, sed do eiusmod tempor incididunt dolore magna aliqua.
                                </p>
                            </div>
                        </div>
                        <div class="item">
                            <div class="cau_left">
                                <img class="lazyOwl" data-src="images/c3.jpg" alt="Lazy Owl Image">
                            </div>
                            <div class="cau_left">
                                <h4><a href="#">vehicula diam</a></h4>
                                <p>
                                    Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium,
                                </p>
                            </div>
                        </div>
                        <div class="item">
                            <div class="cau_left">
                                <img class="lazyOwl" data-src="images/c1.jpg" alt="Lazy Owl Image">
                            </div>
                            <div class="cau_left">
                                <h4><a href="#">Lorem ipsum</a></h4>
                                <p>
                                    On the other hand, we denounce with righteous indignation and dislike men who are so beguiled  pleasure of the moment,
                                </p>
                            </div>
                        </div>
                        <div class="item">
                            <div class="cau_left">
                                <img class="lazyOwl" data-src="images/c4.jpg" alt="Lazy Owl Image">
                            </div>
                            <div class="cau_left">
                                <h4><a href="#">Morbi nunc</a></h4>
                                <p>
                                    Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium,
                                </p>
                            </div>
                        </div>
                    </div>
-->
                    <!----//End-img-cursual---->
<!--
    </div>
</div>
-->
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