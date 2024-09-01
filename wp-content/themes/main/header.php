<!DOCTYPE html>
<!--[if IE]><![endif]-->
<!--[if IE 8]><html dir="ltr" <?php language_attributes(); ?> class="ie8"><![endif]-->
<!--[if IE 9]><html dir="ltr" <?php language_attributes(); ?> class="ie9"><![endif]-->
<!--[if (gt IE 9)|!(IE)]><!-->
<html dir="ltr" <?php language_attributes(); ?>>
  <!--<![endif]-->
  <head>
	   <meta charset="<?php bloginfo( 'charset' ); ?>" />
       <meta name="viewport" content="initial-scale=1.0" />
       <?php wp_head(); ?> 
    
  </head>
  <body <?php body_class(); ?>>
    <header>
      <!-- top strip -->
      <?php get_template_part( 'header', 'top-strip' ); ?>
      <div class="container">
        <div class="d-flex justify-content-between align-items-center flex-column flex-md-row">
            <!-- logo -->
            <?php get_template_part( 'header', 'logo' ); ?>
            <!-- navigation -->
            <?php get_template_part( 'header', 'nav' ); ?>
        </div>
      </div>
    </header>
