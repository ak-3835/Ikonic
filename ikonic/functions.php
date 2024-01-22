<?php
function gs_load_scripts(){
    wp_enqueue_style('gs-style', get_stylesheet_uri(), array(), '1.0', 'all');
    // wp_enqueue_style('google-fonts', 'fonturl', array(), null);
    wp_enqueue_style('bootstrap-min', 'https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css', array(), null);
    wp_enqueue_style('ajax-libs', 'https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css', array(), null);
    wp_enqueue_script('ajax-libs-js', 'https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js', array(), '2.0');
    wp_enqueue_script('jsdelivr-js', 'https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js', array(), '2.0', true );
    wp_enqueue_script('slim-js', 'https://code.jquery.com/jquery-3.2.1.slim.min.js', array(), '2.0', true );
    wp_enqueue_script('popper-js', 'https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js', array(), '2.0', true );
    wp_enqueue_script('bootstrap-js', 'https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js', array(), '2.0', true );
    wp_enqueue_script('custom-js', get_template_directory_uri(). '/js/custom.js', array(), '2.0', true );
}
add_action('wp_enqueue_scripts', 'gs_load_scripts');

function ikonic_config(){
    register_nav_menus(
        array(
            'wp_ikonic_main_menu' => 'Main Menu',
            'wp_ikonic_footer_menu' => 'Footer Menu'
        )
    );

    add_theme_support( 'post-thumbnails' );
    add_theme_support( 'custom-logo', array(
        'width' => 200,
        'height'    => 110,
        'flex-height'   => true,
        'flex-width'    => true
    ) );
}
add_action( 'after_setup_theme', 'ikonic_config', 0 );

add_filter('show_admin_bar', '__return_false');

add_action( 'widgets_init', 'ikonic_sidebars' );
function ikonic_sidebars(){
    register_sidebar(
        array(
            'name'  => 'Footer 1',
            'id'    => 'footer-1',
            'description'   => 'This is the Blog Sidebar. You can add your widgets here.',
            'before_widget' => '<div class="widget-wrapper">',
            'after_widget'  => '</div>',
            'before_title'  => '<h4 class="widget-title">',
            'after_title'   => '</h4>'
        )
    );
    register_sidebar(
        array(
            'name'  => 'Footer 1',
            'id'    => 'footer-2',
            'description'   => 'First Service Area',
            'before_widget' => '<div class="widget-wrapper">',
            'after_widget'  => '</div>',
            'before_title'  => '<h4 class="widget-title">',
            'after_title'   => '</h4>'
        )
    );
    register_sidebar(
        array(
            'name'  => 'Footer 3',
            'id'    => 'footer-3',
            'description'   => 'Second Service Area',
            'before_widget' => '<div class="widget-wrapper">',
            'after_widget'  => '</div>',
            'before_title'  => '<h4 class="widget-title">',
            'after_title'   => '</h4>'
        )
    );
    register_sidebar(
        array(
            'name'  => 'Footer 4',
            'id'    => 'footer-4',
            'description'   => 'Third Service Area',
            'before_widget' => '<div class="widget-wrapper">',
            'after_widget'  => '</div>',
            'before_title'  => '<h4 class="widget-title">',
            'after_title'   => '</h4>'
        )
    );
}

function add_menu_link_class($atts, $item, $args)
{
    $atts['class'] = 'nav-item px-3';
    return $atts;
}
add_filter('nav_menu_link_attributes', 'add_menu_link_class', 1, 3);