<?php
    $bg_color = get_field('background_color');
?>
<section style="font-family: montserrat; background-color: <?php echo $bg_color ?>;" class="py-5 large-text-block">
    <div class="container">

        <div class="row">
            <?php echo get_field('text'); ?>
        </div>
    </div>
</section>