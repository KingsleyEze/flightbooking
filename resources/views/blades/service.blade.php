@extends('blades.app')

@section('content')

<div class="row">
    {{--<iframe src ="{{  asset('slider/index.html') }}" class="embed-responsive-item well custom-style-bg-change" scrolling="no" width="100%" height="380" frameborder="0" border="0">--}}
    		{{--<p>Your browser does not support iframes.</p>--}}
    {{--</iframe>--}}
    <div id="myCarousel" class="carousel slide carousel-fade" data-ride="carousel">
        <!-- Carousel indicators -->
        <ol class="carousel-indicators">
            <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
            <li data-target="#myCarousel" data-slide-to="1"></li>
            <li data-target="#myCarousel" data-slide-to="2"></li>
            <li data-target="#myCarousel" data-slide-to="3"></li>
            <li data-target="#myCarousel" data-slide-to="4"></li>
        </ol>
        <!-- Carousel items -->
        <div class="carousel-inner custom-style-size-change">
        <div class="item active">
            <img src="{{ asset('bootstrap/img/slide1.jpg') }}" alt="First slide" >
        </div>
        <div class="item">
            <img src="{{ asset('bootstrap/img/slide2.jpg') }}" alt="Second slide" >
        </div>
        <div class="item">
            <img src="{{ asset('bootstrap/img/slide3.jpg') }}" alt="Third slide">
        </div>
        <div class="item">
            <img src="{{ asset('bootstrap/img/slide4.jpg') }}" alt="Fourth slide">
        </div>
        <div class="item">
            <img src="{{ asset('bootstrap/img/slide5.jpg') }}" alt="Fifth slide">
        </div>
        </div>
        <!-- Carousel nav -->
         <a class="carousel-control left" href="#myCarousel" data-slide="prev">&lsaquo;</a>
         <a class="carousel-control right" href="#myCarousel" data-slide="next">&rsaquo;</a>
    </div>
</div>

<div class="row">


    <div class="col-sm-7">
        <h3 class="specialHeader">SERVICES</h3>
        <p><strong><a name="1">FLIGHT TICKETS:</a></strong>  With busdoc travel agency nothing gets between you and your flight tickets.  we represent all airlines that fly in and out of nigeria and issue their tickets. ranging from klm,air france,emirates,ba,turkish air,alitalia,southafrican air,qatar,etihad etc.
        our team of e- reservationist are ready at all times to take your flight details and plan your trip within your budget. our dedicated ticketing department are ready to issue your tickets even on weekend and after close of work hour in other to accommodate your emergency trips.
        your bookings can also be done by simply sending us an e mail on info@busdoctravel.com or call any of our hot line above.</p>

        <p><strong><a name="2">HOTEL RESERVATION:</a></strong> We at busdoc travel agency offer hotel reservation service to our esteemed passengers and guest. we can book any reputable hotel world wide for you and your loved ones and itinerary automatically sent to your e mail address and hardcopy can still be retrieved in our office. We can contact the hotel on your behalf prior your arrival for international airport pickups and drop off worldwide.</p>
        <p><strong><a name="3">TRAVEL AND TOUR PACKAGES:</a></strong>  Busdoc travel agency ltd is affliated to some reputable tour operators and tour company within africa and diaspora that  offers excellent packages. for packages within east africa which includes countries like tanzania,kenya,uganda,rwanda and zanzibar we have packages like air safari packages,mountain climbings,visiting game reserves,national parks and special interest activities. Please find below some of our detailed packages within Africa. Call for enquiries about our 2015 pilgrime package.</p>
        <p><strong><a name="4">TRAVEL INSURANCE:</a></strong>  Busdoc travel agency gives the best in travel insurance to her esteemed passengers . we partner with reputable travel insurance firms for a complete insured trip.</p>

        <p><strong><a name="5">VISA:</a></strong> Busdoc travel agency ltd offers courtesy visa assistance for visa request to her passengers and advice on visa matters for countries that require a visa .</p>
        <p><strong><a name="6">AIRPORT SHUTTLE AND PICKUPS :</a></strong>  For our esteemed passengers and visitors we offer airport  drops and pickups within enugu , lagos  and abuja and also cab services if the passenger wants to look around the city. for booking of shuttle cabs pls call us on 08034705017, 08099072619.</p>

        <p><strong><a name="7">SERVICE AND ENQUIRY/ FREE CONSULTATION:</a></strong>  Our team of professional staff is ready for your 24hrs service. our online corresponding platform is available from 9am – 5pm mon-fri , but alternatively our hotlines numbers are also available and open to recive your calls at all times for enquirie send free consultation on travel related matters.</p>

        <p><strong><a name="8">HOME SERVICE DELIVERY :</a></strong> Dear esteemed guest visit us at our head office at no 72 owerri road asata enugu or in any of our branches within the nation or call our call centers on 08034705017. home service delivery takes over and makes certain that your travel ticket/itinerary is delivered directly to you.</p>

    </div>

</div>

<div class="row busdoc-links">

@include('blades._helpers.viewcom.links')

</div>

@stop