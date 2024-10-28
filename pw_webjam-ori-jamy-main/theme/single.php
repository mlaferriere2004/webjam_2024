<?php get_header(); ?>

<section class="heroAbsolute">
    <img class="bgHero" src="<?php the_post_thumbnail_url(); ?>" alt="hero equipe" />
    <div class="wrapper">
        <h1 data-scrolly="fromLeft"><?php the_title(); ?></h1>
        
    </div>
</section>

<section class="content">
    <div class="wrapper">
       
    <?php the_content(); ?>
    <div class="bouton"><a href="<?php bloginfo('url') ?>/blogue/">Retour au blogue</a></div>
    </div>
</section>


<?php get_footer(); ?>