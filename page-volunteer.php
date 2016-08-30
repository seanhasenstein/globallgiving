<?php
/*

	Template Name: Volunteer Page

*/
?>


<?php get_header(); ?>

<div class="page-wrapper volunteer-page">
	<div class="inner">
		<h2 class="volunteer">Ways to Volunteer</h2>

		<p class="p-center p-light">Are you interested in setting up a donation drive in your area? Does the mission speak to your heart? Would you like to donate your time or effort? Please contact us and we can get you set up with the necessary materials to start a donation drive or other event in your area.</p>

		<p class="p-center p-button"><a class="organize-action" href="http://www.globallgiving.org/organize-a-collection">Organize Your Own Collection</a></p>

		<!-- BORDER -->
		<div class="border text-center">
			<img src="<?php bloginfo('template_directory'); ?>/images/logoSimple.png" alt="Globall Giving">
		</div>
		<!-- END BORDER -->

		<h3>Volunteer an International Affiliate</h3>

		<p>Children all over the world are available to receive our donated goods. One shipment to an area will not always take care of the deserving children. If you have the contacts for orphanages and schools in your country or would like to develop a conduit relationship with Globall Giving, please contact us and we will be happy to send you the necessary paperwork to be determined for an international Global Giving affiliate.</p>

		<h3>Become a Regional Collection Affiliate</h3>

		<p>Our headquarters is located in a suburb of Milwaukee, Wi. We have a tremendous amount of support locally and receive donations all the time. However, as we grow we can tap into other regions and cities to gather equipment and monetary donations. If you would like to become a US regional affiliate that would support the mission, conduct donation drives and assist in fund raising efforts, please contact us and we will provide the necessary paperwork to be determined for a US regional affiliate.</p>
	
		<h3>Get in Touch</h3>
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