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
                {!! HTML::LINK('guides','GUIDES') !!}
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
                {!! HTML::LINK('contact','contact') !!}
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
                        {!! HTML::LINK('contact','contact') !!}
                    </li>
                    <li class="main-menu-li">
                        {!! HTML::LINK('links','links') !!}
                    </li>
                    <li class="main-menu-li">
                        {!! HTML::LINK('guides','guides') !!}
                    
                    <!--<li class="main-menu-li">{!! HTML::LINK('vslondon','VS LONDON') !!}</li> -->
                    <li class="main-menu-li">{!! HTML::LINK('gallery','gallery') !!}</li> 
                    <li class="main-menu-li">{!! HTML::LINK('blog','blog') !!}</li>
                    <!--<li class="main-menu-li">{!! HTML::LINK('reviews','REVIEWS') !!}</li>   -->
                    <li class="main-menu-li">{!! HTML::LINK('news','news') !!}</li>  
                </ul>
            </nav>   
    </div>
</div>
</header>


