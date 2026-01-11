<?php

/**
 * Template Name: Homepage
 */

get_header();
?>

<div id="primary" class="content-area">
    <main id="main" class="site-main">
        <?php get_template_part('template-parts/homepage/hero'); ?>
        <?php get_template_part('template-parts/homepage/business', 'information'); ?>
        <?php get_template_part('template-parts/homepage/assembly', 'documentation'); ?>
    </main><!-- #main -->
</div><!-- #primary -->

<?php
get_footer();
