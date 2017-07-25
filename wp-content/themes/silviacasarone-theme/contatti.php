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
                <div class="contatti-content">
                    <p>
                    <b>Silvia Casarone</b><br>
<b>Telefono:</b> 338.1897258<br>
<b>Email:</b> info@silviacasarone.com<br>
Corso Regina Margherita 127 - Torino<br><br>
 
Per incontri conoscitivi o di progettazione sono reperibile su appuntamento anche al Centro Genius 4/2013 in Via Antonio Vagnone 32 - Torino <br><br>
 
Per ricevere la mailing list, per chiedere informazioni e costi, per proporre progetti e collaborazioni, per esprimere pareri e curiosità... contattami.
                    </p>
                    <div>
                        <?php echo do_shortcode( '[contact-form-7 id="119" title="Form di contatto"]' ); ?>
                    </div>
                </div>
            </div>
        </section>
    </div>
</section>
    
<?php get_footer(); ?>