<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Chris and Rachel Wedding</title>

    <!-- Fonts -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.4.0/css/font-awesome.min.css" rel='stylesheet' type='text/css'>
    <link href="https://fonts.googleapis.com/css?family=Lato:100,300,400,700" rel='stylesheet' type='text/css'>

    <!-- Styles -->
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" rel="stylesheet">
    <link href="css/libs.css" rel="stylesheet">
    <link href="css/app.css" rel="stylesheet">
    <style type="text/css">
/*        @media only screen and (max-width: 700px) {
            .theme-image-main {
                background-size: contain;
            }
        }*/

    </style>
    <script src="https://www.google.com/recaptcha/api.js" async defer></script>
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->    
</head>
<body id="app-layout">
<div class="theme-image-main">
    <div class="container main-container">
      <header class="page-header ">
<!--         <div class="heart-separator"></div>
 --><!--         <h1>Fixed <b>navbar</b> by scrolling the page with <b>Bootstrap</b></h1>
        <h2><small>Go down, Go down!</small></h2> -->
      </header>
    </div>

    <nav id="navbar-main" class="navbar navbar-default hide-navbar">
        <div class="container-fluid">
            <div class="navbar-header">

                <!-- Collapsed Hamburger -->
                <button id="nav-button" type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                    <span class="sr-only">Toggle Navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>

                <!-- Branding Image -->
<!--                 <a class="navbar-brand" href="{{ url('/') }}">
                    Chris and Rachel
                </a> -->
            </div>

            <div id="navbar" class="collapse navbar-collapse">
                <!-- Left Side Of Navbar -->
                @yield('nav-links')

                <!-- Right Side Of Navbar -->
                <!-- <ul class="nav navbar-nav navbar-right"> -->
                    <!-- Authentication Links -->
<!--                     @if (Auth::guest())
                        <li><a href="{{ url('/login') }}">Login</a></li>
                        <li><a href="{{ url('/register') }}">Register</a></li>
                    @else
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                                {{ Auth::user()->name }} <span class="caret"></span>
                            </a>

                            <ul class="dropdown-menu" role="menu">
                                <li><a href="{{ url('/logout') }}"><i class="fa fa-btn fa-sign-out"></i>Logout</a></li>
                            </ul>
                        </li>
                    @endif
                </ul> -->
            </div>
        </div>
    </nav>

        @yield('content')
    <div class="item-separator"></div>
    <footer class="theme-image-bottom">
        <div id="countdown">
            <p class="days">00</p>
            <p class="timeRefDays">days until the wedding!</p>
<!--             <p class="hours">00</p>
            <p class="timeRefHours">hours</p>
            <p class="minutes">00</p>
            <p class="timeRefMinutes">minutes</p> -->
