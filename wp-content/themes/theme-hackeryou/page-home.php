<?php
/*
Template Name: Home
*/


get_header();  ?>

<div class="main">
  <div class="container">

    <?php // Start the loop ?>
    <?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>

     <!--  <h2><?php the_title(); ?></h2> -->
      <?php the_content(); ?>
    <?php endwhile; // end the loop?>

	<?php //we are going to pull in our latest 4 blog posts?>

	<?php $latestPost = new WP_Query(array(
		'post_type' => 'portfolioitems', //we only want blog posts
		'posts_per_page' => 6,	
	)); ?>
				
	<?php if($latestPost->have_posts()) while ($latestPost->have_posts()): $latestPost->the_post(); 
			$image = get_field('hero_img');
	?>

	<div class="galleryDiv clearfix">

		<div class="featuredPost half">
			<h2><?php the_title(); ?></h2>
			<?php the_excerpt(); ?>

		</div>
		<!-- end .featuredPost  -->	

		<div class="imgGalleryDiv clearfix half">
		<img class="galleryImage" src="<?php echo $image['url']?>" alt="">
		</div>
		<!-- end .imgGalleryDiv -->
	</div>
	<!-- end .galleryDiv -->
	<?php //end of portfolio section ?>

	<?php endwhile; //end loop ?>
	<?php wp_reset_postdata(); //ends custom loop ?>


  </div> <!-- /.container -->
</div> <!-- /.main -->

<?php get_footer(); ?>