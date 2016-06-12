@extends('layouts.app')
@section('nav-brand')
    <h5 class="brand">
    	<a class="navbar-brand scroll" href="#december-9-2016">
        Chris &amp; Rachel
    	</a>
    </h5>           
@stop
@section('nav-links')
<ul class="nav navbar-nav navbar-right">
    <li><a class="scroll" href="#story">Our Story</a></li>
    <li class="devider-ulem show_1"></li> 
    <li><a class="scroll" href="#wedding">Wedding Day</a></li>
    <li class="devider-ulem show_1"></li> 
    <li><a class="scroll" href="#travel">Travel</a></li>
    <li class="devider-ulem show_1"></li> 
<!--     <li><a class="scroll" href="#events">Saturday Events</a></li>
    <li class="devider-ulem show_1"></li> 
 -->    <li><a href="{{ url('/photos') }}">Photos</a></li>
    <li class="devider-ulem show_1"></li> 
    <li><a class="scroll" href="#registry">Registry</a></li>
    <li class="devider-ulem show_1"></li> 
    <li><a class="scroll" href="#rsvp">RSVP</a></li>
</ul>
@stop
@section('content')
<!-- <div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading">Welcome</div>

                <div class="panel-body">
                    Your Application's Landing Page.
                </div>
            </div>
        </div>
    </div>
</div> -->

<main class="cd-main-content">
    <div id="december-9-2016" class="cd-fixed-bg cd-bg-1 intro-text" data-speed="4" data-type="background">
        <!-- <h1>Chris &amp; Rachel</h1> -->
        <!-- <div id="example" class="intro-lead-in">The Wedding Celebration of</div> -->
        <div class="intro-heading">
            <div class="container">
                <div class="row">
                    <div class="col-lg-5"> <span class="pull-right">Chris</span></div>
                    <div class="col-lg-2">
                        <div class="text-center"><i class="text-center  pulse2 fa fa-heart-o"></i></div>
                    </div>
                    <div class="col-lg-5"><span class="pull-left">Rachel</span></div>
                </div>
            </div>
        <h3>December 9, 2016</h3>
        <h2>Bedford, New Hampshire</h2>            
    </div>
        <div  class="text-center"><a href="#rsvp" class="text-center scroll btn btn-xl">RSVP</a></div>
        <a href="#story" class="scroll center down btn btn-default btn-lg">
          <span class="glyphicon glyphicon-download center" aria-hidden="true"></span>
        </a>
    </div> <!-- cd-fixed-bg -->

    <div id="story" class="cd-scrolling-bg cd-color-2" data-speed="4" data-type="background">
        <div class="cd-container our-story">
            <div data-sr='scale down 20%' >
                <div class="header-ulem"><i class="flaticon-rings4"></i></div>
                <div class="ribbon-ulem"><span>Our Story</span></div>
            </div>  
            <br>
            <h2 class="center">How we met</h2>
            <h6 class="center">March 2014</h6>
            <div class="story-img">
                <img src="images/austria1.jpg">
            </div><br>
            <!-- <h3 class="center">We met on a ski trip in Austria back in March of 2014</h3><br> -->
            <!-- <h2 class="center">Our Story</h2> -->
  


            <p>I am honestly not sure what convinced me to go to a ski trip in Austria where I only knew one friend, but I love to ski and I was looking for an adventure. I just didn’t know that adventure would lead me to Chris.</p> 
            <p>Chris was one of six in our group, staying together in an apartment right on the mountain side. Chris quickly had me laughing and smiling, which continued throughout the trip. I did not want the week to end, where I knew we would separate. I would return to New York City and Chris to Boston. The days following the trip we found ourselves skyping and emailing every day, finding every excuse to talk. The following weekend I was on the first bus to Boston and we had our first date at Russell House Tavern.</p>
            <p>Every weekend we had together was so much fun. We would explore restaurants, bars, museums and parks in New York City and Boston. After less than a year I moved back to Boston and the rest was history!</p><p class="center">-Rachel</p>
            <hr>
            <h2 class="center">The Proposal</h2>
            <h6 class="center">March 7, 2016</h6>
            <div class="story-img">
                <img src="images/jh_engagement3.jpg">
            </div><br>
            <!-- <h3 class="center">Chris proposed on the top of Jackson Hole Mountain Resort on March 7th, 2016!</h3> -->
            <p>Our story began on a ski trip in Austria 2 years ago, so I knew right away I wanted to propose on top of a mountain. Back in the Fall of 2015, I started to think about how I would propose. I remember trying to convince Rachel to pick another trip with TheSkiWeek for us so I could recreate how we first met, but we couldn't make that work. We then started planning a trip to Whistler with some friends, but the second attempt failed too! After both these attempts, I was starting to worry that my plan was going to fall through. 
            </p>
            <p>Luckily we were able to visit Jackson, WY, this past March. We were only planning to ski two of the four days so I had limited options as to which day to propose. I was getting nervous about the weather so when I saw blue skies on day one, I knew this was going to be the day. I brought my camera and tripod with us, but kept it in the car along with the ring. After lunch, Rachel finally agreed to mountain top pictures! I had been bugging her all day about this, she must of thought I was crazy! We took the tram up to the top and started walking up this little hill that led to a 360 degree view of the mountain range in Jackson. For a moment, there was no one around and I thought to myself, you better get going. I setup the camera and Rachel and I took a few pictures. All of a sudden there was a group of people taking selfies right beside us! I wanted them to disappear, they were interfering with my plan! I managed to keep Rachel distracted long enough and when they left I turned the camera to video mode. I walked over to Rachel, reminded her about when we first met in Austria and how awesome our 2 years have been together. I dropped to one knee and asked her to marry me. After a few quick "oh my gosh"'s, she said yes! I'm so excited to spend the rest of our lives together!
            </p><p class="center">-Chris</p>
            <p class="top center"><a class="btn scroll" href="#december-9-2016">Back to top</a></p>
        </div> <!-- cd-container -->
    </div> <!-- cd-scrolling-bg -->

    <div id="wedding" class="cd-fixed-bg cd-bg-2 intro-text">
        <div class="intro-heading">
