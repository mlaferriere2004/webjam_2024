<footer class="footer">
    <div class="wrapper" data-scrolly="fromBottom">
        <a href="<?php bloginfo('url'); ?>" class="logo"><?php bloginfo('name') ?></a>
        <div class="lists_footer">
        <?php 
            $args = array(
                'post_type' => 'member',
                'order' => 'DSC',
                'post_status' => 'publish',
                'showposts' => 4
            );
            $query = new WP_Query( $args );
        ?>

        <?php if ( $query->have_posts() ) : ?>
            <ul class="list_footer">
                <li><a href="<?php bloginfo('url') ?>/notre-equipe/" class="title_list_footer">Équipe</a></li>
                <?php while ( $query->have_posts() ) : $query->the_post(); ?>
                <li><a href="<?php the_permalink(); ?>" class="item_list_footer"><?php the_title(); ?></a></li>
                <?php endwhile; ?>
            </ul>
            <?php endif; ?>
        
        <?php wp_reset_postdata(); ?>

        <?php 
            $args = array(
                'post_type' => 'transport',
                'order' => 'DSC',
                'post_status' => 'publish',
                'showposts' => 4
            );
            $query = new WP_Query( $args );
        ?>

        <?php if ( $query->have_posts() ) : ?>
            <ul class="list_footer">
                <li><a href="<?php bloginfo('url') ?>/transports/" class="title_list_footer">Transports</a></li>
                <?php while ( $query->have_posts() ) : $query->the_post(); ?>
                <li><a href="<?php the_permalink(); ?>" class="item_list_footer"><?php the_title(); ?></a></li>
                <?php endwhile; ?>
            </ul>

            <?php endif; ?>
        
        <?php wp_reset_postdata(); ?>


        <?php 
            $args = array(
                'post_type' => 'post',
                'orderby' => 'rand',
                'post_status' => 'publish',
                'showposts' => 4
            );
            $query = new WP_Query( $args );
        ?>
        <?php if ( $query->have_posts() ) : ?>
            <ul class="list_footer">
                <li><a href="<?php bloginfo('url') ?>/blogue/" class="title_list_footer">Blogue</a></li>
                <?php while ( $query->have_posts() ) : $query->the_post(); ?>
                <li><a href="<?php the_permalink(); ?>" class="item_list_footer"><?php the_title(); ?></a></li>
                <?php endwhile; ?>
            </ul>
            <?php endif; ?>

        <?php wp_reset_postdata(); ?>

        </div>
        <p>Tout droits réservés (et en voyage) © <?php bloginfo('name'); ?> - <?php echo date("Y"); ?> </p>
        <a href="<?php bloginfo('url') ?>/credits/">Crédits du projet</a>
    </div>
</footer>
<?php wp_footer(); ?>
</body>
</html>
