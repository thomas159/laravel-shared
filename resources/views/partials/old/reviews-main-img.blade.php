<div class="grid grid--flexcells grid--gutters grid--full gridsm--full gridmd--full gridlg--full">
@foreach ($reviews as $review)
<!--reviews--> 
<div class="grid-cell">
	<div class="box">
		<a href="{!! URL::route('reviews.slug',[$review->categorys->cat,$review->slug] )  !!}">
		 	<div class="image">
    			<img class="u-full-width-reviews-main" src="../../images/reviews/{{ $review->img }}" />
  					<div class="img-text-bg">
  						<div class="img-text-left">
  							<div class="img-top"><span class="rev-img-text">{!! $review->header !!}</span></div>
  							<div class="img-bottom"><span class="rev-img-tag">{!! $review->tag !!}</span></div>	
  						</div>
  						<div class="img-text-right"><span class="three-star">95%</span></div>
					</div>
  			</div>
		</a>
	</div>	
</div>	
@endforeach
</div>