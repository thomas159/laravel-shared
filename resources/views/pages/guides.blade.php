@extends('layouts.multicontainer')
@section('title', 'SuperBerlin - Reviews')
@section('content')
@if(isset($guides)) 
<div class="fullcontainer-single">
	<div class="container">
		<div class="reviews-content">	
			<div class="grid grid--flexcells grid--gutters grid--1of2 gridsm--full gridmd--1of2 gridlg--1of3 gridxl--1of4">
			@foreach ($guides as $guide)
				<div class="grid-cell">
					<a href="{!! URL::route('guides.guidesslug',[$guide->guidesslug] )  !!}">
						<img class="img-round" src="http://gdurl.com/{!! $guide->img !!}" />
						<div class="guides-header">{!! $guide->title !!}</div>
					</a>
				</div>
			@endforeach
			</div>
		</div>
	</div>
</div>

@elseif(isset($guidesslugs) && $guidesslugs->guidesslug == 'area-guide')

 

<div class="fullcontainer-diag-title"><h2>AREA guide</h2></div>



@foreach($areas as $area)



<div class="fullcontainer">
    <div class="container">
        <div class="content">




 
           

        	<div class="grid-cell"><h3>{!! $area->title !!}</h3></div>
        	<div class="grid-cell"><img class="img-full" src="http://gdurl.com/{!! $area->mainimg !!} "/></div>

          	<div class="grid grid--flexcells  grid--full gridsm--full gridmd--full gridlg--full gridxl--full">
                        <div class="grid-cell">{!! $area->blurb !!}</div>
            </div>
            <div class="grid-cell">
             	<iframe src="{!! $area->map !!}" width="100%" height="400" frameborder="0" style="border:0" allowfullscreen></iframe>
            </div>

             
                <div class="grid grid--flexcells grid--gutters grid--1of2 gridsm--full gridmd--1of2 gridlg--1of3 gridxl--1of4">
                    @foreach ($area->areaimages as $areaimage)
                               <div class="grid-cell"><img class="img-full" src="http://gdurl.com/{!! $areaimage->mobile !!}"></div>
                         
                    @endforeach
                </div>
            <a href="{!! URL::route('gallery.galleryslug', [ $area->title ]) !!}">
                <div class="grid-cell">for more images head over to the {!! $area->gallery !!} gallery..</div>         
</a>
        </div>
    </div>
</div>
@endforeach
<!--

    <div id="methods">
      <a href="{!! $areaimage->mobile !!}">
          <img src="{!! $areaimage->mobile !!}" />
      </a>
      <a href="{!! $areaimage->mobile !!}">
          <img src="{!! $areaimage->mobile !!}" />
      </a>
      ...
    </div>


                                <script>

    var $methods = $('#methods');
    var slide = '<a href="{!! $areaimage->mobile !!}">' +
        '<img src="{!! $areaimage->mobile !!}" />' +
    '</a>';
     
    $methods.lightGallery();
    $('#appendSlide').on('click', function() {
        $methods.append(slide);
        $methods.data('lightGallery').destroy(true);
        $methods.lightGallery();
    });
</script>   
-->



@elseif(isset($guidesslugs) && $guidesslugs->guidesslug == 'supermarket-guide')
<style>
.guides-fullwidth{background-image: url("http://gdurl.com/X55d")}
.guides-fullwidth2{background-image: url("http://gdurl.com/6QwX")}
.guides-fullwidth3{background-image: url("../images/guides/aldi.jpg")}
.guides-fullwidth4{background-image: url("../images/guides/kaisers.jpg")}
}
</style>

<div class="fullcontainer-diag-title"><h2>Supermarket Guide</h2></div>
<div class="fullcontainer-diag-after blue">
    <div class="container">
        <div class="content">
Finding sugar free items in Berlin can be a struggle, albeit not much fo a surprise given every here seems to smoke
		</div>
	</div>
</div>

<div class="fullcontainer-image guides-fullwidth"></div>
<div class="fullcontainer white">
    <div class="container">
        <div class="content">

        	   

			<div class="grid-cell"><h3> Kaufland</h3></div>
  			<div class="grid grid--flexcells grid--gutters grid--full gridsm--full gridmd--full gridlg--full gridxl--1of2">
                <div class="grid-cell">
                	<img class="img-round" src="../images/guides/soda.jpg" />
                	<div class="guides-text grey">A range of sode stream cordials are availoable at kaufland containing between 2cal per 100ml - 15cal per 100ml and at only 2.29 these are better value for money than tri-top</div>
                </div>
               	<div class="grid-cell">
                	<img class="img-round" src="../images/guides/soda.jpg" />
                	<div class="guides-text grey">A range of sode stream cordials are availoable at kaufland containing between 2cal per 100ml - 15cal per 100ml and at only 2.29 these are better value for money than tri-top</div>
                </div>
            </div>

            <div class="grid-cell"><iframe src="https://www.google.com/maps/embed?pb=!1m16!1m12!1m3!1d77694.9282609013!2d13.365423955503807!3d52.51594518115823!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!2m1!1srewe!5e0!3m2!1sen!2suk!4v1456420469923" width="100%" height="400" frameborder="0" style="border:0" allowfullscreen></iframe></div>

        </div>
    </div>
