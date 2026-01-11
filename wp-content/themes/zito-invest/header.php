<?php

/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package ZitoInvest
 */
?>
<!doctype html>
<html <?php language_attributes(); ?>>

<head>
   <?php
   wp_head();
   ?>

   <link rel="preconnect" href="https://fonts.googleapis.com">
   <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
   <link href="https://fonts.googleapis.com/css2?family=Lora:ital,wght@0,400..700;1,400..700&family=Merriweather:ital,opsz,wght@0,18..144,300..900;1,18..144,300..900&family=Signika:wght@300..700&display=swap" rel="stylesheet">

</head>

<body <?php body_class(); ?>>
   <?php load_analytics('analytics_body_top') ?>
   <div id="page" class="site">
      <a class="skip-link screen-reader-text" href="#content"><?php esc_html_e('Skip to content', 'zitoinvest'); ?></a>

      <?php get_template_part('template-parts/header', 'main'); ?>

      <div id="content" class="site-content">