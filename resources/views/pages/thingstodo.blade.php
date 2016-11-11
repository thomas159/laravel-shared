@extends('layouts.multicontainer')
@section('title', 'SuperBerlin - Reviews')
@section('content')
@if(isset($thingstodos)) 
@include('partials.slider-todo')
<div class="fullcontainer-single">
	<div class="container">
		<div class="reviews-content">	
				<div class="grid grid--flexcells grid--gutters grid--1of2 gridsm--full gridmd--1of2 gridlg--1of3 gridxl--1of4">
				@foreach($thingstodos as $thingstodo)
				<!--reviews--> 
					<div class="grid-cell">
						<a href="{!! URL::route('thingstodo.thingstodoslug',[$thingstodo->categorys->cat,$thingstodo->thingstodoslug] )  !!}">
							<img class="img-round" src="../../images/mobile/{!! $thingstodo->img !!}.jpg" />
							<div class="thingstodo-header"><h4>{!! $thingstodo->header !!}</h4></div>	
						</a>
					</div>	
				@endforeach
				</div>
		</div>
	</div>
</div>
@elseif(isset($thingstodoslugs))
@foreach($thingstodoslugs as $thingstodoslug)
<!-- ABSOLUTE HEADER -->
<style>
@media (min-width: 0px) and (max-width: 699px) {
.reviews-things-slug-fullwidth{background-image: url("../../images/fullwidth/mobile/{!! $thingstodoslug->fullwidthimg !!}.jpg")}
}
@media (min-width: 700px) and (max-width: 1499px) {
}
@media (min-width: 1500px) {
.reviews-things-slug-fullwidth{background-image: url("../../images/fullwidth/desktop/{!! $thingstodoslug->fullwidthimg !!}.jpg")}
}
</style>
<div class="fullcontainer-image reviews-things-slug-fullwidth">
	<div class="reviews-things-slug-ab-fullcontainer">
		<div class="reviews-things-slug-ab-container">
			<div class="reviews-things-slug-ab-header">
				<h2>{!! $thingstodoslug->header !!}</h2>	
			</div>
		</div>
	</div>
</div>
<!-- START GRID -->
<div class="fullcontainer-single">
	<div class="single-container">
		<div class="single-content">
<!-- Only display on mobile -->
			<div class="display-mobile">
				<h2>{!! $thingstodoslug->header !!}</h2>
			</div>
<!-- Only display on mobile -->	
			<div class="reviews-things-slug-box">	
				<div class="grid grid--flexcells grid--gutters grid--full gridsm--full gridmd--full gridlg--full">
					<div class="grid-cell">	
						<div class="reviews-things-slug-content">{!! $thingstodoslug->content !!} </div>
					</div>
				</div> <!--grid end-->
			</div>
<!-- END ABSOLUTE HEADER -->			



<!-- IMAGES -->
			<div class="reviews-things-slug-header"><h2>images</h2></div>
				<div class="reviews-things-slug-box-images">
					<div class="grid grid--flexcells grid--gutters0 grid--full gridsm--full gridmd--1of1 gridlg--1of1">
					  	<div class="grid-cell">
					   		<div class="reviews-slug-box-images">						   		
					          	<div class="demo-gallery-wrap">
					            	<div class="demo-gallery">
					                	<ul id="lightgallery" class="list-unstyled row">
								   		@foreach ($thingstodoslug->thingstodoimages as $thingstodoimage)						
			           						<li class="grid-cell" data-responsive="../../images/mobile/{!! $thingstodoimage->img !!}.jpg 700, ../../images/mobile/{!! $thingstodoimage->img !!}.jpg 1000" data-src="../../images/desktop/{!! $thingstodoimage->img !!}.jpg" data-sub-html="<h4>Bowness Bay</h4><p>A beautiful Sunrise this morning taken En-route to Keswick not one as planned but I'm extremely happy I was passing the right place at the right time....</p>">
			                 				<a href="../../images/{!! $thingstodoimage->img !!}.jpg">
											<img class="img-full" src="../../images/thumbs/{!! $thingstodoimage->img !!}.jpg" height="auto">
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
			@endforeach
<!-- END IMAGES -->
<!-- END GRID -->
			@endif
		</div>
	</div>
</div>




@stop
