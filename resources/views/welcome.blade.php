@extends('layouts.app')
@section('nav-links')
<ul class="nav navbar-nav">
    <li class="active dropdown"><a href="{{ url('/') }}" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Our Wedding</a>
        <ul class="dropdown-menu">
            <a href="#ourstory">Our Story</a>
            <a href="#ourwedding">Our Wedding</a>
            <a href="#weddingparty">Wedding Party</a>
        </ul>
    </li>
    <li class="dropdown"><a href="{{ url('/details') }}" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Details</a>
        <ul class="dropdown-menu">
            <a href="details#grand">Accommodations</a>
            <a href="details#travel1">Travel</a>
            <a href="details#todo1">Things To Do</a>
        </ul>
    </li>
    <li><a href="{{ url('/photos') }}">Photos</a></li>
    <li><a href="{{ url('/registry') }}">Registry</a></li>
    <li><a href="{{ url('/rsvp') }}">RSVP</a></li>
</ul>
@endsection
@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="top main-image">
                <img src="images/jh_engagement_jump_web.jpg" class="img-responsive center-block">
                <h1 class="center">Chris and Rachel</h1>
                <h4 class="center">December 9th, 2016</h4>
                <h4 class="center">Bedford, NH</h4>

            </div>
            <div class="item-separator"></div>
            <div id="ourstory">
        		<h2>Our Story</h2>
        		<h3>How we met</h3>
                <p>Chris and Rachel met on a ski trip in Austria back in March of 2014.</p>
        		<div class="main-image">
	                <img src="images/austria2.jpg" class="img-responsive center-block">
	                <br>
            	</div>
            	<div class="padding-top">
            		<h3>Our proposal</h3>
            		<p>Chris proposed on the top of Jackson Hole Mountain Resort on March 7th, 2016!</p>
            	</div>
        	</div>
            <div class="item-separator"></div>
        	<div id="ourwedding" class="padding-top">
        		<div>
	        		<h1>Our Wedding</h1>
                    <h3>Ceremony and Reception</h3>
	        		<h4>Friday, December 9, 2016</h4>
	        		<h4>5:00 PM</h4>
                    <h4>
                        <a href="http://www.bedfordvillageinn.com/mapDirections-en.html">Bedford Village Inn</a>
                    </h4>
                    <h4>Bedford, NH</h4>
	        		<a href="rsvp" class="btn btn-info">RSVP</a>        			
        		</div>
				<div class="padding-top">
                    <div class="main-image">
                        <img src="images/bvi.jpg" class="img-responsive center-block">
                    </div>
				</div>
                <div class="item-separator"></div>
<!-- 				<div class="padding-top">
					<h3>Reception</h3>
					<h4>Bedford Village Inn</h4>
					<h4>Bedford, NH</h4>
				</div> -->
                <div id="weddingparty" class="padding-top">
                    <h1>Wedding Party</h1>
                    <h4 class="pull-left">Rebecca Lindmark - Maid of Honor</h4><br><br>
                    <p class="pull-left text-left">Rebecca is Rachel's sister and best friend.</p>
                    <div class="padding-top"></div>
                    <h4 class="pull-left">Randy Black - Best Man</h4><br><br>
                    <p class="pull-left text-left">Chris and Randy have known each other since they were 2 years old and have now been friends for 30 years!</p><br><br>
                </div>
        	</div>
        </div>
    </div>
</div>

@endsection
