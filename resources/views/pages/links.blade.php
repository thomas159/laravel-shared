@extends('layouts.multicontainer')
@section('content')
<div class="fullcontainer">
	<!-- AD -->
		<div class="grid-cell"><div class="mob-ad"></div></div>
		<!-- AD -->
</div>
@foreach ($links as $link)

<div class="fullcontainer">
<a name="{!! $link->category !!}"></a>
	<div class="container">
		<div class="content">
			
			<div class="links-container">
				<div class="links-wrap">
					<div class="grid grid--flexcells grid--gutters grid--1of2 gridsm--full gridmd--1of2 gridlg--1of3 gridxl--1of4">
						@foreach ($link->linksitems as $linksitem)
							<div class="grid-cell">
								<div class="reviews-hd"><h4>{!! $link->category !!}</h4></div>
		            				<a href="http://{!! $linksitem->url !!}" target="_blank">
			            			<img class="img-links" src="{{ "/assets/images/post-sample-image.jpg" }}" />

			            			</a>
			               			<div class="links-url">
			               			<a href="http://{!! $linksitem->url !!}"  target="_blank"><h4>{!! $linksitem->url !!}</h4></a>
			               			</div>
			               			<a href="http://{!! $linksitem->url !!}" target="_blank">
			               			<div class="links-text grid-cell--top">{!! $linksitem->text !!}
			               			</a>
			               			</div>
			               		<div class="links-share">
			               			<div class="links-share-border">
			               				<div class="grid grid--flexcells grid--gutters4 grid--1of3 gridsm--1of3 gridmd--1of3 gridlg--1of3 gridxl--1of3">
				               				<div class="grid-cell grid--center">
				               					<a href="#" class="social-button facebook"><i class="fa fa-facebook"></i></a>
				               				</div>
				               				<div class="grid-cell grid--center">
				               					<a href="#" class="social-button twitter"><i class="fa fa-twitter"></i></a>
				               				</div>
				               				<div class="grid-cell grid--center">
				               					<a href="#" class="social-button google"><i class="fa fa-google"></i></a>
				               				</div>
				               			</div>
			               			</div>
			               		</div>                      
		            		</div>
						@endforeach
					</div>
				</div>	
			</div><!--links container-->
		</div><!--content end-->
	</div><!--container end-->
</div><!--fullcontainer end-->
@endforeach

	

@stop


		
