<?php
    $text = get_field('text');
    $image = get_field('image');
    $video = get_field('video');
    $max_font_size = get_field('max_font_size_desktop_px');
    $min_font_size = get_field('min_font_size_mobile_px');
    $font =  get_field('font_family') ? get_field('font_family') : 'montserrat';
    $unique_id = str_replace(' ', '', substr(strip_tags($text), 0, 4));
?>
<section class="two-cols <?php echo $unique_id; ?> py-5">
	<div class="container">
		<div class="row gx-md-5 gx-0">
			<div class="col-md-12 col-lg-6 d-flex justify-content-center flex-column custom-padding-col-left ">
                <?php echo $text; ?>
			</div>
			<div class="col-md-12 col-lg-6 mt-5 mt-lg-0 custom-padding-col-right d-flex justify-content-center align-items-center ">
                <?php if ( $video ) : ?>
                    <iframe class="yt-iframe-big-mobile" style="height: 100%; width: 100%;" src="<?php echo $video; ?>" frameborder="0" allowfullscreen="1" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture"></iframe>
                <?php else: ?>
                    <?php echo wp_get_attachment_image($image, 'full'); ?>
                <?php endif; ?>
			</div>
		</div>
	</div>
</section>
<style>
    /*.<?php echo $unique_id?> h3, .<?php echo $unique_id?> h1, .<?php echo $unique_id?> h2, .<?php echo $unique_id?> h4, .<?php echo $unique_id?> h5, .<?php echo $unique_id?> h6, .<?php echo $unique_id?> p {
        font-size: clamp(<?php echo $min_font_size; ?>px, 5vw, <?php echo $max_font_size; ?>px);
        font-family: '<?php echo $font; ?>';
        line-height: 45px;
        padding-bottom: 0px;
    }

    .<?php echo $unique_id?> p, .<?php echo $unique_id?> ul {
        font-size: 20px;
        line-height: normal;
        font-family: 'lato';
        font-weight: 400;
    }

    .<?php echo $unique_id?> ul {
        padding-top: 1.5rem;
        padding-bottom: 1.5rem;
    }

    .<?php echo $unique_id?> li {
        line-height: normal;
    }*/

</style>