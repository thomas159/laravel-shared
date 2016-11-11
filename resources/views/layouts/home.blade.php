<!DOCTYPE html>
<html lang="en" class="no-js">
<head>
	@include('includes.head')
</head>
<body>
	@include('includes.header')	
<div class="main">		
	@yield('content')	
</div>
<footer id="footer">
	@include('includes.footer')
</footer>
</body>
</html>