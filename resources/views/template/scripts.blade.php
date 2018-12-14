<script type="text/javascript" src="{{ asset('js/jquery-2.2.1.min.js')}}"></script>
<script type="text/javascript" src="{{ asset('js/jquery-migrate-1.2.1.min.js')}}"></script>
<script type="text/javascript" src="http://maps.google.com/maps/api/js"></script>
<script type="text/javascript" src="{{ asset('bootstrap/js/bootstrap.min.js')}}"></script>
<script type="text/javascript" src="{{ asset('js/jquery.validate.min.js')}}"></script>
<script type="text/javascript" src="{{ asset('js/owl.carousel.min.js')}}"></script>
<script type="text/javascript" src="{{ asset('js/jquery.magnific-popup.min.js')}}"></script>
<script type="text/javascript" src="{{ asset('js/scrollReveal.min.js')}}"></script>
<!--<script type="text/javascript" src="{{ asset('js/jquery.appear.js')}}"></script>-->
<!--<script type="text/javascript" src="{{ asset('js/waypoints.min.js')}}"></script>-->
<script type="text/javascript" src="{{ asset('js/readmore.min.js')}}"></script>
<script type="text/javascript" src="{{ asset('js/pace.min.js')}}"></script>

<script type="text/javascript" src="{{ asset('js/custom.js')}}"></script>

<script type="text/javascript">
    var latitude = 34.038405;
    var longitude = -117.946944;
    var markerImage = "{{ asset('img/map-marker.png";
    var mapTheme = "light";
    google.maps.event.addDomListener(window, 'load', simpleMap(latitude, longitude, markerImage, mapTheme));
</script>