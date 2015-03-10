<?php get_header(); ?>

<div class="main">
  <div class="container">

    <div class="content">
      <?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>

      <h2><?php the_title(); ?></h2>
      <!-- title tag -->
      <p><strong>Client Name:</strong> <?php the_field("client_name"); ?></p>

        <?php the_terms($post->ID, 'technologies', ' ', ' x '); ?>

      <?php //the_content(); 
       the_field("short_desc"); ?>
      <!-- get the content -->
        <?php while(has_sub_field('imgs')): ?>
          <?php //for every img/caption combo, run this code ?>
          
          <h2>thumbs</h2>
          <a href="<?php the_permalink(); ?>"><?php the_post_thumbnail('medium'); ?></a>
  

          <figure class="images">
            <figcaption>
                <?php $image = get_sub_field('img'); // pre_r($image); // console log for php ?>
                  <img src=" <?php echo $image['sizes']['square']; ?> " alt="<?php echo $image['title'];?>">
                <?php the_sub_field('caption');  ?>
            </figcaption>
          </figure>
        <?php endwhile; ?>

    

      <?php endwhile; // end of the loop. ?>

    </div> <!-- /.content -->

  </div> <!-- /.container -->
</div> <!-- /.main -->

<?php get_footer(); ?>