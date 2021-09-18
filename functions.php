<?php 

function sdg17_load_scripts() {
    wp_enqueue_style("bootstrap","https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" );
    wp_enqueue_script("popper", "https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js");
    wp_enqueue_script("bootstrap-js","https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js" );
    wp_enqueue_style("our-theme-style",get_stylesheet_uri());
    wp_enqueue_style("our-theme-font-awesome","https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css");

    

}

add_action("wp_enqueue_scripts","sdg17_load_scripts");


function load_js_assets() {
    if( is_home( 7 ) ) {
        wp_enqueue_script('my-js', 'http://localhost/my-js.js', array('jquery'), '', false);
    } 
}

add_action('wp_enqueue_scripts', 'load_js_assets');

function register_navwalker(){
	require_once get_template_directory() . '/class-wp-bootstrap-navwalker.php';
}
add_action( 'after_setup_theme', 'register_navwalker' );

// Menus

register_nav_menus(
    array(
        'top-menu' => 'Top Menu Location',
        'mobile-menu' => 'Mobile Menu Location'
    )
)


?>