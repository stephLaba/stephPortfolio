  <?php get_header(); ?>

   <?php $heroImage = get_field('header_background_image'); ?>

  <div style="background-image: url(<?= $heroImage['url'] ?>);" class="heroSingle">
  </div>

   <div class="headline headerCenter">
        <h2 class="headerHeadline animate"><?php the_field("header_title"); ?></h2>
        <h4 class="headerSubHeadline animate"><?php the_field("subheadline_title"); ?></h4>
      </div>

  <div class="main">
    <div class="container">

      <div class="content">
        <?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>

          <div style="background-image: url(<?= $heroImage['url'] ?>);" class="hero heroBlogSingle">
          </div>
      <section class="blogSectionWrapper">

        <h2><?php the_title(); ?></h2>
        title tag
        <div class="content blogContent">
          <?php the_content(); ?>
          <a href="<?php the_permalink(); ?>">ya</a>
        </div>

  
        <?php endwhile; // end of the loop. ?>

    </section>
      </div> 
    </div>
  </div> <!-- /.main-->

  <?php get_footer(); ?>