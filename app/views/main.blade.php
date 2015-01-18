<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Angular JS Test APP</title>
	{{ HTML::style('css/bootstrap.css') }}
	<link rel="stylesheet" href="//netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.min.css">
	<script src="//ajax.googleapis.com/ajax/libs/jquery/2.0.3/jquery.min.js"></script>
	{{HTML::script("js/angular.min.js")}}
	{{--Section for Scripts--}}
	@yield('scripts')
	{{--End Section for Scripts--}}
	<style>
		body        { padding-top:30px; }
		form        { padding-bottom:20px; }
		.comment    { padding-bottom:20px; }
	</style>
</head>
<body>
<div class="container">
	<h2>Angular + Laravel Test</h2>
	{{--Main Content Yield--}}
		@yield('content')
	{{--End Main Content Yield--}}
</div>
</body>
</html>
