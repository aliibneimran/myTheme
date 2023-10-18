<?php 

function aii_theme_files(){
    wp_enqueue_style( 'animate', get_template_directory_uri().'/assets/vendor/animate.css/animate.min.css', array(), '1.0', 'all' );
    wp_enqueue_style( 'bootstrap', get_template_directory_uri().'/assets/vendor/bootstrap/css/bootstrap.min.css', array(), '1.0', 'all' );
    wp_enqueue_style( 'bootstrap-icons', get_template_directory_uri().'/assets/vendor/boxicons/css/boxicons.min.css', array(), '1.0', 'all' );
    wp_enqueue_style( 'glightbox', get_template_directory_uri().'/assets/vendor/glightbox/css/glightbox.min.css', array(), '1.0', 'all' );
    wp_enqueue_style( 'remixicon', get_template_directory_uri().'/assets/vendor/remixicon/remixicon.css', array(), '1.0', 'all' );
    wp_enqueue_style( 'swiper', get_template_directory_uri().'/assets/vendor/swiper/swiper-bundle.min.css', array(), '1.0', 'all' );
    wp_enqueue_style( 'css', get_template_directory_uri().'/assets/css/style.css', array(), '1.0', 'all' );

    wp_enqueue_style( 'aii_style', get_stylesheet_uri() );


    wp_enqueue_script( 'bootstrap', get_template_directory_uri().'/assets/vendor/bootstrap/js/bootstrap.bundle.min.js', array('jquery'), '1.0', true );
    wp_enqueue_script( 'glightbox', get_template_directory_uri().'/assets/vendor/glightbox/js/glightbox.min.js', array('jquery'), '1.0', true );
    wp_enqueue_script( 'isotope-layout', get_template_directory_uri().'/assets/vendor/isotope-layout/isotope.pkgd.min.js', array('jquery'), '1.0', true );
    wp_enqueue_script( 'swiper', get_template_directory_uri().'/assets/vendor/swiper/swiper-bundle.min.js', array('jquery'), '1.0', true );
    wp_enqueue_script( 'waypoints', get_template_directory_uri().'/assets/vendor/waypoints/noframework.waypoints.js', array('jquery'), '1.0', true );
    wp_enqueue_script( 'php-email-form', get_template_directory_uri().'/assets/vendor/php-email-form/validate.js', array('jquery'), '1.0', true );

    wp_enqueue_script( 'aii_js', get_template_directory_uri().'/assets/js/main.js', array('jquery'), '1.0', true );
}
add_action('wp_enqueue_scripts', 'aii_theme_files');


function aii_theme_supports(){
    //for loading theme textdomain
    load_theme_textdomain( 'aii-mytheme', get_template_directory().'/languages' );

    //for generate automated feed links on head
    add_theme_support( 'automatic-feed-links');

    //for adding automatic title tag
    add_theme_support( 'title-tag');

    //for post thumbnails
    add_theme_support( 'post-thumbnails');

    //for menu
    register_nav_menus(array(
        'menu-1' => esc_html__( 'Primary', 'mytheme' )
    ));
    add_theme_support( 'html5', array(
        'search-form',
        'comment-form',
        'comment-list',
        'gallery',
        'caption',
    )); 

    //for widgets
    add_theme_support('customize-selective-refresh-widgets');

    //for custom logo
    // add_theme_support(array(
    //     'height' => 250,
    //     'width' => 250,
    //     'flex-width' => true,
    //     'flex-height' => true,
    // ));
}
add_action( 'after_setup_theme', 'aii_theme_supports' );

//for custom post
function create_custom_post_type() {
    register_post_type( 'Sliders',
     array(
        'labels' => array(
            'name' => __( 'Sliders' ),
            'singular_name' => __( 'Slider' )
        ),
        'public' => true,
        'has_archive' => true,
        'supports' => array( 'title', 'editor', 'custom-fields','thumbnail','page-attributes' )
        )
    );
    register_post_type( 'Service',
    array(
       'labels' => array(
           'name' => __( 'Service' ),
           'singular_name' => __( 'Service' )
       ),
       'public' => true,
       'has_archive' => true,
       'supports' => array( 'title', 'editor', 'custom-fields','thumbnail','page-attributes' )
       )
    );
    register_post_type( 'Features',
    array(
       'labels' => array(
           'name' => __( 'Features' ),
           'singular_name' => __( 'Features' )
       ),
       'public' => true,
       'has_archive' => true,
       'supports' => array( 'title', 'editor', 'custom-fields','thumbnail','page-attributes' )
       )
    );
    register_post_type( 'Portfolio',
    array(
       'labels' => array(
           'name' => __( 'Portfolio' ),
           'singular_name' => __( 'Portfolio' )
       ),
       'public' => true,
       'has_archive' => true,
       'supports' => array( 'title', 'editor', 'custom-fields','thumbnail','page-attributes' )
       )
    );
    }
    add_action( 'init', 'create_custom_post_type' );


    //for widgets
    function mytheme_register_widgets(){
        register_sidebar(array(
            "name" => __("Footer 1 widgets","mytheme"),
            "id" => "footer-1-widget",
            "description" => __("A widget area location to the left side in footer","mytheme"),
            "before_widget" => '<div id="%1$s" class="widget &2$s">',
            "after_widget" => '</div>',
            "before_title" => '<h3>',
            "after_title" => '</h3">',
        ));
        register_sidebar(array(
            "name" => __("Footer 2 widgets","mytheme"),
            "id" => "footer-2-widget",
            "description" => __("A widget area location to the middle-left side in footer","mytheme"),
            "before_widget" => '<div id="%1$s" class="widget &2$s">',
            "after_widget" => '</div>',
            "before_title" => '<h4>',
            "after_title" => '</h4">',
        ));
        register_sidebar(array(
            "name" => __("Footer 3 widgets","mytheme"),
            "id" => "footer-3-widget",
            "description" => __("A widget area location to the middle-right side in footer","mytheme"),
            "before_widget" => '<div id="%1$s" class="widget &2$s">',
            "after_widget" => '</div>',
            "before_title" => '<h4>',
            "after_title" => '</h4">',
        ));
        register_sidebar(array(
            "name" => __("Footer 4 widgets","mytheme"),
            "id" => "footer-4-widget",
            "description" => __("A widget area location to the right side in footer","mytheme"),
            "before_widget" => '<div id="%1$s" class="widget &2$s">',
            "after_widget" => '</div>',
            "before_title" => '<h4>',
            "after_title" => '</h4">',
        ));
    }
    add_action( 'widgets_init', 'mytheme_register_widgets' )

?>