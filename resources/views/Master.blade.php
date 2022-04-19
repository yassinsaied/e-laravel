<!doctype html>
<html lang="{{ app()->getLocale() }}">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="shortcut icon" href="img/fav.png">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Formation</title>
 <!-- Fonts -->
 <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">
   
    <!-- Styles -->

        <link rel="stylesheet" href="{{ asset('css/linearicons.css')}}">
        <link rel="stylesheet" href="{{ asset('css/font-awesome.min.css') }}">
        <link rel="stylesheet" href="{{ asset('css/themify-icons.css') }}">
        <link rel="stylesheet" href="{{ asset('css/bootstrap.css') }}">
        <link rel="stylesheet" href="{{ asset ('css/owl.carousel.css')}}">
        <link rel="stylesheet" href="{{ asset('css/nice-select.css') }}">
        <link rel="stylesheet" href="{{ asset('css/nouislider.min.css') }}">
        <link rel="stylesheet" href="{{ asset('css/ion.rangeSlider.css') }}"/>
        <link rel="stylesheet" href="{{ asset('css/ion.rangeSlider.skinFlat.css') }}" />
        <link rel="stylesheet" href="{{ asset('css/magnific-popup.css') }}">
        <link rel="stylesheet" href="{{ asset('css/main.css') }}">


</head>

<body>
    <div id="app">
        <!-- start Header Area -->
        @include('Ui.Header')
        <!-- End Header Area -->
      

          <!-- start Banner Area -->
          @include('Ui.Banner')
          <!-- End Header Area -->

        @yield('content')


       
    

    
        @include('Ui.Footer')



        
        
    </div>





	<!-- js-->

	<script src="{{ asset('js/vendor/jquery-2.2.4.min.js') }}"></script>
	<script src="{{ asset('https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js" integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4') }}"
	 crossorigin="anonymous"></script>
	<script src="{{ asset('js/vendor/bootstrap.min.js') }}"></script>
	<script src="{{ asset('js/jquery.ajaxchimp.min.js') }}"></script>
	<script src="{{ asset('js/jquery.nice-select.min.js') }}"></script>
	<script src="{{ asset('js/jquery.sticky.js') }}"></script>
	<script src="{{ asset('js/nouislider.min.js') }}"></script>
	<script src="{{ asset('js/jquery.magnific-popup.min.js') }}"></script>
	<script src="{{ asset('js/owl.carousel.min.js') }}"></script>
	<!--gmaps Js-->
	<script src="{{ asset('https://maps.googleapis.com/maps/api/js?key=AIzaSyCjCGmQ0Uq4exrzdcL6rvxywDDOvfAu6eE') }}"></script>
	<script src="{{ asset('js/gmaps.min.js') }}"></script>
	<script src="{{ asset('js/main.js') }}"></script>


</body>

</html>