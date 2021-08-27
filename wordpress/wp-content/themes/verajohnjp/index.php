<?php
/*
Template Name: Home
*/
?>

<?php get_header(); ?>

<?php if (have_posts()): while (have_posts()) : the_post(); ?>
    <div class="wrapper">
			<!-- Sidebar  -->
            <?php get_sidebar(); ?>
			<!-- Page Content  -->
			<section id="content">

				<div class="container-fluid">
                    <?php include (TEMPLATEPATH . '/inc/ads/ad_leaderboard.php' ); ?>
				</div>

				<div class="container-fluid">
                    <div id="sidebarCollapse" class="btn btn-info m-only">					
                        <i class="material-icons">dehaze</i>
                    </div>
					<div class="row game-content">
                        <div id="page-header" class="m-only">
                            <?php include (TEMPLATEPATH . '/inc/logo.php' ); ?>
                        </div> 
                        <picture class="hero">   
                            <source media="(min-width: 650px)" srcset="https://verajohnfree.com/wp-content/uploads/2021/03/home-desktop.png" width="100%">
                            <source media="(min-width: 465px)" srcset="https://verajohnfree.com/wp-content/uploads/2021/03/home-mobile.png" width="100%">
                            <img src="https://verajohnfree.com/wp-content/uploads/2021/03/home-mobile.png" width="100%">
                        </picture>
                        <?php include (TEMPLATEPATH . '/inc/games-search.php' ); ?>
						<div class="col-12">
                            <?php include (TEMPLATEPATH . '/inc/ads/ad_mrec.php' ); ?>
						</div>
					</div>
                    
					<?php include (TEMPLATEPATH . '/inc/games.php' ); ?>
                    
                    <div class="row seo-row">
                        <div id="page-content" class="col-12 animated fadeIn nopadding delay-1s">            
                            <?php the_field('homepage_content','options'); ?>           
                        </div>
                    </div>
					
				</div>          
			</section>
		</div> 

<?php endwhile; ?>

<?php else: ?>

    <div class="container">
        <div class="row content-center">
            <div class="col-12">
                <h1><?php the_title(); ?></h1>
             </div>
            <div class="col-12">
                <?php the_field('sorry_nothing_to_display','options'); ?>
            </div>
            <div class="col-12 text-center">
                <a class="btn" href="<?php echo home_url(); ?>"><?php the_field('return_home','options'); ?></a>
            </div>
        </div>
    </div>

<?php endif; ?>

<?php get_footer(); ?>
