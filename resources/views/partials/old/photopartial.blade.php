<h2><span>PHOTOS</span></h2>
<div class="grid grid--flexcells grid--gutters grid--full gridsm--full gridmd--full gridlg--1of2">
	@foreach($ids as $id)
	<div class="grid-cell">
		<img class="u-full-width" src="../../images/{{ $id->img }}" height="auto">
	</div>
	@endforeach
</div>	

