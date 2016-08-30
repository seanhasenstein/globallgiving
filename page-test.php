<?php
/*

	Template Name: Test Page

*/
?>


<?php get_header( 'modal' ); ?>

<!-- Large modal -->
<!-- <button type="button" class="btn btn-primary" data-toggle="modal" data-target=".bs-example-modal-lg">Large modal</button> -->

<div id="myModal" class="modal fade bs-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" id="modal">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
    	 <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
    	<div class="text-center">
			<img src="<?php bloginfo('template_directory'); ?>/images/golf/globall_golf.jpg">
  			<p class="intro">The Globall Giving <span class="green">Night Golf Event</span> is upon us!</p>
     		<h3>Sept. 16th, 2016 - River Club in Mequon, WI</h3> 
      		<p class="details">Dinner <i class="fa fa-circle" aria-hidden="true"></i> 9 Holes <i class="fa fa-circle" aria-hidden="true"></i> Live &amp; Silent Auction <i class="fa fa-circle" aria-hidden="true"></i> Live Entertainment <i class="fa fa-circle" aria-hidden="true"></i> Post-Golf Appetizers</p>
      		<a class="button-info" href="http://globallgiving.org/night-golf-event">Night Golf Details</a>
      		<a class="button-info close-modal" data-dismiss="modal" href="http://globallgiving.org">Continue to globallgiving.org</a>
      	</div>
    </div>
  </div>
</div>

<div class="page-wrapper test-page">
	<div class="inner">
		<h2 class="volunteer">This is a Test Page</h2>

		<p>Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, consectetur, from a Lorem Ipsum passage, and going through the cites of the word in classical literature, discovered the undoubtable source. Lorem Ipsum comes from sections 1.10.32 and 1.10.33 of "de Finibus Bonorum et Malorum" (The Extremes of Good and Evil) by Cicero, written in 45 BC. This book is a treatise on the theory of ethics, very popular during the Renaissance. The first line of Lorem Ipsum, "Lorem ipsum dolor sit amet..", comes from a line in section 1.10.32.</p>

		<p>The standard chunk of Lorem Ipsum used since the 1500s is reproduced below for those interested. Sections 1.10.32 and 1.10.33 from "de Finibus Bonorum et Malorum" by Cicero are also reproduced in their exact original form, accompanied by English versions from the 1914 translation by H. Rackham.</p>

		<p>Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, consectetur, from a Lorem Ipsum passage, and going through the cites of the word in classical literature, discovered the undoubtable source. Lorem Ipsum comes from sections 1.10.32 and 1.10.33 of "de Finibus Bonorum et Malorum" (The Extremes of Good and Evil) by Cicero, written in 45 BC. This book is a treatise on the theory of ethics, very popular during the Renaissance. The first line of Lorem Ipsum, "Lorem ipsum dolor sit amet..", comes from a line in section 1.10.32.</p>

		<p>The standard chunk of Lorem Ipsum used since the 1500s is reproduced below for those interested. Sections 1.10.32 and 1.10.33 from "de Finibus Bonorum et Malorum" by Cicero are also reproduced in their exact original form, accompanied by English versions from the 1914 translation by H. Rackham.</p>

	</div>

</div>

<?php get_footer (); ?>