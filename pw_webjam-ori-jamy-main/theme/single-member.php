<?php get_header(); ?>
<section class="membre">
    <div class="content_membre">
        <div class="membre__media">
        <?php the_post_thumbnail(); ?>
        </div>
        <div class="membre__content">
        <h1 data-scrolly="fromRight"><?php the_title(); ?></h1>
        <span class="role" data-scrolly="fromRight"><?php the_field('perso_role_wrong'); ?></span>
            <p class="recommendation" data-scrolly="fromRight"><?php the_field('perso_reccomendation'); ?></p>
            <?php if( have_rows('repeteur_competences') ): ?>
            <ul class="competences"data-scrolly="fromRight">
            <?php while( have_rows('repeteur_competences') ): the_row(); ?>
                <li><?php the_sub_field('competence_repeteur'); ?></li>
                <?php endwhile; ?>
            </ul>
            <?php endif; ?>
            <p data-scrolly="fromRight">
            <?php the_content(); ?>
            </p>
        </div>
    </div>
</section>
<?php get_footer(); ?>