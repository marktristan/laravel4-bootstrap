<!DOCTYPE html>
<html lang="en">
	<head>
		{{-- Basic page needs --}}
		<meta charset="utf-8" />
		<title>
			@section('title')
				Laravel 4 with Bootstrap
			@show
		</title>
		<meta name="keywords" content="your, awesome, keywords, here" />
		<meta name="author" content="Your Name" />
		<meta name="description" content="Lorem ipsum dolor sit amet, nihil fabulas et sea, nam posse menandri scripserit no, mei." />

		{{-- Mobile specific metas --}}
		<meta name="viewport" content="width=device-width, initial-scale=1.0">

		{{-- CSS --}}
		<link href="{{{ asset('assets/css/bootstrap.css') }}}" rel="stylesheet">

		<style>
			@section('styles')
				body {
					padding-top: 50px;
				}
			@show
		</style>

		{{-- HTML5 shim, for IE6-8 support of HTML5 elements --}}
		<!--[if lt IE 9]>
		<script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
		<![endif]-->
	</head>

	<body>
		{{-- Header Nav --}}
		@include('layouts.headernav')

		{{-- Content --}}
		<div class="container">
			@yield('content')
		</div>

		{{-- Javascripts --}}
		<script src="{{{ asset('assets/js/jquery-1.10.2.js') }}}"></script>
		<script src="{{{ asset('assets/js/bootstrap.min.js') }}}"></script>
	</body>
</html>