<!--             <h2>Bedford Village Inn</h2>
            <h2>December 9, 2016</h2>
            <h2>New Hampshire</h2>     -->      
        </div>

        <a href="#ceremony" class="scroll center down btn btn-default btn-lg">
          <span class="glyphicon glyphicon-download" aria-hidden="true"></span>
        </a>

    </div> <!-- cd-fixed-bg -->

    <div id="ceremony" class="cd-scrolling-bg cd-color-2">
        <div class="cd-container">
            <div class="center row">
                <h1>Ceremony and Reception</h1>
                <h3>Friday, December 9, 2016</h3>
                <h3>5:00 PM - 11:00 PM</h3>
                <br>
                <h4>Bedford Village Inn</h4>
                <h4>2 Olde Bedford Way</h4>
                <h4>Bedford, NH 03110</h4>
                <br>
                <div class="center">
                    <a href="https://goo.gl/maps/52HYkYeESjy" class="btn btn-info">View Map</a>
                    <a href="#rsvp" class="btn btn-info">RSVP</a>
                </div>               
            </div>
            <p class="top center"><a class="btn scroll" href="#december-9-2016">Back to top</a></p>
        </div> <!-- cd-container -->
    </div> <!-- cd-scrolling-bg -->

    <div id="travel" class="cd-fixed-bg cd-bg-3">
        <!-- <h2>Travel</h2> -->
        <a href="#accommodations" class="scroll center down btn btn-default btn-lg">
          <span class="glyphicon glyphicon-download center" aria-hidden="true"></span>
        </a>
    </div> <!-- cd-fixed-bg -->

    <div id="accommodations" class="cd-scrolling-bg cd-color-1">
        <div class="cd-container">
    <div id="grand" class="row">
        <div class="col-md-10 col-md-offset-1">
            <div id="accommodations" class="center">
                <h1>Accommodations</h1>
                <div class="section">
                    <br>
                    <h4>Wedding rates are available at the following locations. Call and mention our names or click the links below to book.</h4><br>
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
                        <button class="btn btn-info" href="images/grand.pdf" target="_blank">More Information</button>  
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
                        <button class="btn btn-info" href="#" target="_blank">More Information</button>  
                    </div>
                </div> 
            </div>
            <div id="travel1" class="item-separator"></div>
            <div id="travel" class="center">
                <h1>Travel</h1>
                <div class="section"><br>
                    <!-- <h3>Airports</h3> -->
                    <h3>Manchester-Boston Reginal Airport (MHT)</h3>
                    <p>The closest airport is Manchester-Boston Reginal. It is less than 10 minutes from the Bedford Village Inn.</p>
                    <h3>Boston Logan Airport (BOS)</h3>
                    <p>Boston Logan airport is 56 miles from the Bedford Village Inn. </p>
                    <div class="pad1top">
                        <button href="https://www.kayak.com/flights" class="btn btn-info" target="_blank">Price Kayak.com</button>   
                        <button href="https://www.southwest.com" class="btn btn-info" target="_blank">Price Southwest.com</button>   
                    </div>
                </div>
                <div class="section">
                    <br>
                    <h3>Shuttles</h3>
                    <p>Country Inn & Suites can provide free shuttle to and from the BVI with 10 overnight rooms booked</p>
                </div>
            </div>                                   
