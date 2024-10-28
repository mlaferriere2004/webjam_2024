<?php
/*
Template Name: Crédits
 */
?>
<?php get_header(); ?>

<section class="credits">
    <div class="wrapper">
        <div class="titre titreGauche">
            <h1>Crédits</h1>
            <img src="<?php bloginfo('template_url') ?>/assets/images/banner.svg" alt="banner" class="banner" />
        </div>

        <?php 
            $args = array(
                'post_type' => 'member',
                'order' => 'DSC',
                'post_status' => 'publish',
                'showposts' => -1
            );
            $query = new WP_Query( $args );
        ?>

        <?php if ( $query->have_posts() ) : ?>
        <div class="workers">
        <?php while ( $query->have_posts() ) : $query->the_post(); ?>
            <div class="worker">
                <h3><?php the_title(); ?></h3>
                <p>Rôle(s) : <?php the_field('perso_role_real'); ?></p>

                <?php if( have_rows('repeteur_contributions') ): ?>
                <h4>Contributions</h4>
                <ul class="contribute">
                <?php while( have_rows('repeteur_contributions') ): the_row(); ?>
                    <li><?php the_sub_field('perso_contribution'); ?></li>
                <?php endwhile; ?>
                </ul>
                <?php endif; ?>


            </div>
            <?php endwhile; ?>
        </div>
        <?php endif; ?>
        <p>Les tâches précises sont inscrites dans le trello !</p>
        
        <?php wp_reset_postdata(); ?>
    </div>
</section>
<?php get_footer(); ?>

