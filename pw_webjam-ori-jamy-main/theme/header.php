<!DOCTYPE html>
<html lang="fr">
  <head>
    <meta charset="<?php bloginfo('charset'); ?>" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title><?php bloginfo('name'); ?></title>

    <link rel="stylesheet" href="<?php bloginfo('template_url') ?>/styles/main.css" />

    <script>
      // À décommenter lorsque rendu dans le fichier .php pour que les icônes fonctionnent dans WP
       iconsPath = '<?php bloginfo('template_url') ?>/';
    </script>
    <script src="<?php bloginfo('template_url') ?>/scripts/main.js" defer></script>
    <?php wp_head(); ?>
  </head>

  <body <?php body_class(); ?> data-component="Scrolly">
    <header class="header" data-component="Header" data-treshold="0.2">
      <div class="wrapper">
        <a href="<?php bloginfo('url'); ?>" class="logo"><?php bloginfo('name'); ?></a>
        


        <?php
            wp_nav_menu(array(
              'theme_location' => 'zone_menu_principale',
              'container' => 'nav',
              'container_class' => 'menu nav-primary',
              'menu_class' => 'nav__menu'
          ));  
        ?>
        
        <button class="header__toggle js-toggle">
          <span></span>
          <span></span>
          <span></span>
      </button>
      </div>
    </header>