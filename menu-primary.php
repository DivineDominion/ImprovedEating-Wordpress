<?php if ( has_nav_menu( 'primary' ) ) {
    $lang = "";
    if (function_exists("the_msls")) {
        ob_start();
        the_msls();
        $lang = ob_get_contents();
        ob_end_clean();
    }
    
	wp_nav_menu(
		array(
			'theme_location'  => 'primary',
			'container'       => 'nav',
			'container_id'    => 'menu-primary',
			'container_class' => 'menu',
			'menu_id'         => 'menu-primary-items',
			'menu_class'      => 'menu-items nav',
			'fallback_cb'     => '',
			'items_wrap'      => '<h3 class="menu-toggle" title="' . esc_attr__( 'Navigation', 'seamless' ) . '">' . __( 'Navigation', 'seamless' ) . '</h3><div class="container"><ul id="%1$s" class="%2$s">%3$s</ul>' . $lang . '</div>'
		)
	);

} ?>
