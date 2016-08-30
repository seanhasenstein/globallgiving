<?php
/*

	Template Name: Donate Equipment Page

*/
?>


<?php get_header(); ?>

<div class="page-wrapper equipment-page">
	<div class="inner">
		<h2 class="equipment">Donate Equipment</h2>

		<p class="p-center p-light">The following is a list of items that we currently accept for donation. We thank you in advance for your support in helping improve the lives of underprivileged children around the world!</p>

	<div class="row-1 row">
		<div class="column-1">
			<h3>Baseball/Softball</h3>
			<ul>
				<li>Baseballs &amp; Softballs</li>
				<li>Bats</li>
				<li>Baseball cleats</li>
				<li>Baseball hats/visors</li>
				<li>Uniforms (shirts, pants, belts, and socks)</li>
				<li>Batting helmets</li>
				<li>Catcher's equipment</li>
				<li>Mitts/batting gloves</li>
				<li>Baseball tees</li>
			</ul>

			<h3>Basketball</h3>
			<ul>
				<li>Basketballs</li>
				<li>Uniforms</li>
				<li>Basketball nets</li>
				<li>Basketball shoes</li>
				<li>Practice jersey (reversible)</li>
				<li>Medals</li>
			</ul>

			<h3>Coaching Supplies</h3>
			<ul>
				<li>"Coach" jackets, shirts, windbreakers</li>
				<li>Clipboards</li>
				<li>Dry erase sports boards</li>
				<li>Air pumps and needles</li>
				<li>Whistles</li>
				<li>First aid kits</li>
				<li>Practice pennies</li>
				<li>Equipment bags</li>
				<li>Practice cones</li>
				<li>Knee, ankle, &amp; arm supports</li>
			</ul>
		</div>

		<div class="column-2">
			<h3>Running</h3>
			<ul>
				<li>Running shoes</li>
				<li>Running shorts</li>
				<li>Socks</li>
				<li>T-shirts</li>
			</ul>

			<h3>Rugby</h3>
			<ul>
				<li>Uniforms</li>
				<li>Cleats</li>
				<li>Rugby ball</li>
			</ul>

			<h3>Soccer</h3>
			<ul>
				<li>Uniforms (shorts, socks, jerseys)</li>
				<li>Shin guards</li>
				<li>Soccer ball carrying bags</li>
				<li>Soccer nets</li>
				<li>Goalie uniforms</li>
				<li>Goalie gloves</li>
			</ul>

			<h3>Tennis</h3>
			<ul>
				<li>Tennis rackets</li>
				<li>Tennis balls</li>
				<li>Clothing</li>
				<li>Nets</li>
				<li>Grips</li>
				<li>Strings</li>
			</ul>

			<h3>Volleyball</h3>
			<ul>
				<li>Volleyballs</li>
				<li>Nets</li>
				<li>Sand court boundary lines</li>
				<li>Knee pads</li>
			</ul>
		</div>
	</div>
		
		<h3>Get in Touch!</h3>
		<?php gravity_form(1, false, false, false, '', true, 12); ?>
		<!-- BORDER -->
		<div class="border text-center">
			<img src="<?php bloginfo('template_directory'); ?>/images/logoSimple.png" alt="Globall Giving">
		</div>
		<!-- END BORDER -->
	<!-- BOTTOM SUBSCRIBE SECTION -->
	  <div class="subscribe-section">
	    <div class="inner">
	      <p>Sign up to get the latest Globall Giving news!</p>
	      <?php gravity_form(4, false, false, false, '', true, 12); ?>
	    </div>
	  </div>
	<!-- END BOTTOM SUBSCRIBE SECTION -->
</div>

</div>

<?php get_footer (); ?>