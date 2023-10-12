<?php
/**
 * Primary menu template part
 */
?>

<nav id="site-navigation" class="main-navigation" role="navigation" aria-label="<?php esc_attr_e( 'Primary', 'criterium' ); ?>">
    <button class="menu-toggle" aria-controls="primary-menu" aria-expanded="false"><p class="visually-hidden"><?php esc_html_e( 'Menu', 'criterium' ); ?></p><span></span></button>
    <?php
        wp_nav_menu(
            array(
                'menu'              => 'Menu principal',
                'theme_location'    => 'primary_menu',
                'menu_id'           => 'primary-menu',
                'container_class'   => 'menu'
            )
        );
    ?>
</nav><!-- #site-navigation -->