@extends('layouts.app')
@section('nav-brand')
    <h5 class="brand nav"><li>
    	<a class="navbar-brand scroll" href="#december-9-2016">
        Chris &amp; Rachel
    	</a></li>
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
    <li><a class="scroll" href="#events">Saturday Events</a></li>
    <li class="devider-ulem show_1"></li> 
    <li><a href="{{ url('/photos') }}">Photos</a></li>
    <li class="devider-ulem show_1"></li> 
    <li><a class="scroll" href="#registry">Registry</a></li>
    <li class="devider-ulem show_1"></li> 
    <li><a href="#rsvp" data-toggle="modal" data-target="#rsvpModal">RSVP</a></li>
</ul>
@stop
@section('content')
<main class="cd-main-content">
    <div id="december-9-2016" class="cd-fixed-bg cd-bg-1 intro-text" data-speed="4" data-type="background">
        <!-- <h1>Chris &amp; Rachel</h1> -->
        <!-- <div id="example" class="intro-lead-in">The Wedding Celebration of</div> -->
        <div class="intro-heading">
            <div class="container">
                <div class="row">
                    <div class="col-lg-5"> <span class="pull-right">Chris</span></div>
                    <div class="col-lg-2">
                        <div class="text-center amp"><!-- <i class="text-center  pulse2 fa fa-heart-o"></i> -->&amp; </div>
                    </div>
                    <div class="col-lg-5"><span class="pull-left">Rachel</span></div>
                </div>
            </div>
        <h3>December 9, 2016</h3>
        <h2>Bedford, New Hampshire</h2>            
    </div>
        <div  class="text-center"><a href="#rsvp" class="bootstrap-modal-form-open text-center btn btn-xl" data-toggle="modal" data-target="#rsvpModal">RSVP</a></div>

        <a href="#story" class="scroll center down btn btn-default btn-lg">
          <img src="images/down-arrow.png">
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
            <hr><br>
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
            <!-- <p class="top center"><a class="btn scroll" href="#december-9-2016">Back to top</a></p> -->
        </div> <!-- cd-container -->
    </div> <!-- cd-scrolling-bg -->

    <div id="ceremony" class="cd-fixed-bg cd-bg-2 intro-text">
        <div class="intro-heading">
