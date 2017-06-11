<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title> Admin | Dashboard</title>

{{--<link href="css/bootstrap.min.css" rel="stylesheet">--}}
{{--<link href="css/datepicker3.css" rel="stylesheet">--}}
{{--<link href="css/adm-style.css" rel="stylesheet">--}}

<link href="{{ asset('admin/css/bootstrap.min.css') }}" rel="stylesheet"/>
<link href="{{ asset('admin/css/datepicker3.css') }}" rel="stylesheet"/>
<link href="{{ asset('admin/css/adm-style.css') }}" rel="stylesheet"/>

<!--[if lt IE 9]>
<script src="{{ asset('admin/js/html5shiv.js') }}" ></script>
<script src="{{ asset('admin/js/respond.min.js') }}" ></script>
<![endif]-->

</head>

<body>
<nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
		<div class="container-fluid">
			<div class="navbar-header">
				<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#sidebar-collapse">
					<span class="sr-only">Toggle navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
				<a class="navbar-brand" href="#"><span>Busdoc</span>Travel</a>
				<ul class="user-menu">
					<li class="dropdown pull-right">
						<a href="#" class="dropdown-toggle" data-toggle="dropdown"><span class="glyphicon glyphicon-user"></span> Administrator <span class="caret"></span></a>
						<ul class="dropdown-menu" role="menu">
							<li><a href="#"><span class="glyphicon glyphicon-user"></span> Profile</a></li>
							<li><a href="#"><span class="glyphicon glyphicon-cog"></span> Settings</a></li>
							<li><a href="#"><span class="glyphicon glyphicon-log-out"></span> Logout</a></li>
						</ul>
					</li>
				</ul>
			</div>

		</div><!-- /.container-fluid -->
	</nav>

	<div id="sidebar-collapse" class="col-sm-3 col-lg-2 sidebar">
		<form role="search">
			<div class="form-group">
				<a href="http://chat.busdoctravel.com" target="_blank" class="btn btn-primary form-control">Launch Chat</a>
			</div>
		</form>
		<ul class="nav menu">
			<li class="{{ ($page == 'Dashboard')?'active':'' }}"><a href="{{ URL::to('admin/dashboard') }}"><span class="glyphicon glyphicon-dashboard"></span> Dashboard</a></li>
			<li class="{{ ($page == 'Blogger')?'active':'' }}"><a href="{{ URL::to('admin/blogger') }}"><span class="glyphicon glyphicon-th"></span> Blogger</a></li>
			<li class="{{ ($page == 'Location')?'active':'' }}"><a href="{{ URL::to('admin/location') }}"><span class="glyphicon glyphicon-stats"></span> Locations</a></li>
			<li role="presentation" class="divider"></li>
		</ul>
	</div><!--/.sidebar-->

	<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">
		<div class="row">
			<ol class="breadcrumb">
				<li><a href="#"><span class="glyphicon glyphicon-home"></span></a></li>
				<li>{{ $page }}</li>
			</ol>
		</div><!--/.row-->

		<div class="row">
			<div class="col-lg-12">
				<h1 class="page-header">{{ $page }}</h1>

			</div>
		</div><!--/.row-->
