<?php /* Template Name: Teatroterapia */ get_header(); ?>

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
                <div class="teatroterapia-content">
                    <div class="teatroterapia-inner">
                        <?php if(get_field('teatroterapia_testo')): ?>
                        <p class=""><?php the_field('teatroterapia_testo'); ?></p>
                        <?php endif; ?> 
                    </div>
                    
                    <div class="media-aligned-text text-right">
                            <div class="panel-group styled-accordion" id="accordion" role="tablist" aria-multiselectable="true">
                                <?php
                                if(get_field("accordion")){
                                $indexAcc = 1;
                                foreach(get_field("accordion") as $accordionBlocco) {
                                ?>
                              <div class="panel panel-default">
                                
                                <div class="panel-heading" role="tab" id="heading<?php echo $indexAcc;?>">
                                  <h4 class="panel-title">
                                    <a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapse<?php echo $indexAcc;?>" aria-expanded="true" class="collapsed" aria-controls="collapse<?php echo $indexAcc;?>">
                                      <?php echo $accordionBlocco['titolo_pannello']; ?>
                                        <i class="glyphicon glyphicon-plus pull-right"></i>
                                    </a>
                                  </h4>
                                </div>
                                <div id="collapse<?php echo $indexAcc;?>" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading<?php echo $indexAcc;?>">
                                  <div class="panel-body">
                                    <?php echo $accordionBlocco['contenuto_pannello']; ?>
                                  </div>
                                </div>
                                  
                              </div>
                                <?php
                            $indexAcc++;
                        }
                    }       
                  ?>  
                            </div>
                        </div>
                    
                    <?php if( have_rows('bottoni_teatroterapia') ): ?>
                    <div class="panel-group teatroterapia-buttons" id="accordion" role="tablist" aria-multiselectable="true">
                        <?php 
                        $indexAcc = 1;
                        while ( have_rows('bottoni_teatroterapia') ) : the_row(); 
                        ?>
                          <div class="panel panel-default">
                            <div class="panel-heading" role="tab" id="heading<?php echo $indexAcc;?>">
                              <h4 class="panel-title">
                                <a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapse<?php echo $indexAcc;?>" aria-controls="collapse<?php echo $indexAcc;?>">
                                  <?php the_sub_field('titolo_bottone'); ?>
                                </a>
                              </h4>
                            </div>
                            <div id="#collapse<?php echo $indexAcc;?>" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="heading<?php echo $indexAcc;?>">
                              <div class="panel-body">
                                  <div><?php the_sub_field('testo_bottone'); ?></div>
                                  <div class="teatroterapia-links">
                                      <?php if( have_rows('bottoni_links') ): ?>
                                        <h4 class="teatroterapia-links-title">Vedi anche</h4>
                                      
                                      <div class="teatroterapia-inner-link">
                                          <?php while ( have_rows('bottoni_links') ) : the_row(); ?>
                                            <a class="teatroterapia-link-item" href="<?php the_sub_field('link_interno'); ?>">Link #1</a>
                                          <?php endwhile; ?>
                                      </div>
                                      
                                    </div>
                                  <?php endif; ?> 
                              </div>
                                
                            </div>
                          </div>
                        <?php 
                        $indexAcc++;
                        endwhile; ?>
                    </div>
                    <?php endif; ?>
                    
                </div>
            </div>
        </section>
    </div>
</section>
    
<?php get_footer(); ?>