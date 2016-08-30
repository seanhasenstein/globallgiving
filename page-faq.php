<?php
/*

	Template Name: FAQ Page

*/
?>


<?php get_header(); ?>

<div class="page-wrapper faq-page">
	<div class="inner">
		<h2 class="faq">Frequently Asked Questions</h2>

		<p><a class="a-hover-bold" href="#faq1">1. What problem, challenge or need does your GloBall Giving specifically address?</a></p>

		<p><a class="a-hover-bold" href="#faq2">2. What specific goals, activities and objectives does Globall Giving have?</a></p>

		<p><a class="a-hover-bold" href="#faq3">3. What primary and secondary population(s) are affected by GloBall Giving's actions.</a></p>

		<p><a class="a-hover-bold" href="#faq4">4. Why is GloBall Giving well positioned to address this particular need and implement the activities called out in the mission?</a></p>

		<p><a class="a-hover-bold" href="#faq5">5. What are the major positive outcomes that are derived from helping GloBall Giving?</a></p>

		<p><a class="a-hover-bold" href="#faq6">6. How do I get involved with a donation drive?</a></p>

		<p><a class="a-hover-bold" href="#faq7">7. How do I make a donation?</a></p>

		<!-- BORDER -->
		<div class="border text-center">
			<img src="<?php bloginfo('template_directory'); ?>/images/logoSimple.png" alt="Globall Giving">
		</div>
		<!-- END BORDER -->


		<h3>ANSWERS</h3>

		<p id="faq1"></p>
		<h4>1. What problem, challenge or need does your GloBall Giving specifically address?</h4>
		<p class="p-light">The World Health Organization estimates that out of 42 million obese children under the age five, 35 million are in developing countries. It has been documented that the overall percentage of childhood famine is slightly decreasing. However, as more children are being fed, it is the obesity rate that is increasing. Because of funding and availability, children in developing countries do not have access to adequate (or any) sporting equipment. Therefore, exercise and a healthy lifestyle are overlooked and a prime factor in development of childhood obesity.</p>

		<p id="faq2"></p>
		<h4>2. What specific goals, activities and objectives does Globall Giving have?</h4>
		<p class="p-light">The first and main goal is to collect new and gently used sporting equipment and donate it to appropriate schools and orphanages in developing countries. As GloBall Giving grows, it is our intention to add exercise and healthy nutrition camps or mini seminars. We have been asked quite regularly if GloBall Giving offers these sorts of support activities and it is in our plans to offer them in the near future.</p>

		<p id="faq3"></p>
		<h4>3. What primary and secondary population(s) are affected by GloBall Giving's actions.</h4>
		<p class="p-light">The primary population that is positively affected are children of all nationalities that have no other options for healthy experiences. The secondary population that will be affected will be the coaches, teachers and mentors in these countries. With GloBall Giving's assistance, they are able to satisfy their needs of helping the children. Finally, with the growth of GloBall Giving, we will also be giving back to our society by employing local people and bolstering our community.</p>

		<p id="faq4"></p>
		<h4>4. Why is GloBall Giving well positioned to address this particular need and implement the activities called out in the mission?</h4>
		<p class="p-light">GloBall Giving is well positioned to address this particular global need due to several reasons. First, it is our goal to bolster our relationships with national retailers and sporting goods manufacturers to expand our breadth and coverage. Second, our organization's overhead is incredibly low. Therefore, we are established to allow most of our donations to go directly to the mission and children rather than overhead. Finally, our growing relationships with corporate donors, international affiliates and regional collection efforts has helped us attain our goals. We will continue to foster our relationships as we branch out into new endeavors.</p>

		<p id="faq5"></p>
		<h4>5. What are the major positive outcomes that are derived from helping GloBall Giving?</h4>
		<p class="p-light">First we would like to provide joy and happiness to children that would have no other option for playing sports. Without sporting goods, schools skip playing the games and activities. Without the physical opportunity to play, it has been documented that "bored" children get into illegal activities and early pregnancies. Second, we would like to help offer healthy alternatives and fight the alarming increase in the rate of childhood obesity. Third, we would like to help reduce waste in our community by finding homes for perfectly good equipment and uniforms that might otherwise find their way to landfills. Finally, we want to be a good community steward by employing talented people and providing a healthy working environment.</p>

		<p id="faq6"></p>
		<h4>6. How do I get involved with a donation drive?</h4>
		<p class="p-light">Please follow the instructions listed here and we will get you started.</p>

		<p id="faq7"></p>
		<h4>7. How do I make a donation?</h4>
		<p class="p-light">We will be happy to accept donations via the US Postal Service. Please send a check to: 140 S. Park St., Pt. Washington, WI 53074...OR we can accept online donations through paypal. Our address is: 4100 W. River Lane, Milwaukee, WI 53209.</p>
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