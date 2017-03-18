<!DOCTYPE html>
<html>
<head>
	<title>CRUD | CodeGuru</title>
	<link href="/css/bootstrap.min.css" rel='stylesheet' type='text/css' />
	<link href="/css/bootstrap.css" rel='stylesheet' type='text/css' />
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link href="/css/style.css" rel="stylesheet" type="text/css" media="all" />
	
	<link rel="stylesheet" href="{{asset('/css/materialize.min.css')}}">
	<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
	<meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
	@section('css')

    @show
</head>
<body>
@section('header')
    @include('layouts.header')
@show

<div class="container">
	@yield('content')
</div>

<script src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
<script src="{{asset('js/materialize.min.js')}}"></script>
<script type="text/javascript">
	(function($){
  $(function(){

    $('.button-collapse').sideNav();

  }); // end of document ready
})(jQuery); // end of jQuery name space
</script>
</body>
</html>