<?php
/**
 * Check if Website is visible to Search Engines
 */
function wpse_check_visibility()
{
   if ('0' == get_option('blog_public')) {
      add_action('admin_footer', 'wpse_private_wp_warning');
   }

}
add_action('admin_init', 'wpse_check_visibility');

/**
 * If website is Private, show alert
 */
function wpse_private_wp_warning()
{
   if ((function_exists('is_network_admin') && is_network_admin())) {
      return;
   }

   echo '<div id="robotsmessage" class="error">';
   echo '<p><h3>' . __('Huge SEO Issue: You\'re blocking access to robots.', 'zitoinvest') . '</h3> ' . sprintf(__('You must go to your %sReading Settings%s and uncheck the box for Search Engine Visibility.', 'zitoinvest'), '<a href="' . esc_url(admin_url('options-reading.php')) . '">', '</a>') . '</p></div>';
}