<?php
$link = get_field('header_link', 'option');
?>
<header id="site-header" class="site-header">
   <div class="container">
      <div class="logo-menu-wrapper">
         <div class="site-logo-description">
            <div class="site-logo">
               <?php the_custom_logo(); ?>
            </div>
            <div>
               <?php

               if ($link):
                  $link_url = $link['url'];
                  $link_title = $link['title'];
                  $link_target = $link['target'] ? $link['target'] : '_self';
               ?>
                  <a class="link" href="<?php echo esc_url($link_url); ?>" target="<?php echo esc_attr($link_target); ?>"><?php echo esc_html($link_title); ?></a>
               <?php endif; ?>
            </div>
         </div>
      </div>
   </div>
</header><!-- #site-header -->