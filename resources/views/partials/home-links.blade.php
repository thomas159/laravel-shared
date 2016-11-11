

<div class="grid grid--flexcells grid--gutters grid--1of2 gridsm--full gridmd--1of2 gridlg--1of3 gridxl--1of4">
	@foreach ($linkscategorys as $linkscategory)
	@foreach ($linkscategory->linksitems as $linksitem)
		<div class="grid-cell">
			<div class="reviews-hd"><h4>{!! $linkscategory->category !!}</h4></div>
				<a href="http://{!! $linksitem->url !!}" target="_blank">
    			<img class="img-links" src="images/links/{!! $linksitem->img !!}.png" />
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
	@endforeach
</div>
		
