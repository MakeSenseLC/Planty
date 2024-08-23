<?php
// Exit if accessed directly
if ( !defined( 'ABSPATH' ) ) exit;

// BEGIN ENQUEUE PARENT ACTION
// AUTO GENERATED - Do not modify or remove comment markers above or below:

if ( !function_exists( 'chld_thm_cfg_locale_css' ) ):
    function chld_thm_cfg_locale_css( $uri ){
        if ( empty( $uri ) && is_rtl() && file_exists( get_template_directory() . '/rtl.css' ) )
            $uri = get_template_directory_uri() . '/rtl.css';
        return $uri;
    }
endif;
add_filter( 'locale_stylesheet_uri', 'chld_thm_cfg_locale_css' );
         
if ( !function_exists( 'child_theme_configurator_css' ) ):
    function child_theme_configurator_css() {
        wp_enqueue_style( 'chld_thm_cfg_child', trailingslashit( get_stylesheet_directory_uri() ) . 'style.css', array( 'font-awesome','simple-line-icons','oceanwp-style' ) );
    }
endif;
add_action( 'wp_enqueue_scripts', 'child_theme_configurator_css', 10 );

// END ENQUEUE PARENT ACTION

function ajouter_lien_admin_menu($items, $args) {
    if (is_user_logged_in()) {
        // Décomposer le menu en éléments <li>
        $elements = explode('</li>', $items);

        // Le lien Admin à insérer
        $lien_admin = '<li class="menu-item menu-item-type-custom menu-item-object-custom"><a href="' . admin_url() . '" class="admin wpr-menu-item wpr-pointer-item">Admin</a></li>';

        // Insérer le lien Admin après "Nous rencontrer" (supposons que "Nous rencontrer" est le premier élément)
        array_splice($elements, 1, 0, $lien_admin);

        // Recomposer les éléments en une seule chaîne
        $items = implode('</li>', $elements);
    }
    return $items;
}
add_filter('wp_nav_menu_items', 'ajouter_lien_admin_menu', 10, 2);


?>