<?php

/**************************************************
 * Footer widgets file
 **************************************************/
global $theme_config;
$footer_areas = isset($theme_config['footer-areas']) ? $theme_config['footer-areas'] : 4;
?>

<div class="container">

   <div class="footer-content">

      <div class="footer-content--logo">
         <?php dynamic_sidebar('footer-1'); ?>
      </div>
      <div class="footer-content--contact">
         <?php dynamic_sidebar('footer-2'); ?>
         <?php dynamic_sidebar('footer-3'); ?>
         <?php dynamic_sidebar('footer-4'); ?>
      </div>

   </div>
</div>