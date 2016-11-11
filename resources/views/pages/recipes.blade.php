@extends('layouts.onecontainer')
@section('content')
@if(isset($recipes)) 
<div class="grid grid--flexcells grid--gutters grid--full gridsm--full gridmd--1of4 gridlg--1of5">
	<div class="grid-cell">
		<div class="box">
			<div class="reviews-top10-wrap">Indian</div>
			<div class="reviews-top10-img"><img class="u-full-width" src="images/reviews/top10/curry.jpg"></div>
		</div>				
	</div>
	<div class="grid-cell">
		<div class="box">
			<div class="reviews-top10-wrap">Asian</div>
		</div>				
	</div>
	<div class="grid-cell">
		<div class="box">
			<div class="reviews-top10-wrap">High Protein</div>
		</div>				
	</div>
	<div class="grid-cell">
		<div class="box">
			<div class="reviews-top10-wrap">Middle Easterns</div>
		</div>				
	</div>
	<div class="grid-cell">
		<div class="box">
			<div class="reviews-top10-wrap">Vegetarian</div>
		</div>				
	</div>
</div>

<div class="grid grid--flexcells grid--gutters grid--full gridsm--full gridmd--full gridlg--full">
	<div class="grid-cell">
		<div class="box">
			<div class="reviews-top10-wrap">main review</div>
		</div>				
	</div>
</div>

<div class="grid grid--flexcells grid--gutters grid--full gridsm--full gridmd--1of2 gridlg--1of2">
@foreach ($recipes as $recipe)
<!--reviews--> 

	<div class="grid-cell">
		<div class="box">
			<div class="reviews-main-wrap">
				<div class="reviews-main-img"><img class="u-full-width-reviews" src="../../images/reviews/{{ $recipe->img }}" ></div>
				<div class="reviews-main-price">Price £££</div>	
				<div class="reviews-main-content"></div>
				<a href="{!! URL::route('reviews.slug',[$recipe->categorys->cat,$recipe->slug] )  !!}"><div class="reviews-readmore">Read More</div></a>
			</div>
		</div>				
	</div>
@endforeach
</div>
<div class="clear-fix"></div>

@endif

@if(isset($recipes)) 
<?php echo $recipes->render(); ?>
 @elseif(isset($ids))
  
@endif
@stop
@section('sidebar')
<!-- Chooses which sidebar to display -->


@stop
