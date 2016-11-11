@extends('layouts.multicontainer')
@section('content')


@if(isset($albums)) 
<div class="fullcontainer-single">
    <div class="container">
        <div class="content">
            <div class="grid grid--flexcells grid--gutters grid--full gridsm--full gridmd--1of2 gridlg--1of2 gridxl--1of3">
                @foreach ($albums as $album)
                    <div class="grid-cell">
                        <a href="{!! URL::route('gallery.galleryslug', [$album->galleryslug]) !!}">
                        <img class="img-round" src="http://gdurl.com/{!! $album->img !!}">
                        <div class="gallery-text">{!! $album->title !!}</div>
                        </a>
                    </div>        
            	@endforeach
            </div>
        </div>
    </div>
</div>
@elseif(isset($galleryslugs)) 
    @foreach ($galleryslugs as $galleryslug)
    <div class="fullcontainer-diag-title"><h2>{!! $galleryslug->title !!}</h2></div>
        <div class="fullcontainer-single">
            <div class="container">
                <div class="content">
                    <div class="reviews-things-slug-box-images">
                        <div class="grid grid--flexcells grid--gutters0 grid--full gridsm--full gridmd--1of1 gridlg--1of1">
                            <div class="grid-cell">
                                <div class="reviews-slug-box-images">
                                    <div class="demo-gallery-wrap">
                                        <div class="demo-gallery">
                                            <ul id="lightgallery" class="list-unstyled row">
                                                @foreach ($galleryslug->images as $image)
                                                 <li class="grid-cell" data-responsive="http://gdurl.com/{!! $image->mobile !!} 700, http://gdurl.com/{!! $image->desktop !!} 1000" data-src="http://gdurl.com/{!!  $image->desktop !!}" data-sub-html="<h4>Bowness Bay</h4><p>A beautiful Sunrise this morning taken En-route to Keswick not one as planned but I'm extremely happy I was passing the right place at the right time....</p>">          
                                <a href="http://gdurl.com/{!! $image->desktop !!}">
                                <img class="img-full" src="http://gdurl.com/{!! $image->mobile !!}" >
                                </a>
                                </li>    
                                                @endforeach
                                                @endforeach
                                            </ul>
                                        </div>
                                    </div>
                                </div>    
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>


    @endif
@stop

