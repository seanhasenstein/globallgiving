<?php
/*

	Template Name: Request Equipment Page

*/
?>


<?php get_header(); ?>

<div class="page-wrapper request-page">
	<div class="inner">
		<h2 class="request">Request Equipment</h2>

		<p class="p-center p-light">Do you know children in need of assistance? Please email <a class="a-bold" href="mailto:kidsplay@globallgiving.org">kidsplay@globallgiving.org</a> to make a formal request for equipment. Please include the following information:</p>

		<!-- BORDER -->
		<div class="border text-center">
			<img src="<?php bloginfo('template_directory'); ?>/images/logoSimple.png" alt="Globall Giving">
		</div>
		<!-- END BORDER -->

			<p class="p-light list-items">1. Equipment wish list including quantity of items.</p>
			<p class="p-light list-items">2. Number of children who will be impacted by this donation.</p>
			<p class="p-light list-items">3. Exact address and contact information for request.</p>
			<p class="p-light list-items">4. Date at which the donation is needed.</p>
			<p class="p-light list-items">5. Background information on your program or the recreational programming in which you're creating.</p>
			<h3>Fill out this form</h3>
			<?php gravity_form(3, false, false, false, '', true, 12); ?>
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