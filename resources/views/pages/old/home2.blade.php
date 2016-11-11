@extends('layouts.twocolumnhome')
@section('content')
@include('partials.home-image')


<!-- main content -->

<div class="container">
	<div class="content">
		<div class="grid grid--flexcells grid--gutters grid--full gridsm--full gridmd--full gridlg--full">
			<div class="grid-cell">
				<div class="box">
					<div class="home-text">
						<div class="home-header"><h4>Latest Reviews</h4></div>@include('partials.home-reviews')
						<div class="home-header"><h4>Latest Links</h4></div>@include('partials.home-links')
					</div>
				</div>
			</div>		
		</div>
	</div>

<!-- sidebar content -->
		<aside>
			<div class="sidebar">
		Test
			</div>	
		</aside>
	</div><!--Main End -->
</div><!--Container end -->
    



<!-- sidebar content -->
		

<!-- sidebar content -->

		
	
	



@stop