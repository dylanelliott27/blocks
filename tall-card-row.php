<?php
    $bg_img = get_field('background_image');
    $shortcode = get_field('shortcode');
    $card_counter = 0;
?>

<section class="parallax-img" style="background-image: linear-gradient( rgba(0, 0, 0, 0.6), rgba(0, 0, 0, 0.6) ), url(<?php echo wp_get_attachment_url($bg_img);?>); padding: 0;">
    <div class="custom-container-cards">
        <div style="row-gap: 20px;" class="pre-fade-in numeric-row custom-card-row">

            <?php if( have_rows('cards') ) : ?>
                <?php while( have_rows('cards') ) : the_row(); $card_counter++; ?>

                    <div class="custom-col">
                        <div <?php echo $card_counter == 3 ? 'data-nobodycorrection="true"' : '' ?> class="tall-card">
                            <p class="tall-card-title" style="text-align: center;"><strong><?php echo get_sub_field('title'); ?></strong></p>
                            <div class="tall-card-body">

                                <?php if($card_counter == 4) : ?>
                                    <p class="big-orange-title pb-0"><span class="percent-value"><?php echo get_field('facilities_that_use_echo'); ?></span><span class="percent-sign"></span></p>
                                    <h3 style="font-family: 'montserrat'; font-weight: bold;" class="title text-center">Facilities that use echo</h3>

                                    <p class="big-orange-title pb-0 mt-5"><span class="percent-value"><?php echo get_field('industries_served'); ?></span><span class="percent-sign"></span></p>
                                    <h3 style="font-family: 'montserrat'; font-weight: bold;" class="title text-center">Industries served </h3>
                                <?php else: ?>
                                    <?php echo get_sub_field('description'); ?>
                                <?php endif; ?>

                            </div>
                            <?php if( $card_counter == 4 ) : ?>
                                <div class="d-flex justify-content-center align-items-center mt-5">
                                    <?php echo do_shortcode("$shortcode"); ?>
                                </div>

                            <?php elseif($card_counter == 3) : ?>
                                <p class="text-center big-orange-title pb-0"><span class="percent-value"><?php echo get_field('drawings_processed'); ?></span><span class="percent-sign"></span></p>
                                <h3 style="font-family: 'montserrat'; font-weight: bold;" class="title text-center">Drawings processed</h3>

                            <?php endif; ?>

                        </div>
                    </div>

                <?php endwhile; ?>
            <?php endif; ?>

        </div>
    </div>
</section>