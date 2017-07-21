<?php /* Template Name: Homepage */ get_header(); ?>

	<main role="main">
		<!-- section -->
		<section class="sc-home-container">
            <div class="container">
                <div class="home-block-wpa">
                    <div class="row">
                        <div class="module-text">
                            <div class="col-md-6">
                                <p>
                                    Teatroterapeuta diplomata nella <a target="_blank" href="http://www.teatroterapia.it/">Scuola di Formazione Triennale in Teatroterapia di Colico (LC)</a> e laureata in Dams e in Sociologia all’Università degli Studi di Torino. 
Sviluppo una personale modalità di conduzione dei gruppi per dare spazio alle urgenze comunicative, relazionali ed emotive dei partecipanti utilizzando l’espressione corporea, l’improvvisazione, la narrazione, la musica e la scrittura.</b>
                                </p>
                            </div>
                            <div class="col-md-6">
                                <div class="sc-laboratori-block">
                                    <?php 
                                    $args = array(
                                        'post_type' => 'laboratori',
                                        'posts_per_page'   => 1
                                    );
                                    $loop = new WP_Query( $args );
                                    while ( $loop->have_posts() ) : $loop->the_post();
                                    ?>
                                        <div class="sc-laboratori-listing-content">
                                            <span class="date-intervallo titoletti"><?php the_field('intervallo_data'); ?></span>
                                            <a href="<?php the_permalink(); ?>"><h1><?php the_title(); ?></h1></a>
                                            <p><?php html5wp_excerpt('html5wp_custom_post'); ?></p>
                                        </div>
                                    <?php 
                                    endwhile;
                                    wp_reset_query();
                                    ?>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="sc-inner-link text-right">
                                    <a href="#">PROSSIMI LABORATORI></a>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="sc-payoff">
                                <span class="white">
Propongo percorsi di gruppo a mediazione teatrale</span>
                                <span class="black">in contesti formativi, sociali, educativi e riabilitativi</span>
                                <span class="white">per partecipanti dagli 0 ai 99 anni.</span>
                            </div>
                        </div>
                    </div>
                    <div class="sc-progetti-slider">
                        <ul class="sc-progetti-showcase">
                        <?php 
                            $args = array('post_type' => array( 'laboratori', 'progetti' ) );
                            $loop = new WP_Query( $args );
                            while ( $loop->have_posts() ) : $loop->the_post();
                            $bg = get_the_post_thumbnail_url('', 'medium');
                            ?>
                              <li class="">
                                  <div class="sc-progetti-item" style="background-image:url('<?php echo $bg; ?>')">
                                    <a class="sc-progetti-caption" href="<?php the_permalink(); ?>">
                                        <div class="sc-progetti-inner">
                                            <?php 
                                            $post_type = get_post_type( get_the_ID() );
                                            echo '<span class="post-type-label">' . $post_type . '</span>';
                                            ?>
                                            <?php if(get_field('progetti_data')): ?>
                                            <span class="sc-progetti-date"><?php the_field('progetti_data'); ?></span>
                                            <?php endif; ?>
                                            <?php if(get_field('intervallo_data')): ?>
                                            <span class="listing-date"><?php the_field('intervallo_data'); ?></span>
                                            <?php endif; ?>
                                            <h2 class="sc-progetti-title"><?php the_title(); ?></h2>
                                            
                                        </div>
                                    </a>
                                  </div>
                              </li>
                            <?php 
                            endwhile;
                            /** Reset the query so that WP doesn't do funky stuff */
                            wp_reset_query();
                            ?>
                        </ul>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="sc-inner-link text-right">
                                <a href="#">VAI A TUTTI I PROGETTI></a>
                            </div>
                        </div>
                    </div>
                    <?php if( have_rows('blocco_loghi_immagini') ): ?>
                    <div class="sc-partnerships">
                        <div class="sc-partnership-inner">
                            <?php while ( have_rows('blocco_loghi_immagini') ) : the_row(); ?>
                            <div class="sc-partner-item">
                                <a href="<?php the_sub_field('logo_partnership_url'); ?>">
                                    <img src="<?php the_sub_field('logo_partnership'); ?>">
                                </a>
                            </div>
                            <?php endwhile; ?>
                        </div>
                    </div>
                    <?php endif; ?>
                    
                </div>
                
            </div>
		
		</section>
		<!-- /section -->
	</main>

<?php //get_sidebar(); ?>

<?php get_footer(); ?>