<!--             <div id="todo1" class="item-separator"></div>
            <div id="todo" class="padding-top">
                <h1>Events</h1>
            
                <div class="row">                       
                    <div class=" col-md-12">
                        <h2>Rehearsal Dinner</h2>
                        <h4>Hosted by The Baucoms</h4>
                        <h4>Thursday, December 8th</h4>
                        <h5>Time TBD</h5>
                    </div>
                </div>
            </div> -->
        </div>
    </div>
            <p class="top center"><a class="btn scroll" href="#december-9-2016">Back to top</a></p>
        </div> <!-- cd-container -->
    </div> <!-- cd-scrolling-bg -->

     <div id="registry" class="cd-fixed-bg cd-bg-5">
        <!-- <h2>Photos</h2> -->
        <a href="#gifts" class="scroll center down btn btn-default btn-lg">
          <span class="glyphicon glyphicon-download" aria-hidden="true"></span>
        </a>
    </div> <!-- cd-fixed-bg -->

    <div id="gifts" class="cd-scrolling-bg cd-color-2">
        <div class="cd-container">
            <div class="row">
                <div class="col-md-12">
                    <h1 class="center">Gift Registration</h1>
                    <h5>What we want most for our wedding is to have our friends and family there to celebrate the occasion with us. So more than anything we’re simply grateful for your presence! If you would like to get us something, we’d love that too...you can find our registries here:</h5><br>
                    <div class="row registry">
                        <div class="potterybarn pad col-md-6">
                            <a href="http://www.potterybarn.com/registry/3848307/registry-list.html"><img src="images/pb.jpg" class="img-responsive center-block"></a>
                        </div>
                        <div class="macys pad col-md-6">
                            <a href="http://www.macys.com/registry/wedding/guest/?registryId=6579790"><img src="images/macys.jpg" class="img-responsive center-block"></a>
                        </div>
                        <div class="willamssonoma pad col-md-6">
                            <a href="https://secure.williams-sonoma.com/registry/jxpnspc8jf/registry-list.html"><img src="images/WS.jpg" class="img-responsive center-block"></a>
                        </div>
                        <div class="amazon pad col-md-6">
                            <a href="https://www.amazon.com/wedding/registry/3C0XVJA32J2L8"><img src="images/amazon.jpg" class="img-responsive center-block" style="border: 2px solid orange;"></a>
                        </div>
                    </div>
                </div>
            </div>

            <p class="top center"><a class="btn scroll" href="#december-9-2016">Back to top</a></p>
        </div> <!-- cd-container -->
    </div> <!-- cd-scrolling-bg -->    

    <div class="cd-fixed-bg cd-bg-6">
        <div class="cd-container">
        <a href="#rsvp" class="scroll center down btn btn-default btn-lg">
          <span class="glyphicon glyphicon-download" aria-hidden="true"><h5>RSVP</h5></span>
        </a>
        </div> <!-- cd-container -->
    </div> <!-- cd-fixed-bg -->

    <div id="rsvp" class="cd-scrolling-bg cd-color-2">
        <div class="cd-container">
            <div class="row">
                <div class="col-md-8 col-md-offset-2">

                        <div>
                        @include('errors')
                        {!! Form::open(['method' => 'POST', 'action'=>'RsvpController@store', 'class'=>'rsvp-form form-horizontal']) !!}
                            @include('rsvp.form')
                        {!! Form::close() !!}
                         </div>
                        <div id="countdown" class="center">
                            <p class="days">00</p>
                            <p class="timeRefDays">days until the wedding!</p>
                        </div>     

                </div>
            </div>
            <p class="top center"><a class="btn scroll" href="#december-9-2016">Back to top</a></p>
        </div> <!-- cd-container -->
    </div> <!-- cd-scrolling-bg -->    
</main>
@endsection
