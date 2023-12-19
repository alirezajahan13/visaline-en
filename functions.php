<?php
/**
 * visaline functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package visaline
 */

 define( '_S_VERSION', '1.0.33' );


/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which
 * runs before the init hook. The init hook is too late for some features, such
 * as indicating support for post thumbnails.
 */
function visaline_setup() {
	/*
		* Make theme available for translation.
		* Translations can be filed in the /languages/ directory.
		* If you're building a theme based on visaline, use a find and replace
		* to change 'visaline' to the name of your theme in all the template files.
		*/
	load_theme_textdomain( 'visaline', get_template_directory() . '/languages' );

	// Add default posts and comments RSS feed links to head.
	add_theme_support( 'automatic-feed-links' );

	/*
		* Let WordPress manage the document title.
		* By adding theme support, we declare that this theme does not use a
		* hard-coded <title> tag in the document head, and expect WordPress to
		* provide it for us.
		*/
	add_theme_support( 'title-tag' );

	/*
		* Enable support for Post Thumbnails on posts and pages.
		*
		* @link https://developer.wordpress.org/themes/functionality/featured-images-post-thumbnails/
		*/
	add_theme_support( 'post-thumbnails' );

	// This theme uses wp_nav_menu() in one location.
	register_nav_menus(
		array(
			'menu-1' => esc_html__( 'Primary', 'visaline' ),
		)
	);

	/*
		* Switch default core markup for search form, comment form, and comments
		* to output valid HTML5.
		*/
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

	// Set up the WordPress core custom background feature.
	add_theme_support(
		'custom-background',
		apply_filters(
			'visaline_custom_background_args',
			array(
				'default-color' => 'ffffff',
				'default-image' => '',
			)
		)
	);

	// Add theme support for selective refresh for widgets.
	add_theme_support( 'customize-selective-refresh-widgets' );

	/**
	 * Add support for core custom logo.
	 *
	 * @link https://codex.wordpress.org/Theme_Logo
	 */
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
add_action( 'after_setup_theme', 'visaline_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function visaline_content_width() {
	$GLOBALS['content_width'] = apply_filters( 'visaline_content_width', 640 );
}
add_action( 'after_setup_theme', 'visaline_content_width', 0 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function visaline_widgets_init() {
	register_sidebar(
		array(
			'name'          => esc_html__( 'Sidebar', 'visaline' ),
			'id'            => 'sidebar-1',
			'description'   => esc_html__( 'Add widgets here.', 'visaline' ),
			'before_widget' => '<section id="%1$s" class="widget %2$s">',
			'after_widget'  => '</section>',
			'before_title'  => '<h2 class="widget-title">',
			'after_title'   => '</h2>',
		)
	);
}
add_action( 'widgets_init', 'visaline_widgets_init' );

/**
 * Enqueue scripts and styles.
 */
function visaline_scripts() {
	wp_enqueue_style( 'visaline-style', get_stylesheet_uri(), array(), _S_VERSION );
	wp_enqueue_style( 'additional-style', get_template_directory_uri().'/additional.css', array(), _S_VERSION );
	wp_enqueue_style( 'intlTelInput', get_template_directory_uri().'/intl/build/css/intlTelInput.css', array(), _S_VERSION );
	// wp_style_add_data( 'visaline-style', 'rtl', 'replace' );
	wp_enqueue_script('jquery');
	wp_enqueue_script( 'visaline-home', get_template_directory_uri() . '/js/home.js', array(), _S_VERSION, true );
	wp_enqueue_script( 'visaline-navigation', get_template_directory_uri() . '/js/navigation.js', array(), _S_VERSION, true );
	wp_enqueue_script( 'intlTelInput-js', get_template_directory_uri() . '/intl/build/js/intlTelInput.js', array(), _S_VERSION, true );
	wp_enqueue_script( 'utils-js', get_template_directory_uri() . '/intl/build/js/utils.js', array(), _S_VERSION, true );
	wp_enqueue_script( 'visaline-headercontrol', get_template_directory_uri() . '/js/headercontrol.js', array(), _S_VERSION, true );
	wp_enqueue_script( 'intlinint', get_template_directory_uri() . '/js/intlinint.js', array(), _S_VERSION, true );
	wp_enqueue_script( 'visaline-consultation', get_template_directory_uri() . '/js/consultation.js', array(), _S_VERSION, true );
	wp_enqueue_script( 'visaline-evaluation', get_template_directory_uri() . '/js/evaluation.js', array(), _S_VERSION, true );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
	if ( is_front_page(  )){
		wp_enqueue_script( 'new-init', get_template_directory_uri() . '/js/newIniting.js', array(), _S_VERSION, true );
	}
}
add_action( 'wp_enqueue_scripts', 'visaline_scripts' );

/**
 * Implement the Custom Header feature.
 */
require get_template_directory() . '/inc/custom-header.php';

/**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/inc/template-tags.php';

/**
 * Functions which enhance the theme by hooking into WordPress.
 */
require get_template_directory() . '/inc/template-functions.php';

/**
 * Customizer additions.
 */
require get_template_directory() . '/inc/customizer.php';

/**
 * Load Jetpack compatibility file.
 */
if ( defined( 'JETPACK__VERSION' ) ) {
	require get_template_directory() . '/inc/jetpack.php';
}
function removeCustomAutoP(){
	if(is_page_template('page-template/home-template.php')){
		return false;
	}
}
add_filter('wpcf7_autop_or_not', 'removeCustomAutoP');

/* svg icon menu item 

add_filter( 'wp_nav_menu_items', 'add_svg_to_menu', 10, 2 );
function add_svg_to_menu( $items, $args ) {
    if ( $args->theme_location == 'primary' ) {
        $icon = get_field( 'svg_icon', $args->menu_item->ID );
        $items .= '<li><svg>' . $icon . '</svg><a href="#">Menu Item</a></li>';
    }
    return $items;
}

*/

// add_filter( 'wpcf7_validate_text*', 'custom_phone_validation_filter', 20, 2 );
 
// function custom_phone_validation_filter( $result, $tag ) {
//   if ( 'evalPhone' == $tag->name || 'bookPhone' == $tag->name) {
//     $thePhone = isset( $_POST['evalPhone'] ) ? trim( $_POST['evalPhone'] ) : '';
// 	if(!(preg_match("/^09[0-9]{9}$/", $thePhone))){
// 		$result->invalidate( $tag, "فرمت شماره همراه صحیح نیست" );
// 	}
//   }
 
//   return $result;
// }

add_filter('wpcf7_validate_text*', 'custom_phone_validation_filter', 20, 2);

function custom_phone_validation_filter($result, $tag) {
    // Check if the field has either data-name attribute
	if ('evalPhone' == $tag->name || 'bookPhone' == $tag->name) {
		$thePhone = isset($_POST[$tag->name]) ? trim($_POST[$tag->name]) : '';
		
		// Define your custom phone number format using a regular expression
		$customPhoneFormat = '/^[۰-۹0-9]{10}$/u'; // افزودن ۰-۹ به مجموعه نمادهای قابل قبول
	
		// Use preg_match to support Persian (Farsi) and Arabic numbers
		if (!preg_match($customPhoneFormat, $thePhone)) {
			// If the phone number doesn't match the custom format, set a validation error message
			$result->invalidate($tag, "فرمت شماره همراه صحیح نیست");
		}
	}
	if ('evalAge' == $tag->name){
		$theAge = isset($_POST[$tag->name]) ? trim($_POST[$tag->name]) : '';
		
		// Define your custom age format using a regular expression
		$customAgeFormat = '/^[۰-۹0-9]{2}$/u'; // افزودن ۰-۹ به مجموعه نمادهای قابل قبول
	
		if (!preg_match($customAgeFormat, $theAge) || $theAge < 15 || $theAge > 99) {
			// If the age doesn't match the custom format or is outside the valid range, set a validation error message
			$result->invalidate($tag, "سن به درستی وارد نشده است");
		}
	}	
	if ('evalName' == $tag->name ){
		$theName = isset($_POST[$tag->name]) ? trim($_POST[$tag->name]) : '';
		
		// Check if $theName has 5 or more characters
		if (mb_strlen($theName, 'UTF-8') < 5) {
			// If the name contains fewer than 5 characters, set a validation error message
			$result->invalidate($tag, "نام باید حداقل 5 کاراکتر داشته باشد.");
		}
	}
    return $result;
}


function bbloomer_shop_product_short_description() {
	the_excerpt();
}
function my_excerpt_length($length){
	return 30;
}
add_filter('excerpt_length', 'my_excerpt_length');

function new_excerpt_more( $more ) {
	return ' ... ';
}
add_filter('excerpt_more', 'new_excerpt_more');


// function custom_menu_icon($item_output, $item, $depth, $args) {
//     $menu_icon = get_field('menu_svg_icon', $item);
//     if ($menu_icon) {
//         // Properly format the output with SVG icon before the <a> tag
//         $item_output = '<span class="menu_svg_icon">' . $menu_icon . '</span>' . $item_output;
//     }
//     return $item_output;
// }
// add_filter('walker_nav_menu_start_el', 'custom_menu_icon', 10, 4);

// add_filter('wp_nav_menu_objects', 'my_wp_nav_menu_objects', 10, 2);
// function my_wp_nav_menu_objects( $items, $args ) {
//     foreach( $items as &$item ) {
//         $icon = get_field('svg_menu_item_icon', $item);
//         if( $icon ) {
//             $item->title .= $icon;
//         }
//     }
//     return $items;
    
// }

add_filter('wp_nav_menu_objects', 'my_wp_nav_menu_objects', 10, 2);

function my_wp_nav_menu_objects($items, $args) {
    foreach ($items as &$item) {
        $icon = get_field('svg_menu_item_icon', $item);
        if ($icon) {
            $icon_markup = '<div class="menu-icon">' . $icon . '</div>';
            $item->title = $icon_markup . $item->title;
        }
    }
    return $items;
}

add_filter( 'wp_kses_allowed_html', 'acf_add_allowed_svg_tag', 10, 2 );

function acf_add_allowed_svg_tag( $tags, $context ) {
    if ( $context === 'acf' ) {
        $tags['svg']  = array(
            'xmlns'        => true,
      'width'      => true,
      'height'    => true,
      'stroke'    => true,
      'stroke-width'    => true,
      'preserveAspectRatio'  => true,
            'fill'        => true,
            'viewbox'        => true,
            'role'        => true,
            'aria-hidden'      => true,
            'focusable'        => true,
        );
        $tags['path'] = array(
            'd'    => true,
            'fill' => true,
			'stroke'    => true,
			'stroke-width'    => true,
        );
    }

    return $tags;
}
// add_post_type_support( 'page', 'excerpt' );

// function my_excerpt_length($length){
// 	return 40;
// }
// add_filter('excerpt_length', 'my_excerpt_length');

// function new_excerpt_more( $more ) {
// 	return ' ... ';
// }
// add_filter('excerpt_more', 'new_excerpt_more');


function truncateString($inputString, $wordLimit) {
    $words = explode(' ', $inputString);
    if (count($words) <= $wordLimit) {
        return $inputString;
    } else {
        $truncatedString = implode(' ', array_slice($words, 0, $wordLimit));
        return $truncatedString . '...';
    }
}

function pagination_bar() {
	global $wp_query;

	$total_pages = $wp_query->max_num_pages;

	if ($total_pages > 1){
		// $current_page = max(1, get_query_var('paged'));
		global $wp_query;
		$wp_query->query_vars['paged'] > 1 ? $current = $wp_query->query_vars['paged'] : $current = 1;
		echo paginate_links(array(
			'base' =>@add_query_arg('paged','%#%'),
			'format' => '/page/%#%',
			'current' => $current,
			'total' => $total_pages,
			'next_text' => '<span class="leftArrow"><svg width="12px" height="12px" xmlns="http://www.w3.org/2000/svg" fill="#505050" id="Layer_1" x="0" y="0" version="1.1" viewBox="0 0 29 29" xml:space="preserve"><path fill="none" stroke="#505050" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" stroke-width="3" d="m20.5 26.5-12-12 12-12"></path></svg></span>',
			'prev_text' => '<span class="rightArrow"><svg width="12px" height="12px" xmlns="http://www.w3.org/2000/svg" fill="#505050" id="Layer_1" x="0" y="0" version="1.1" viewBox="0 0 29 29" xml:space="preserve"><path fill="none" stroke="#505050" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" stroke-width="3" d="m8.5 2.5 12 12-12 12"></path></svg></span>'
		));
	}
}