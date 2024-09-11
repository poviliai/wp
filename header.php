<!DOCTYPE html>
<!--[if IE]><![endif]-->
<!--[if IE 8]><html dir="ltr" <?php language_attributes(); ?> class="ie8"><![endif]-->
<!--[if IE 9]><html dir="ltr" <?php language_attributes(); ?> class="ie9"><![endif]-->
<!--[if (gt IE 9)|!(IE)]><!-->
<html style="margin: 0 !important;" dir="ltr" <?php language_attributes(); ?>>
  <!--<![endif]-->
  <head>
     <!-- Telenorma AG --->
	   <meta charset="<?php bloginfo( 'charset' ); ?>" />
     <meta name="viewport" content="initial-scale=1.0" />
     <?php if( !function_exists( '_wp_render_title_tag' ) ){ ?>
		 <title><?php wp_title(); ?></title>
	   <?php } ?>
	   <link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
     <?php wp_head(); ?> 
     <link rel="icon"  href="<?=get_template_directory_uri()?>/images/fav-guz-blue.ico" type="image/x-icon .ico"/>
    <link rel="shortcut icon" media="all" href="<?=get_template_directory_uri()?>/images/fav-guz-blue.ico" type="image/x-icon .ico"/>
  </head>
  <body style="margin: 0 !important;">
  <header>
		<?php get_template_part( 'header', 'title' ); ?>
  </header>
  