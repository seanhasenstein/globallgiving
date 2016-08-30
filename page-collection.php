<?php
/*

	Template Name: Organize a Collection Page

*/
?>


<?php get_header(); ?>

<div class="page-wrapper collection-page">
	<div class="inner">
		<h2 class="collection">Organize a Collection</h2>

		<p class="p-light">You can help us sponsor an equipment drive by volunteering to collect and package new and gently used sporting equipment from your area. To get started, please determine the dates of your drive and how many drop off locations you would like to have. We will then send out the collection barrels and brochures. You will only need one barrel per location, as the barrels we provide are only for collection. Equipment should be shipped using appropriate shipping containers. Additionally, we recommend generating a collection of $500 - $1,000 for all international shipments to cover fees, including shipping, duties, and taxes.</p>

		<!-- BORDER -->
		<div class="border text-center">
			<img src="<?php bloginfo('template_directory'); ?>/images/logoSimple.png" alt="Globall Giving">
		</div>
		<!-- END BORDER -->

		<p class="p-light">Fill out the form below with your information and a GloBall Giving representative will get in touch with you for final instructions. Please allow at least two weeks notification before you start your equipment drive.</p>

		<p class="p-light">You can also use this flyer to advertise your collection initiative (and feel free to customize!).</p>

		<p class="p-button"><a class="collection-action" href="http://globallgiving.org/wpcontent/uploads/2015/11/GloballOrganizeCollection.docx">Download Collection Form</a></p>

		<p class="p-light">Tremendous “thank you” for taking your time to help GloBall Giving!</p>

		<h3>Get in Touch!</h3>
		<?php gravity_form(2, false, false, false, '', true, 12); ?>
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