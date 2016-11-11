<div class="grid grid--flexcells grid--gutters grid--full gridsm--full gridmd--full gridlg--1of2 gridxl--1of3">

@foreach ($reviews as $review)
    <div class="grid-cell" data-category-type="{!! $review->price !!}" data-category-name="{!! $review->type !!}">
		<a href="{!! URL::route('reviews.slug',[$review->categorys->cat,$review->slug] )  !!}">
		<img class="img-full" src="../../images/mobile/{!! $review->img !!}.jpg" />
		</a>
		<div class="reviews-header"><a href="{!! URL::route('reviews.slug',[$review->categorys->cat,$review->slug] )  !!}"><h4> {!! $review->header !!}</h4></a></div>
		<a href="{!! URL::route('reviews.slug',[$review->categorys->cat,$review->slug] )  !!}">
		<div class="reviews-text"> {!! $review->text !!}</div>	
		<div class="reviews-location"><img src="../images/icons/location.png">Kreuzburg</div>
	  	<div class="reviews-location"><img src="../images/icons/location.png">Score: 90%</div>
	  	</a>							
	</div>	
@endforeach
</div>
<div class="clear-fix"></div>

