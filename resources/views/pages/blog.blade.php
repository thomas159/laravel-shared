@extends('layouts.multicontainer')
@section('title','Blog')
@section('content')

@if(isset($posts)) 
<div class="fullcontainer-single">
    <div class="container">
        <div class="content"> 
            <div class="grid grid--flexcells grid--gutters grid--full gridsm--full gridmd--full gridlg--full gridxl--1of3">
            @foreach ($posts as $post)
                <div class="grid-cell">
                    <a href="{!! URL::route('post.postslug',$post->postslug )  !!}">
                        <img class="img-round" src="../../images/blog/{{ $post->img}}.jpg" />
                            <div class="blog-header"><h4>{!! $post->header !!}</h4></div>
                            <div class="blog-info">
                                    <div class="blog-posted">Posted by Sarah Ambridge</div>
                                    <div class="blog-date">1st Feb 2016</div>
                            </div>
                        <div class="blog-text">{!! str_limit($post->content, $limit = 500) !!}</div>
                  </a>
                </div>
           @endforeach
      </div>
      <div class="clear-fix"></div>
   </div>
  </div>
</div>

@elseif(isset($postslugs)) 
@foreach($postslugs as $postslug)
      <style>
@media (min-width: 0px) and (max-width: 700px) {
.reviews-fullwidth{background-image: url("../../images/fullwidth/mobile/{!! $postslug->fullwidthimg !!}.jpg")}
}
@media (min-width: 700px) and (max-width: 1000px) {
}
@media (min-width: 1000px)  {
.reviews-fullwidth{background-image: url("../../images/fullwidth/desktop/burgermeister.jpg")}

}
</style>
<div class="fullcontainer-image reviews-fullwidth">
    <div class="reviews-things-slug-ab-fullcontainer">
        <div class="reviews-things-slug-ab-container">
            <div class="reviews-things-slug-ab-header">
                <h2>{!! $postslug->header !!}</h2>
            </div>
        </div>
    </div>
</div>

<div class="fullcontainer-single">
  <div class="single-container">
    <div class="single-content">  
<!-- Only display on mobile -->
      <div class="display-mobile">
        <h2><span>{!! $postslug->header !!}</span></h2>
      </div>
<!-- Only display on mobile --> 
      <div class="blog-box">  
        <div class="grid grid--flexcells grid--gutters grid--full gridsm--full gridmd--full gridlg--full">
          <div class="grid-cell"> 
            <div class="reviews-slug-content">{!! $postslug->content !!} </div>
          </div>
        </div> <!--grid end-->
      </div>
      

   
      </div>
@endforeach
    </div>
  </div>
</div>
  
@endif

<div class="fullcontainer-single">
  <div class="single-container">
    <div class="">  
@if(isset($posts)) 
 <?php echo $posts->render(); ?>
@elseif(isset($months)) 
 <?php echo $months->links(); ?>
@endif
   </div>
  </div>
</div>
@stop

@section('sidebar')
@stop