<!--             <h2>Bedford Village Inn</h2>
            <h2>December 9, 2016</h2>
            <h2>New Hampshire</h2>     -->      
        </div>

        <a href="#wedding" class="scroll center down btn btn-default btn-lg">
          <img src="images/down-arrow.png">
        </a>

    </div> <!-- cd-fixed-bg -->

    <div id="wedding" class="cd-scrolling-bg cd-color-2">
        <div class="cd-container">
            <div class="center row">
                <h1 class="h1">Ceremony and Reception</h1>
                <h3 class="h3">Friday, December 9, 2016</h3>
                <h3 class="h3">5:00 PM - 11:00 PM</h3>
                <br>
                <h4>Bedford Village Inn</h4>
                <h4>2 Olde Bedford Way</h4>
                <h4>Bedford, NH 03110</h4>
                <br>
                <div class="center">
                    <a href="https://goo.gl/maps/52HYkYeESjy" class="btn btn-secondary">View Map</a>
                    <a href="#rsvp" class="btn btn-secondary" data-toggle="modal" data-target="#rsvpModal">RSVP</a>
                </div>               
            </div>
            <!-- <p class="top center"><a class="btn scroll" href="#december-9-2016">Back to top</a></p> -->
        </div> <!-- cd-container -->
    </div> <!-- cd-scrolling-bg -->

    <div id="accommodations" class="cd-fixed-bg cd-bg-3">
        <!-- <h2>Travel</h2> -->
        <a href="#travel" class="scroll center down btn btn-default btn-lg">
          <img src="images/down-arrow.png">
        </a>
    </div> <!-- cd-fixed-bg -->

    <div id="travel" class="cd-scrolling-bg cd-color-2">
        <div class="cd-container">
            <div id="grand" class="row center">
                <h1 id="accommodations" class="h1">Accommodations</h1>
                <p class="center" style="text-transform: inherit; font-size: 1.3em;">Wedding rates are available at the following locations. Reservations can be made by calling the hotel directly and simply mentioning "The Lindmark & Baucom Wedding".</p><br>
                    <h3>Thursday and Friday night</h3>
                    <h5>Bedford, NH</h5>
                <div class="col-sm-12 col-md-6">
                    <div class="section">
                        <h3 >The Grand Hotel</h3>
                        <h4>2 Olde Bedford Way, Bedford, NH 03110</h4>
                        <p>Located on the same property as the ceremony/reception.  When booking online, please reference our rate code: LIN16GB</p><br>
                        <p>Rates start at $239</p>
                         <div class="local"><span class="f-tollfree">
                            <span class="span-secondary glyphicon glyphicon-earphone" aria-hidden="true"></span><span class="contactTollFreeText">TOLL FREE :<a href="tel:18008521166">1.800.852.1166</a></span>
                        </span></div>
                         <div class="local"><span class="f-local">
                            <span class="span-secondary glyphicon glyphicon-phone-alt" aria-hidden="true"><span></span></span><span class="contactLocalText">LOCAL :<a href="tel:6034722001">603-472-2001</a></span>
                        </span></div>
                        <div class="pad">
                            <a href="http://bookings.ihotelier.com/bookings.jsp?groupID=1616464&hotelID=15308" class="btn btn-secondary">Reservations</a>   
                            <a class="btn btn-secondary" href="images/grand.pdf" target="_blank">More Information</a>  
                        </div>
                    </div> <br>
                </div>
                <div class="col-sm-12 col-md-6">
                    <div class="section">
                        <h3>Country Inn & Suites</h3>
                        <h4>250 South River Road, Bedford, NH 03110</h4>
                        <p>Located 10 minutes from the Bedford Village Inn. There will be a free shuttle provided from the hotel to the ceremony/reception.  When booking online, please reference our rate code: 1216LINBAU</p>
                        <p>Rates start at $115</p>
                        <div class="local"><span class="f-tollfree">
                            <span class="span-secondary glyphicon glyphicon-earphone" aria-hidden="true"></span>
                            <span class="contactTollFreeText">TOLL FREE :<a href="tel:18008305222">1.800.830.5222</a></span>
                        </span></div>
                         <div class="local"><span class="f-local" >
                            <span class="span-secondary glyphicon glyphicon-phone-alt" aria-hidden="true">
                                <span></span>
                            </span>
                            <span class="contactLocalText">LOCAL :<a href="tel:6036664600">603-666-4600</a></span>
                        </span></div>
                        <div class="pad">
                            <a href="http://www.countryinns.com/bedford-hotel-nh-03110/nhmanair" class="btn btn-secondary">Reservations</a>   
                            <!-- <a class="btn btn-secondary" href="" target="_blank">More Information</a>   -->
                        </div>
                    </div> 
                </div>
            </div><br><br>
            <div class="row center">
                <h3>Saturday night</h3>
                    <h5>Boston, MA</h5>
                <div class="col-sm-12 col-md-6">
                    <div class="section">
                        <h3 >Nine Zero Hotel</h3>
                        <h4>90 Tremont Street, Boston, MA 02108</h4>
                        <p>Rachel and Chris will have a room here. Must book by Nov. 10th.</p>
                        <p>Rates start at $179</p>
                         <div class="local"><span class="f-tollfree">
                            <span class="span-secondary glyphicon glyphicon-earphone" aria-hidden="true"></span><span class="contactTollFreeText">TOLL FREE :<a href="tel:18005467866">1.800.546.7866</a></span>
                        </span></div>
                         <div class="local"><span class="f-local">
                            <span class="span-secondary glyphicon glyphicon-phone-alt" aria-hidden="true"><span></span></span><span class="contactLocalText">LOCAL :<a href="tel:6177725837">617.772.5837</a></span>
                        </span></div>
                        <div class="pad">
                            <a href="https://gc.synxis.com/rez.aspx?Hotel=26751&Chain=10179&arrive=12/10/2016&depart=12/11/2016&adult=1&child=0&group=11620302913" class="btn btn-secondary">Reservations</a>   
                        </div>
                    </div> <br>
                </div>
                <div class="col-sm-12 col-md-6">
                    <div class="section">
                        <h3>Hilton Boston Downtown/Faneuil Hall</h3>
                        <h4>89 Broad Street, Boston, MA 02110</h4>
                        <p>Must book by Nov. 18th. If booking online, please use code: LB1210</p>
                        <p>Rates start at $149</p>
                        <div class="local"><span class="f-tollfree">
                            <span class="span-secondary glyphicon glyphicon-earphone" aria-hidden="true"></span>
                            <span class="contactTollFreeText">TOLL FREE :<a href="tel:18005200872">1.800.520.0872</a></span>
                        </span></div>
                         <div class="local"><span class="f-local" >
                            <span class="span-secondary glyphicon glyphicon-phone-alt" aria-hidden="true">
                                <span></span>
                            </span>
                            <span class="contactLocalText">LOCAL :<a href="tel:6175560006">617-556-0006</a></span>
                        </span></div>
                        <div class="pad">
                            <a href="www.hiltonbostondowntown.com" class="btn btn-secondary">Reservations</a>   
                        </div>
                    </div>
                    <br><br>
                </div>   
            </div>    
            <hr>                     
            <div class="row center">
                <div id="travel" class="center">
                    <h1>Travel</h1>
                    <div class="section">
                        <!-- <h3>Airports</h3> -->
                        <h3>Manchester-Boston Regional Airport (MHT)</h3>
                        <p>Manchester-Boston Reginal airport is 6 miles from the Bedford Village Inn.</p>
                        <h3>Boston Logan Airport (BOS)</h3>
                        <p>Boston Logan airport is 56 miles from the Bedford Village Inn. </p>
                        <div class="pad1top">
                            <a href="https://www.kayak.com/flights" class="btn btn-secondary" target="_blank">Price Kayak.com</a>   
                            <a href="https://www.southwest.com" class="btn btn-secondary" target="_blank">Price Southwest.com</a>   
                        </div>
                    </div>
                </div>
            </div><!-- row -->
            <!-- <p class="top center"><a class="btn scroll" href="#december-9-2016">Back to top</a></p> -->
        </div> <!-- cd-container -->
    </div> <!-- cd-scrolling-bg -->

     <div class="cd-fixed-bg cd-bg-4">
        <a href="#events" class="scroll center down btn btn-default btn-lg">
          <img src="images/down-arrow.png">
        </a>
    </div> <!-- cd-fixed-bg -->

    <div id="events" class="cd-scrolling-bg cd-color-2">
        <div class="cd-container center">
            <div class="row">
                <div class="col-md-10 col-md-offset-1">
                    <h1 class="">Saturday Events</h1>
                    <div class="section">
                        <br>
                        <h3 >Scholars American Bistro &amp; Cocktail Lounge</h3>
                        <h4>25 School Street, Boston, MA 02108</h4>
                        <h5>Saturday, December 10th</h5>
                        <h5> 6pm - 9pm</h5>
                        <p>We have reserved a space upstairs at Scholars Saturday night. We invite all guests to join us as we continue our celebration! </p>
                    </div>
                </div>
            </div>
       </div> <!-- cd-container -->
    </div> <!-- cd-scrolling-bg -->    


    <div id="gifts" class="cd-fixed-bg cd-bg-5">
        <a href="#registry" class="scroll center down btn btn-default btn-lg">
          <img src="images/down-arrow.png">
        </a>
    </div> <!-- cd-fixed-bg -->

    <div id="registry" class="cd-scrolling-bg cd-color-2">
        <div class="cd-container">
            <div class="row">
                <div class="col-md-12">
                    <h1 class="center">Gift Registration</h1>
                    <h5 class="center" style="text-transform: inherit; font-size: 1.3em;">What we want most for our wedding is to have our friends and family there to celebrate the occasion with us. So more than anything we’re simply grateful for your presence! If you would like to get us something, we’d love that too...you can find our registries here:</h5><br>
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
            <div id="countdown" class="top center">
                <p class="days">00</p>
                <p class="timeRefDays">days until the wedding!</p>
            </div>  
            <!-- <p class="lastToTop center"><a class="btn scroll" href="#december-9-2016">Back to top</a></p> -->
        </div> <!-- cd-container -->
    </div> <!-- cd-scrolling-bg -->    

    <div class="cd-fixed-bg cd-bg-6">
        <div class="cd-container">
        </div> <!-- cd-container -->
    </div> <!-- cd-fixed-bg -->
 
</main>
@if (!empty($success))
      {!! flash()->success('Success!', 'RSVP successfully created!'); !!}
@endif
@include('rsvp.modal')
@endsection