</div>

<div class="fullcontainer-image hero guides-fullwidth2"></div>
<div class="fullcontainer-diag dark-blue">
    <div class="container">
        <div class="content">

			<div class="grid-cell"><h3> REWE</h3></div>
  			<div class="grid grid--flexcells grid--gutters grid--full gridsm--full gridmd--full gridlg--full gridxl--1of2">
                <div class="grid-cell">
                	<img class="img-round" src="../images/guides/soda.jpg" />
                	<div class="guides-text white">A range of sode stream cordials are availoable at kaufland containing between 2cal per 100ml - 15cal per 100ml and at only 2.29 these are better value for money than tri-top</div>
                </div>
               	<div class="grid-cell">
                	<img class="img-round" src="../images/guides/soda.jpg" />
                	<div class="guides-text white">A range of sode stream cordials are availoable at kaufland containing between 2cal per 100ml - 15cal per 100ml and at only 2.29 these are better value for money than tri-top</div>
                </div>
            </div>

        </div>
    </div>
</div>

<div class="fullcontainer-image hero guides-fullwidth3"></div>
<div class="fullcontainer-diag dark-blue">
    <div class="container">
        <div class="content">

			<div class="grid-cell"><h3> ALDI</h3></div>
  			<div class="grid grid--flexcells grid--gutters grid--full gridsm--full gridmd--full gridlg--full gridxl--1of2">
                <div class="grid-cell">
                	<img class="img-round" src="../images/guides/soda.jpg" />
                	<div class="guides-text white">A range of sode stream cordials are availoable at kaufland containing between 2cal per 100ml - 15cal per 100ml and at only 2.29 these are better value for money than tri-top</div>
                </div>
               	<div class="grid-cell">
                	<img class="img-round" src="../images/guides/soda.jpg" />
                	<div class="guides-text white">A range of sode stream cordials are availoable at kaufland containing between 2cal per 100ml - 15cal per 100ml and at only 2.29 these are better value for money than tri-top</div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="fullcontainer-image hero guides-fullwidth4"></div>
<div class="fullcontainer white">
    <div class="container">
        <div class="content">

			<div class="grid-cell"><h3> Kaisers</h3></div>
  			<div class="grid grid--flexcells grid--gutters grid--full gridsm--full gridmd--full gridlg--full gridxl--1of2">
                <div class="grid-cell">
                	<img class="img-round" src="../images/guides/soda.jpg" />
                	<div class="guides-text grey">A range of sode stream cordials are availoable at kaufland containing between 2cal per 100ml - 15cal per 100ml and at only 2.29 these are better value for money than tri-top</div>
                </div>
               	<div class="grid-cell">
                	<img class="img-round" src="../images/guides/soda.jpg" />
                	<div class="guides-text grey">A range of sode stream cordials are availoable at kaufland containing between 2cal per 100ml - 15cal per 100ml and at only 2.29 these are better value for money than tri-top</div>
                </div>
            </div>

            <div class="grid-cell"><iframe src="https://www.google.com/maps/embed?pb=!1m16!1m12!1m3!1d77694.9282609013!2d13.365423955503807!3d52.51594518115823!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!2m1!1srewe!5e0!3m2!1sen!2suk!4v1456420469923" width="100%" height="400" frameborder="0" style="border:0" allowfullscreen></iframe></div>

        </div>
    </div>
</div>

@elseif(isset($guidesslugs) && $guidesslugs->guidesslug == 'beers')
 <div class="fullcontainer-title"><h2>Beers of edeka</h2></div>
    <div class="fullcontainer-diag">
        <div class="container">
            <div class="content">
                <div class="grid grid--flexcells grid--gutters grid--1of2 gridsm--full gridmd--1of2 gridlg--full gridxl--1of4">
                    <div class="grid-cell">
                        <div class="reviews-hd"><h4>1</h4></div>
                        <div class="beer-name"> Lowenbrau</div>
                    </div>
                    <div class="grid-cell">
                        <div class="reviews-hd"><h4>2</h4></div>
                    </div>
                    <div class="grid-cell">
                        <div class="reviews-hd"><h4>3</h4></div>
                    </div>
                    <div class="grid-cell">
                        <div class="reviews-hd"><h4>4</h4></div>
                    </div>
                    <div class="grid-cell">
                        <div class="reviews-hd"><h4>5</h4></div>
                    </div>
                    <div class="grid-cell">
                        <div class="reviews-hd"><h4>6</h4></div>
                    </div>
                </div>
            </div>
        </div>
    </div>


@endif
@stop
