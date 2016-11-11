<!DOCTYPE html>
<html lang="en">
<head>
@include('includes.head')
</head>
<body>
	
	@include('includes.header')
	
<div class="main">		
@yield('content')
@include('includes.sidebar')	
</div>

	<footer id="footer">
	</footer>
	@include('includes.footer')
	
</body>
</html>