<!-- lightgallery plugins -->
<script type="text/javascript">
    $(document).ready(function() {
        

    

    var $lg = $('#lightgallery');
     
    $lg.lightGallery();
     
    // Go to third slide
    // Index starts from 0
   
 

    $('.lightbox').data('lightGallery').destroy(true);
     });

//$lg.on('onBeforeClose.lg',function(event){
  //  $('.lightbox').data('lightGallery').destroy(true);;	
    
     

  //  var $lg = $('#lightgallery');
     
 //   $lg.lightGallery();
     
    // Go to third slide
    // Index starts from 0
  //  $lg.on('onCloseAfter.lg',function(event, index, fromTouch, fromThumb){
  //  $lg.data('lightGallery').destroy(true);	
  //  }
    

   
</script>

<!-- mob ad -->
<script>
	$(document).on("scroll", function(){
		if
      ($(document).scrollTop() > 100){
		  $(".headera").addClass("shrink");
		  $(".headerb").addClass("heightnone");
			updateSliderMargin();
		}
		else
		{
			$(".headera").removeClass("shrink");
			$(".headerb").removeClass("heightnone");
			updateSliderMargin();
		}
	});
</script>

<script src="/lightgallery/dist/js/lightgallery.min.js"></script>   
<script src="/lightgallery/dist/js/lg-thumbnail.min.js"></script>
<script src="/lightgallery/dist/js/lg-fullscreen.min.js"></script>

<!-- Hero Slider -->
<script src="js/hero-slider/js/jquery-2.1.1.js"></script>
<script src="js/hero-slider/js/main.js"></script> 
<script src="js/hero-slider/js/reviews.js"></script> 
<script src="js/hero-slider/js/todo.js"></script> 
<!-- Fixed NAV -->

{!! HTML::script('/nav/js/fastclick.js') !!}
{!! HTML::script('/nav/js/scroll.js') !!}
{!! HTML::script('/nav/js/fixed-responsive-nav.js') !!}
<!-- reviews filter -->
{!! HTML::script('/js/all.js') !!}
{!! HTML::script('/js/hide.js') !!}
<!-- Mobile Menu -->
{!! HTML::script('/js/jquery.dlmenu.js') !!}
<script>
$(function() {
$( '#dl-menu' ).dlmenu();
});
</script>

<!-- Mega Menu -->
  {# HTML::script('/js/megamenu.js') #}
