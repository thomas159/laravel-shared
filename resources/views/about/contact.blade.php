@extends('layouts.multicontainer')
@section('title','Contact')
@section('content')

<style>
@media (min-width: 0px) and (max-width: 700px) {
.reviews-things-slug-fullwidth{background-image: url("../../images/fullwidth/mobile/burgermeister.jpg"); height:200px;}
}
@media (min-width: 700px) and (max-width: 1000px) {
.reviews-things-slug-fullwidth{background-image: url("../../images/fullwidth/desktop/burgermeister.jpg"); height:300px;}
}
@media (min-width: 1000px) and (max-width: 1600px) {
.reviews-things-slug-fullwidth{background-image: url("../../images/fullwidth/desktop/burgermeister.jpg"); height:400px;}
}
@media (min-width: 1600px) {
}
</style>
<div class="fullcontainer-image reviews-things-slug-fullwidth">
    <div class="reviews-things-slug-ab-fullcontainer">
        <div class="reviews-things-slug-ab-container">
            <div class="reviews-things-slug-ab-header">
                <h2>Contact</h2>
                
            </div>
        </div>
    </div>
</div>

<div class="aside">
    <div class="aside-top">
        <div class="aside-container-contact"><img src="../../images/sidebar/ford300x600.jpg" width="300" height="600"></div>
    </div>
</div>

<div class="fullcontainer-single">
    <div class="single-container">
        <div class="single-content">  
<!-- Only display on mobile -->
            <div class="display-mobile">
                <h2><span>CONTACT</span></h2>
            </div>
<!-- Only display on mobile -->   
            <div class="grid grid--flexcells grid--gutters grid--full gridsm--full gridmd--full gridlg--full">
                <div class="grid-cell" style="background:#fafafa;">
                    <div class="form-contact-wrap">
                        @if(Session::has('message'))
                            <div class="alert alert-info">
                              {{Session::get('message')}}
                            </div>
                        @endif
                        <ul>
                            @foreach($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>

                        {!! Form::open(array('route' => 'contact_store', 'class' => 'form')) !!}

                        <div class="form-group">
                            {!! Form::label('Name:') !!}
                            {!! Form::text('name', null, 
                                array('required', 
                                      'class'=>'form-control', 
                                      'placeholder'=>'Your name')) !!}
                        </div>

                        <div class="form-group">
                            {!! Form::label('Email:') !!}
                            {!! Form::text('email', null, 
                                array('required', 
                                      'class'=>'form-control', 
                                      'placeholder'=>'Your e-mail address')) !!}
                        </div>

                        <div class="form-group">
                            {!! Form::label('Message:') !!}
                            {!! Form::textarea('message', null, 
                                array('required', 
                                      'class'=>'form-control', 
                                      'placeholder'=>'Your message')) !!}
                        </div>

                        <div class="form-group">
                            {!! Form::submit('Contact Us!', 
                              array('class'=>'btn-submit')) !!}
                        </div>
                        {!! Form::close() !!}
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@stop