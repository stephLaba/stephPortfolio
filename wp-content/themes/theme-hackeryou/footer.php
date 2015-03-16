<footer>


	<section id="contact" class="contact">

		<h2>contact</h2>

		<?php
			$about = new WP_Query( 'page_id=75' );
			while ( $about->have_posts() ) :  $about->the_post(); ?>
		
		        <div class="contactContent content">
		        	<?php the_content(); ?>
		        </div>
			
		<?php
			endwhile;
			wp_reset_postdata();
		?>	
		
	</section>
	<!-- contact -->


	 <?php $heroImage = get_field('header_background_image'); ?>

	 <div style="background-image: url(<?= $heroImage['url'] ?>);" class="hero clearfix heroFooter">

		<div class="hero heroFooter clearfix">
			<div class="socialMedia animate clearfix">
				<ul class="socialMediaList animate clearfix">
					<li><a href=""><i class="fa fa-github"></a></i></li>
					<li><a href=""><i class="fa fa-twitter"></a></i></li>
					<li><a href=""><i class="fa fa-linkedin"></a></i></li>
				</ul>
			</div>
		</div>	

	 </div>


  <div class="container footerContainer">
    <p>&copy; StephLaba.com | all rights reserved  <?php echo date('Y'); ?></p>
  </div>
</footer>

<script>
/* Google Analytics! */
 var _gaq=[["_setAccount","UA-XXXXX-X"],["_trackPageview"]]; // Change UA-XXXXX-X to be your site's ID
 (function(d,t){var g=d.createElement(t),s=d.getElementsByTagName(t)[0];g.async=1;
 g.src=("https:"==location.protocol?"//ssl":"//www")+".google-analytics.com/ga.js";
 s.parentNode.insertBefore(g,s)}(document,"script"));
</script>

<?php wp_footer(); ?>
</body>
</html>