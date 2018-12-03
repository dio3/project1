<!DOCTYPE html>
<html>
<head>
	<title>forum</title>
	<link rel="stylesheet" type="text/css" href="{{ asset('assets/frontend/css/bootstrap.min.css') }}">
	<link rel="stylesheet" type="text/css" href="{{ asset('css/main.css') }}">
</head>

<body>
@include('layouts.partial.navbar')
	
@yield('banner')

<div class="container">


	<div class="row">
		@section('category')
			@include('layouts.partial.categories')
		@show
		<div class="col-md-9">
			<div class="row content-heading"><h4>@yield('heading')</h4></div>
			<div class="content-wrap well">
					@yield('content')
			</div>
	   </div>
	</div>
	
</div>


  <script type="text/javascript" src="{{ asset('assets/frontend/js/jquery-3.1.1.min.js') }}"></script>
  <script type="text/javascript" src="{{ asset('assets/frontend/js/bootstrap.min.js') }}"></script> 
</body>
</html>