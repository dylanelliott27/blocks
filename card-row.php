<?php
    $shortcode_at_bottom = get_field('shortcode_optional');
    $background_image = get_field('background_image');
?>

<section class="parallax-img card-row" style="font-family: 'montserrat'; background-image: linear-gradient( rgba(0, 0, 0, 0.6), rgba(0, 0, 0, 0.6) ), url(<?php echo wp_get_attachment_url($background_image); ?>);">
    <div class="container">
        <div class="row" style="box-shadow: 0px 2px 18px 0px rgb(0 0 0 / 30%); padding-top: 20px; padding-bottom: 20px;">

            <?php if( have_rows('cards') ) : ?>
                <?php while( have_rows('cards') ) : the_row(); ?>
                    <div class="col-md-12 col-lg-4">
                        <div class="drawing-conversion-card">
                            <?php echo get_sub_field('title'); ?>
                            <div class="card-img">
                                <?php $image = get_sub_field('image'); echo wp_get_attachment_image($image, [200, 100]);?>
                            </div>
                        </div>
                    </div>
                <?php endwhile; ?>
            <?php endif; ?>


        </div>
        <div class="d-flex justify-content-center align-items-center mt-5">
            <?php echo do_shortcode("$shortcode_at_bottom"); ?>
        </div>
    </div>
</section>
<!--[hubspot type=cta portal=7764262 id=ec72b28f-ae1b-445b-ad9a-8c8f48925741] !-->