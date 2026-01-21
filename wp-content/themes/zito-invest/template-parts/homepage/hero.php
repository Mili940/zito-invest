<?php
$home_hero_title = get_field('home_hero_title');
$home_hero_description = get_field('home_hero_description');
$home_hero_image = get_field('home_hero_image');

if ($home_hero_title) : ?>
    <section class="section-hero section">
        <?php if ($home_hero_title) : ?>
            <div class="container">
                <div class="section-hero--wrapper">
                    <div class="title">
                        <?php echo $home_hero_title ?>
                    </div>
                    <?php if ($home_hero_description) : ?>
                        <div class="description">
                            <?php echo $home_hero_description ?>
                        </div>
                    <?php endif; ?>
                </div>
            </div>
        <?php endif; ?>
        <?php if ($home_hero_image) : ?>
            <div class="bg-image">
                <div class="bg-image--desktop">
                    <?php echo wp_get_attachment_image($home_hero_image["id"], "full"); ?>
                </div>
            </div>
        <?php endif; ?>
    </section>
<?php endif; ?>