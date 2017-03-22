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



/* Widget Footer Archives */

register_sidebar(array(
'name'=> 'Archives',
'id' => 'my-archives',
'description' => 'Widget My Archives',
'before_widget' => '<div class="widget w3ls-archives-my">',
'after_widget' => '</div>',
'before_title' => '<h5>',
'after_title' => '</h5>',
));

/* Widget Footer Tags */

register_sidebar(array(
'name'=> 'Tags',
'id' => 'my-tags',
'description' => 'Widget My Tags',
'before_widget' => '<div class="widget w3ls-tags-my">',
'after_widget' => '</div>',
'before_title' => '<h5>',
'after_title' => '</h5>',
));

/* Widget Footer Archives */

register_sidebar(array(
'name'=> 'Categories',
'id' => 'my-categories',
'description' => 'Widget My Categories',
'before_widget' => '<div class="widget w3ls-categories-my">',
'after_widget' => '</div>',
'before_title' => '<h5>',
'after_title' => '</h5>',
));

/*Function to Add Author Box*/
function add_author_box($content){

if( is_single() ) {

/*Editable*/
$img_ext = 'jpg'; //Replace this with png if you are using PNG images.
$img_size = 82; //Edit this value to change the author image size.

/*Getting author info*/
$auth_id = get_the_author_meta('ID'); //Get author ID.
$auth_name = get_the_author_meta('display_name'); // Get author name.
$auth_des = get_the_author_meta('description'); // Get author description.
$auth_page_url = get_author_posts_url($auth_id); //Get author Page URL.
$upload_dir = wp_upload_dir();
$uploads_folder_url = $upload_dir['url']; //uploads folder URL.
$uploads_folder_path = $upload_dir['path']; //uploads folder path.
$auth_avt = $uploads_folder_url.'/author'.$auth_id.'.'.$img_ext; //author image URL.
$auth_avt_path = $uploads_folder_path.'/author'.$auth_id.'.'.$img_ext; //author image path.

/*Check if user uploaded avatar exists*/
if(file_exists($auth_avt_path)){
 $auth_img = '<img src="'. $auth_avt .'" width="'. $img_size .'" height="'. $img_size .'" >'; //If user uploaded avatar exists, use it in the display.
 }else{$auth_img = get_avatar( $auth_id, $img_size ); //If user uploaded avatar does not exist use gavatar.
 }
 
/*Output*/
$content .= "<div id='authorbox'><h3>Article by <a href='$auth_page_url'>$auth_name</a></h3> $auth_img $auth_des </div>";
}
return $content;
}
add_filter ( 'the_content', 'add_author_box', 0 );

/* Related Posts*/
  
 /* Function to add related posts with thumb on single post pages */
function related_posts_with_thumb($content){
global $post;
if( is_single() ){
$rel_posts = '';

# 1. get category IDs of the current article and save to variable as an array.
$categories = get_the_category();
foreach($categories as $category){
	$rel_cat[] = $category->cat_ID;
}
# 2. arguments for wp_query.	
$rep_args = array(
	'post__not_in' => array($post->ID), # don't display current post.
	'category__in' => $rel_cat, # get posts within current categories.
	'posts_per_page' => 4, # number of posts to display.
	'orderby' => 'rand' # display random posts.
);
# 3. run the query.	
$rep_query = new wp_query($rep_args);

# 4. if the query has posts start the loop.
if($rep_query->have_posts()){
while($rep_query->have_posts()) : $rep_query->the_post();
	$rel_img = get_the_post_thumbnail($post->ID, 'thumbnail'); ## get featured image with default thumbnail size. 
	$rel_title =  get_the_title(); # get post title.
	$rel_link = get_permalink(); # get post link.	
	$rel_posts .= "<div id='content_rel_posts'> <a href='$rel_link'>$rel_img</a> <p><a href='$rel_link'> $rel_title </a></p></div>";
endwhile;
wp_reset_postdata();
}
# 5. Output.
$content .= "<h2 class='heading_rel_posts'>Related Articles</h2> $rel_posts";
}
return $content;
}
add_filter('the_content', 'related_posts_with_thumb', 2);