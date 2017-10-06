<?php /* Template Name: Homepage */ get_header(); ?>

	<main role="main">
		<!-- section -->
		<section class="sc-home-container">
            <div class="container">
                <div class="home-block-wpa">
                    <div class="row">
                        <div class="module-text">
                            <div class="col-md-6">
                                <div class="sc-home-description">
                                    <?php if(get_field('descrizione_a_sinistra')): ?>
                                    <div><?php the_field('descrizione_a_sinistra'); ?></div>
                                    <?php endif; ?>
                                </div>
                                <div class="sc-nl-form">
                                    <!-- Begin MailChimp Signup Form -->
                                    <link href="//cdn-images.mailchimp.com/embedcode/horizontal-slim-10_7.css" rel="stylesheet" type="text/css">
                                    <div id="mc_embed_signup">
                                    <form action="//silviacasarone.us16.list-manage.com/subscribe/post?u=1a0e72349ddb4015f8857c955&amp;id=a5364cc6b0" method="post" id="mc-embedded-subscribe-form" name="mc-embedded-subscribe-form" class="validate" target="_blank" novalidate>
                                        <div id="mc_embed_signup_scroll">
                                        <h2><label for="mce-EMAIL">Iscriviti alla newsletter</label></h2>
                                        <input type="email" value="" name="EMAIL" class="email" id="mce-EMAIL" placeholder="Inserisci il tuo indirizzo e-mail" required>
                                        <!-- real people should not fill this in and expect good things - do not remove this or risk form bot signups-->
                                        <div style="position: absolute; left: -5000px;" aria-hidden="true"><input type="text" name="b_1a0e72349ddb4015f8857c955_a5364cc6b0" tabindex="-1" value=""></div>
                                        <div class="clear"><input type="submit" value="Iscriviti" name="subscribe" id="mc-embedded-subscribe" class="button"></div>
                                        </div>
                                    </form>
                                    </div>

                                    <!--End mc_embed_signup-->
                                </div>
                            </div>
                            <div class="col-md-6">
                                <ul class="sc-news-block">
                                    <?php
                                    $temp = $wp_query; $wp_query= null;
                                    $wp_query = new WP_Query(); $wp_query->query('posts_per_page=10' . '&paged='.$paged);
                                    while ($wp_query->have_posts()) : $wp_query->the_post(); ?>
                                    <li>
                                        <!-- post thumbnail -->
                                        <?php 
                                        $templateUrl = get_template_directory_uri();
                                        $bg = get_the_post_thumbnail_url();
                                        if ( has_post_thumbnail()) : // Check if thumbnail exists ?>
                                        <div class="sc-home-news-container">
                                            <img class="sc-home-news-img" src="<?php echo $bg; ?>">
                                        </div>
                                        <?php else: ?>
                                        <div class="sc-home-news-noimg" style="background-image:url('<?php echo $templateUrl . "/img/pattern.png" ?>');"></div>       
                                        <?php endif; ?>
                                        <h2><a href="<?php the_permalink(); ?>" title="Read more"><?php the_title(); ?></a></h2>
                                        <?php if(get_field('news_testo')): ?>
                                        <div>
                                            <?php //the_field('news_testo'); ?>
                                            <?php echo custom_field_excerpt(); ?>
                                        </div>
                                        <?php endif; ?> 
                                    </li>
                                    <?php 
                                    endwhile; 
                                    wp_reset_query();
                                    ?>
                                </ul>
                            </div>
                        </div>                            
                        <div class="col-md-12">
                            <div class="sc-payoff">
                                <?php if(get_field('blocco_centrale')): ?>
                                    <span class="white">
                                    <?php the_field('blocco_centrale'); ?>
                                    </span>
                                <?php endif; ?>
                            </div>
                        </div>
                        
                    </div>
                    <div class="sc-progetti-slider">
                        <ul class="sc-progetti-showcase">
                        <?php 
                            $args = array('post_type' => array( 'laboratori', 'progetti' ), 'orderby'   => 'rand' );
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
                <?php include('inc/contattami.php'); ?>
            </div>
		
		</section>
		<!-- /section -->
	</main>

<?php //get_sidebar(); ?>

<?php get_footer(); ?>
