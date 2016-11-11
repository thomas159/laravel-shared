@extends('layouts.multicontainer')
@section('content')
<div class="fullcontainer">
  <div class="container">
    <div class="content"> 

     <h2><span>cost of living</span></h2>
      <div class="grid grid--flexcells grid--gutters grid--full gridsm--full gridmd--full gridlg--full">
      	<div class="grid-cell">
      		<div class="box">
          		<div class="vslondon-wrap">
          			<div class="vslondon-compare-info">Below is a price comparison of sainsburys supermarket in London and Aldi
          			in Berlin at exchange rate of &#8364;1 = £1.40</div>
      				<div class="vslondon-compare-header">
          				<div class="vslondon-compare-header-col1">Item</div>
      					<div class="vslondon-compare-header-col2">Price in Berlin</div>
      					<div class="vslondon-compare-header-col3">Price in London</div>   			
          			</div>

          			<div class="vslondon-compare">
          				<div class="vslondon-compare-col1">
          					<div class="vslondon-compare-item-row1">Eggs (18)</div>
      						<div class="vslondon-compare-item-row2">Milk 400g</div>
      						<div class="vslondon-compare-item-row1">Cheese 400g</div>
      						<div class="vslondon-compare-item-row2">Travelcard </div>
      						<div class="vslondon-compare-item-row1">Cheese 400g</div>
      						<div class="vslondon-compare-item-row2">Milk 400g</div>
          				</div>
          				<div class="vslondon-compare-col2">
          					<div class="vslondon-compare-price-row1">&#8364;2 (£1.85)</div>
      						<div class="vslondon-compare-price-row2">&#8364;1</div>
      						<div class="vslondon-compare-price-row1">&#8364;1</div>
      						<div class="vslondon-compare-price-row2">&#8364;74</div>
      						<div class="vslondon-compare-price-row1">&#8364;1</div>
      						<div class="vslondon-compare-price-row2">&#8364;1</div>
          				</div>
          				<div class="vslondon-compare-col3">
      						<div class="vslondon-compare-price-row1">£1.85</div>
      						<div class="vslondon-compare-price-row2">£1</div>
      						<div class="vslondon-compare-price-row1">£3</div>
      						<div class="vslondon-compare-price-row2">£123.60</div>
      						<div class="vslondon-compare-price-row1">Cheese 400g</div>
      						<div class="vslondon-compare-price-row2">Milk 400g</div>
          				</div>
       			
       				</div>
          		</div>
         		</div>
         	</div>
      </div><!---- flexbox end ---->

    </div>
  </div>
</div>



<div class="fullcontainer" style="background-image: url(../images/bg/ExampleHomePic.jpg); background-repeat:no-repeat; background-size:cover;">
  <div class="container">
    <div class="content"> 

      <h2><span>WEATHER</span></h2>
      <div class="grid grid--flexcells grid--gutters grid--full gridsm--full gridmd--1of2 gridlg--1of2">
      	<div class="grid-cell">
      		<div class="box">
          		<div class="vslondon-wrap">Berlin</div>
       			<div class="vslondon-compare">
       				<div class="vslondon-weather">
          				Jan - c</br>
       					Feb</br>
       					March</br>
       					April</br>
       					May</br>
       					June</br>
       					July</br>
       					August</br>
       					September</br>
       					October</br>
       					November</br>
       					December</br>
          			</div> 
          			<div class="vslondon-high">High</div>
          			<div class="vslondon-low">Low</div>
       			</div>
         		</div>
         	</div>
         	<div class="grid-cell">
      		<div class="box">
          		<div class="vslondon-wrap">London</div>
          		<div class="vslondon-compare">
          			<div class="vslondon-weather">
          				Jan - c</br>
       					Feb</br>
       					March</br>
       					April</br>
       					May</br>
       					June</br>
       					July</br>
       					August</br>
       					September</br>
       					October</br>
       					November</br>
       					December</br>
          			</div>
          			<div class="vslondon-high">High</div>
          			<div class="vslondon-low">Low</div>
         			</div>
         		</div>
         	</div>
      </div><!---- flexbox end ---->

    </div>
  </div>
</div>

<div class="fullcontainer">
  <div class="container">
    <div class="content"> 
<h2><span>housing</span></h2>
    </div>
  </div>
</div>

<div class="fullcontainer">
  <div class="container">
    <div class="content"> 
<h2><span>Alcohol</span></h2>
Breweries
Beers found in Berlin
    </div>
  </div>
</div>

<div class="aside">
  <div class="aside-top">
    <div class="aside-container"><img src="../../images/sidebar/ford300x600.jpg" width="300" height="600"></div>
  </div>
</div>
@stop
