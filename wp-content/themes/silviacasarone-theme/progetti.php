<?php /* Template Name: Progetti */ get_header(); ?>

<section class="progetti-listing">
    <div class="container">
        <header class="category-pages-header">
            <?php the_breadcrumb(); ?>
            <div class="category-pages-title">
                <div class="container-fluid">
                    <h1><?php the_title(); ?></h1>
                </div>
            </div>
        </header>
        <div class="listing-container">
            <div class="row">
            <?php 
                $args = array('post_type' => 'progetti');
                $loop = new WP_Query( $args );
                while ( $loop->have_posts() ) : $loop->the_post();
                $bg = get_the_post_thumbnail_url();
                ?>
                  <div class="col-md-4">
                      <div class="listing-item" style="background-image:url('<?php echo $bg; ?>')">
                        <a class="listing-caption" href="<?php the_permalink(); ?>">
                            <div class="listing-inner">
                                <?php if(get_field('progetti_data')): ?>
                                <span class="listing-date"><?php the_field('progetti_data'); ?></span>
                                <?php endif; ?>
                                <h2 class="listing-title"><?php the_title(); ?></h2>
                            </div>
                        </a>
                      </div>
                  </div>
                <?php 
                endwhile;
                /** Reset the query so that WP doesn't do funky stuff */
                wp_reset_query();
                ?>
            </div>
        </div>
    </div>
</section>