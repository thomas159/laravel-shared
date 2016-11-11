@extends('layouts.home')
@section('title', 'SuperBerlin')
@section('content')

@include('partials.slider-home')


<div class="fullcontainer-diag-home">

	<div class="aside">
		<div class="aside-top">
			<div class="aside-container-home"><img src="../../images/sidebar/ford300x600.jpg" width="300" height="600"></div>
		</div>
	</div>

	<div class="container">
		<div class="content">
			<div class="grid grid--flexcells grid--gutters grid--full gridsm--full gridmd--1of2 gridlg--full gridxl--full">
				<div class="grid-cell">
					<h1>News and reviews around Berlin</h1>
				</div>
				<div class="grid-cell">
					<h5>We bring you reviews of Berlin's best restaurants and bars and provide help and advice on moving to Berlin</h5>
				</div>	
			</div>
		</div>
	</div><!--Container-->
</div><!--full Container end -->
    
<div class="fullcontainer-diag-before">
	<div class="container">
		<div class="content">
			<div class="grid-cell"><h3>LINKS</h3></div>
			
			@include('partials.home-links')
			
		</div>
	</div><!--Main End -->
</div><!--Container end -->

<div class="fullcontainer-home">
	<div class="container">
		<div class="content">
			<div class="grid-cell"><h3>NEWS</h3></div>
			
			@include('partials.home-pie')
			
		</div>
	</div><!--Main End -->
</div><!--Container end -->

<div class="fullcontainer-home">
	<div class="container">
		<div class="content">
			
			
			@include('partials.home-thingstodo')
			
		</div>
	</div><!--Main End -->
</div><!--Container end -->


		


		
	
	



@stop