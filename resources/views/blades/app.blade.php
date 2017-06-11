<!DOCTYPE html>
<html>
<head>
<title>BUSDOC TRAVEL | Home</title>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compactible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="{{ asset('bootstrap/css/bootstrap.min.css') }}" />
<link rel="stylesheet" href="{{ asset('bootstrap/css/bootstrap-theme.min.css') }}" />
<link rel="stylesheet" href="{{ asset('jquery-ui-master/themes/base/all.css') }}" />
<link rel="stylesheet" href="{{ asset('css/global.css') }}" />
<link rel="shortcut icon" href="{{ asset('logo/fav.png') }}" />
</head>
<body>
	<div class="container">
	    <header>
            <span id="logo"><img src="{{ asset('logo/logo.png') }}" class="img-responsive"/></span>
            <span id="aircraft"><img src="{{ asset('pixo/aircraft.png') }}" class="img-responsive"/></span>
	    </header>
            <nav class="navbar navbar-default" role="navigation">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#example-navbar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="#"></a>
                 </div>
                 <div class="collapse navbar-collapse" id="example-navbar-collapse">
                    <ul class="nav navbar-nav">
                        <li class="{{ Request::is( '') ? 'active' : '' }}"><a href="/">Home</a></li>
                        <li><a href="/article">Articles</a></li>
                        <li class="dropdown"> <a href="#" class="dropdown-toggle" data-toggle="dropdown"> Services <b class="caret"></b> </a>
                            <ul class="dropdown-menu">
                                <li><a href="/services">Flight Ticket</a></li>
                                <li><a href="/services">Hotel Reservation</a></li>
                                <li><a href="/services">Travel &amp; Tours</a></li>
                                <li><a href="/services">Travel Insurance</a></li>
                                <li><a href="/services">Visa</a></li>
                                <li><a href="/services">Airport Shuttle/PickUps</a></li>
                                <li><a href="/services">Consultation</a></li>
                                <li><a href="/services">Home Service Delivery</a></li>
                            </ul>
                        </li>
                        <li><a href="/about">About Us</a></li>
                        <li><a href="/contact">Contact Us</a></li>
                    </ul>
                 </div>
            </nav>
	    <section>
	        @yield('content')
	    </section>
	    <div class="row affiliate sponsors">
	                <div class="col-sm-4 img-responsive">
                         <h5>Affiliates</h5>
                    		<div id="affiliates">
                    			<img src="{{ asset('logo/amadeus.gif') }}" height="40" width="40"/>
                    			<img src="{{ asset('logo/iata.gif') }}" height="40" width="40"/>
                    			<img src="{{ asset('logo/nanta.png') }}" height="40" width="40"/>
                    			<img src="{{ asset('logo/travelport.jpg') }}" height="40" width="40"/>

                    		</div>
                    </div>
                    <div class="col-sm-4 img-responsive">
                         <h5>Airlines</h5>
                         <div id="airlines">
                    			<img src="{{ asset('logo/arik.jpg') }}" height="40" width="40"/>
                    			<img src="{{ asset('logo/saa.jpg') }}" height="40" width="40"/>
                    			<img src="{{ asset('logo/1.jpg') }}" height="" width="40"/>
                    			<img src="{{ asset('logo/2.png') }}" height="" width="40"/><br/>
                    			<img src="{{ asset('logo/3.jpg') }}" height="" width="40"/>
                    			<img src="{{ asset('logo/4.jpg') }}" height="" width="40"/>
                    			<img src="{{ asset('logo/5.jpg') }}" height="" width="40"/>
                    			<img src="{{ asset('logo/6.jpg') }}" height="" width="40"/><br/>
                    			<img src="{{ asset('logo/7.png') }}" height="" width="40"/>
                    			<img src="{{ asset('logo/8.jpg') }}" height="" width="40"/>
                    			<img src="{{ asset('logo//9.jpg') }}" height="" width="40"/>
                    	  </div>
                    </div>
                    <div class="col-sm-4 img-responsive">
                         <h5>Stay in touch</h5>
                         <div id="socialPrescence">
      						<a href="http://www.facebook.com/busdoc.travels" target="frame"><img src="{{ asset('logo/facebook.gif') }}" height="40" width="40"/></a>
      						<a href="http://www.tripatlas.com/store/1801" target="frame"><img src="{{ asset('logo/tripatlas.png') }}" height="38" width="40"/></a>
      						<img src="{{ asset('logo/twitter.png') }}" height="40" width="40"/>
      						<a href="mailto:info@busdoctravel.com?Subject=Flight%20Enquiry"><img src="{{ asset('logo/mail.png') }}" height="40" width="40"/></a>
                        </div>
                    </div>
	    </div>
        <footer class="row">
            <p>Copyright ©2014 - 2015 BusDocTravel.com Inc. All Rights Reserved. encode via <a href="http://ikingsley.com" target="_blank">ikingsley</a>. </p>
        </footer>

        <!-- Begin PHP Live! HTML Code -->
        <span id="phplive_btn_1434988322" class="navbar-fixed-bottom" onclick="phplive_launch_chat_0(0)" style="color: #0000FF; text-decoration: underline; cursor: pointer;"></span>
        <script type="text/JavaScript">
        (function() {
        	var phplive_e_1434988322 = document.createElement("script") ;
        	phplive_e_1434988322.type = "text/javascript" ;
        	phplive_e_1434988322.async = true ;
        	phplive_e_1434988322.src = "//chat.busdoctravel.com/js/phplive_v2.js.php?v=0|1434988322|0|" ;
        	document.getElementById("phplive_btn_1434988322").appendChild( phplive_e_1434988322 ) ;
        })();
        </script>
        <!-- End PHP Live! HTML Code -->
	</div>

            @include('blades._helpers.scripts.script')
</body>
</html>