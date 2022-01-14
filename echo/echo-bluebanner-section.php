<?php
    $shortcode = get_field('shortcode');
?>

<section class="echo-info py-5">
    <div class="container">
        <div class="row">
            <h2 class="blue-banner-text" style="text-align: center;"><?php echo get_field('banner_text'); ?></h2>
            <?php echo get_field('title'); ?>
        </div>
        <div class="row justify-content-center" style="box-shadow: 0px 2px 18px 0px rgb(0 0 0 / 30%); padding-top: 20px; padding-bottom: 20px; row-gap: 20px;">

            <?php if( have_rows('cards') ) : ?>
                <?php while( have_rows('cards') ) : the_row(); ?>
                    <div class="col-md-6 col-lg-3">
                        <div class="drawing-conversion-card">

                                <?php echo get_sub_field('title'); ?>
                            <p style="text-align: center;"><span style="color: #393939;"><?php echo get_sub_field('description'); ?></span></p>
                            <div class="card-img">
                                <?php $image = get_sub_field('image'); echo wp_get_attachment_image($image, [200, 100]); ?>
                            </div>
                        </div>
                    </div>
                <?php endwhile; ?>
            <?php endif; ?>

        </div>
        <h4 class="mt-4" style="text-align: center; font-size: clamp(25px, 5vw, 50px); font-weight: bold; text-align: center;"><span style="color: #ffffff;"><?php echo get_field('bottom_title'); ?></span></h4>
        <div class="d-flex justify-content-center align-items-center mt-5">
            <?php echo do_shortcode("$shortcode"); ?>
        </div>
    </div>
</section>
<style>
    .echo-info h3 {
        font-size: clamp(25px, 5vw, 38px);
        padding-top: 1.5rem;
        padding-bottom: 1.5rem;
    }
</style>