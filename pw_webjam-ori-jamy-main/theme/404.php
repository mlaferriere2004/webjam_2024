<?php get_header(); ?>

<section class="error__404">
    <section class="heroAbsolute">
        <img class="bgHero" src="<?php bloginfo('template_url') ?>/assets/images/hero_galaxy.png" alt="hero galaxy" />
        <div class="wrapper">
            <div class="hero_content">
                <h1>404</h1>
                <h3>Oups ! Il semble que votre voyage ait pris une direction inattendue.</h3>
                <div class="bouton">
                    <a href="<?php bloginfo('url'); ?>" class="">Retourner à l’accueil</a>
                </div>
            </div>
        </div>
    </section>
</section>
<?php get_footer(); ?>