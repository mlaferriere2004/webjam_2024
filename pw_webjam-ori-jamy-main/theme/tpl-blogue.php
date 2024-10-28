<?php
/*
Template Name: Blogue
 */
?>

<?php get_header(); ?>

<section class="heroAbsolute">
    <img class="bgHero" src="<?php the_post_thumbnail_url(); ?>" alt="hero equipe" />
    <div class="wrapper">
        <h1 data-scrolly="fromLeft"><?php the_title(); ?></h1>
    </div>
</section>

<section class="content">
    <div class="wrapper">
       
    <?php 
            $args = array(
                'post_type' => 'post',
                'order' => 'DSC',
                'post_status' => 'publish',
                'showposts' => -1
            );
            $query = new WP_Query( $args );
        ?>
        <?php if ( $query->have_posts() ) : ?>
            <div class="cards">
              
            <?php while ( $query->have_posts() ) : $query->the_post(); ?>
            <a href="<?php the_permalink(); ?>" data-scrolly="fromBottom">
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