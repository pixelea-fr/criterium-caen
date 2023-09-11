<?php
/**
 * Primary menu template part
 */    
?>   

<nav id="site-navigation" class="main-navigation" role="navigation" aria-label="<?php esc_attr_e( 'Primary', 'criterium' ); ?>">
    <button class="menu-toggle" aria-controls="primary-menu" aria-expanded="false"><p><?php esc_html_e( 'Menu', 'criterium' ); ?></p><span></span></button>
    <?php
        wp_nav_menu(
            array(
                'theme_location' => 'menu-1',
                'menu_id'        => 'primary-menu',
            )
        );
    ?>
</nav><!-- #site-navigation -->