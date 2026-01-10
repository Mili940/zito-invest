<?php

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */

function zitoinvest_widgets_init()
{
   global $theme_config;

   register_sidebar(array(
      'name'          => esc_html__('Sidebar', 'zitoinvest'),
      'id'            => 'sidebar-1',
      'description'   => esc_html__('Add widgets here.', 'zitoinvest'),
      'before_widget' => '<section id="%1$s" class="widget %2$s">',
      'after_widget'  => '</section>',
      'before_title'  => '<h2 class="widget-title">',
      'after_title'   => '</h2>',
   ));
   $footer_areas = isset($theme_config['footer-areas']) ? $theme_config['footer-areas'] : 4;
   for ($i = 1; $i <= $footer_areas; $i++) {
      register_sidebar(array(
         'name' => esc_html__('Footer area ' . $i, 'zitoinvest'),
         'id' => 'footer-' . $i,
         'description' => '',
         'before_widget' => '<aside id="%1$s" class="widget %2$s">',
         'after_widget' => '</aside>',
         'before_title' => '<h4 class="widget-title">',
         'after_title' => '</h4>',
      ));
   }
}
add_action('widgets_init', 'zitoinvest_widgets_init');
