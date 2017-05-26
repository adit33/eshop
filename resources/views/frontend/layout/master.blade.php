<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<link rel="stylesheet" type="text/css" href="{{ asset('css/app.css') }}">
<body>
@yield('content')
</body>
<script type="text/javascript" src="{{ asset('js/app.js') }}"></script>
@stack('scripts')
</html>