<!DOCTYPE html>
<html <?php language_attributes(); ?>>
  <head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title><?php echo get_bloginfo( 'name' ); ?></title>

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">
    <link href="<?php echo get_bloginfo('template_directory'); ?>/blog.css" rel="stylesheet">

    <?php wp_head(); ?>
  </head>

  <body <?php body_class(); ?>>
    <div id="page" class="site">

      <header id="masthead" class="<?php echo is_singular() ? 'site-header featured-image' : 'site-header';?>">
        <div class="site-branding-container">
          <?php get_template_part('template-parts/header/site', 'branding'); ?>
        </div>

        <?php if (is_singular()) : ?>

          <div class="site-featured-image">
          </div>
        
        <?php endif; ?>
      </header>

    <div id="content" class="container site-content">
