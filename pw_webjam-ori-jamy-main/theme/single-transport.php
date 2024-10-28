<?php get_header(); ?>

<section class="hero_transport">
    <div class="wrapper">
        <div class="titre titreGauche">
            <h2 data-scrolly="fromLeft"><?php the_title(); ?></h2>
            <img src="<?php bloginfo('template_url') ?>/assets/images/banner.svg" alt="banner" class="banner" />
        </div>
        <div class="content">
            
            <?php the_content(); ?>
            
            <p class="price">PRIX: <?php the_field('transport_prix'); ?>$</p>
            <div class="bouton"><a href="<?php bloginfo('url') ?>/reservation/">Réserver un transport</a></div>
        </div>
    </div>
    <img src="<?php the_post_thumbnail_url(); ?>" alt="" class="vignette" />
</section>

<section class="carousel_avantages">
    <div class="wrapper">
    <?php if( have_rows('repeteur_avantages') ): ?>
        <h2 style="margin-bottom: 50px;" data-scrolly="fromBottom">Avantages</h2>
        <div class="swiper" data-component="Carousel" data-split="true" data-scrolly="fromBottom">
            <!-- Additional required wrapper -->
            <div class="swiper-wrapper">
                <!-- Slides -->
                <?php while( have_rows('repeteur_avantages') ): the_row(); ?>
                <div class="swiper-slide">
                
                <?php $image = get_sub_field('transport_thumbnail'); ?>
                
                <?php if ($image): ?>
                    
                    <img class="img_slide_left" src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>">
                <?php endif ?>

                    <div class="content_slide_right">
                        <h3><?php the_sub_field('avantage_title'); ?></h3>
                        <h4><?php the_sub_field('avantage_subtitle'); ?></h4>
                        <p>
                        <?php the_sub_field('avantages_description'); ?>
                        </p>
                    </div>
                </div>
                <?php endwhile; ?>
            </div>
            <!-- If we need pagination -->
            <div class="swiper-pagination"></div>

            <!-- If we need navigation buttons -->

            <!-- If we need scrollbar -->
        </div>
        <?php endif; ?>
    </div>
</section>

<section class="specs">
    <div class="wrapper">
        <div class="titre titreGauche">
            <h2>Détails techniques</h2>
            <img src="<?php bloginfo('template_url') ?>/assets/images/banner.svg" alt="banner" class="banner" />
        </div>
        <img src="<?php bloginfo('template_url') ?>/assets/images/space.jpg" alt="sérieux pq png ptn" class="vignette" />

        <div class="grid_specs">
            <div class="spec">
                <div class="spec_text" data-scrolly="fromBottom">
                    <p>Vitesse max:</p>
                    <h3><?php the_field('avantage_vitesse'); ?></h3>
                </div>
            </div>
            <div class="spec">
                <div class="spec_text" data-scrolly="fromBottom">
                    <p>Capacité:</p>
                    <h3><?php the_field('avantage_capacity'); ?></h3>
                </div>
            </div>
            <div class="spec">
                <div class="spec_text" data-scrolly="fromBottom">
                    <p>Cons. électrique:</p>
                    <h3><?php the_field('avantage_power'); ?></h3>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="options_transport">
    <div class="wrapper">
        <div class="titre titreGauche">
            <h2>Spécifications</h2>
            <img src="<?php bloginfo('template_url') ?>/assets/images/banner.svg" alt="banner" class="banner" />
        </div>
        <img src="<?php bloginfo('template_url') ?>/assets/images/hero_galaxy.png" alt="" class="vignette" />

        <div class="grid_options">
        <?php if( have_rows('repeteur_price') ): ?>
            <div class="options_card">
                <div class="title">
                    <h3>PRIX</h3>
                    <h4>*en CAD$</h4>
                </div>

                <ul>
                <?php while( have_rows('repeteur_price') ): the_row(); ?>
                    <li><?php the_sub_field('prix_repeteur'); ?></li>
                    <?php endwhile; ?>
                </ul>
            </div>
            <?php endif; ?>

            <?php if( have_rows('repeteur_options') ): ?>
            <div class="options_card">
                <div class="title">
                    <h3>Options suppl.</h3>
                </div>

                <ul>
                <?php while( have_rows('repeteur_options') ): the_row(); ?>
                    <li><?php the_sub_field('repeteur_option'); ?></li>
                    <?php endwhile; ?>
                </ul>
            </div>
            <?php endif; ?>
            
        </div>
    </div>
</section>

<section class="options_transport comparatif">
    <div class="wrapper">
        <div class="titre titreGauche">
            <h2>Comparatif des transports</h2>
            <img src="<?php bloginfo('template_url') ?>/assets/images/banner.svg" alt="banner" class="banner" />
        </div>
        <img src="<?php bloginfo('template_url') ?>/assets/images/hero_equipe.png" alt="" class="vignette" />


        <?php 
            $args = array(
                'post_type' => 'transport',
                'order' => 'DSC',
                'post_status' => 'publish',
                'showposts' => 4
            );
            $query = new WP_Query( $args );
        ?>

        <?php if ( $query->have_posts() ) : ?>
        <div class="grid_comparatif">
        <?php while ( $query->have_posts() ) : $query->the_post(); ?>
            <div class="options_card comparatif_card">
                <h3><?php the_title(); ?></h3>
                <h4 style="margin-top: 30px;">Prix: <?php the_field('transport_prix'); ?>$</h4>
                <ul>
                    <li>Vitesse max : <?php the_field('avantage_vitesse'); ?></li>
                    <li>Capacité : <?php the_field('avantage_capacity'); ?></li>
                    <li>Cons. électrique : <?php the_field('avantage_power'); ?></li>
                    <?php if( have_rows('repeteur_avantages') ): ?>
                    <li>
                        Avantages :
                        <ul>
                        <?php while( have_rows('repeteur_avantages') ): the_row(); ?>
                            <li><?php the_sub_field('avantage_title'); ?></li>
                            <?php endwhile; ?>
                        </ul>
                    </li>
                    <?php endif; ?>
                </ul>
                <div class="bouton"><a href="<?php the_permalink(); ?>">Voir plus</a></div>
            </div>
            <?php endwhile; ?>
            
        </div>
        <?php endif; ?>
        
        <?php wp_reset_postdata(); ?>
    </div>
</section>
<?php get_footer(); ?>