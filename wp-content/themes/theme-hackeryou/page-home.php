<?php
/*
Template Name: Home
*/


get_header();  ?>

<?php $heroImage = get_field('header_background_image'); ?>

<div style="background-image: url(<?= $heroImage['url'] ?>);" class="hero headerHero">

	<div class="cloudContainer">
	 	<div class="cloudsOne"></div>
	 	<div class="cloudsTwo"></div>
 	</div>
 	<!-- end .cloudContainer  -->

</div>

 <div class="headline headerCenter">


      <h2 class="headerHeadline animate"><?php the_field("header_title"); ?></h2>
      <h4 class="headerSubHeadline animate"><?php the_field("subheadline_title"); ?></h4>
    </div>

<div class="main">
  <div class="container clearfix">

	<section id="about" class="about">
			<div class="sectionWrapper aboutWrapper">
				<h3 class="aboutH3">about</h3>

				<?php
					$about = new WP_Query( 'page_id=72' );
					while ( $about->have_posts() ) :  $about->the_post(); ?>
				
				        <div class="content aboutContent">
				        	<?php the_content(); ?>
				        </div>
					
				<?php
					endwhile;
					wp_reset_postdata();
				?>	
		
			</section>
		</div>
	<!-- .sectionWrapper end -->
		<!-- about end -->

	

	<?php $heroImage = get_field('header_background_image'); ?>

	<div style="background-image: url(<?= $heroImage['url'] ?>);" class="heroBlog">
	</div>


	<section id="port" class="portfolio">
		<div class="sectionWrapper">
	  	<h2 class=" portH2 animate">Portfolio</h2>
	  	<div class="divider animate">
	  	</div>

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
		<?php the_terms( $post->ID, 'technology'); ?>

		<div class="galleryDiv clearfix">

			<div class="featuredPost animate half">
				<h3><?php the_title(); ?></h3>
				<span class="tax"><?php the_field("tags"); ?></span>
				<?php the_excerpt(); ?>
				<p class="tax"><?php the_field("live_live"); ?></p>
				<?php the_field("subheadline_title"); ?>
				<!-- <a class="button portButton animate" href="<?php the_permalink(); ?>">View Project</a> -->
			</div>
			<!-- end .featuredPost  -->	

				<div class="imgGalleryDiv clearfix half">
					<img class="galleryImage animate" src="<?php echo $image['url']?>" alt="">
				</div>
				<!-- end .imgGalleryDiv -->
				</div>
			 <!-- end .galleryDiv -->
			<?php //end of portfolio section ?>

			<?php endwhile; //end loop ?>
			<?php wp_reset_postdata(); //ends custom loop ?>

		<!-- end .gallery -->
		</div>
		<!-- end .sectionWrapper -->
	</section>
	<!-- portfolio end -->


	
	<?php $heroImage = get_field('header_background_image'); ?>

	<div style="background-image: url(<?= $heroImage['url'] ?>);" class="heroBlog">
	</div>
	<!-- .hero image-->

	<div class="headerBlogWrapper">
		<h2 class="blogH2">blog</h2>
		<div class="blogDivider animate"></div>
	</div>
	

	<section id="blog" class="blog clearfix">

		<div class="sectionWrapper">
		
		<?php $blogPost = new WP_Query(array(
			'post_type' => 'post', //we only want blog posts
			'posts_per_page' => 3,	
		)); ?>
					
		<?php if($blogPost->have_posts()) while ($blogPost->have_posts()): $blogPost->the_post(); 
				// $image = get_field('hero_img');
		?>


			<div class="blogDiv animate third block">
				<div class="blogImg">
					<?php 
					if ( has_post_thumbnail() ) { // check if the post has a Post Thumbnail assigned to it.
						the_post_thumbnail('custom');
					} 
					?>
				</div>


				<div class="content">
				<!-- .blog Img end -->
					<h3 class="blogTitle"><?php the_title(); ?></h3>
					<?php the_excerpt(); ?>
					<a class="button" href="<?php the_permalink(); ?>">read more...</a>
				</div>
				<!-- .content end	 -->	
				
			</div>
		<!-- end .blogDiv -->
		<?php //end of portfolio section ?>

		<?php endwhile; //end loop ?>
		<?php wp_reset_postdata(); //ends custom loop ?>

			
		</div>
		<!-- .sectionWrapper end -->
	</section>
	<!-- blog end -->
	  	
		
	</div>
	<!-- hero end -->


  </div> <!-- /.container
</div> <!-- /.main -->

<?php get_footer(); ?>