<!--             <p class="seconds">00</p>
            <p class="timeRefSeconds">seconds</p> -->
        </div>  
    </footer>
    </div> <!-- .theme-image-main-->
    <!-- JavaScripts -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
    <script type="text/javascript">
        /*! Main */
        jQuery(document).ready(function($) {
            // Sidebar toggle
            // $('[data-toggle=collapse]').click(function (e) {
            //     $('#navbar').toggleClass('in');
            // });
            // $("#button").attr("aria-expanded","true");
            // Active class toggle
            $('.weddingCheckbox:checkbox').checkboxpicker({onLabel:"YES",offLabel:"NO"});
            $('.saturdayCheckbox:checkbox').checkboxpicker({onLabel:"YES",offLabel:"NO"});
            $('.weddingButtons').find('input').on('change', function() {
                var val = [];
                $('.weddingButtons').find('input:checked').each(function() {
                    val.push($(this).data('value'));
                });
            });
            // Animate scroll to id
            $('a[href^="#"]').on('click',function (e) {
                e.preventDefault();

                var target = this.hash;
                var $target = $(target);

                $('html, body').stop().animate({
                    'scrollTop': $target.offset().top -100
                }, 900, 'swing', function () {
                    window.location.hash = target;
                });
            });

            // Flash Grand lodging info
            $('#trigger-alert').click(function() {
                var options = {
                    title: 'Grand Lodging Info',
                    imageUrl: 'images/grand.jpg',
                    imageSize: '800x1074',
                    html: true
                };
                swal(options);
            });
            // Active class
            $(".nav a").on("click", function(){
               $(".nav").find(".active").removeClass("active");
               $(this).parent().addClass("active");
            });   

            // Fixed navbar
            var navbar = $('#navbar-main'),
                    distance = navbar.offset().top,
                $window = $(window);

            $window.scroll(function() {
                if ($window.scrollTop() >= distance) {
                    navbar.removeClass('navbar-fixed-top').addClass('navbar-fixed-top').removeClass('hide-navbar').addClass('show-navbar');
                    $("body").css("padding-top", "70px");
                } else {
                    navbar.removeClass('navbar-fixed-top').addClass('hide-navbar').removeClass('show-navbar');
                    $("body").css("padding-top", "0px");
                }
            });

            // Countdown to wedding!
            (function (e) {
              e.fn.countdown = function (t, n) {
              function i() {
                eventDate = Date.parse(r.date) / 1e3;
                currentDate = Math.floor(e.now() / 1e3);
                if (eventDate <= currentDate) {
                  n.call(this);
                  clearInterval(interval)
                }
                seconds = eventDate - currentDate;
                days = Math.floor(seconds / 86400);
                seconds -= days * 60 * 60 * 24;
                hours = Math.floor(seconds / 3600);
                seconds -= hours * 60 * 60;
                minutes = Math.floor(seconds / 60);
                seconds -= minutes * 60;
                days == 1 ? thisEl.find(".timeRefDays").text("day") : thisEl.find(".timeRefDays").text("days until our wedding!");
                hours == 1 ? thisEl.find(".timeRefHours").text("hour") : thisEl.find(".timeRefHours").text("hours");
                minutes == 1 ? thisEl.find(".timeRefMinutes").text("minute") : thisEl.find(".timeRefMinutes").text("minutes");
                seconds == 1 ? thisEl.find(".timeRefSeconds").text("second") : thisEl.find(".timeRefSeconds").text("seconds");
                if (r["format"] == "on") {
                  days = String(days).length >= 2 ? days : "0" + days;
                  hours = String(hours).length >= 2 ? hours : "0" + hours;
                  minutes = String(minutes).length >= 2 ? minutes : "0" + minutes;
                  seconds = String(seconds).length >= 2 ? seconds : "0" + seconds
                }
                if (!isNaN(eventDate)) {
                  thisEl.find(".days").text(days);
                  thisEl.find(".hours").text(hours);
                  thisEl.find(".minutes").text(minutes);
                  thisEl.find(".seconds").text(seconds)
                } else {
                  alert("Invalid date. Example: 30 Tuesday 2013 15:50:00");
                  clearInterval(interval)
                }
              }
              var thisEl = e(this);
              var r = {
                date: null,
                format: null
              };
              t && e.extend(r, t);
              i();
              interval = setInterval(i, 1e3)
              }
              })(jQuery);
              $(document).ready(function () {
              function e() {
                var e = new Date;
                e.setDate(e.getDate() + 60);
                dd = e.getDate();
                mm = e.getMonth() + 1;
                y = e.getFullYear();
                futureFormattedDate = mm + "/" + dd + "/" + y;
                return futureFormattedDate
              }
              $("#countdown").countdown({
                date: "9 December 2016 00:00:00", // Change this to your desired date to countdown to
                format: "on"
              });
            }); 
        });
    </script>
    <script>
      jQuery(window).on("load resize",function(e) {
  
        if($(window).width() <= 768) {
          // $('.nav li').removeClass("dropdown");
          $("a.dropdown-toggle").removeClass("disabled");
          $("a.dropdown-toggle").on('click touch', function(e) {
                       e.preventDefault();
            });
            
            $(".dropdown").off('mouseenter');
        }
      
        if($(window).width() >= 768) {
          // $('.nav li').addClass("dropdown");        
          $("a.dropdown-toggle").addClass("disabled");
          $("a.dropdown-toggle").unbind('click touch');
          
           $(".dropdown-menu").hide(); 
                 $(".dropdown").on({mouseenter: function(event){
                 $(this).find('.dropdown-menu').slideDown(300);
                 event.preventDefault(); 
               },
               mouseleave: function(event){
                 //e.preventDefault();
                 $(this).find('.dropdown-menu').stop(true, true).hide();
                 event.preventDefault();
                 }
               });
        }
      });
    </script>
    {{-- <script src="{{ elixir('js/app.js') }}"></script> --}}
    <script src="js/libs.js"></script>
    @include('flash')
    
</body>
</html>
