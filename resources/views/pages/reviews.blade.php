@extends('layouts.multicontainer')
@section('title', 'SuperBerlin - Reviews')
@section('content')
@if(isset($reviews)) 
@include('partials.slider-reviews')
<div class="fullcontainer-single">
	<div class="container">
		<div class="reviews-content">	
				<div class="grid grid--flexcells grid--gutters grid--1of2 gridsm--full gridmd--1of2 gridlg--1of3 gridxl--1of4">
				@foreach ($reviews as $review)
				<div class="grid-cell">
					<a href="{!! URL::route('reviews.slug',[$review->categorys->cat,$review->slug] )  !!}">
						<img class="img-round" src="../../images/mobile/{!! $review->img !!}.jpg" />
						</a>
				  		<div class="reviews-header"><a href="{!! URL::route('reviews.slug',[$review->categorys->cat,$review->slug] )  !!}"><h4><span> {!! $review->header !!}</span></h4></a></div>
						<a href="{!! URL::route('reviews.slug',[$review->categorys->cat,$review->slug] )  !!}">
				  		<div class="reviews-text">{!! str_limit($review->text, $limit = 500) !!}</div>	
				  		<div class="reviews-extra">
				  			<div class="reviews-extra-inner">
					  			<div class="grid grid--flexcells grid--gutters0 grid--full gridsm--full gridmd--1of2 gridlg--1of2 gridxl--1of2">
						  			<div class="grid-cell">
							  			<div class="grid-cell-row">
							  				<div class="reviews-extra-fooda"><i class="fa fa-cutlery fa"></i></div>
							  				<div class="reviews-extra-foodb">Italian</div>
							  			</div>
							  		</div>
							  		<div class="grid-cell">
							  			<div class="grid-cell-row">
							  				<div class="reviews-extra-fooda"><i class="fa fa-location-arrow"></i></div>
							  				<div class="reviews-extra-foodb">Prenzlaur Berg</div>
							  			</div>
							  		</div>
						  		</div>
				  			</div>
				  		</div>
				  		<div class="reviews-score">
				  			<div class="reviews-score-outer">
				  				<div class="reviews-score-inner" style="width:{!! $review->score !!}%;">
				  					<div class="reviews-score-score">{!! $review->score !!}%</div>
				  				</div>
				  			</div>
				  		</div>
				  	</a>			
				</div>	
				@endforeach
				</div>
		</div>
	</div>
</div>

@elseif(isset($slugs)) 
@foreach($slugs as $slug)
<style>
@media (min-width: 0px) and (max-width: 699px) {
.reviews-things-slug-fullwidth{background-image: url("../../images/fullwidth/mobile/{!! $slug->fullwidthimg !!}.jpg")}
}
@media (min-width: 700px) and (max-width: 1499px) {
}
@media (min-width: 1500px) {
.reviews-things-slug-fullwidth{background-image: url("../../images/fullwidth/desktop/{!! $slug->fullwidthimg !!}.jpg")}
}
</style>
<div class="fullcontainer-image reviews-things-slug-fullwidth">
	<div class="reviews-things-slug-ab-fullcontainer">
		<div class="reviews-things-slug-ab-container">
			<div class="reviews-things-slug-ab-header">
				<h2>{!! $slug->header !!}</h2>
			</div>
		</div>
	</div>
</div>

<!-- Absolute header -->
<div class="fullcontainer-single">
	<div class="single-container">
		<div class="single-content">	
<!-- Only display on mobile -->
			<div class="display-mobile">
				<h2>{!! $slug->header !!}</h2>
			</div>
<!-- Only display on mobile -->	
			<div class="reviews-things-slug-box">	
				<div class="grid grid--flexcells grid--gutters grid--full gridsm--full gridmd--full gridlg--full">
					<div class="grid-cell">	
						<div class="reviews-things-slug-content">{!! $slug->content !!} </div>
					</div>
				</div> <!--grid end-->
			</div>
<!-- END ABSOLUTE HEADER -->			

<!-- SCORE -->
			<div class="reviews-things-slug-header"><h2>score</h2></div>
			<div class="reviews-things-slug-box">		
	            	<div class="grid grid--flexcells grid--gutters grid--full gridsm--full gridmd--full gridlg--full">
						<div class="grid-cell">
							<div class="reviews-things-slug-content">Food Quality
	            					Price
									Value for Money - 
							</div>
						</div>
					</div> <!--grid end-->
			</div>
<!-- END SCORE -->

<!-- MAP -->
			<div class="reviews-things-slug-header"><h2>location</h2></div>
			<div class="reviews-things-slug-box">
				<div class="reviews-things-slug-map"><iframe width="100%" height="400px" frameborder="0" style="border:0; border-radius: 0px 0px 5px 5px;" 
				src="https://www.google.com/maps/embed/v1/place?q={!! $slug->map !!}" allowfullscreen></iframe> </div>
			</div>	
