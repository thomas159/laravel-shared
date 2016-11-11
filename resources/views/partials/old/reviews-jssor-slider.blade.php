     <style>
@media (min-width: 0px) and (max-width: 700px) {
.reviews-slider-slide1{ width:100%; height:400px;background-image: url("../../images/reviews/fullwidth/mobile/burgermeister.jpg"); background-position: center;
background-repeat: no-repeat; }
.slides-container{cursor: move; position: absolute; left: 0px; top: 0px; width: 700px; height: 400px; overflow: hidden; }
}
@media (min-width: 700px) and (max-width: 1600px) {
.reviews-slider-slide1{background-image: url("../../images/reviews/fullwidth/full/burgermeister.jpg"); background-position: center;
                        background-repeat: no-repeat; }
.slides-container{cursor: move; position: relative; left: 0px; top: 0px; width: 1600px; height: 400px; overflow: hidden; }

}
@media (min-width: 1600px) {
}
</style>


  <div id="slider1_container" style="position: relative; margin: 0 auto;
        top: 0px; left: 0px; width: 1400px; height: 400px; overflow: hidden;">
        <!-- Loading Screen -->
        <div u="loading" style="position: absolute; top: 0px; left: 0px;">
            <div style="filter: alpha(opacity=70); opacity: 0.7; position: absolute; display: block;
                top: 0px; left: 0px; width: 100%; height: 100%;">
            </div>
            <div style="position: absolute; display: block; background: url(../img/loading.gif) no-repeat center center;
                top: 0px; left: 0px; width: 100%; height: 100%;">
            </div>
        </div>
        <!-- Slides Container -->
        <div u="slides" class="slides-container">
             <div class="reviews-slider-slide1">
            <a href="reviews/restaurants/this-is-a-test">
                <div style="width:1300px; height:450px;">
                    <div style="position: absolute; color:#fff; background:#282828; padding:10px; bottom: 40px; 
                    left: 0px; opacity:0.7; width:auto"><h3>We review Burgermeisters burgers</h3>
                    </div>
            </div>
             </a>
        </div>
            <div>
                <img u="image" src="../js/jssor/img/purple.jpg" />
               
                <div style="position: absolute; width: 480px; height: 120px; top: 300px; left: 30px; padding: 5px;
                    text-align: left; line-height: 36px; font-size: 30px;
                        color: #FFFFFF;">
                        Build your slider with anything, includes image, content, text, html, photo, picture
                </div>
            </div>
            <div>
                <img u="image" src="../js/jssor/img/blue.jpg" />
                
                <div style="position: absolute; width: 480px; height: 120px; top: 300px; left: 30px; padding: 5px;
                    text-align: left; line-height: 36px; font-size: 30px;
                        color: #FFFFFF;">
                        Build your slider with anything, includes image, content, text, html, photo, picture
                </div>
            </div>
        </div>
                
        <!--#region Bullet Navigator Skin Begin -->
        <!-- Help: http://www.jssor.com/development/slider-with-bullet-navigator-jquery.html -->
        <style>
           
        </style>
        <!-- bullet navigator container -->
        <div u="navigator" class="jssorb21" style="bottom: 6px; right: 6px;">
            <!-- bullet navigator item prototype -->
            <div u="prototype"></div>
        </div>
        <!--#endregion Bullet Navigator Skin End -->
        
        <!--#region Arrow Navigator Skin Begin -->
        <!-- Help: http://www.jssor.com/development/slider-with-arrow-navigator-jquery.html -->
        <style>
    
        </style>
        <!-- Arrow Left -->
        <span u="arrowleft" class="jssora21l" style="top: 123px; left: 8px;">
        </span>
        <!-- Arrow Right -->
        <span u="arrowright" class="jssora21r" style="top: 123px; right: 8px;">
        </span>
        <!--#endregion Arrow Navigator Skin End -->
        <a style="display: none" href="http://www.jssor.com">Image Slider</a>
    </div>
    <!-- Jssor Slider End -->