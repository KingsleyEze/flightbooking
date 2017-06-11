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
            <div class="row">
             {{--more write up here--}}

             @if($errors->any())

                <ul class="alert alert-danger">
                    @foreach($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
             @endif
            </div>
        <div class="row well custom-well">
            {!! Form::open() !!}

            <div class="row">
            {{--<h3>Booking Schedule </h3>--}}
                <div class="col-sm-6">

                    <div class="form-group">
                        {!! Form::label('from','From:') !!}
                        {!! Form::text('from', null, ['class' => 'form-control search']) !!}
                    </div>
                </div>
                <div class="col-sm-6">
                    <div class="form-group">
                        {!! Form::label('to','To:') !!}
                        {!! Form::text('to', null, ['class' => 'form-control search']) !!}
                    </div>
                </div>
            </div>
            <div class="form-group">
                {!! Form::label('mode','Travel Mode:', ['class' => 'radio']) !!}
                <div class="form-inline">
                    <div class="radio radio-inline one">
                        {!! Form::radio('mode', 'One Way') !!}
                    {!! Form::label('mode','One Way') !!}
                    </div>
                    <div class="radio radio-inline round">
                        {!! Form::radio('mode', 'Round Trip') !!}
                    {!! Form::label('mode','Round Trip') !!}
                    </div>
                </div>
            </div>


            <div class="row">
                <div class="col-sm-6">
                    <div class="form-group">
                        {!! Form::label('depart','Depart:') !!}
                        {!! Form::text('depart', null, ['class' => 'form-control', 'id' => 'datepicker-1']) !!}
                    </div>
                </div>
                <div class="col-sm-6">
                    <div class="form-group" id="roundlabel">
                        {!! Form::label('return','Return:') !!}
                        {!! Form::text('return', null, ['class' => 'form-control', 'id' => 'datepicker-2']) !!}
                    </div>
                </div>
            </div>

            <div class="form-group">
                {{--<h1>Personal Detail</h1>--}}
                {!! Form::text('first', null, ['class' => 'form-control', 'placeholder' => 'First Name']) !!}
            </div>


            <div class="form-group">
                {!! Form::text('last', null, ['class' => 'form-control', 'placeholder' => 'Last Name']) !!}
            </div>


            <div class="form-group">
                {!! Form::text('mobile', null, ['class' => 'form-control', 'placeholder' => 'Phone Number']) !!}
            </div>


            <div class="form-group">
                {!! Form::text('email', null, ['class' => 'form-control', 'placeholder' => 'Email Address']) !!}
            </div>


            <div class="form-group">
                {!! Form::submit('Search', ['class' => 'btn btn-primary form-control']) !!}
            </div>
            {!! Form::close() !!}
        </div>


    </div>
    <div class="col-sm-5 sidebar">

        <h5>Latest Articles</h5>
            <ul id="sidebar-article">
                <li> <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span> Travel Destination '014</li>
                <li> <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span> Emirates Airline Commences</li>
                <li> <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span> DANA Air Boost Flight Operations</li>
                <li> <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span> Best Economy-Class Innovations</li>
            </ul>
        <h5>Client testimonials</h5>
            <p>We are delighted that so many of our clients provide positive feedback not only about our processes but also our staff and our consultants.  A small selection of their comments are shown below.</p>
            <ul id="sidebar-testimony">
                <li><p>"I am very pleases with the service from Busdoc Travel thus far." - <b>Dr. Okafor</b></p></li>
                <li><p>"Couldn't wish for a better service. Your company is the BEST!" - <b>Prof. Titus Ugwuanyi</b></p></li>
                <li><p>"Very pleased with service." - <b>K.E</b></p></li>
            </ul>
        <img src="{{ asset('pixo/discount.gif') }}" alt="advert" id="advert"/>
    </div>

</div>

<div class="row busdoc-links">

@include('blades._helpers.viewcom.links')

</div>

@stop