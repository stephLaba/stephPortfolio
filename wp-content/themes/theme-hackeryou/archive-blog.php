<?php get_header(); ?>


<div class="main">
  <div class="container">

    <div class="content">
      <?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>

      <h2><?php the_title(); ?></h2>
        <?php endwhile; ?>

    

      <?php endwhile; // end of the loop. ?>

    </div>
    <!-- .content end -->
	</section>
	<!-- .wrapper end -->
  </div> <!-- /.container -->
</div> <!-- /.main-->

<?php get_footer(); ?>

