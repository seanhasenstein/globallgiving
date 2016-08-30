<?php
/*

	Template Name: Contact Page

*/
?>


<?php get_header(); ?>

<div class="page-wrapper contact-page">

	<h2 class="contact">Contact Us</h2>

	<p class="p-center p-light intro">To get in touch, email <a class="a-bold" href="mailto:kidsplay@globallgiving.org">kidsplay@globallgiving.org</a> or fill out the form below and someone will respond shortly.</p>

	<div class="first-row">
		<div class="details">
			<h3>Location</h3>
			<p><a href="https://www.google.com/maps/place/4100+W+River+Ln,+Brown+Deer,+WI+53209/@43.1779618,-87.965064,17z/data=!3m1!4b1!4m2!3m1!1s0x8804e242d2d38b61:0xd5b60b8c3a23ef74" target="_blank">4100 W. River Lane<br>Milwaukee, WI 53209</a></p>
			<h3 class="email">Email</h3>
			<p><a href="mailto:kidsplay@globallgiving.org">kidsplay@globallgiving.org</a></p>
		</div>
		<div class="map">
			<a href="https://www.google.com/maps/place/4100+W+River+Ln,+Brown+Deer,+WI+53209/@43.1779618,-87.965064,17z/data=!3m1!4b1!4m2!3m1!1s0x8804e242d2d38b61:0xd5b60b8c3a23ef74" target="_blank"><img src="<?php bloginfo('template_directory'); ?>/images/contact-map.png"></a>
		</div>
		<h4>We'd like to hear from you!</h4>
		<?php gravity_form(1, false, false, false, '', true, 12); ?>
	</div>

</div>

<?php get_footer (); ?>