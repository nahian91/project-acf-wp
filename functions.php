<?php

function acf_setup(){

    load_theme_textdomain('acf', get_template_directory() . '/languages');
    add_theme_support('title-tag');

    register_nav_menu('main-menu', __('Main Menu', 'acf'));

}
add_action('after_setup_theme', 'acf_setup');

function acf_scrips() {

    wp_enqueue_style( 'google-font', '//fonts.googleapis.com/css?family=Montserrat:200,300,400,500,600,700,800&display=swap', array(), '1.0.0', 'all' );
    wp_enqueue_style( 'font-awesome', get_template_directory_uri().'/assets/css/font-awesome.min.css', array(), '1.0.0', 'all' );
    wp_enqueue_style( 'animate', get_template_directory_uri().'/assets/css/animate.css', array(), '1.0.0', 'all' );
    wp_enqueue_style( 'owl-carousel', get_template_directory_uri().'/assets/css/owl.carousel.min.css', array(), '1.0.0', 'all' );
    wp_enqueue_style( 'owl-carousel-theme', get_template_directory_uri().'/assets/css/owl.theme.default.min.css', array(), '1.0.0', 'all' );
    wp_enqueue_style( 'magnific-popup', get_template_directory_uri().'/assets/css/magnific-popup.css', array(), '1.0.0', 'all' );
    wp_enqueue_style( 'flaticon', get_template_directory_uri().'/assets/css/flaticon.css', array(), '1.0.0', 'all' );
    wp_enqueue_style( 'main-style', get_template_directory_uri().'/assets/css/style.css', array(), '1.0.0', 'all' );
    wp_enqueue_style( 'style-name', get_stylesheet_uri() );

    wp_enqueue_script( 'migrate', get_template_directory_uri() . '/assets/js/jquery-migrate-3.0.1.min.js', array('jquery'), '1.0.0', true );
    wp_enqueue_script( 'popper', get_template_directory_uri() . '/assets/js/popper.min.js', array('jquery'), '1.0.0', true );
    wp_enqueue_script( 'bootstrap', get_template_directory_uri() . '/assets/js/bootstrap.min.js', array('jquery'), '1.0.0', true );
    wp_enqueue_script( 'easing', get_template_directory_uri() . '/assets/js/jquery.easing.1.3.js', array('jquery'), '1.0.0', true );
    wp_enqueue_script( 'waypoints', get_template_directory_uri() . '/assets/js/jquery.waypoints.min.js', array('jquery'), '1.0.0', true );
    wp_enqueue_script( 'stellar', get_template_directory_uri() . '/assets/js/jquery.stellar.min.js', array('jquery'), '1.0.0', true );
    wp_enqueue_script( 'animateNumber', get_template_directory_uri() . '/assets/js/jquery.animateNumber.min.js', array('jquery'), '1.0.0', true );
    wp_enqueue_script( 'owl-carousel', get_template_directory_uri() . '/assets/js/owl.carousel.min.js', array('jquery'), '1.0.0', true );
    wp_enqueue_script( 'magnific-popup', get_template_directory_uri() . '/assets/js/jquery.magnific-popup.min.js', array('jquery'), '1.0.0', true );
    wp_enqueue_script( 'scrollax', get_template_directory_uri() . '/assets/js/scrollax.min.js', array('jquery'), '1.0.0', true );
    wp_enqueue_script( 'animamainteNumber', get_template_directory_uri() . '/assets/js/main.js', array('jquery'), '1.0.0', true );

}
add_action('wp_enqueue_scripts', 'acf_scrips');


// ACF Theme Options


function acf_op_init() {

    // Check function exists.
    if( function_exists('acf_add_options_page') ) {

        // Register options page.
        $parent = acf_add_options_page(array(
            'page_title'    => __('Theme Options', 'acf'),
            'menu_title'    => __('General Settings', 'acf'),
            'menu_slug'     => 'theme-general-settings',
            'capability'    => 'edit_posts',
            'redirect'      => false
        ));

        // Add sub page.
        $child = acf_add_options_sub_page(array(
            'page_title'  => __('Header Settings', 'acf'),
            'menu_title'  => __('Header Settings', 'acf'),
            'parent_slug' => $parent['menu_slug'],
        ));

        // Add sub page.
        $child = acf_add_options_sub_page(array(
            'page_title'  => __('Home Page', 'acf'),
            'menu_title'  => __('Home Page', 'acf'),
            'parent_slug' => $parent['menu_slug'],
        ));

        // Add sub page.
        $child = acf_add_options_sub_page(array(
            'page_title'  => __('About Page', 'acf'),
            'menu_title'  => __('About Page', 'acf'),
            'parent_slug' => $parent['menu_slug'],
        ));

        // Add sub page.
        $child = acf_add_options_sub_page(array(
            'page_title'  => __('Services Page', 'acf'),
            'menu_title'  => __('Services Page', 'acf'),
            'parent_slug' => $parent['menu_slug'],
        ));

        // Add sub page.
        $child = acf_add_options_sub_page(array(
            'page_title'  => __('Contact Page', 'acf'),
            'menu_title'  => __('Contact Page', 'acf'),
            'parent_slug' => $parent['menu_slug'],
        ));

        // Add sub page.
        $child = acf_add_options_sub_page(array(
            'page_title'  => __('Footer Settings', 'acf'),
            'menu_title'  => __('Footer Settings', 'acf'),
            'parent_slug' => $parent['menu_slug'],
        ));
    }
}
add_action('acf/init', 'acf_op_init');

function acf_style() {
    $feature_lists_style = get_field('feature_lists_style', 'options');
?>
    <style>
        .services-2 .icon{
            background-color: <?php echo $feature_lists_style['icon_background'];?>
        }
        .services-2 .icon i{
            color: <?php echo $feature_lists_style['icon_color'];?>;
            font-size: <?php echo $feature_lists_style['icon_size'];?>;
        }
    </style>
<?php
}
add_action('wp_head', 'acf_style');


function acf_widgets_init() {
    register_sidebar( array(
        'name'          => __( 'Footer Widget 1', 'acf' ),
        'id'            => 'footer-1',
        'description'   => __( 'Widgets in this area will be shown on all posts and pages.', 'acf' ),
        'before_widget' => '<div id="%1$s" class="widget list-unstyled">',
        'after_widget'  => '</div>',
        'before_title'  => '<h2 class="footer-heading">',
        'after_title'   => '</h2>',
    ) );
    register_sidebar( array(
        'name'          => __( 'Footer Widget 2', 'acf' ),
        'id'            => 'footer-2',
        'description'   => __( 'Widgets in this area will be shown on all posts and pages.', 'acf' ),
        'before_widget' => '<li id="%1$s" class="widget py-1 d-block">',
        'after_widget'  => '</li>',
        'before_title'  => '<h2 class="footer-heading">',
        'after_title'   => '</h2>',
    ) );
    register_sidebar( array(
        'name'          => __( 'Footer Widget 3', 'acf' ),
        'id'            => 'footer-3',
        'description'   => __( 'Widgets in this area will be shown on all posts and pages.', 'acf' ),
        'before_widget' => '<ul id="%1$s" class="widget py-1 d-block">',
        'after_widget'  => '</ul>',
        'before_title'  => '<h2 class="footer-heading">',
        'after_title'   => '</h2>',
    ) );
}
add_action( 'widgets_init', 'acf_widgets_init' );