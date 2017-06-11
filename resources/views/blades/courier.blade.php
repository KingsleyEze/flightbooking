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

        <h3>Courier Services | Tracking tool</h3>

        <div id="dvtracking"></div>
              <script type='text/javascript' charset='utf-8'>
                  var iframe = document.createElement('iframe');
                  var id = document.getElementById('dvtracking');
                  id.appendChild(iframe);
                  iframe.src = 'http://shippingexchange.com/TrackingAPI?mode=courier';
                  iframe.width = '600px'; iframe.height = '400px'; iframe.frameBorder = '0';
            </script>
    </div>

    <div class="col-sm-5 sidebar">



    </div>

</div>

<div class="row busdoc-links">

@include('blades._helpers.viewcom.links')

</div>

@stop