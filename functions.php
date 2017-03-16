<?php

// Add scripts and stylesheets
function startwordpress_scripts() {
	wp_enqueue_style( 'bootstrap', get_template_directory_uri() . '/css/bootstrap.min.css', array(), '3.3.6' );
	wp_enqueue_style( 'style', get_template_directory_uri() . '/css/capella.css' );
	wp_enqueue_style( 'awesome', get_template_directory_uri() . '/css/font-awesome.min.css' );
	wp_enqueue_script( 'bootstrap', get_template_directory_uri() . '/js/bootstrap.min.js', array('jquery'), '3.3.6', true );
}

add_action( 'wp_enqueue_scripts', 'startwordpress_scripts' );



/*
	==========================================
	 Activate menus
	==========================================
*/
function capella_my_menu() {
  register_nav_menu('header-menu',__( 'Header Menu' ));
}
add_action( 'init', 'capella_my_menu' );

// WordPress Titles
function startwordpress_wp_title( $title, $sep ) {
	global $paged, $page;
	if ( is_feed() ) {
		return $title;
	} 
	// Add the site name.
	$title .= get_bloginfo( 'name' );
	// Add the site description for the home/front page.
	$site_description = get_bloginfo( 'description', 'display' );
	if ( $site_description && ( is_home() || is_front_page() ) ) {
		$title = "$title $sep $site_description";
	}
	return $title;
} 
add_filter( 'wp_title', 'startwordpress_wp_title', 10, 2 );

// Custom settings
function custom_settings_add_menu() {
  add_menu_page( 'Custom Settings', 'Custom Settings', 'manage_options', 'custom-settings', 'custom_settings_page', null, 99);
}
add_action( 'admin_menu', 'custom_settings_add_menu' );

// Create Custom Global Settings
function custom_settings_page() { ?>
	<div class="wrap">
		<h1>Custom Settings</h1>
		<form method="post" action="options.php">
			<?php
           settings_fields('section');
           do_settings_sections('theme-options');      
           submit_button(); 
       ?>
		</form>
	</div>
	<?php }

// facebook
function setting_facebook() { ?>
			<input type="text" name="facebook" id="facebook" value="<?php echo get_option('facebook'); ?>" />
			<?php }
// twitter
function setting_twitter() { ?>
			<input type="text" name="twitter" id="twitter" value="<?php echo get_option('twitter'); ?>" />
			<?php }
// google			
function setting_googleplus() { ?>
			<input type="text" name="googleplus" id="googleplus" value="<?php echo get_option('googleplus'); ?>" />
			<?php }	
// linkedin				
function setting_linkedin() { ?>
			<input type="text" name="linkedin" id="linkedin" value="<?php echo get_option('linkedin'); ?>" />
			<?php }	
// instagram			
function setting_instagram() { ?>
			<input type="text" name="instagram" id="instagram" value="<?php echo get_option('instagram'); ?>" />
			<?php }								


function custom_settings_page_setup() {
  add_settings_section('section', 'All Settings', null, 'theme-options');
  add_settings_field('facebook', 'Facebook URL', 'setting_facebook', 'theme-options', 'section');
  add_settings_field('twitter', 'Twitter URL', 'setting_twitter', 'theme-options', 'section');
  add_settings_field('google', 'Google URL', 'setting_github', 'theme-options', 'section');
  add_settings_field('linkedin', 'Linkedin URL', 'setting_facebook', 'theme-options', 'section');
  add_settings_field('pinterest', 'Pinterest URL', 'setting_facebook', 'theme-options', 'section');
  
  register_setting('section', 'facebook');
  register_setting('section', 'twitter');
  register_setting('section', 'google');
  register_setting('section', 'linkedin');
  register_setting('section', 'pinterest');
}
add_action( 'admin_init', 'custom_settings_page_setup' );

// Support Featured Images
add_theme_support( 'post-thumbnails' );

// Custom Post Type
function create_my_custom_post() {
	register_post_type('my-custom-post',
			array(
			'labels' => array(
					'name' => __('My Custom Post'),
					'singular_name' => __('My Custom Post'),
			),
			'public' => true,
			'has_archive' => true,
			'supports' => array(
					'title',
					'editor',
					'thumbnail',
				  'custom-fields'
			)
	));
}
add_action('init', 'create_my_custom_post'); 
/* Pagination*/

function pagination($prev = '«', $next = '»') {
    global $wp_query, $wp_rewrite;
    $wp_query->query_vars['paged'] > 1 ? $current = $wp_query->query_vars['paged'] : $current = 1;
    $pagination = array(
        'base' => @add_query_arg('paged','%#%'),
        'format' => '',
        'total' => $wp_query->max_num_pages,
        'current' => $current,
        'prev_text' => __($prev),
        'next_text' => __($next),
        'type' => 'plain'
);
    if( $wp_rewrite->using_permalinks() )
        $pagination['base'] = user_trailingslashit( trailingslashit( remove_query_arg( 's', get_pagenum_link( 1 ) ) ) . 'page/%#%/', 'paged' );
    if( !empty($wp_query->query_vars['s']) )
        $pagination['add_args'] = array( 's' => get_query_var( 's' ) );
    echo paginate_links( $pagination );
};

/* Widget Footer*/

/* Widget Footer About me */

register_sidebar(array(
'name'=> 'about-me',
'id' => 'about-me',
'description' => 'Widget about',
'before_widget' => '<div class="widget w3-agile-grid">',
'after_widget' => '</div>',
'before_title' => '<h5>',
'after_title' => '</h5>',
));

/*%1$s */
/* Widget Footer Last Post */

register_sidebar(array(
'name'=> 'Last post',
'id' => 'last-post',
'description' => 'Widget Last post',
'before_widget' => '<div class="widget w3ls-post-info">',
'after_widget' => '</div>',
'before_title' => '<h5>',
'after_title' => '</h5>',
));
?>
