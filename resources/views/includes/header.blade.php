<header>
<div class="headerb">Vibrnt Vienna
        </div>

<div class="headera">
    <div class="container">
        <div id="logo">Vibrnt Vienna
        </div>

             <ul class="nav">
                 <li>
                {!! HTML::LINK('/','HOME') !!}
            </li>
            <li>
                {!! HTML::LINK('news','NEWS') !!}
            </li>
            <li>
                {!! HTML::LINK('blog','BLOG') !!}
            </li>
            <li>
                {!! HTML::LINK('gallery','GALLERY') !!}
            </li>
            <li>
                {!! HTML::LINK('links','LINKS') !!}
            </li>
            <li>
                {!! HTML::LINK('guides','GUIDES') !!}
            </li>
            

            </ul>
    </div>
</div>


<!--
<div class="hold">
    <div class="header">
        <div class="headercontainer">
            <div id="logo">
            </div>
             <ul class="nav">
                <li><a href="#">Wow</a></li>
                <li><a href="#">Wow</a></li>
                <li><a href="#">Wow</a></li>
                <li><a href="#">Wow</a></li>

            </ul>

        </div>
    </div>
</div>
-->

<div class="mobheader">LOGO <div id="dl-menu" class="dl-menuwrapper">
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

</div>


</header>


