<!DOCTYPE html>
<html>
<head>
	<title>@yield('title','Admin Dashboard')</title>
	<meta charset="@yield('charset','UTF-8')">
	<meta name="description" content="@yield('meta-description','Admin Dashboard Section')">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	@yield('styles')

</head>
<body>
	<div id="app">
		@yield('content')
	</div>

	@yield('scripts')
</body>
</html>