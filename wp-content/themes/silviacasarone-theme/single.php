<?php get_header(); ?>
<section class="single-pages">
    <div class="container">
        <?php 
            $bg = get_the_post_thumbnail_url(); 
            $templateUrl = get_template_directory_uri();
        ?>
        <?php if($bg): ?>
        <header class="single-pages-header" style="background-image:url('<?php echo $bg; ?>');">
        <?php else: ?>
        <header class="single-pages-header" style="background-repeat:repeat;background-size: auto;background-image:url('<?php echo $templateUrl . "/img/pattern.png" ?>');">
        <?php endif; ?>
            <?php the_breadcrumb(); ?>
            <div class="single-pages-title">
                <div class="container-fluid">
                    <h1><?php the_title(); ?></h1>
                </div>
            </div>
        </header>
        <section class="single-pages-body">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-4">
                        <div class="left-column">
                            <?php if(get_field('news_data')): ?>
                            <div class="single-pages-metadata-block">
                                <h5 class="single-pages-metadata-title">Quando</h5>
                                <span class="single-pages-metadata-content green"><?php the_field('news_data'); ?></span>
                            </div>
                            <?php endif; ?>
                            <?php if(get_field('news_indirizzo')): ?>
                            <div class="single-pages-metadata-block">
                                <h5 class="single-pages-metadata-title">Indirizzo</h5>
                                <span class="single-pages-metadata-content green"><?php the_field('news_indirizzo'); ?></span>
                            </div>
                            <?php endif; ?>
                        </div>
                    </div>
                    <div class="col-md-8">
                        <div class="right-column">
                            <?php if(get_field('news_testo')): ?>
                            <p class=""><?php the_field('news_testo'); ?></p>
                            <?php endif; ?> 
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-4">
                        <section class="single-project-map">
                            <?php 

                            $location = get_field('mappa_news');

                            if( !empty($location) ):
                            ?>
                            <div class="acf-map">
                                <div class="marker" data-lat="<?php echo $location['lat']; ?>" data-lng="<?php echo $location['lng']; ?>"></div>
                            </div>
                            <?php endif; ?>
                        </section>
                    </div>
                </div>
            </div>
        </section>
    </div>
        
</section>

<?php get_footer(); ?>