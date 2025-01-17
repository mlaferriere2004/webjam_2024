<?php
/*
Template Name: Formulaire - Drop Content
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
       
    <?php the_content(); ?>
    </div>
</section>

<section class="formulaire_form">
    <div class="wrapper">
  <h2 style='margin-bottom: 50px;'>Options supplémentaires</h2>
        <form class="form" autocomplete="off" data-component="Form">
            <div class="form__body">
                <div class="grid">
                    <fieldset>
                        <h4>Ambiance personnalisable</h4>
                        <div class="form__list" data-input-container>
                            <div class="input radio">
                                <input
                                    class="input__element"
                                    type="radio"
                                    name="tree[]"
                                    id="tree1"
                                    value="Casque d’écouteurs"
                                    required
                                />
                                <label class="input__label" for="tree1">Casque d’écouteurs</label>
                            </div>
                            <div class="input radio">
                                <input
                                    class="input__element"
                                    type="radio"
                                    name="tree[]"
                                    id="tree2"
                                    value="Coquilles coupe-son"
                                    required
                                />
                                <label class="input__label" for="tree2">Coquilles coupe-son</label>
                            </div>
                            <div class="input radio">
                                <input
                                    class="input__element"
                                    type="radio"
                                    name="tree[]"
                                    id="tree3"
                                    value="Haut-parleurs"
                                    required
                                />
                                <label class="input__label" for="tree3">Haut-parleurs</label>
                            </div>
                            <p class="p-error">Ce champ est incorrect</p>
                        </div>
                    </fieldset>

                    <fieldset>
                        <h4>Options d’activité</h4>
                        <div class="form__list" data-input-container>
                            <div class="input radio">
                                <input
                                    class="input__element"
                                    type="radio"
                                    name="tree[]"
                                    id="tree4"
                                    value="Spa spatial"
                                    required
                                />
                                <label class="input__label" for="tree4">Spa spatial</label>
                            </div>
                            <div class="input radio">
                                <input
                                    class="input__element"
                                    type="radio"
                                    name="tree[]"
                                    id="tree5"
                                    value="Massage aérien"
                                    required
                                />
                                <label class="input__label" for="tree5">Massage aérien</label>
                            </div>
                            <div class="input radio">
                                <input
                                    class="input__element"
                                    type="radio"
                                    name="tree[]"
                                    id="tree6"
                                    value="Chef privé"
                                    required
                                />
                                <label class="input__label" for="tree6">Chef privé</label>
                            </div>
                            <p class="p-error">Ce champ est incorrect</p>
                        </div>
                    </fieldset>

                    <fieldset>
                        <h4>Collations offertes</h4>
                        <div class="form__list" data-input-container>
                            <div class="input radio">
                                <input
                                    class="input__element"
                                    type="radio"
                                    name="tree[]"
                                    id="tree7"
                                    value="Collations santé (barres de céréales, fruits secs)"
                                    required
                                />
                                <label class="input__label" for="tree7"
                                    >Collations santé (barres de céréales, fruits secs)</label
                                >
                            </div>
                            <div class="input radio">
                                <input
                                    class="input__element"
                                    type="radio"
                                    name="tree[]"
                                    id="tree8"
                                    value="Collations gourmandes (chocolat, biscuits)"
                                    required
                                />
                                <label class="input__label" for="tree8"
                                    >Collations gourmandes (chocolat, biscuits)</label
                                >
                            </div>
                            <div class="input radio">
                                <input
                                    class="input__element"
                                    type="radio"
                                    name="tree[]"
                                    id="tree9"
                                    value="Collations salées (chips, crackers)"
                                    required
                                />
                                <label class="input__label" for="tree9">Collations salées (chips, crackers)</label>
                            </div>
                            <div class="input radio">
                                <input
                                    class="input__element"
                                    type="radio"
                                    name="tree[]"
                                    id="tree10"
                                    value="Boissons en fontaine"
                                    required
                                />
                                <label class="input__label" for="tree10">Boissons en fontaine</label>
                            </div>
                            <p class="p-error">Ce champ est incorrect</p>
                        </div>
                    </fieldset>
                    <fieldset>
                        <h4>Option Wi-Fi</h4>
                        <div class="form__list" data-input-container>
                            <div class="input radio">
                                <input
                                    class="input__element"
                                    type="radio"
                                    name="tree[]"
                                    id="tree11"
                                    value="Collations santé (barres de céréales, fruits secs)"
                                    required
                                />
                                <label class="input__label" for="tree11"
                                    >Pas de Wifi</label
                                >
                            </div>
                            <div class="input radio">
                                <input
                                    class="input__element"
                                    type="radio"
                                    name="tree[]"
                                    id="tree12"
                                    value="Collations gourmandes (chocolat, biscuits)"
                                    required
                                />
                                <label class="input__label" for="tree12"
                                    >Wifi de base</label
                                >
                            </div>
                            <div class="input radio">
                                <input
                                    class="input__element"
                                    type="radio"
                                    name="tree[]"
                                    id="tree13"
                                    value="Collations salées (chips, crackers)"
                                    required
                                />
                                <label class="input__label" for="tree13">Wifi Haute Vitesse</label>
                            </div>
                            
                            <p class="p-error">Ce champ est incorrect</p>
                        </div>
                    </fieldset>
                </div>
            </div>
       
            </div>
        </form>
    </div>
</section>

<?php get_footer(); ?>