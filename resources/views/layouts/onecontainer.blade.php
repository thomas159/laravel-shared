<!DOCTYPE html>
<html lang="en" class="no-js">
<head>
@include('includes.head')
</head>
<body>
	
	@include('includes.header')
<div class="main">
	<div class="fullcontainer-single">
		<div class="container">
	    	<div class="content">		
			<!-- main content -->
		@yield('content')
						
			</div>
		</div>
	</div>	
	@include('includes.sidebar')
</div>
	<footer id="footer">
	@include('includes.footer')
	</footer>
</body>
</html>