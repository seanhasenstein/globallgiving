<?php
/*

	Template Name: Become a Partner Page

*/
?>


<?php get_header(); ?>

<div class="page-wrapper partner-page">
	<div class="inner">
		<h2 class="partner">Become a Partner</h2>

		<p class="p-light">Is your organization interested in partnering with Globall Giving to improve the lives of children living in the U.S. and/or abroad? We are eager, excited and awaiting your contact. Globall Giving reaches children from Kentucky to Kenya through our marvelous partnerships and want to hear from you. Please fill out the form below or email <a class="a-bold" href="mailto:kidsplay@globallgiving.org">kidsplay@globallgiving.org</a> to learn more.</p>

		<h3>Get in Touch!</h3>
		<?php gravity_form(1, false, false, false, '', true, 12); ?>
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