<?php if( get_field('enable_ads', 'options') == true ) { ?>

    <div class="ad ad_skyscraper">
        <?php the_field('ad_skyscraper','options'); ?>
    </div>

    <div class="ad ad_skyscraper_m">
        <?php the_field('ad_skyscraper_m','options'); ?>
    </div>  

<?php } ?>