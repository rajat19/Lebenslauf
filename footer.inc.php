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


<script type="text/javascript">
    $(document).ready(function() {
    	// $('#wrapper').hide();
        $(window).load(function() {
            preloaderFade = 1500;
            function hidepreloader() {
                // var p1 = $('.sk-cube-grid');
                // p1.fadeOut(preloaderFade);
                var p2 = $('.spinner-wrapper');
                p2.delay(1500).fadeOut(preloaderFade);
                // $('#wrapper').fadeIn(preloaderFade + 5000);
            }
            hidepreloader();

        });
    });

function printme() {
	win = window.open("pdfweb.html");
	win.close();
}

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

	       lat = 28.5737,
	       lng = 77.3820,
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
</html>
