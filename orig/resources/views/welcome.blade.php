@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="top main-image">
                <img src="images/jh_engagement_jump.jpg" class="img-responsive center-block">
                <h1 class="center">Chris and Rachel</h1>
                <h5 class="center">December 9th, 2016</h5>
                <h5 class="center">Bedford, NH</h5>
				<div id="clockdiv">
				  <div>
				    <span class="days"></span>
				    <div class="smalltext">days to go!</div>
				  </div>
				</div>
            </div>
            <div id="story">
        		<h2>Our Story</h2>
        		<h3>How we met</h3>
        		<div class="main-image">
	                <img src="images/austria2.jpg" class="img-responsive center-block">
	                <br>
	                <p>Chris and Rachel met on a ski trip in Austria back in March of 2014.</p>
            	</div>
            	<div class="padding-top">
            		<h3>Our proposal</h3>
            		<p>Chris proposed on the top of Jackson Hole Mountain Resort on March 7th, 2016!</p>
            	</div>
        	</div>
        	<div id="wedding" class="padding-top">
        		<div>
	        		<h2>Our Wedding</h2>
	        		<h4>Friday, December 9, 2016</h4>
	        		<h4>5:00 PM</h4>
	        		<button>RSVP</button>        			
        		</div>
				<div class="padding-top">
					<h3>Ceremony</h3>
					<h4>Bedford Village Inn</h4>
					<h4>Bedford, NH</h4>
				</div>
				<div class="padding-top">
					<h3>Reception</h3>
					<h4>Bedford Village Inn</h4>
					<h4>Bedford, NH</h4>
				</div>
        	</div>
        </div>
    </div>
</div>
@endsection
