<?php get_header(); ?>

<div class="main">
  <div class="container">

    <div class="content">
      <?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>

      <h2><?php the_title(); ?></h2>
      <!-- title tag -->
      <p><strong>Project Name:</strong> <?php the_field("client_name"); ?></p>
      <?php //the_content(); 
       the_field("short_desc"); ?>
      <!-- get the content -->


      <?php endwhile; // end of the loop. ?>

    </div> <!-- /.content -->

  </div> <!-- /.container -->
</div> <!-- /.main -->

<?php get_footer(); ?>