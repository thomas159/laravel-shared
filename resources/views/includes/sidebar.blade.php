<!-- sidebar nav -->
@if(isset($reviews)) 
<div class="aside">
	<div class="aside-top">
		<div class="aside-container-reviews">
			<div class="reviews-filter-wrap">
				<div class="reviews-filter-price"><h5>Price</h5></div>
				<div class="reviews-filter-price">
					<input type="checkbox" class="checkbox priceFilter" name="low" data-category-type="low" id="c1" name="cc" /><label for="c1"><span></span>&nbsp;<i class="fa fa-gbp">&nbsp;</i></label>
					<input type="checkbox" class="checkbox priceFilter" name="medium" data-category-type="medium" id="c2" name="cc" /><label for="c2"><span></span>&nbsp;&nbsp;<i class="fa fa-gbp"></i>&nbsp;<i class="fa fa-gbp">&nbsp;</i></label>
					<input type="checkbox" class="checkbox priceFilter" name="High" data-category-type="high" id="c3" name="cc" /><label for="c3"><span></span>&nbsp;&nbsp;<i class="fa fa-gbp"></i>&nbsp;<i class="fa fa-gbp"></i>&nbsp;<i class="fa fa-gbp">&nbsp;</i></label>
				</div>
				<div class="reviews-filter-area"><h5>Area</h5></div>
				<div class="reviews-filter-area">
					<input type="checkbox" class="checkbox areaFilter" name="north" data-category-name="north" id="c4" name="cc" /><label for="c4"><span></span>North</label>
			        <input type="checkbox" class="checkbox areaFilter" name="south" data-category-name="south" id="c5" name="cc" /><label for="c5"><span></span>East</label>
			        <input type="checkbox" class="checkbox areaFilter" name="south" data-category-name="south" id="c6" name="cc" /><label for="c6"><span></span>South</label>
			        <input type="checkbox" class="checkbox areaFilter" name="west" data-category-name="west" id="c7" name="cc" /><label for="c7"><span></span>West</label>
				</div>
			</div>
			<img src="../../images/sidebar/ford300x600.jpg" width="300" height="600"></div>
	</div>
</div>
@elseif(isset($slugs))
<div class="aside">
	<div class="aside-top">
		<div class="aside-container-reviews-slug"><img src="../../images/sidebar/ford300x600.jpg" width="300" height="600"></div>
	</div>
</div>
<!-- Blog -->
@elseif(isset($posts))
<div class="aside">
	<div class="aside-top">
		<div class="aside-container"><img src="../../images/sidebar/ford300x600.jpg" width="300" height="600"></div>
	</div>
</div>
@elseif(isset($postslugs))
<div class="aside">
	<div class="aside-top">
		<div class="aside-container-reviews-slug"><img src="../../images/sidebar/ford300x600.jpg" width="300" height="600"></div>
	</div>
</div>
<!-- Guides -->
@elseif(isset($guidesslugs) && $guidesslugs->guidesslug == 'area-guide')
<div class="aside">
	<div class="aside-top">

		<div class="aside-container">
		
			
			<img src="../../images/sidebar/ford300x600.jpg" width="300" height="600">
		</div>
	</div>
</div>
<!-- Links -->
@elseif(isset($links))
<div class="aside">
	<div class="aside-top">

		<div class="aside-container">
		
			
			<img src="../../images/sidebar/ford300x600.jpg" width="300" height="600">
		</div>
	</div>
</div>
<!-- Gallery -->
@elseif(isset($albums))
<div class="aside">
	<div class="aside-top">
		<div class="aside-container"><img src="../../images/sidebar/ford300x600.jpg" width="300" height="600"></div>
	</div>
</div>
@elseif(isset($galleryslugs))
<div class="aside">
	<div class="aside-top">
		<div class="aside-container"><img src="../../images/sidebar/ford300x600.jpg" width="300" height="600"></div>
	</div>
</div>
@endif 		