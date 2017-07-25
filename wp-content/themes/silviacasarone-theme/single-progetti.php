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
                <?php if(get_field('progetti_subtitle')): ?>
                <div class="single-pages-subtitle">
                    <h2 class="h3 green"><?php the_field('progetti_subtitle'); ?></h2>
                </div>
                <?php endif; ?>
                <div class="row">
                    <div class="col-md-4">
                        <div class="left-column">
                            <?php if(get_field('progetti_data')): ?>
                            <div class="single-pages-metadata-block">
                                <h5 class="single-pages-metadata-title">Periodo</h5>
                                <span class="single-pages-metadata-content green"><?php the_field('progetti_data'); ?></span>
                            </div>
                            <?php endif; ?>
                            <?php if(get_field('progetti_struttura')): ?>
                            <div class="single-pages-metadata-block">
                                <h5 class="single-pages-metadata-title">Durata</h5>
                                <span class="single-pages-metadata-content green"><?php the_field('progetti_struttura'); ?></span>
                            </div>
                            <?php endif; ?> 
                            <?php if(get_field('progetti_partecipanti')): ?>
                            <div class="single-pages-metadata-block">
                                <h5 class="single-pages-metadata-title">Partecipanti</h5>
                                <span class="single-pages-metadata-content green"><?php the_field('progetti_partecipanti'); ?></span>
                            </div>
                            <?php endif; ?> 
                            <?php if(get_field('progetto_associazione')): ?>
                            <div class="single-pages-metadata-block">
                                <h5 class="single-pages-metadata-title">Proposto da</h5>
                                <a target="_blank" href="<?php the_field('associazione_link'); ?>"><span class="single-pages-metadata-content green"><?php the_field('progetto_associazione'); ?></span></a>
                            </div>
                            <?php endif; ?> 
                        </div>
                    </div>
                    <div class="col-md-8">
                        <div class="right-column">
                            <?php if(get_field('progetto_testo')): ?>
                            <p class=""><?php the_field('progetto_testo'); ?></p>
                            <?php endif; ?> 
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-4">
                        <section class="single-project-map">
                            <?php 

                            $location = get_field('mappa_progetto');

                            if( !empty($location) ):
                            ?>
                            <div class="acf-map">
                                <div class="marker" data-lat="<?php echo $location['lat']; ?>" data-lng="<?php echo $location['lng']; ?>"></div>
                            </div>
                            <?php endif; ?>
                        </section>
                    </div>
                    <div class="col-md-8">
                        <?php if(get_field('progetto_finalita')): ?>
                        <h3 class="single-pages-left-title">Finalità</h3>
                        <div class=""><?php the_field('progetto_finalita'); ?></div>
                        <?php endif; ?> 
                    </div>
                </div>
            </div>
        </section>
    </div>
    
    <div class="container">
        <div class="sc-payoff single-pages-footer no-bg">
            <div class="container-fluid"><span class="black">PROPOSTO DA </span> <span class="white"><?php the_field('progetto_associazione'); ?></span><span class="black">CON IL SOSTEGNO DI </span><span class="white"><?php the_field('progetto_sostegno'); ?></span></div>
        </div>
    </div>
</section>

<?php get_footer(); ?>