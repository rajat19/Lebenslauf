		</div>
		<!--End  row-->
	</div>
	<!--End  container-->
</div>
<!--End wrapper-->
<!--Javascript-->	
<script src="js/jquery-1.11.3.min.js" type="text/javascript"></script>
<script src="js/jquery-migrate-1.2.1.js" type="text/javascript"></script>			
<script src="js/owl.carousel.js" type="text/javascript"></script>
<script src="js/jquery.magnific-popup.js" type="text/javascript"></script>
<script src="js/jquery.easytabs.min.js" type="text/javascript"></script>
<script src="js/jquery.easing.1.3.js" type="text/javascript"></script>
<script src="js/modernizr.js" type="text/javascript"></script>
<script src="js/placeholders.min.js" type="text/javascript"></script>
<script type="text/javascript" src="js/Switcher/switcher.js"></script>
<script src="js/script.js" type="text/javascript"></script>
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAErQ52cVQDdBBVFFuHP5vBksvVEjWNXvE&v=3.exp&amp;sensor=false"></script>


<script>
(function($) {
  "use strict";

$(document).ready(function(){

	$('#wrapper').easytabs({
	animate			: true,
	updateHash		: false,
	transitionIn	:'fadeIn',
	transitionOut	:'fadeOut',
	animationSpeed	:100,
	tabActiveClass	:'active',
	tabs            :' #main-nav.tabbed > ul > li ',
	transitionInEasing: 'linear',
  	transitionOutEasing: 'linear'	

});

//---------------------------------- Google map location -----------------------------------------//

$('#wrapper').bind('easytabs:after', function() {
		var styles = [
	        {
	            stylers: [
	                { saturation: -100 }

	            ]
	        },{
	            featureType: 'road',
	            elementType: 'geometry',
	            stylers: [
	                { hue: "#74b7b0" },
	                { visibility: 'simplified' }
	            ]
	        },{
	            featureType: 'road',
	            elementType: 'labels',
	            stylers: [
	                { visibility: 'on' }
	            ]
	        }
	      ],

	       lat = 28.6767,
	       lng = 77.5008,
	       customMap = new google.maps.StyledMapType(styles,
	          {name: 'Styled Map'}),


	      mapOptions = {
	          zoom: 14,
			scrollwheel: false,
			disableDefaultUI: true,
	          center: new google.maps.LatLng( lat, lng ),
	          mapTypeControlOptions: {
	              mapTypeIds: [google.maps.MapTypeId.ROADMAP]
	          }
	      },
	      	map = new google.maps.Map(document.getElementById('map'), mapOptions),
	      	myLatlng = new google.maps.LatLng( lat, lng ),
			marker = new google.maps.Marker({
	        position: myLatlng,
	        map: map,
			icon: {
			            url: 'img/marker.png',
			            scaledSize: new google.maps.Size(26, 42)
			        }
	      });
	      map.mapTypes.set('map_style', customMap);
	      map.setMapTypeId('map_style');
});

//---------------------------------- End google map location -----------------------------------------//
});

})(jQuery);

</script>
<!-- Google analytics -->
<!-- End google analytics -->
</body>
<!-- Mirrored from demo.mutationmedia.net/SPLIT/ by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 21 Jan 2017 14:54:34 GMT -->
</html>
