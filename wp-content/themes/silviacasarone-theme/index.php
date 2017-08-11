<?php get_header(); ?>

	<main role="main">
		<!-- section -->
		<section class="news-listing">

<!--			<h1><?php // _e( 'Latest Posts', 'html5blank' ); ?></h1>-->

			<div class="container">
                
                <header class="category-pages-header">
                    <?php the_breadcrumb(); ?>
                    <div class="category-pages-title">
                        <div class="container-fluid">
                            <h1><?php _e( 'News', 'html5blank' ); ?></h1>
                        </div>
                    </div>
                </header>
                
                <?php get_template_part('loop'); ?>
                
                <?php include('inc/contattami.php'); ?>
            </div>

			<?php // get_template_part('pagination'); ?>

		</section>
		<!-- /section -->
	</main>

<?php get_footer(); ?>
