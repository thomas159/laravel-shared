<div class="grid-cell"><h2>THINGS TO DO</h2></div>

<div class="grid grid--flexcells grid--gutters grid--1of2 gridsm--full gridmd--1of2 gridlg--1of3 gridxl--1of4">
				@foreach($thingstodos as $thingstodo)
				<!--reviews--> 
					<div class="grid-cell">
						<a href="{!! URL::route('thingstodo.thingstodoslug',[$thingstodo->categorys->cat,$thingstodo->thingstodoslug] )  !!}">
						<div class="box-border">
							<img class="img-round" src="../../images/mobile/{!! $thingstodo->img !!}.jpg" />
							<div class="thingstodo-header"><h4>{!! $thingstodo->header !!}</h4></div>	
						</div>
						</a>
					</div>	
				@endforeach
				</div>