<?php
    $bg_img = get_field('background_image');
?>
<section class="parallax-img" style="background-image: linear-gradient( rgba(0, 0, 0, 0.6), rgba(0, 0, 0, 0.6) ), url(<?php echo wp_get_attachment_url($bg_img);?>">
    <div class="container">
        <h2 class="mb-3" style="text-transform: uppercase; text-align: start;"><strong><span style="color: #ffffff;"><?php echo get_field('title'); ?></span></strong></h2>

        <div class="row pre-fade-in" style="box-shadow: 0px 2px 18px 0px rgb(0 0 0 / 30%); padding-top: 20px; padding-bottom: 20px; row-gap: 20px;">

            <?php if( have_rows('cards') ) : ?>
                <?php while( have_rows('cards') ) : the_row(); ?>
                    <div class="col-md-12 col-lg-4">
                        <div class="tall-card">
                            <p class="pb-3" style=" font-family: 'montserrat'; text-align: center; font-size: calc(50px + 1.5vw);"><span style="color: #33cccc;"><strong><?php echo get_sub_field('number'); ?></strong></span></p>
                            <span style="display: block;" class="tall-card-title"><?php echo get_sub_field('title'); ?></span>
                            <div class="tall-card-body">
                                <?php echo get_sub_field('description') ?>
                            </div>
                            <?php $image = get_sub_field('image'); echo wp_get_attachment_image($image, [200, 100], false, ["class" => "tall-card-img pt-4"]); ?>
                        </div>
                    </div>
                <?php endwhile; ?>
            <?php endif; ?>

        </div>
        <div class="d-flex justify-content-center align-items-center mt-5">
            <?php $shortcode = get_field('shortcode'); echo do_shortcode("$shortcode"); ?>
        </div>
    </div>
</section>