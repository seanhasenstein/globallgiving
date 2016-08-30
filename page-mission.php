<?php
/*

	Template Name: Mission Page

*/
?>


<?php get_header(); ?>

<div class="page-wrapper mission-page">
	<div class="inner">
		<h2 class="our-mission">Our Mission</h2>

		<p class="intro p-center">Our mission is to provide healthy lifestyle options to underprivileged children by donating new and used sports equipment.</p>

		<!-- BORDER -->
		<div class="border text-center">
			<img src="<?php bloginfo('template_directory'); ?>/images/logoSimple.png" alt="Globall Giving">
		</div>
		<!-- END BORDER -->

		<p class="p-light p-center">GloBall Giving's organizational goals are to be the most adept group at donating sporting equipment in the world. In addition, it is also pertinent that we are a conscientious employer and local civic organization. We must foster and grow our international relationships where we are contributing. We must also attract talented individuals that believe in the mission of the organization. Finally, GloBall Giving needs to continue to grow by focusing on the mission and being a cognizant organization to change and evolve with the needs of the world and underprivileged children.</p>

		<p class="p-light p-center">Every child deserves a chance to play!</p>
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