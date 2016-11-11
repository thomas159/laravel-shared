@extends('layouts.twocolumn')
@section('title', 'SuperBerlin - Reviews')
@section('content')
@if(isset($reviews)) 

<div class="fullcontainer">
	<div class="container">
		<div class="content">	
			@include('partials.reviews-main-img')
				<div class="grid grid--flexcells grid--gutters grid--full gridsm--full gridmd--full gridlg--1of2">
				@foreach ($reviews as $review)
				<!--reviews--> 
					<div class="grid-cell" data-category-type="{!! $review->price !!}" data-category-name="{!! $review->type !!}">
						<div class="box">
							<a href="{!! URL::route('reviews.slug',[$review->categorys->cat,$review->slug] )  !!}">
							 	<div class="image">
					    			<img class="u-full-width-reviews" src="../../images/reviews/{!! $review->img !!}" />
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
		</div>
	</div>
</div>



@elseif(isset($slugs)) 

@foreach($slugs as $slug)
<div class="fullcontainer-image" style="background-image: url(../../images/reviews/fullwidth/{!! $slug->img !!}">
		<div class="reviews-slug-review-fullcontainer">
			<div class="reviews-slug-review-container">
				<div class="reviews-slug-review-header">
					<div class="main-header-wrap">
							<div class="main-header"><h4>{!! $slug->header !!}</h4></div>
					</div>
				</div>
			</div>
		</div>
	</div>

<div class="fullcontainer">
	<div class="reviews-container">
		<div class="reviews-content">	
			<div class="grid grid--flexcells grid--gutters grid--full gridsm--full gridmd--full gridlg--full">
				<div class="grid-cell">
					<div class="box">
						<div> Kreuzberg</div>
						<div class="reviews-slug-content">{!! $slug->content !!} </div>
					</div>
				</div>
			</div> <!--grid end-->
		</div>
	</div>
</div>

<div class="fullcontainer">
	<div class="reviews-container">
		<div class="reviews-content">	
			<div class="grid grid--flexcells grid--gutters grid--full gridsm--full gridmd--full gridlg--full">
				<div class="grid-cell">
					<div class="box">
						<div class="main-header-wrap">
							<div class="main-header"><h4>MAP</h4></div>
						</div>
						<div class="rev-blog-id-map">{!! $slug->maps->link !!}</div>
					</div>
				</div>
			</div> <!--grid end-->
		</div>
	</div>
</div>
			     			
			     			opening times Menu			
		@include('partials.photopartial')
	@endforeach		
@endif

@if(isset($reviews)) 
<?php echo $reviews->render(); ?>
@elseif(isset($slugs))
@endif

@stop
