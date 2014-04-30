<?php
/**
 * The Header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="content">
 *
 * @package ecstatic
 */
?><!DOCTYPE html>
<html class="no-js" <?php language_attributes(); ?>>
<head>
  <meta charset="<?php bloginfo( 'charset' ); ?>">
  <meta name="application-name" content="Sample Title">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title><?php wp_title( '|', true, 'right' ); ?></title>
  <link rel="stylesheet" href="/wp-content/themes/ecstatic/css/ecstatic.css?ver=3.9" type='text/css' media='all' />
  <link rel="profile" href="http://gmpg.org/xfn/11">
  <link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">

  <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div id="page" class="hfeed site">
  <div class="inner-page">
    <a class="nav-btn" id="nav-open-btn" href="#nav">Menu</a>

    <header id="masthead" class="site-header block" role="banner">
      <div class="site-branding">
        <h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
        <h2 class="site-description"><?php bloginfo( 'description' ); ?></h2>
      </div>
    </header><!-- #masthead -->

    <nav id="site-navigation" class="main-navigation" role="navigation">
      <a class="skip-link screen-reader-text" href="#content"><?php _e( 'Skip to content', 'ecstatic' ); ?></a>
      <a class="close-btn" id="nav-close-btn" href="#top">Return to Content</a>
      <?php wp_nav_menu( array( 'theme_location' => 'primary' ) ); ?>
    </nav><!-- #site-navigation -->

    <div id="content" class="site-content block">