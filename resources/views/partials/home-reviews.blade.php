<div class="grid-cell"><h2>LATEST REVIEWS</h2></div>

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

		