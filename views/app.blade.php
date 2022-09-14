<!DOCTYPE html>
	<html lang="ru">
	<head>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta http-equiv="X-UA-Compatible" content="ie=edge">
		<title>{{ $pagetitle }}</title>
		{{--...css and other head things--}}
		@include('layout.csshead')
	</head>
	<body class="d-flex flex-column">
		@section('header')
			@include('layout.header')
		@show
		@yield('main')
		@include('layout.footer')
	</body>
</html>