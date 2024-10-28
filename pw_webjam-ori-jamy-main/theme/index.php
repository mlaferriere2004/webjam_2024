<?php get_header(); ?>

<section class="heroAbsolute">
    <img class="bgHero" src="<?php bloginfo('template_url') ?>/assets/images/hero.png" alt="" />
    <div class="wrapper">
        <h1>Le titre du site</h1>
    </div>
</section>

<section class="favoris">
    <div class="wrapper">
        <div class="titre titreGauche">
            <h2>vaisseau express</h2>
            <img src="<?php bloginfo('template_url') ?>/assets/images/banner.svg" alt="banner" class="banner" />
        </div>
        <p>
            Pourquoi ce site existe ??? Pourquoi ce site existe ??? Pourquoi ce site existe ??? Pourquoi ce site existe
            ??? Pourquoi ce site existe ??? Pourquoi ce site existe ??? Pourquoi ce site existe ???
        </p>
        <div class="cards">
            <a href="#">
                <div class="card">
                    <div class="card__media">
                        <img src="<?php bloginfo('template_url') ?>/assets/images/card.png" alt="img__card" />
                    </div>
                    <div class="card__content">
                        <h3>Titre</h3>
                        <p>Résumé résumé résumé résumé résumé résumé résumé résumé</p>
                        <p class="category">catégorie</p>
                    </div>
                </div>
            </a>
            <a href="#">
                <div class="card">
                    <div class="card__media">
                        <img src="<?php bloginfo('template_url') ?>/assets/images/hero.png" alt="img__card" />
                    </div>
                    <div class="card__content">
                        <h3>Titre</h3>
                        <p>Résumé résumé résumé résumé résumé résumé résumé résumé</p>
                        <p class="category">catégorie</p>
                    </div>
                </div>
            </a>
        </div>
        <div class="bouton">
            <a href="#" class="">Un bouton</a>
        </div>
    </div>
</section>

    <?php get_footer(); ?>