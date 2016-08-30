<?php
/*

	Template Name: Drop Off Locations Page

*/
?>


<?php get_header(); ?>

<div class="page-wrapper locations-page">
	<div class="inner">
		<h2 class="locations">Drop Off Locations</h2>

		<p class="p-light p-center">Below is a list of Globall Giving's current equipment drop-off locations. Also please make sure to keep an eye out for collection barrels at future Globall Giving events throughout the year. Join us in supporting the mission!</p>
		<p class="p-center p-button"><a class="partner-action" href="http://www.globallgiving.org/contact">Become a Drop Off Location</a></p>
		
		<div class="location row">
			<img src="<?php bloginfo('template_directory'); ?>/images/aurora.png" alt="Aurora Sports Medicine Clinic">
			<div class="location-info">
				<h4>Aurora Sports Medicine Clinic</h4>
				
				<h5 class="city1">Grafton, WI</h5>
				<h5 class="address">975 Port Washington Rd</h5>
				<h5 class="address">Grafton, WI 53024</h5>
			</div>
		</div>

		<div class="location row">
			<img src="<?php bloginfo('template_directory'); ?>/images/bmo.png" alt="BMO Harris Bank">
			<div class="location-info">
				<h4>BMO Harris Bank</h4>

				<h5 class="city1">Cedarburg, WI</h5>
				<h5 class="address">W62 N209 Washington Ave.</h5>
				<h5 class="address">Cedarburg, WI 53012</h5>
			</div>
		</div>

		<div class="location row">
			<img src="<?php bloginfo('template_directory'); ?>/images/burghardt.png" alt="Burghardt Sporting Goods">
			<div class="location-info">
				<h4>Burghardt Sporting Goods</h4>

				<h5 class="city1">Fox Point, WI</h5>
				<h5 class="address">8625 N Port Washington Rd</h5>
				<h5 class="address">Fox Point, WI 53217</h5>

				<h5 class="city2">Brookfield, WI</h5>
				<h5 class="address">14660 W Capitol Dr</h5>
				<h5 class="address">Brookfield, WI 53005</h5>
			</div>
		</div>

		<div class="location row">
			<img src="<?php bloginfo('template_directory'); ?>/images/easton.png" alt="Easton Gym Co.">
			<div class="location-info">
				<h4>Easton Gym Co.</h4>

				<h5 class="city1">Manhattan Beach, CA</h5>
				<h5 class="address">4005 Highland Ave</h5>
				<h5 class="address">Manhattan Beach, CA 90266</h5>
			</div>
		</div>

		<div class="location row">
			<img src="<?php bloginfo('template_directory'); ?>/images/elite.png" alt="Elite Sports Club">
			<div class="location-info">
				<h4>Elite Sports Club</h4>

				<h5 class="city1">North Shore, WI</h5>
				<h5 class="address">5750 N. Glen Park Rd</h5>
				<h5 class="address">Glendale, WI 53209</h5>
			</div>
		</div>

		<div class="location row">
			<img src="<?php bloginfo('template_directory'); ?>/images/ivivvaDropoff.png" alt="Ivivva">
			<div class="location-info last-location">
				<h4>Ivivva</h4>

				<h5 class="city1">Brookfield, WI</h5>
				<h5 class="address">1770 W Capital Drive</h5>
				<h5 class="address">Brookfield, WI 53405</h5>

			</div>
		</div>

		<div class="location row">
			<img src="<?php bloginfo('template_directory'); ?>/images/ymca.png" alt="YMCA">
			<div class="location-info last-location">
				<h4>YMCA</h4>

				<h5 class="city1">Kettle Moraine - West Bend, WI</h5>
				<h5 class="address">1111 W Washington S</h5>
				<h5 class="address">West Bend, WI 53074</h5>

				<h5 class="city2">Port Washington, WI</h5>
				<h5 class="address">465 Northwoods Rd</h5>
				<h5 class="address">Port Washington, WI 53052</h5>

				<h5 class="city2">Menomonee Falls, WI</h5>
				<h5 class="address">N84 W17501 Menomonee Ave</h5>
				<h5 class="address">Menomonee Falls, WI 53052</h5>

				<h5 class="city2">West Suburban, WI</h5>
				<h5 class="address">2420 N 124th St</h5>
				<h5 class="address">Wauwatosa, WI 53226</h5>

			</div>
		</div>

		<div class="location row">
			<img src="<?php bloginfo('template_directory'); ?>/images/zieglerLocation.png" alt="Ziegler Financial">
			<div class="location-info last-location">
				<h4>Ziegler Financial</h4>

				<h5 class="city1">Mequon, WI</h5>
				<h5 class="address">11201 North Port Washington Road</h5>
				<h5 class="address">Mequon, WI 53092</h5>

			</div>
		</div>
	</div>
	<!-- BOTTOM SUBSCRIBE SECTION -->
	  <div class="subscribe-section">
	    <div class="inner">
	      <p>Sign up to get the latest Globall Giving news!</p>
	      <?php gravity_form(4, false, false, false, '', true, 12); ?>
	    </div>
	  </div>
	<!-- END BOTTOM SUBSCRIBE SECTION -->
</div>

<?php get_footer (); ?>