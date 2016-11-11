@extends('layouts.multicontainer')
@section('content')

@foreach ($links as $link)
<div class="fullcontainer">
	<div class="container">
		<div class="content">
			<div class="links-container">
			<h2><span>{!! $link->category !!}</span></h2>

			<div class="links-wrap">
				<div class="grid grid--flexcells grid--gutters grid--full gridsm--full gridmd--1of2 gridlg--1of2 gridxl--1of4">
				@foreach ($link->linksitems as $linksitem)
					<div class="grid-cell">
						<div class="box-border-3">
							<div class="reviews-hd"><h4>{!! $link->category !!}</h4></div>
            				<a href="http://{!! $linksitem->url !!}" target="_blank">
	            			<img class="img-full" src="images/links/{!! $linksitem->img !!}.png" />
	            			</a>
	               			<div class="links-text-url">
	               			<a href="http://{!! $linksitem->url !!}"  target="_blank"><h4>{!! $linksitem->url !!}</h4></a>
	               			</div>
	               			<a href="http://{!! $linksitem->url !!}" target="_blank">
	               			<div class="links-text-text">{!! $linksitem->text !!}
	               			</a>
	               			</div>

	               		</div>
	               		<div class="links-share">
	               			<div class="links-share-border"></div>
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


		
