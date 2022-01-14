<section class="current-drawings py-5">
    <div class="container">
        <div style="row-gap: 20px;" class="row">
            <?php echo get_field('title'); ?>

            <?php if( have_rows('dropdowns') ) : ?>

            <?php while( have_rows('dropdowns') ) : the_row(); ?>

                    <div class="col-md-12 col-lg-4">
                        <div style="border: 1px solid rgba(255,255,255,.2);" class="case-study-card">
                            <div class="case-study-header">
                                <h6 class="mb-0">
                                    <?php echo get_sub_field('title') ?>
                                </h6>
                                <button style="display: none;" class="case-study-close black-close"></button>
                                <button class="case-study-expand"></button>
                            </div>
                            <div class="case-study-body closed">
                                <?php echo get_sub_field('content'); ?>
                            </div>
                        </div>
                    </div>

            <?php endwhile; ?>

            <?php endif; ?>
        </div>
        <div class="row mt-3 mt-md-5">
            <div class="col-lg-4 mt-md-3 mt-lg-5 mt-3 order-2 order-lg-0">
                <p style="font-family: 'montserrat'; font-size: 20px; text-align: center; font-weight: 500;"><span><?php echo get_field('bottom_text') ?></span></p>
                <div class="d-flex justify-content-center">
                    <?php $shortcode = get_field('shortcode'); echo do_shortcode("$shortcode"); ?>
                </div>
            </div>
            <div class="col-lg-8 mt-5 mt-md-0">
                <?php $image = get_field('bottom_image'); echo wp_get_attachment_image($image, 'full'); ?>
            </div>
        </div>
    </div>
</section>