<!-- END MAP -->

<!-- DETAILS -->
			<div class="reviews-things-slug-header"><h2>details</h2></div>
			<div class="reviews-things-slug-box">
				
					<div class="grid grid--flexcells grid--gutters grid--full gridsm--full gridmd--full gridlg--1of2">
						<div class="grid-cell">
							
								<div class="reviews-things-slug-tbl-wrap">
									<div class="reviews-things-slug-tbl-header">Location</div>
									<div class="reviews-things-slug-tbl-address">Oberbaumstraße 8</br>10997 Berlin</br> Germany</br></div>
								</div>

								<div class="reviews-slug-tbl-wrap">
									<div class="reviews-slug-tbl-header">Opening Times</div>
									<div class="reviews-slug-tbl-header-col1">
										<div class="reviews-slug-tbl-a">Monday</div>
										<div class="reviews-slug-tbl-b">Tuesday</div>
										<div class="reviews-slug-tbl-a">Wednesday</div>
										<div class="reviews-slug-tbl-b">Thursday</div>
										<div class="reviews-slug-tbl-a">Friday</div>
										<div class="reviews-slug-tbl-b">Saturday</div>
										<div class="reviews-slug-tbl-a">Sunday</div>							
									</div>
									<div class="reviews-slug-tbl-header-col2">
										<div class="reviews-slug-tbl-a">11am - 4am</div>
										<div class="reviews-slug-tbl-b">11am - 4am</div>
										<div class="reviews-slug-tbl-a">11am - 4am</div>
										<div class="reviews-slug-tbl-b">11am - 4am</div>
										<div class="reviews-slug-tbl-a">11am - 4am</div>
										<div class="reviews-slug-tbl-b">11am - 4am</div>
										<div class="reviews-slug-tbl-a">11am - 3am</div>							
									</div>
								</div>

						</div>
						<div class="grid-cell">
								<div class="reviews-slug-tbl-wrap">
									<div class="reviews-slug-tbl-header">Price</div>
									<div class="reviews-slug-tbl-address">£</div>
								</div>
								<div class="reviews-slug-tbl-wrap">
									<div class="reviews-slug-tbl-header">Menu</div>
									<div class="reviews-slug-tbl-address">Oberbaumstraße 8</br>10997 Berlin</br> Germany</br></div>
								</div>
								<div class="reviews-slug-tbl-wrap">
									<div class="reviews-slug-tbl-header">Transport</div>
									<div class="reviews-slug-tbl-address">Nearest station: shcollslss</div>
								</div>
								<div class="reviews-slug-tbl-wrap">
									<div class="reviews-slug-tbl-header">Website</div>
									<div class="reviews-slug-tbl-address">www.burgermesiter.berlin</div>
								</div>
						</div>
					</div> <!--grid end-->
			</div>
<!-- END DETAILS -->

<!-- IMAGES -->
			<div class="reviews-things-slug-header"><h2>images</h2></div>
				<div class="reviews-things-slug-box-images">
					<div class="grid grid--flexcells grid--gutters0 grid--full gridsm--full gridmd--1of1 gridlg--1of1">
					  	<div class="grid-cell">
					   		<div class="reviews-slug-box-images">
					          	<div class="demo-gallery-wrap">
					            	<div class="demo-gallery">
					                	<ul id="lightgallery" class="list-unstyled row">
								   		@foreach ($slug->reviewimages as $reviewimage)						
			           						<li class="grid-cell" data-responsive="../../images/mobile/{!! $reviewimage->img !!}.jpg 700, ../../images/mobile/{!! $reviewimage->img !!}.jpg 1000" data-src="../../images/desktop/{!! $reviewimage->img !!}.jpg" data-sub-html="<h4>Bowness Bay</h4><p>A beautiful Sunrise this morning taken En-route to Keswick not one as planned but I'm extremely happy I was passing the right place at the right time....</p>">
			                 				<a href="../../images/{!! $reviewimage->img !!}.jpg">
											<img class="img-full" src="../../images/thumbs/{!! $reviewimage->img !!}.jpg" height="auto">
										  	</a>
			               					</li>
										@endforeach	
										</ul>
					            	</div>
					          	</div>
					        </div>    
			 			</div>
					</div>
				</div>	
<!-- END IMAGES -->		
@endforeach
		</div>
	</div>
</div>
<!-- END CONTAINER -->
	
@endif

@if(isset($reviews)) 
<?php echo $reviews->render(); ?>
@elseif(isset($slugs))
@endif



@stop
