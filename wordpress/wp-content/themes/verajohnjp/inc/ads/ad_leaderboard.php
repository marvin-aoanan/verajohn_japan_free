<?php /*?>
    <div class="main-banner"></div>
<?php */?>

<?php if( get_field('enable_ads', 'options') == true ) { ?>

    <div class="ad ad_leaderboard">
        <?php the_field('ad_leaderboard','options'); ?>
    </div> 

    <div class="ad ad_leaderboard_m">
        <?php the_field('ad_leaderboard_m','options'); ?>
    </div>

<?php } ?>