		<div class="grid grid--flexcells grid--gutters grid--full gridsm--full gridmd--full gridlg--1of4 gridxl--1of4">
			@foreach ($reviews as $review)
			    <div class="grid-cell">
					<div class="box-border">
						<a href="{!! URL::route('reviews.slug',[$review->categorys->cat,$review->slug] )  !!}">
							<div class="reviews-hd"><h4>Reviews</h4></div>
							<img class="img-full" src="../../images/mobile/{!! $review->img !!}.jpg" />
							</a>
					  		<div class="reviews-header"><a href="{!! URL::route('reviews.slug',[$review->categorys->cat,$review->slug] )  !!}"><h4><span> {!! $review->header !!}</span></h4></a></div>
							<a href="{!! URL::route('reviews.slug',[$review->categorys->cat,$review->slug] )  !!}">
							<div class="reviews-type"><span>Greek</span></div>
					  		<div class="reviews-text">{!! str_limit($review->text, $limit = 500) !!}</div>	
					  		<div class="reviews-extra">
					  			<div class="grid grid--flexcells grid--gutters grid--full gridsm--full gridmd--full gridlg--1of2 gridxl--1of2">
					  			<div class="grid-cell-row"><i class="fa fa-cutlery fa"></i>&nbsp;Italian</div>
					  			<div class="grid-cell-row"><i class="fa fa-location-arrow"></i>&nbsp;Prenzlaur Berg</div>
					  			</div>
					  		</div>
					  		<div class="reviews-extra">
					  			<div class="reviews-score-outer">
					  				<div class="reviews-score-inner" style="width:{!! $review->score !!}%;">
					  					<div class="reviews-score-score">{!! $review->score !!}%</div>
					  				</div>
					  			</div>
					  		</div>
					  	</a>		
					</div>		
				</div>	
			@endforeach	    
		</div>

		

		
