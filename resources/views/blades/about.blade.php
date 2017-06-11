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


    <div class="col-sm-8">

     <h3 class="specialHeader">About the Company</h3>
     <p>Busdoc travel agency ltd is a reputable travel and tours agency which was  incorporated in June 1983 with Head office @ No 30 ogui road Enugu and branches in Abuja , Lagos, Onitsha and Awka.</p>
     <p>After the incorporation of the company “Busdoc Travel Agency Ltd” have been doing successful business by representing all airlines that fly in and out of the Nigeria in sales of Flight Tickets worldwide. Amongst other services are Hotel reservation worldwide, travel insurance, free travel consultancy, trip planning and so many other travel related things.</p>
     <p>Busdoc travel agency have won several awards and received several honors from airlines within the previous years for her contribution and support resulting in excellent passenger sales.</p>
     <p>As regards the issuance of flight tickets and improvement and evolvement in the aviation industry now, tickets are no longer handwritten but e-tickets (electronic), Busdoc travel agency has since taken a new reform to inhibit to these changes and developed a new platform to serve its esteemed passenger well with ease. Our 24hr/7 reservation call centre is always available to take your details and proceed up to the point of delivering your tickets to you even on a non working hour</p>
     <p>Savour the exciting expereince of flying you high and safe with BusDoc Travel &amp; Tours LTD.</p>

        <div class="row">
         {{--more write up here--}}
        </div>
    </div>
    {{--<div class="col-sm-5 padding-top">--}}

    {{--</div>--}}

</div>

<div class="row busdoc-links">

@include('blades._helpers.viewcom.links')

</div>

@stop