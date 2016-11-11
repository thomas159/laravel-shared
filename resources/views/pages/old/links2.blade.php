@extends('layouts.twocolumntest')
@section('content')



@foreach ($links as $link)
<div class="fullcontainer">
	<div class="container">
		<div class="content">
			<div class="links-container">
			<div class="main-header-wrap">
				<div class="main-header"><h4>{!! $link->category !!}</h4></div>
			</div>

			<div class="links-wrap">
				<div class="grid grid--flexcells grid--gutters grid--full gridsm--full gridmd--1of2 gridlg--1of2 gridxl--1of3">
			@foreach ($link->linksitems as $linksitem)
					<div class="grid-cell">
						<div class="box">
							<a href="http://{!! $linksitem->link !!}">
			    				<img class="u-full-width-links" src="images/links/{{ $linksitem->img }}" />
			  						<div class="links-text-bg">
			  							<div class="links-text-left">
			  								<div class="links-text-url">{!! $linksitem->link !!}</div>
			  								<div class="links-text-text">{!! $linksitem->text !!}</div>		
			  							</div>
									</div>
									<div class="link-share">
												<a href="http://twitter.com/share?text={!! $linksitem->text !!}%20-%20{!! $linksitem->link !!}%20from%20%40SuperBerlin%20&url=http://www.SuperBerlin" target="_blank"><div class="links-share-twitter"><i class="fa fa-twitter"></i>&nbsp;twitter</div></a>
												<a href="https://www.facebook.com/sharer/sharer.php?u={!! $linksitem->link !!}" target="_blank"><div class="links-share-facebook"><i class="fa fa-facebook"></i>&nbsp;facebook</div></a>
												<a href="https://plus.google.com/share?url={!! $linksitem->link !!}" target="_blank"><div class="links-share-google"><i class="fa fa-google-plus"></i>&nbsp;google</div></a>
									</div>
			  				</a>
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

<div class="adside"><div class="aside-top"><div class="aside-img"><img src="images/ontario300x600.png" width="300" height="600"></div></div>

</div>

@stop

	

		
