<!DOCTYPE html>
<html class="no-js" <?php language_attributes(); ?>>

<head>
  <meta charset="<?php bloginfo('charset'); ?>">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="profile" href="http://gmpg.org/xfn/11">
  <link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">

  <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

<!-- Google Tag Manager - Roll-Up Property -->
<noscript><iframe src="//www.googletagmanager.com/ns.html?id=GTM-WGQLLJ"
height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
'//www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
})(window,document,'script','dataLayer','GTM-WGQLLJ');</script>
<!-- End Google Tag Manager -->

<div id="wrapper">

  <?php do_action('__before_header') ; ?>

  <?php hu_get_template_part('parts/header-main'); ?>

  <?php do_action('__after_header') ; ?>

  <div class="container" id="page">
    <div class="container-inner">
      <?php do_action('__before_main') ; ?>
      <div class="main">
        <div class="main-inner group">
          <?php do_action('__before_content') ; ?>
