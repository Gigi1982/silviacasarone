<?php /* Template Name: Contatti */ get_header(); ?>

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
                    <div class="col-md-6">
                        <div class="contatti-content">
                            <p>
                            <b>Silvia Casarone</b><br>
        <b>Telefono:</b> 338.1897258<br>
        <b>Email:</b> info@silviacasarone.com<br>
        <b>Indirizzo: </b>Corso Regina Margherita 127 - Torino<br>
                            <ul class="list-unstyled list-inline social-footer contacts">
                                <li><a target="_blank" href="https://www.facebook.com/Silvia-Casarone-Teatroterapia-149586552270120/ "><i class="icon icon-facebook"></i></a></li>
                                <li><a target="_blank" href="http://linkedin.com/in/silvia-casarone-17857a62"><i class="icon icon-linkedin"></i></a></li>
                                <li><a target="_blank" href="#"><i class="icon icon-youtube"></i></a></li>
                            </ul><br>

        Per ricevere la mailing list, per chiedere informazioni e costi, per proporre progetti e collaborazioni, per esprimere pareri e curiosità... contattami.
                            </p>
                            <div>
                                <?php echo do_shortcode( '[contact-form-7 id="119" title="Form di contatto"]' ); ?>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="contatti-content">
                            <section class="contact-map">
                                <?php 

                                $locationCont = get_field('mappa_contatti');

                                if( !empty($locationCont) ):
                                ?>
                                <div class="acf-map">
                                    <div class="marker" data-lat="<?php echo $locationCont['lat']; ?>" data-lng="<?php echo $locationCont['lng']; ?>"></div>
                                </div>
                                <?php endif; ?>
                            </section>
                        </div>
                    </div>
                    
                </div>
            </div>
        </section>
    </div>
</section>
    
<?php get_footer(); ?>