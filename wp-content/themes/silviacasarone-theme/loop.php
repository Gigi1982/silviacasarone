<div class="listing-container">
    <div class="row">
        <?php if (have_posts()): while (have_posts()) : the_post(); ?>

            <!-- article -->
            <article id="post-<?php the_ID(); ?>" class="col-md-4">

                <!-- post thumbnail -->
                <?php 
                $templateUrl = get_template_directory_uri();
                $bg = get_the_post_thumbnail_url();
                if ( has_post_thumbnail()) : // Check if thumbnail exists ?>
                <div class="listing-item" style="background-image:url('<?php echo $bg; ?>')">                   
                <?php else: ?>
                <div class="listing-item" style="background-repeat:repeat;background-size: auto;background-image:url('<?php echo $templateUrl . "/img/pattern.png" ?>');">        
                <?php endif; ?>
                <!-- /post thumbnail -->
                    <a class="listing-caption" href="<?php the_permalink(); ?>">
                        <div class="listing-inner">
                            <span class="listing-date"><?php the_time('F j, Y'); ?> <?php the_time('g:i a'); ?></span>
                            <h2 class="listing-title"><?php the_title(); ?></h2>
                        </div>
                    </a>
                <!-- /post title -->

                <!-- post details -->
                
                </div>
            </article>
            <!-- /article -->

        <?php endwhile; ?>
    </div>
</div>
<?php else: ?>

	<!-- article -->
	<article>
		<h2><?php _e( 'Sorry, nothing to display.', 'html5blank' ); ?></h2>
	</article>
	<!-- /article -->

<?php endif; ?>
