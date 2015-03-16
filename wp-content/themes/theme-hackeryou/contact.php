<?php
/*
Template Name: Contact
*/


get_header();  ?>

<div class="main">
  <div class="container contactContainer clearfix">
	<section class="contact">

	    <?php // Start the loop ?>
	    <?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>

	     <!--  <h2><?php the_title(); ?></h2> -->
	      <?php the_content(); ?>
	    <?php endwhile; // end the loop?>

		<?php //we are going to pull in our latest 4 blog posts?>
	
	</section>
	<!-- portfolio end -->

		
  </div> <!-- /.container -->
</div> <!-- /.main -->

<?php get_footer(); ?>