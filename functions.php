<?php
function starter_styles() {
	
	$hash = 1;
	
	wp_enqueue_style( 'child-style',
		get_stylesheet_directory_uri() . '/build/css/style.css',
		wp_get_theme()->get('Version')
	);
	
	
	// Google fonts
	$query_args = array(
		'family' => 'Roboto:300,500',
		'subset' => 'latin-ext'
	);
	
	wp_register_style( 'google_fonts', add_query_arg( $query_args, "//fonts.googleapis.com/css" ), array(), null );
	wp_enqueue_style('google_fonts');
	
	wp_enqueue_script( 'jquery',
		get_stylesheet_directory_uri() . '/build/js/jquery.min.js', // path to script
		null,  // Dependecies
		$hash, // Add manual or automatic hash wp_get_theme()->get('Version') for browsers 
		true   // Add script to the footer
	);

	wp_enqueue_script( 'tether',
		get_stylesheet_directory_uri() . '/build/js/tether.min.js', // path to script
		null,  // Dependecies
		$hash, // Add manual or automatic hash wp_get_theme()->get('Version') for browsers 
		true   // Add script to the footer
	);
	
	wp_enqueue_script( 'bootstrap',
		get_stylesheet_directory_uri() . '/build/js/bootstrap4.min.js', // path to script
		null,  // Dependecies
		$hash, // Add manual or automatic hash wp_get_theme()->get('Version') for browsers 
		true   // Add script to the footer
	);
}

add_action( 'wp_enqueue_scripts', 'starter_styles' );


function starter_setup() {
	// Enable support for custom logo.
	add_theme_support( 'custom-logo', array(
		'height'      => 60,
		'width'       => 270,
		'flex-height' => true,
	));
	
	add_theme_support( 'post-thumbnails' );
	
	add_theme_support( 'title-tag' );

	add_image_size( 'event-thumb', 640, 331, array( 'center', 'center'), true); //300 pixels wide (and unlimited height)
	
	add_theme_support( 'post-formats', array(
		'image', 'video', 'quote', 'link', 'gallery'
	));
	
	register_nav_menus( array(
		'primary' => __( 'Primary Menu',      'starter' ),
		'social'  => __( 'Social Links Menu', 'starter' ),
	) );
	
	//add_image_size( 'event-thumb' 640, 331, array( 'center', 'center')  ); //300 pixels wide (and unlimited height)
}

add_action( 'after_setup_theme', 'starter_setup' );

function starter_widgets_init() {
	register_sidebar( array(
		'name'          => __( 'Footer About', 'meeto' ),
		'id'            => 'widget-footer-1',
		'description'   => __( 'Add widgets here to appear in your sidebar.', 'twentyfifteen' ),
		'before_widget' => '<div class="widget %2$s">',
		'after_widget'  => '</div>',
		'before_title'  => '<h3 class="title--footer">',
		'after_title'   => '</h3>',
	) );

	register_sidebar( array(
		'name'          => __( 'Footer Bottom', 'meeto' ),
		'id'            => 'widget-footer-2',
		'description'   => __( 'Add widgets here to appear in your sidebar.', 'twentyfifteen' ),
		'before_widget' => '<div class="widget %2$s">',
		'after_widget'  => '</div>',
		'before_title'  => '<h3 class="title--footer">',
		'after_title'   => '</h3>',
	) );
	
	register_sidebar( array(
		'name'          => __( 'MailPoet Newsletter', 'meeto' ),
		'id'            => 'widget-newsletter',
		'description'   => __( 'Add widgets here to appear in your sidebar.', 'twentyfifteen' ),
		'before_widget' => '<div class="card-block widget %2$s">',
		'after_widget'  => '</div>',
		'before_title'  => '<h3 class="card-title box-title--event">',
		'after_title'   => '</h3>',
	) );
}

add_action( 'widgets_init', 'starter_widgets_init' );


// Include GTM code 
$whitelist = array(
	'127.0.0.1',
	'::1'
);

$GTM_ID = 'xGTM-TZGCN4F';

if(!in_array($_SERVER['REMOTE_ADDR'], $whitelist)) {

	// Include the Google Tag Manager Code
	function gtm_tracking_code_head() {

	global $GTM_ID; ?>

	<!-- Google Tag Manager -->
	<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
	new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
	j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
	'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
	})(window,document,'script','dataLayer','<?php echo $GTM_ID; ?>');</script>
	<!-- /Google Tag Manager -->
	<?php
	}

	function gtm_tracking_code_footer() {
	global $GTM_ID; ?>

	<!-- Google Tag Manager (noscript) -->
	<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=<?php echo $GTM_ID; ?>"
	height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
	<!-- /Google Tag Manager (noscript) -->
	<?php
	}

	// Include GA tracking code before the closing head tag
	add_action('wp_head', 'gtm_tracking_code_head');

	// Include GA tracking code before the closing body tag
	add_action('wp_footer', 'gtm_tracking_code_footer');
}

// Clean menu
// functions.php
class CleanMenu extends Walker_Nav_Menu {
    public function start_lvl( &$output, $depth = 0, $args = array() ) {
        $output .= '<ul>';
    }

    public function end_lvl( &$output, $depth = 0, $args = array() ) {
        $output .= '</ul>';
    }

    public function start_el( &$output, $item, $depth = 0, $args = array(), $id = 0 ) {
        $classes = array();
        if( !empty( $item->classes ) ) {
            $classes = (array) $item->classes;
        }

        $active_class = '';
        if( in_array('current-menu-item', $classes) ) {
            $active_class = ' class="nav-item active"';
        } else if( in_array('current-menu-parent', $classes) ) {
            $active_class = ' class="nav-item active-parent"';
        } else if( in_array('current-menu-ancestor', $classes) ) {
            $active_class = ' class="nav-item active-ancestor"';
        } else {
	        $active_class = ' class="nav-item"';
        }

        $url = '';
        if( !empty( $item->url ) ) {
            $url = $item->url;
        }

        $output .= '<li'. $active_class . '><a href="' . $url . '">' . $item->title . '</a></li>';
    }

    public function end_el( &$output, $item, $depth = 0, $args = array() ) {
        $output .= '</li>';
    }
}


?>
