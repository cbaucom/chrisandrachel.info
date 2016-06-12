<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Chris and Rachel's Wedding</title>

    <!-- Fonts -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css" integrity="sha384-XdYbMnZ/QjLh6iI4ogqCTaIjrFk87ip+ekIjefZch0Y+PvJ8CDYtEs1ipDmPorQ+" crossorigin="anonymous">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato:100,300,400,700">
    <link rel='stylesheet' id='googleFontsYellowtail-css'  href='http://fonts.googleapis.com/css?family=Yellowtail&#038;ver=4.5' type='text/css' media='all' />

    <!-- Styles -->
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" rel="stylesheet">
    <link href="css/libs.css" rel="stylesheet">
    <link href="css/app.css" rel="stylesheet">

    <style>
        body {
            font-family: 'Lato';
        }

        .fa-btn {
            margin-right: 6px;
        }
        /* latin */
        @font-face {
          font-family: 'Yellowtail';
          font-style: normal;
          font-weight: 400;
          src: local('Yellowtail'), url(http://fonts.gstatic.com/s/yellowtail/v6/GcIHC9QEwVkrA19LJU1qlAzyDMXhdD8sAj6OAJTFsBI.woff2) format('woff2');
          unicode-range: U+0000-00FF, U+0131, U+0152-0153, U+02C6, U+02DA, U+02DC, U+2000-206F, U+2074, U+20AC, U+2212, U+2215, U+E0FF, U+EFFD, U+F000;
        }
    </style>
    <style type="text/css" media="screen">
        html { margin-top: 32px !important; }
        * html body { margin-top: 32px !important; }
        @media screen and ( max-width: 782px ) {
            html { margin-top: 46px !important; }
            * html body { margin-top: 46px !important; }
        }
    </style>
    <style type="text/css" title="dynamic-css" class="options-output">.intro-text .intro-lead-in, .intro-text-blog .intro-lead-in, .the-groom{font-family:Yellowtail;text-transform:none;letter-spacing:0px;font-weight:400;font-style:normal;font-size:50px;}h1,h2,h3,h4,h5,h6,.header_logo, .tittle-page span, .intro-text .intro-heading h3, .parent-bride h2, .bride-event h4, .ceremony h2, .gift-title, .cd-timeline-content h2, .bridesmaid, h2.entry-title a, .footer-text h2{font-family:Montserrat;text-transform:uppercase;letter-spacing:3px;font-weight:normal;font-style:normal;}
    </style>
    <style type="text/css">
        html {
            margin-top: 0!important;
        }
    </style>
    @if (isset($menu_id))
    <script>
    function window.onload() {
        window.location = "#{{$menu_id}}"
    }
    </script>
    @endif
</head>
<body id="app-layout">
    <nav class="navbar navbar-default navbar-fixed-top">
        <div class="container">
            <div class="navbar-header">

                <!-- Collapsed Hamburger -->
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#app-navbar-collapse">
                    <span class="sr-only">Toggle Navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>

                <!-- Branding Image -->
					 @yield('nav-brand')
            </div>

            <div class="collapse navbar-collapse" id="app-navbar-collapse">
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
    
    <footer></footer>
	 <p id="back-top"><a href="#top"><span></span></a></p>	
    <!-- JavaScripts -->
    <script>
      (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
      (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
      m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
      })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

      ga('create', 'UA-77649451-1', 'auto');
      ga('send', 'pageview');

    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.2.3/jquery.min.js" integrity="sha384-I6F5OKECLVtK/BL+8iSLDEHowSAfUo76ZL9+kGAgTRdiByINKJaqTPH/QVNS1VDb" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-scrollTo/2.1.2/jquery.scrollTo.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.3/jquery.easing.min.js"></script>
    <script src="js/all.min.js"></script>
    <script>
        $(document).ready(function () {        
            // Active class toggle
            $('.weddingCheckbox:checkbox').checkboxpicker({onLabel:"YES",offLabel:"NO"});
            $('.saturdayCheckbox:checkbox').checkboxpicker({onLabel:"YES",offLabel:"NO"});
            $('.weddingButtons').find('input').on('change', function() {
                var val = [];
                $('.weddingButtons').find('input:checked').each(function() {
                    val.push($(this).data('value'));
                });
            });
             
         });
    </script>
   <script>
        $(document).ready(function () {
        	// hide #back-top first
			$("#back-top").hide();
			
			// fade in #back-top
			$(function () {
				$(window).scroll(function () {
			             	if ($(this).scrollTop() > 400) {
						$('#back-top').fadeIn();
					} else {
						$('#back-top').fadeOut();
					}
				});
			
				// scroll body to 0px on click
				$('#back-top a').click(function () {
					$('body,html').animate({
						scrollTop: 0
					}, 400);
					return false;
				});
			});
        

        });
    </script>

    {{-- <script src="{{ elixir('js/app.js') }}"></script> --}}
    @include('flash')
</body>
</html>
