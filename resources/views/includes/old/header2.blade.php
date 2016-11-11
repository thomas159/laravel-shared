<header> 
<div class="nav-container">
    <div class="nav-mobile-container">
        <div class="nav-mobile-logo">
            <a href="/">{!! HTML::image('images/mobilelogo.png') !!}</a>
        </div>
    </div>

    <div id="dl-menu" class="dl-menuwrapper">
        <button class="dl-trigger">Open Menu</button>
        <ul class="dl-menu">
            <li>
                {!! HTML::LINK('/','HOME') !!}
            </li>
            <li>
                {!! HTML::LINK('reviews','NEWS') !!}
            </li>
            <li>
                {!! HTML::LINK('blog','BLOG') !!}
            </li>
            <li>
                {!! HTML::LINK('gallery','GALLERY') !!}
            </li>
            <li>
                {!! HTML::LINK('vslondon','VSLONDON') !!}
            </li>
            <li>
                {!! HTML::LINK('links','LINKS') !!}
                <ul class="dl-submenu">
                    <li>{!! HTML::LINK('links','ALL') !!}</li>
                    <li>{!! HTML::LINK('links#2nd hand items','2ND HAND ITEMS') !!}</li>
                    <li>{!! HTML::LINK('links#cycling','CYCLING') !!}</li>
                    <li>{!! HTML::LINK('links#money','MONEY') !!}</li>
                    <li>{!! HTML::LINK('links#language schools','LANGUAGE SCHOOLS') !!}</li>
                    <li>{!! HTML::LINK('links#blogs','BLOGS') !!}</li>
                    <li>{!! HTML::LINK('links#renting','RENTING') !!}</li>
                </ul>
            </li>
            <li>
                {!! HTML::LINK('thingstodo','THINGS TO DO') !!}
                <ul class="dl-submenu">
                    <li>
                        <li>{!! HTML::LINK('thingstodo','ALL') !!}</li>
                        <li>{!! HTML::LINK('thingstodo/bars/craft-beer','CRAFT BEER') !!}</li>
                    </li>
                </ul>
            </li>
            <li>
                {!! HTML::LINK('contact','CONTACT') !!}
            </li>
        </ul>
    </div><!-- /dl-menuwrapper -->

<div class="nav-container">
    <div class="nav-inner-container">
        <div class="xs-menu-cont"></div>
            <nav class="menu">
                <a href="/"><div class="logo">{!! HTML::image('images/logo.png') !!}</div></a>
                <ul>
                    <li class="main-menu-li">
                        {!! HTML::LINK('contact','CONTACT') !!}
                    </li>
                    <li class="main-menu-li">
                        {!! HTML::LINK('links','LINKS') !!}
                    </li>
                    <li class="main-menu-li">
                        {!! HTML::LINK('guides','GUIDES') !!}
                    </li>
                    <li class="drop-down">
                        {!! HTML::LINK('thingstodo','THINGS TO DO') !!}
                    <div class="mega-menu">
                        <div class="grid grid--flexcells grid--gutters grid--full gridsm--full gridmd--1of1 gridlg--1of1 gridxl--1of6">
                            <div class="grid-cell">
                                <div class="box-border">
                                    <img class="img-full" src="images/menu/spreewald.jpg">
                                </div>
                            </div>
                            <div class="grid-cell">
                                <div class="menu-content"><A href="#">Countryside walks near Berlin</A></div>
                                <div class="menu-content"><A class="sub-menu-item" href="#">Spreewald</A></div>
                                <div class="menu-content"><A class="sub-menu-item" href="#">Schewin</A></div>
                                <div class="menu-content"><A href="#">Potsdam</A></div>  
                            </div>
                            <div class="grid-cell">
                                <div class="box-border">
                                    {!! HTML::image('images/menu/market.jpg', 'a picture', array('class' => 'img-full')) !!}
                                <div class="menu-content"><A href="#">Markets of Berlin</A></div>
                                </div>
                            </div>
                            <div class="grid-cell">                       
                                  <div class="menu-content"><A class="sub-menu-item" href="#">Winterfeldplatz</A></div>
                                  <div class="menu-content"><A href="#">Neukolln</A></div>
                                  <div class="menu-content"><A class="sub-menu-item" href="#">Thai Market at tempelhof</A></div>
                                  <div class="menu-content"><A href="#">Potsdam</A></div>
                              </div>
                            <div class="grid-cell">
                                <div class="box-border">
                                    <img class="img-full" src="images/menu/brauhaus.jpg">
                                    <div class="menu-content"><A href="#">Craft Beer in Berlin</A></div>
                                </div>
                            </div>
                            <div class="grid-cell">
                                <div class="box-border">
                                Walks in Berlin
                                </div>
                            </div>
                        </div>
                    </div><!-- Mega Menu-->
                    <li class="main-menu-li">{!! HTML::LINK('vslondon','VS LONDON') !!}</li>
                    <li class="main-menu-li">{!! HTML::LINK('gallery','GALLERY') !!}</li> 
                    <li class="main-menu-li">{!! HTML::LINK('blog','BLOG') !!}</li>
                    <li class="main-menu-li">{!! HTML::LINK('reviews','REVIEWS') !!}</li>   
                    <li class="main-menu-li">{!! HTML::LINK('news','NEWS') !!}</li>  
                </ul>
            </nav>   
    </div>
</div>
</header>


