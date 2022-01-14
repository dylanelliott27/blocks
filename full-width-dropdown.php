<section class="py-5 full-width-dropdown" style="background-color: #2f3037;">
    <div class="container">
        <div class="row py-5">
            <div class="col">
                <div class="case-study-card">
                    <div class="case-study-header">
                        <h2 style="font-weight: bold; font-family: 'montserrat'; color: black;" class="mb-0">
                            <?php echo get_field('title'); ?>
                        </h2>                        <button style="display: none; top: 0; top: 50%; transform: translateY(-50%);" class="case-study-close black-close"></button>
                        <button style="top: 50%; transform: translateY(-50%);" class="case-study-expand"></button>
                    </div>
                    <div class="case-study-body closed">
                        <?php echo get_field('description'); ?>
                    </div>
                </div>
            </div>
        </div>
        <div class="d-flex justify-content-center">
            <?php echo do_shortcode('[hubspot type=cta portal=7764262 id=ec72b28f-ae1b-445b-ad9a-8c8f48925741]'); ?>
        </div>
    </div>
</section>