<?php
/**
 * expo functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package expo
 */

if ( ! defined( '_S_VERSION' ) ) {
	define( '_S_VERSION', '1.0.0' );
}

function expo_setup() {
    add_theme_support('woocommerce');
    add_theme_support( 'title-tag' );
    add_theme_support( 'post-thumbnails' );
    add_theme_support( 'wc-product-gallery-slider' );
    register_nav_menus(
		array(
            'menu-primary' => 'Главное меню',
            'menu-account' => 'Меню аккаунта',
		)
	);

    add_theme_support(
		'html5',
		array(
			'search-form',
			'comment-form',
			'comment-list',
			'gallery',
			'caption',
			'style',
			'script',
		)
	);

    add_theme_support(
		'custom-logo',
		array(
			'height'      => 250,
			'width'       => 250,
			'flex-width'  => true,
			'flex-height' => true,
		)
	);
}
add_action( 'after_setup_theme', 'expo_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
//function expo_content_width() {
//	$GLOBALS['content_width'] = apply_filters( 'expo_content_width', 640 );
//}
//add_action( 'after_setup_theme', 'expo_content_width', 0 );


//function expo_widgets_init() {
//	register_sidebar(
//		array(
//			'name'          => esc_html__( 'Sidebar', 'expo' ),
//			'id'            => 'sidebar-1',
//			'description'   => esc_html__( 'Add widgets here.', 'expo' ),
//			'before_widget' => '<section id="%1$s" class="widget %2$s">',
//			'after_widget'  => '</section>',
//			'before_title'  => '<h2 class="widget-title">',
//			'after_title'   => '</h2>',
//		)
//	);
//}
//add_action( 'widgets_init', 'expo_widgets_init' );



add_action( 'wp_enqueue_scripts', 'expo_scripts' );
function expo_scripts() {
    wp_enqueue_style( 'expo-google-fonts', 'https://fonts.googleapis.com/css2?family=Montserrat:wght@400;500;600;700&display=swap' );
    wp_enqueue_style( 'expo-datepicker', '//code.jquery.com/ui/1.11.2/themes/smoothness/jquery-ui.css' );

    wp_enqueue_style( 'slick', get_template_directory_uri() . '/lib/slick.css');
    wp_enqueue_style( 'slick-theme', get_template_directory_uri() . '/lib/slick-theme.css');
    wp_enqueue_style( 'star-rating', get_template_directory_uri() . '/lib/star-rating.css');
    wp_enqueue_style( 'expo-styles', get_template_directory_uri() . '/dist/css/global.bundle.css', array('expo-google-fonts'));

    wp_enqueue_script( 'jquery' );
    wp_enqueue_script( 'expo-validator', 'https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.5/jquery.validate.min.js', array('jquery'), false, true );
    wp_enqueue_script( 'expo-datepicker', '//code.jquery.com/ui/1.11.2/jquery-ui.js', array('jquery'), false, true );
    wp_enqueue_script( 'slick', get_template_directory_uri() . '/lib/slick.min.js', array('jquery'));
    wp_enqueue_script( 'expo-global', get_template_directory_uri() . '/dist/js/global.bundle.js', array('jquery', 'expo-validator'));
}


add_filter('intermediate_image_sizes', 'delete_intermediate_image_sizes');

function delete_intermediate_image_sizes($sizes)
{
    // размеры которые нужно удалить
    return array_diff($sizes, [
        'medium_large',
        'large',
        'medium',
        '1536x1536',
        '2048x2048',
    ]);
}

//require_once get_template_directory() . '/incs/register-post-type.php';
require_once get_template_directory() . '/incs/customizer.php';
require_once get_template_directory() . '/incs/woocommerce-hooks.php';



