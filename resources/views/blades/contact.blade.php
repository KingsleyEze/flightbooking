@extends('blades.app')

    <style>
      #map-canvas {
        max-width: 990px;
        height: 400px;
      }
    </style>
    <script src="https://maps.googleapis.com/maps/api/js"></script>
    <script>
      function initialize() {
        var mapCanvas = document.getElementById('map-canvas');
        var mapOptions = {
          center: new google.maps.LatLng(6.4444048,7.4989987),
          zoom: 17,
          mapTypeId: google.maps.MapTypeId.ROADMAP,
          draggable:false,
          scrollwheel:false
        }
        var map = new google.maps.Map(mapCanvas, mapOptions)
      }
      google.maps.event.addDomListener(window, 'load', initialize);
    </script>

@section('content')

<div class="row">
{{--google map api--}}

    <div id="map-canvas"></div>
</div>

<div class="row">


    <div class="col-sm-12">
        								<h3 class="specialHeader">Contact Us</h3>
<div class="col-sm-4">
        											<p>
        											<strong><u>Head Office</u></strong><br/>
        											<p>No. 72 Owerri Road, Enugu. Nigeria.</p>
        												Call our hotline on the following numbers:
        											</p>
        											<p><strong>Office Number 1</strong>: 080-3470-5017</p>
        											<p><strong>Office Number 2</strong>: 080-9626-8295</p>
        											<p><strong>Office Number 3</strong>: 0703-1806-700</p>
        											<p><strong>Email Address:</strong> info@busdoctravel.com</p>
</div>
<div class="col-sm-4">
        											<p>
        											<strong><u>Abuja Office</u></strong><br/>
        											<p>60A Birnin Kebbi Street, Garki 2, Abuja.</p>
        												Call our hotline on the following numbers:
        											</p>
        											<p><strong>Office Number 1</strong>: 08097123340</p>
        											<p><strong>Office Number 2</strong>: 08057933319</p>
        											<p><strong>Office Number 3</strong>: 08034705017</p>
        											<p>&nbsp;</p>
</div>
<div class="col-sm-4">
        											<p>
        											<strong><u>Onitsha Office</u></strong><br/>
        											<p>No. 38 Oguta Road Achike house, Onitsha.</p>
        												Call our hotline on the following numbers:
        											</p>
        											<p><strong>Office Number 1</strong>: 08038742765</p>
        											<p><strong>Office Number 2</strong>: 08034705017</p>
        											<p><strong>Office Number 3</strong>: 08023058863</p>
        											<p> &nbsp;</p>
</div>
    </div>

</div>

<div class="row busdoc-links">

@include('blades._helpers.viewcom.links')

</div>

@stop