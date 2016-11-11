
<div class="fullcontainer-single">
	<div class="reviews-container">
		<div class="reviews-content">	
			<div class="main-header-wrap">
				<div class="main-header"><h2>RELATED REVIEWS</h2></div>
			</div>
			<div class="grid grid--flexcells grid--gutters grid--full gridsm--full gridmd--full gridlg--1of2">
				@foreach($reviews as $review)
					<div class="grid-cell">
						{!! $review->area !!}
					</div>
				@endforeach
			</div>	
		</div>
	</div>
</div>

