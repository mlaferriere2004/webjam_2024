<?php
/*
Template Name: Transports
 */
?>
<?php get_header(); ?>

<section class="header_transports">
    <div class="wrapper">
        <div class="content_hero_transports" data-scrolly="fromLeft">
            <h1>Nos transports</h1>
            
            <?php the_content(); ?>
            
        </div>
        <img data-scrolly="fromRight" src="<?php bloginfo('template_url') ?>/assets/images/express_ship_alpha.png" alt="Vaisseau Express" />
    </div>
</section>

<?php 
            $args = array(
                'post_type' => 'transport',
                'order' => 'DSC',
                'post_status' => 'publish',
                'showposts' => -1
            );
            $query = new WP_Query( $args );
        ?>

        <?php if ( $query->have_posts() ) : ?>
<sections class="transports_list">
<?php while ( $query->have_posts() ) : $query->the_post(); ?>
    <div class="transport">
        <img src="<?php the_post_thumbnail_url(); ?>" alt="" class="vignette" />
        <div class="wrapper">
            <div class="titre">
                <h2><?php the_title(); ?></h2>
                <img src="<?php bloginfo('template_url') ?>/assets/images/banner.svg" alt="banner" class="banner" />
            </div>
            <div class="bouton"><a href="<?php the_permalink(); ?>">En savoir plus</a></div>
        </div>
    </div>
    <?php endwhile; ?>
    
</sections>
<?php endif; ?>
        
        <?php wp_reset_postdata(); ?>

<?php get_footer(); ?>



