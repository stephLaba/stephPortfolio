  <?php get_header(); ?>


  <div class="main">
    <div class="container">
    <section class="sectionWrapper">
  
      <div class="content">
        <?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>
          
        <?php $heroImage = get_field('header_img'); ?>
        <!-- <img class="" src=" <?php echo $heroImage['sizes']['custom']; ?> " alt="<?php echo $heroImage['title'];?>"> -->

        <h2 class="portTitleSingle"><?php the_title(); ?></h2>
          <p class="tax"><?php the_field("tags"); ?></p>
            <span class="copy"><?php the_content(); ?></span>
            <?php while(has_sub_field('imgs')): ?>
            <?php //for every img/caption combo, run this code ?>
            <figure class="images gallery">
              <figcaption>
                  <?php $image = get_field('article_img'); // pre_r($image); // console log for php ?>
                    <img class="" src=" <?php echo $image['sizes']['custom']; ?> " alt="<?php echo $image['title'];?>">
              </figcaption>
            </figure>

          <?php endwhile; ?>
    

        <?php endwhile; // end of the loop. ?>
    </section> 
      </div> <!-- /.content -->

    </div> <!-- /.container -->
  </div> <!-- /.main -->

  <?php get_footer(); ?>