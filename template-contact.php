<?php
/**
 * Template Name: Kapcsolat Sablon
 */
?>

<?php use Roots\Sage\Wrapper; ?>

<?php while (have_posts()) : the_post(); ?>
  <header class="page__header">
		<div class="wrapper wrapper--fullwidth">
			<div id="mapcanvas" class="mapcanvas"></div>
		</div>
	</header>


  <div class="page__conentwrapper">
		<div class="wrapper wrapper--fullwidth">
			<div class="page__contentinnerwrapper">
				<div class="page__content">
					<?php the_content(); ?>
				</div>
				<aside class="page__sidebar sidebar" role="complementary">
				  <?php include Wrapper\sidebar_path(); ?>
				</aside><!-- /.sidebar -->
			</div>
		</div>
  </div>

<?php endwhile; ?>
<script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?sensor=false"></script>
<script type="text/javascript">
  var map;
  function initialize() {
    var latlng = new google.maps.LatLng(47.475075, 19.054397);
	var centerlatlng = new google.maps.LatLng(47.475075, 19.054397);
	var myOptions = {
	  zoom: 15,
	  center: centerlatlng,
	  disableDefaultUI: true,
	  scrollwheel: false,
	  mapTypeId: google.maps.MapTypeId.ROADMAP,
	styles:[
	  {
		stylers: [
		  { hue: "#00ff99" },
		  { saturation: -57 }
		]
	  },{
		featureType: "road.arterial",
		stylers: [
		  { saturation: -68 }
		]
	  }
	]
	};
	var map = new google.maps.Map(document.getElementById('mapcanvas'),	myOptions);
	
	var image = new google.maps.MarkerImage('<?php echo get_stylesheet_directory_uri() ;?>/dist/images/map_zaszlo.png',
	new google.maps.Size(69, 73), new google.maps.Point(0,0), new google.maps.Point(1, 73));
	var shadow = new google.maps.MarkerImage('<?php echo get_stylesheet_directory_uri() ;?>/dist/images/map_zaszlo_shadow.png',
	new google.maps.Size(95, 49), new google.maps.Point(0,0), new google.maps.Point(1, 49));
	
	var marker = new google.maps.Marker({
	  position: latlng, 
	  map: map, 
	  title:"Dr. Miskolczi Maria",
	  icon:image,
	  shadow:shadow 
	});
	 }

	 google.maps.event.addDomListener(window, 'load', initialize);
</script>