<!--
		<div class="row">
			<div class="col-xs-12 col-md-6 col-lg-3">
				<div class="panel panel-teal panel-widget">
					<div class="row no-padding">
						<div class="col-sm-3 col-lg-5 widget-left">
							<em class="glyphicon glyphicon-user glyphicon-l"></em>
						</div>
						<div class="col-sm-9 col-lg-7 widget-right">
							<div class="large">24</div>
							<div class="text-muted">Bookings</div>
						</div>
					</div>
				</div>
			</div>
			<div class="col-xs-12 col-md-6 col-lg-3">
				<div class="panel panel-orange panel-widget">
					<div class="row no-padding">
						<div class="col-sm-3 col-lg-5 widget-left">
							<em class="glyphicon glyphicon-comment glyphicon-l"></em>
						</div>
						<div class="col-sm-9 col-lg-7 widget-right">
							<div class="large">52</div>
							<div class="text-muted">Articles</div>
						</div>
					</div>
				</div>
			</div>
			<div class="col-xs-12 col-md-6 col-lg-3">
				<div class="panel panel-red panel-widget">
					<div class="row no-padding">
						<div class="col-sm-3 col-lg-5 widget-left">
							<em class="glyphicon glyphicon-stats glyphicon-l"></em>
						</div>
						<div class="col-sm-9 col-lg-7 widget-right">
							<div class="large">25.2k</div>
							<div class="text-muted">Locations</div>
						</div>
					</div>
				</div>
			</div>
		</div><!--/.row-->

		<div class="row"><!--/Row for various view content -->
			@yield('content')
		</div><!--/.row ends for various view content-->
		</div><!--/.row-->

		</div><!--/.row-->

	</div>	<!--/.main-->

	{{--<script src="js/jquery-1.11.1.min.js"></script>--}}
	{{--<script src="js/bootstrap.min.js"></script>--}}
	{{--<script src="js/chart.min.js"></script>--}}
	{{--<script src="js/chart-data.js"></script>--}}
	{{--<script src="js/easypiechart.js"></script>--}}
	{{--<script src="js/easypiechart-data.js"></script>--}}
	{{--<script src="js/bootstrap-datepicker.js"></script>--}}

	<script src="{{ asset('admin/js/jquery-1.11.1.min.js') }}" ></script>
	<script src="{{ asset('admin/js/bootstrap.min.js') }}" ></script>
	<script src="{{ asset('admin/js/chart.min.js') }}" ></script>
	<script src="{{ asset('admin/js/chart-data.js') }}" ></script>
	<script src="{{ asset('admin/js/easypiechart.js') }}" ></script>
	<script src="{{ asset('admin/js/easypiechart-data.js') }}" ></script>
	<script src="{{ asset('admin/js/bootstrap-datepicker.js') }}" ></script>
	<script src="{{ asset('ckeditor/ckeditor.js') }}" ></script>
	<script>
		$('#calendar').datepicker({
		});

		!function ($) {
		    $(document).on("click","ul.nav li.parent > a > span.icon", function(){          
		        $(this).find('em:first').toggleClass("glyphicon-minus");      
		    }); 
		    $(".sidebar span.icon").find('em:first').addClass("glyphicon-plus");
		}(window.jQuery);

		$(window).on('resize', function () {
		  if ($(window).width() > 768) $('#sidebar-collapse').collapse('show')
		})
		$(window).on('resize', function () {
		  if ($(window).width() <= 767) $('#sidebar-collapse').collapse('hide')
		})
	</script>
	<style>

    		div.editable
    		{
    			border: solid 2px Transparent;
    			padding-left: 15px;
    			padding-right: 15px;
    		}

    		div.editable:hover
    		{
    			border-color: black;
    		}


    	</style>
    	<script>

    		// Uncomment the following code to test the "Timeout Loading Method".
    		// CKEDITOR.loadFullCoreTimeout = 5;

    		window.onload = function() {
    			// Listen to the double click event.
    			if ( window.addEventListener )
    				document.body.addEventListener( 'dblclick', onDoubleClick, false );
    			else if ( window.attachEvent )
    				document.body.attachEvent( 'ondblclick', onDoubleClick );

    		};

    		function onDoubleClick( ev ) {
    			// Get the element which fired the event. This is not necessarily the
    			// element to which the event has been attached.
    			var element = ev.target || ev.srcElement;

    			// Find out the div that holds this element.
    			var name;

    			do {
    				element = element.parentNode;
    			}
    			while ( element && ( name = element.nodeName.toLowerCase() ) &&
    				( name != 'div' || element.className.indexOf( 'editable' ) == -1 ) && name != 'body' );

    			if ( name == 'div' && element.className.indexOf( 'editable' ) != -1 )
    				replaceDiv( element );
    		}

    		var editor;

    		function replaceDiv( div ) {
    			if ( editor )
    				editor.destroy();

    			editor = CKEDITOR.replace( div );
    		}

    	</script>
</body>

</html>
