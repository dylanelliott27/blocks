<section class="home-download-ebook py-5">
    <div class="ebook-img-container container">
        <img class="d-block mx-auto" src="<?php $image = get_field('image'); echo wp_get_attachment_url($image); ?>" alt="">
    </div>
    <div class="dl-btn-container d-flex justify-content-center mt-4">
        <?php $shortcode = get_field('shortcode'); echo do_shortcode("$shortcode"); ?>
    </div>
</section>