<?php get_header(); ?>

<section class="hero_accueil">
    <div class="wrapper">
        <div class="content_hero_accueil" data-scrolly="fromLeft">
            <h1><?php the_title();?></h1>
            
              <?php the_content();?>
            
            <div class="bouton"><a href="<?php bloginfo('url') ?>/reservation/">Réserver un transport</a></div>
        </div>
        <img data-scrolly="fromRight" src="<?php bloginfo('template_url') ?>/assets/images/cargo_ship.png" alt="Vaisseau Cargo" />
    </div>
</section>

<section class="carousel_showroom">

<?php 
            $args = array(
                'post_type' => 'transport',
                'order' => 'DSC',
                'post_status' => 'publish',
                'showposts' => 2
            );
            $query = new WP_Query( $args );
        ?>
<?php if ( $query->have_posts() ) : ?>
    <div class="wrapper">
        <h1 style='margin-bottom: 50px;'>Transports en vedette</h1>
    </div>
    
    <div class="swiper" data-component="Carousel">
        <!-- Additional required wrapper -->
        <div class="swiper-wrapper">
            <!-- Slides -->
            <?php while ( $query->have_posts() ) : $query->the_post(); ?>
                <div class="swiper-slide">
                    <img class="img_slide" src="<?php the_post_thumbnail_url();?>" alt="Express ship" />
                    <div class="content_slide">
                        <div class="titre titreGauche">
                            <h2><?php the_title(); ?></h2>
                            <img src="<?php bloginfo('template_url') ?>/assets/images/banner.svg" alt="banner" class="banner" />
                        </div>
                        <div class="bouton"><a href="<?php the_permalink();?>
                        ">Voir transport</a></div>
                    </div>
                </div>
            <?php endwhile; ?>
        </div>
 
        <!-- If we need pagination -->
        <div class="swiper-pagination"></div>
    </div>
<?php endif; ?>
<?php wp_reset_postdata(); ?>
</section>


<section class="partenaires">
    <div class="wrapper">
        <h2>nos Partenaires</h2>
        <?php if( have_rows('repeteur_partners','options') ): ?>
            <div class="grid_partenaires" data-scrolly="fromBottom">
                <?php while( have_rows('repeteur_partners', 'options') ): the_row(); ?>
                    <div class="partenaire">
                    
                    <?php $image = get_sub_field('partner_logo', 'options'); ?>
                
                <?php if ($image): ?>
                    
                    <img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>">
                <?php endif ?>

                        <h3><?php the_sub_field('partner_nom', 'options')?></h3>
                    </div>
                <?php endwhile; ?>
            </div>
        <?php endif; ?>
    </div>
</section>

<section class="content">
    <div class="wrapper">
       
    <?php 
            $args = array(
                'post_type' => 'post',
                'orderby' => 'rand',
                'post_status' => 'publish',
                'showposts' => 2
            );
            $query = new WP_Query( $args );
        ?>
        <?php if ( $query->have_posts() ) : ?>
            <h1 style='margin-bottom: 50px;'>Articles récents</h1>
            <div class="cards">
            <?php while ( $query->have_posts() ) : $query->the_post(); ?>
            <a href="<?php the_permalink(); ?>">
                <div class="card">
                    <div class="card__media">
                    <?php the_post_thumbnail(); ?>
                    </div>
                    <div class="card__content">
                        <h4><?php the_title(); ?></h4>
                        <?php the_excerpt(); ?>
                    </div>
                </div>
            </a>
                
                <?php endwhile; ?>
                
            </div>
            <?php endif; ?>

        <?php wp_reset_postdata(); ?>
            
    </div>
</section>

    <?php get_footer(); ?>