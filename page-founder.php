<?php
/*

	Template Name: Founder Page

*/
?>


<?php get_header(); ?>

<div class="page-wrapper founder-page">
	<div class="inner">
		<div class="text-center">
			<img class="founder-img" src="<?php bloginfo('template_directory'); ?>/images/founder-message-2.jpg" alt="Mark Rolison">
		</div>
		<h2 class="founder">A Message from Globall Giving's Founder</h2>
		
		<p>Hello! My name is Mark Rolison and I am the fortunate founder of GloBall Giving. I have been very lucky to have traveled internationally as a child, a student, in business and philanthropically. Other cultures, the people and their traditions have always been fascinating to me. I have been privileged enough to visit some of the most beautiful places in the world but also have witnessed some of the most deplorable conditions, as well. One thing that has always amazed me is the innocence and joy that dwell within children. No matter how poor or dirty their conditions are, they always seem to be able to find joy in the "simple things" in life.</p>

		<p>It was not until a recent trip to Kenya where I participated in the donation of a mere three soccer balls to 250 school children that my life-light bulb went off. This typical school had no sporting equipment and opted to forgo any sports because of it. The absolute pure excitement these children exuded from three soccer balls is extremely difficult to put into words. They were jumping out of their skin and could not contain their happiness! About the closest I can come to describing it is a three year old seeing gifts at the holidays or witnessing their first birthday cake. It was then that I came up with the idea of donating new and gently used sporting equipment to children who have no other means of attaining sporting goods. This equipment will not only bring joy to children that deserve it but will also help develop healthy lifestyle habits.</p>

		<p>What has amazed me in this process of developing GloBall Giving is the willingness of people to come out of their daily routines and give their skills, talents, donations and time. GloBall Giving has been blessed with these gifts and is extremely grateful for all the support! Not only are we benefiting less fortunate children but we are being less wasteful by donating excess goods. In addition, as we grow we will be adding jobs in our local community. Finally, we are teaching our children about human awareness and helping others.</p>

		<p>There are many ways to help GloBall Giving. Every little bit helps and is greatly appreciated!</p>

		<p>Healthy Wishes!</p>

		<p class="signature">Mark D. Rolison</p>
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