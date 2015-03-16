<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<?php // Load Meta ?>
  <meta charset="<?php bloginfo( 'charset' ); ?>" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title><?php  wp_title('|', true, 'right'); ?></title>
  <link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
  <link href='http://fonts.googleapis.com/css?family=Montserrat:400,700|Raleway:400,900,800,700,600,500,300,200,100' rel='stylesheet' type='text/css'>
  <?php // Load our CSS ?>
  <link rel="stylesheet" type="text/css" href="<?php bloginfo( 'stylesheet_url' ); ?>" />
  <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="<? bloginfo('template_url')?>/animate.css">
  <link rel="icon" type="image/x-icon" href="img/favicon.ico" />

  <?php wp_head(); ?>
</head>


<body <?php body_class(); ?>>

<header>
  <div class="container">
          
    <?php if(is_front_page()) { ?>
    <nav class="navigation clearfix">
        <a class="navicon" href=""><i class="fa fa-bars"></i></a>
        <h1 class="navTile">
          <a class="navTitleLink" href="<?php echo home_url( '/' ); ?>" title="<?php bloginfo( 'name', 'display' ); ?>" rel="home">
            <?php bloginfo( 'name' ); ?>
          </a>
        </h1>

        <?php wp_nav_menu( array(
          'container' => false,
          'theme_locations' => 'primary'
        )); ?>
     </nav>
      <!-- .navigaton1 end -->
    <?php 
    } //closes is front page id
    else {
     ?>
    

    <nav class="navigation2 clearfix">
      <a class="navicon" href=""><i class="fa fa-bars"></i></a>
        <h1 class="nav2Tile">
          <a class="navTitleLink" href="<?php echo home_url( '/' ); ?>" title="<?php bloginfo( 'name', 'display' ); ?>" rel="home">
            <?php bloginfo( 'name' ); ?>
          </a>
        </h1>

        <?php wp_nav_menu( array(
          'container' => false,
          'menu' => 'Menu 2'
        )); ?>
     </nav>
     <?php } ?>
  </div> <!-- /.container -->
</header><!--/.header-->

