<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <!--<title>{{ config('app.name', 'Admin Dashboard') }}</title>-->
    <title>{{ config('$title', 'Admin Dashboard') }}</title>

    <!-- Scripts -->
    <!--<script src="{{ asset('js/app.js') }}" defer></script>-->

    <!-- Fonts -->
    <link rel="dns-prefetch" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet" type="text/css">
    <link href="http://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700,800|Shadows+Into+Light" rel="stylesheet" type="text/css">

    <!-- Mobile Metas -->
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
	
    <!-- Styles -->
    <!--<link href="{{ asset('css/app.css') }}" rel="stylesheet">-->

	<!-- Vendor CSS -->
    <link rel="stylesheet" href="{{ asset('assets/vendor/bootstrap/css/bootstrap.css') }}" >
    <link rel="stylesheet" href="{{ asset('assets/vendor/font-awesome/css/font-awesome.css') }}" >
	<link rel="stylesheet" href="{{ asset('assets/vendor/magnific-popup/magnific-popup.css') }}" >
	<link rel="stylesheet" href="{{ asset('assets/vendor/bootstrap-datepicker/css/datepicker3.css') }}" >

    <!-- Specific Page Vendor CSS -->
    @yield('styles')

    <!-- Theme CSS -->
	<link rel="stylesheet" href="{{ asset('assets/stylesheets/theme.css') }}" >

	<!-- Skin CSS -->
	<link rel="stylesheet" href="{{ asset('assets/stylesheets/skins/default.css') }}" />

	<!-- Theme Custom CSS -->
	<link rel="stylesheet" href="{{ asset('assets/stylesheets/theme-custom.css') }}">

	<!-- Head Libs -->
	<script src="{{ asset('assets/vendor/modernizr/modernizr.js') }}"></script>
</head>
<body>
    <div id="_app">
        <section class="body">
            @include('partials.navbar')
            

            <main class="py-4">
                @yield('content')
            </main>
        </section>
    </div>

    <!-- Vendor -->
	<script src="{{ asset('assets/vendor/jquery/jquery.js') }}"></script>
	<script src="{{ asset('assets/vendor/jquery-browser-mobile/jquery.browser.mobile.js') }}"></script>
	<script src="{{ asset('assets/vendor/bootstrap/js/bootstrap.js') }}"></script>
	<script src="{{ asset('assets/vendor/nanoscroller/nanoscroller.js') }}"></script>
	<script src="{{ asset('assets/vendor/bootstrap-datepicker/js/bootstrap-datepicker.js') }}"></script>
	<script src="{{ asset('assets/vendor/magnific-popup/magnific-popup.js') }}"></script>
	<script src="{{ asset('assets/vendor/jquery-placeholder/jquery.placeholder.js') }}"></script>
		
	<!-- Specific Page Vendor -->
	<script src="{{ asset('assets/vendor/jquery-ui/js/jquery-ui-1.10.4.custom.js') }}"></script>
	<script src="{{ asset('assets/vendor/jquery-ui-touch-punch/jquery.ui.touch-punch.js') }}"></script>
	<script src="{{ asset('assets/vendor/jquery-appear/jquery.appear.js') }}"></script>
	<script src="{{ asset('assets/vendor/bootstrap-multiselect/bootstrap-multiselect.js') }}"></script>
	<script src="{{ asset('assets/vendor/jquery-easypiechart/jquery.easypiechart.js') }}"></script>
	<script src="{{ asset('assets/vendor/flot/jquery.flot.js') }}"></script>
	<script src="{{ asset('assets/vendor/flot-tooltip/jquery.flot.tooltip.js') }}"></script>
	<script src="{{ asset('assets/vendor/flot/jquery.flot.pie.js') }}"></script>
	<script src="{{ asset('assets/vendor/flot/jquery.flot.categories.js') }}"></script>
	<script src="{{ asset('assets/vendor/flot/jquery.flot.resize.js') }}"></script>
	<script src="{{ asset('assets/vendor/jquery-sparkline/jquery.sparkline.js') }}"></script>
	<script src="{{ asset('assets/vendor/raphael/raphael.js') }}"></script>
	<script src="{{ asset('assets/vendor/morris/morris.js') }}"></script>
	<script src="{{ asset('assets/vendor/gauge/gauge.js') }}"></script>
	<script src="{{ asset('assets/vendor/snap-svg/snap.svg.js') }}"></script>
	<script src="{{ asset('assets/vendor/liquid-meter/liquid.meter.js') }}"></script>
	<script src="{{ asset('assets/vendor/jqvmap/jquery.vmap.js') }}"></script>
	<script src="{{ asset('assets/vendor/jqvmap/data/jquery.vmap.sampledata.js') }}"></script>
	<script src="{{ asset('assets/vendor/jqvmap/maps/jquery.vmap.world.js') }}"></script>
	<script src="{{ asset('assets/vendor/jqvmap/maps/continents/jquery.vmap.africa.js') }}"></script>
	<script src="{{ asset('assets/vendor/jqvmap/maps/continents/jquery.vmap.asia.js') }}"></script>
	<script src="{{ asset('assets/vendor/jqvmap/maps/continents/jquery.vmap.australia.js') }}"></script>
	<script src="{{ asset('assets/vendor/jqvmap/maps/continents/jquery.vmap.europe.js') }}"></script>
	<script src="{{ asset('assets/vendor/jqvmap/maps/continents/jquery.vmap.north-america.js') }}"></script>
	<script src="{{ asset('assets/vendor/jqvmap/maps/continents/jquery.vmap.south-america.js') }}"></script>
    
    @yield('scripts')
    
	<!-- Theme Base, Components and Settings -->
	<script src="{{ asset('assets/javascripts/theme.js') }}"></script>
		
	<!-- Theme Custom -->
	<script src="{{ asset('assets/javascripts/theme.custom.js') }}"></script>
		
	<!-- Theme Initialization Files -->
	<script src="{{ asset('assets/javascripts/theme.init.js') }}"></script>

	<!-- Examples -->
	<script src="{{ asset('assets/javascripts/dashboard/examples.dashboard.js') }}"></script>
</body>
</html>
