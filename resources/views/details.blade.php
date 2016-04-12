@extends('layouts.app')
@section('nav-links')
<ul class="nav navbar-nav">
    <li class="dropdown"><a href="{{ url('/') }}" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Our Wedding</a>
        <ul class="dropdown-menu">
            <a href="./#ourstory">Our Story</a>
            <a href="./#ourwedding">Our Wedding</a>
            <a href="./#weddingparty">Wedding Party</a>
        </ul>
    </li>
    <li class="active dropdown"><a href="{{ url('/details') }}" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Details</a>
        <ul class="dropdown-menu">
            <a href="#accommodations">Accommodations</a>
            <a href="#travel">Travel</a>
            <a href="#todo">Events</a>
        </ul>
    </li>
    <li><a href="{{ url('/photos') }}">Photos</a></li>
    <li><a href="{{ url('/registry') }}">Registry</a></li>
    <li><a href="{{ url('/rsvp') }}">RSVP</a></li>
</ul>
@endsection
@section('content')
<div class="container details-container">
    <div id="grand" class="row">
        <div class="col-md-10 col-md-offset-1">
            <div id="accommodations" class="padding-top">
                <h1>Accommodations</h1>
            </div>
            <div class="section">
                <h2 >The Grand Hotel</h2>
                <h4>2 Olde Bedford Way, Bedford, NH 03110</h4>
                <p>Located on the same property as the ceremony/reception. </p>
                <span class="f-tollfree">
                    <span class="span-info glyphicon glyphicon-earphone" aria-hidden="true"></span><span class="contactTollFreeText">TOLL FREE :<a href="tel:18008521166">1.800.852.1166</a></span>
                </span>
                <span class="f-local">
                    <span class="span-info glyphicon glyphicon-phone-alt" aria-hidden="true"><span></span></span><span class="contactLocalText">LOCAL :<a href="tel:6034722001">603-472-2001</a></span>
                </span>
                <div class="pad1top">
                    <button href="http://bookings.ihotelier.com/bookings.jsp?groupID=1616464&hotelID=15308" class="btn btn-info">Reservations</button>   
                    <a class="btn btn-info" href="images/grand.pdf" target="_blank">More Information</a>  
                </div>
                 

            </div> 
            <div class="section">
                <h2>Country Inn & Suites</h2>
                <h4>250 South River Road, Bedford, NH 03110</h4>
                <p>A quick 10 minute shuttle that will be provided from the hotel to the ceremony/reception. </p>
                <span class="f-tollfree">
                    <span class="span-info glyphicon glyphicon-earphone" aria-hidden="true"></span><span class="contactTollFreeText">TOLL FREE :<a href="tel:18008305222">1.800.830.5222</a></span>
                </span>
                <span class="f-local">
                    <span class="span-info glyphicon glyphicon-phone-alt" aria-hidden="true"><span></span></span><span class="contactLocalText">LOCAL :<a href="tel:6036664600">603-666-4600</a></span>
                </span>
                <div class="pad1top">
                    <button href="#" class="btn btn-info">Reservations</button>   
                    <a class="btn btn-info" href="#" target="_blank">More Information</a>  
                </div>
            </div> 
            <div id="travel1" class="item-separator"></div>
            <div id="travel" class="padding-top">
                <h1>Travel and Transportation</h1>
            </div>                       
            <div class="section">
                <h2>Airports</h2>
                <h3>Manchester-Boston Reginal Airport (MHT)</h3>
                <p>The closest airport is Manchester-Boston Reginal. It is less than 10 minutes from the Bedford Village Inn.</p>
                <h3>Boston Logan Airport (BOS)</h3>
                <p>Boston Logan airport is 56 miles from the Bedford Village Inn. </p>
                <div class="pad1top">
                    <a href="https://www.kayak.com/flights" class="btn btn-info" target="_blank">Price Kayak.com</a>   
                    <a href="https://www.southwest.com" class="btn btn-info" target="_blank">Price Southwest.com</a>   
                </div>
            </div>
            <div class="section">
                <h2>Shuttles</h2>
                <p>Country Inn & Suites can provide free shuttle to and from the BVI with 10 overnight rooms booked</p>
            </div>
            <div id="todo1" class="item-separator"></div>
            <div id="todo" class="padding-top">
                <h1>Events</h1>
            </div>
            <div class="row" style="min-height: 300px;">                       
	            <div class=" col-md-12">
	                <h2>Rehearsal Dinner</h2>
	                <h4>Hosted by The Baucoms</h4>
	                <h4>Thursday, December 8th</h4>
	                <h5>Time TBD</h5>
	            </div>
<!--
	            <div class="section gmap col-md-6">
	            	  <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2920.055867827395!2d-71.51157878390809!3d42.956027079151184!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89e24bd8905c8857%3A0x68114ce58c373b2d!2sBedford+Village+Inn!5e0!3m2!1sen!2sus!4v1460412375778"></iframe>
	            </div>
-->
	         </div>
	         <div class="row">
	            <div class="section col-md-12">
	                <h3>The Wedding</h3>
	                <h4>Friday, December 9th</h4>
	                <h4>Ceremony at 5pm, Dinner and Dancing to follow</h4>
	                <h4>The Great Hall</h4>
	                <h5>2 Olde Bedford Way, Bedford, NH 03110</h5>
	                <p></p>
	            </div>
<!-- 	            <div id="map-canvas" class="section gmap col-md-6"></div> -->
	         </div>
	         <div class="row">
	            <div class="section">
	                <h3>Saturday</h3>
	                <h4>Somerville, MA</h4>
	                <p></p>
	            </div>
            </div>
        </div>
    </div>
</div>
@endsection
