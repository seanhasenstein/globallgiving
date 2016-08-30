<?php
/*

	Template Name: About Page

*/
?>


<?php get_header(); ?>

<div class="page-wrapper about-page">
	<div class="inner">

		<h2 class="about">About Globall Giving</h2>

		<p class="intro">GloBall Giving is a suburban Milwaukee-based charity that collects and distributes new and gently used sporting equipment from retailers and the garages, storage sheds, basements and attics of families like yours.</p>

		<p class="intro">How often do our children grow out of their shoes, sporting equipment and uniforms…only to be replaced with new shoes, equipment and uniforms?</p>

		<!-- BORDER -->
		<div class="border text-center">
			<img src="<?php bloginfo('template_directory'); ?>/images/logoSimple.png" alt="Globall Giving">
		</div>
		<!-- END BORDER -->

		<p>Help eliminate the excessive waste of throwing away the new and gently used items by donating to GloBall Giving. Surplus sporting goods can give an opportunity to a child that may never see a soccer ball, a uniform, a baseball glove or athletic shoes. The charity’s criteria for distribution is that it goes to children in need and have no other options to enjoy the pure joy that a pair of shoes or a ball will bring.</p>

		<p>Without your help, these children; who often have no other option for enjoyment, are stripped from the happiness that a simple sport can bring in their impoverished lives. We often take for granted being able to run to the store to purchase a new ball or shoes for the upcoming season. These options simply do not exist but definitely are a possibility with the donations we receive. Children born into poor governments or impoverished lives truly cherish and love the simple opportunity to play.</p>

		<h3>STATISTICS</h3>

		<ul>
			<li>2.2 Billion Children in world. 1 billion live in poverty (UNICEF)</li>
			<li>24,000 children under 5 years old die every day (United Nations)</li>
			<li>Richest 20% of the counties make up 76.6% of world consumption</li>
			<li>Middle 60% consume 21.9%</li>
			<li>Poorest 20% consume 1.5%</li>
		</ul>

		<h3>INTERNATIONAL PREVELANCE</h3>

		<p>Worldwide prevalence of obesity is increasing rapidly, and many low- and middle-income countries are now significantly affected as well as richer nations. An estimated 42 million children under five are estimated to be overweight or obese in 2010, almost 35 million of whom live in developing countries. In developing countries, rising obesity levels often coexist with the longstanding problem of under nutrition (National Obesity Observatory).</p>

		<h3>HOW YOU CAN HELP</h3>

		<p>GloBall Giving can use your help! There are several ways to help our mission of improving lives of underprivileged children through exercise and playing sports:</p>

		<ul>
			<li><a href="http://globallgiving.org/organize-a-collection">Organize a collection drive</a></li>
			<li><a href="http://globallgiving.org/donate-equipment">Donate sporting goods</a></li>
			<li><a target="_blank" href="https://www.paypal.com/cgi-bin/webscr?cmd=_s-xclick&hosted_button_id=7SBXUWCXMQ3W8">Financial support</a></li>
			<li><a href="http://globallgiving.org/drop-off-locations">Become a donation drop off partner</a></li>
			<li><a href="http://globallgiving.org/get-involved">Other ideas</a></li>
		</ul>
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