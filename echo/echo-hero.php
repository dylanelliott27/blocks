<section class="parallax-img hero-block" style="font-family: 'montserrat'; background-image: linear-gradient( rgba(0, 0, 0, 0.6), rgba(0, 0, 0, 0.6) ),  url(<?php echo wp_get_attachment_url(get_field('hero_background')); ?>);">
	<div class="container">
		<div class="row">
            <?php echo get_field('hero_headline_h1') ?>
			<div style='width: fit-content; margin: 0 auto;' class="mobile-only-img d-block d-md-none mb-4">
				<?php echo wp_get_attachment_image(40345, 'medium') ?>
			</div>
			<?php echo get_field('hero_headline_h2'); ?>
			<div class="d-flex justify-content-center" style="margin-bottom: 44px;">
				<?php $shortcode = get_field('hero_headline_shortcode'); echo do_shortcode("$shortcode"); ?>
			</div>
		</div>
		<div class="row justify-content-center" style="box-shadow: 0px 2px 18px 0px rgb(0 0 0 / 30%); padding-top: 20px; padding-bottom: 20px; row-gap: 20px;">
            <?php if( have_rows('cards') ) : ?>

            <?php while( have_rows('cards') ) : the_row() ?>

                    <div class="col-lg-3 col-md-6">
                        <div class="drawing-conversion-card">
                            <h4 style="text-align: center; color: #393939;"><?php echo get_sub_field('title') ?></h4>
                            <div class="card-img">
                                <?php echo wp_get_attachment_image(get_sub_field('image'), [200, 100]); ?>
                            </div>
                        </div>
                    </div>

            <?php endwhile; ?>

            <?php endif; ?>
		</div>
	</div>
</section>