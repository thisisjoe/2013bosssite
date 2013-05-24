<?php 

#-----------------------------------------------------------------#
# Default theme constants
#-----------------------------------------------------------------#
define('NECTAR_FRAMEWORK_DIRECTORY', get_template_directory_uri() . '/nectar/');
define('NECTAR_THEME_NAME', 'salient');

#-----------------------------------------------------------------#
# Load text domain
#-----------------------------------------------------------------#

add_action('after_setup_theme', 'lang_setup');
function lang_setup(){
	
	load_theme_textdomain(NECTAR_THEME_NAME, get_template_directory() . '/lang');
	
}

#-----------------------------------------------------------------#
# Register/Enqueue JS
#-----------------------------------------------------------------#

function nectar_register_js() {	
	
	if (!is_admin()) {
		
		// Register 
		wp_register_script('modernizer', get_template_directory_uri() . '/js/modernizr.js', 'jquery', '2.6.2');
		wp_register_script('respond', get_template_directory_uri() . '/js/respond.js', 'jquery', '1.1', TRUE);
		wp_register_script('superfish', get_template_directory_uri() . '/js/superfish.js', 'jquery', '1.4.8', TRUE);
		wp_register_script('easing', get_template_directory_uri() . '/js/easing.js', 'jquery', '1.3', TRUE);
		wp_register_script('touchSwipe', get_template_directory_uri() . '/js/swipe.min.js', 'jquery', '1.6', TRUE);
		wp_register_script('respond', get_template_directory_uri() . '/js/respond.js', 'jquery', '1.1',TRUE);
		wp_register_script('orbit', get_template_directory_uri() . '/js/orbit.js', 'jquery', '1.4', TRUE);
		wp_register_script('nicescroll', get_template_directory_uri() . '/js/nicescroll.js', 'jquery', '3.1' ,TRUE);
		wp_register_script('sticky', get_template_directory_uri() . '/js/sticky.js', 'jquery', '1.0', TRUE);
		wp_register_script('prettyPhoto', get_template_directory_uri() . '/js/prettyPhoto.js', 'jquery', '3.1.5', TRUE);
		wp_register_script('flexslider', get_template_directory_uri() . '/js/flexslider.min.js', 'jquery', '2.1', TRUE);
		wp_register_script('isotope', get_template_directory_uri() . '/js/isotope.min.js', 'jquery', '1.5.25' ,TRUE);
		wp_register_script('carouFredSel', get_template_directory_uri() . '/js/carouFredSel.min.js', 'jquery', '6.2', TRUE);
		wp_register_script('jplayer', get_template_directory_uri() . '/js/jplayer.min.js', 'jquery', '2.1', TRUE);
		wp_register_script('nectarFrontend', get_template_directory_uri() . '/js/init.js', array('jquery', 'superfish', 'carouFredSel', 'easing', 'flexslider', 'orbit', 'nicescroll'), '1.0', TRUE);
		
		// Enqueue
		wp_enqueue_script('jquery');
		wp_enqueue_script('modernizer');
		wp_enqueue_script('superfish'); 
		wp_enqueue_script('easing'); 
		wp_enqueue_script('respond');
		wp_enqueue_script('touchSwipe'); 
		wp_enqueue_script('nicescroll');
		wp_enqueue_script('sticky'); 
		wp_enqueue_script('prettyPhoto');
		wp_enqueue_script('flexslider');
		wp_enqueue_script('isotope');
		wp_enqueue_script('carouFredSel');
		wp_enqueue_script('jplayer');
		wp_enqueue_script('nectarFrontend');
		
	}
}

add_action('wp_enqueue_scripts', 'nectar_register_js');



function nectar_page_specific_js() {
	
	//home
	if ( is_page_template('template-home-1.php') || is_page_template('template-home-2.php') || is_page_template('template-home-3.php')) {
		wp_enqueue_script('orbit');
	}
	
	//contact
	if ( is_page_template('page-contact.php') ) {
		wp_register_script('googleMaps', 'http://maps.google.com/maps/api/js?sensor=false', NULL, NULL, TRUE);
		wp_register_script('nectarMap', get_template_directory_uri() . '/js/map.js', array('jquery', 'googleMaps'), '1.0', TRUE);
		
		wp_enqueue_script('googleMaps');
		wp_enqueue_script('nectarMap');
	}
	
	//comments
	if ( is_singular() && comments_open() && get_option('thread_comments') )
	wp_enqueue_script('comment-reply');
}

add_action('wp_enqueue_scripts', 'nectar_page_specific_js'); 




#-----------------------------------------------------------------#
# Register/Enqueue CSS
#-----------------------------------------------------------------#


//Main Styles
function nectar_main_styles() {	
		 
		 // Register 
		 wp_register_style('rgs', get_template_directory_uri() . '/css/rgs.css');
		 wp_register_style('responsive', get_template_directory_uri() . '/css/responsive.css.php');
		 wp_register_style('orbit', get_template_directory_uri() . '/css/orbit.css');
		 wp_register_style('font-awesome', get_template_directory_uri() . '/css/font-awesome.min.css');
		 wp_register_style("main-styles", get_stylesheet_directory_uri() . "/style.css");
		 wp_register_style("ie8", get_template_directory_uri() . "/css/ie8.css");
		 
		 // Enqueue
		 wp_enqueue_style('rgs'); 
		 wp_enqueue_style('responsive'); 
		 wp_enqueue_style('font-awesome'); 
		 wp_enqueue_style('main-styles');
		 wp_enqueue_style('ie8'); 
		 
		 //IE 
		 global $wp_styles;
		 $wp_styles->add_data("ie8", 'conditional', 'lt IE 9');
}

add_action('wp_print_styles', 'nectar_main_styles');


function nectar_page_sepcific_styles() {
	
	//home
	if ( is_page_template('template-home-1.php') || is_page_template('template-home-2.php') || is_page_template('template-home-3.php') || is_page_template('template-home-4.php')) {
		wp_enqueue_style('orbit'); 
	}
}

add_action('wp_print_styles', 'nectar_page_sepcific_styles');



#-----------------------------------------------------------------#
# Dynamic Styles
#-----------------------------------------------------------------#

function salient_enqueue_dynamic_css() {
	wp_register_style('dynamic_colors', get_stylesheet_directory_uri() . '/css/colors.css.php', 'style');
	wp_enqueue_style('dynamic_colors'); 
	
	global $options;
	if(!empty($options['use-custom-fonts']) && $options['use-custom-fonts'] == 1){
		wp_register_style('dynamic_fonts', get_stylesheet_directory_uri() . '/css/fonts.css.php', 'style');
		wp_enqueue_style('dynamic_fonts');
	}
	
	wp_register_style('custom_css', get_stylesheet_directory_uri() . '/css/custom.css.php', 'style');
	wp_enqueue_style('custom_css');
} 

add_action('wp_print_styles', 'salient_enqueue_dynamic_css');



#-----------------------------------------------------------------#
# Post formats
#-----------------------------------------------------------------#

add_theme_support( 'post-formats', array('quote','video','audio','gallery','link') );

#-----------------------------------------------------------------#
# Automatic Feed Links
#-----------------------------------------------------------------#

if(function_exists('add_theme_support')) {
    add_theme_support('automatic-feed-links');
}

#-----------------------------------------------------------------#
# Image sizes 
#-----------------------------------------------------------------#

add_theme_support( 'post-thumbnails' );
add_image_size( 'blog-widget', 50, 50, true ); 
add_image_size( 'portfolio-thumb', 600, 403, true ); 
add_image_size( 'portfolio-widget', 100, 100, true ); 

#-----------------------------------------------------------------#
# Custom menu
#-----------------------------------------------------------------#
if ( function_exists( 'register_nav_menus' ) ) {
	register_nav_menus(
		array(
		  'top_nav' => 'Top Navigation Menu'
		)
	);
}	


#-----------------------------------------------------------------#
# Widget areas
#-----------------------------------------------------------------#
if(function_exists('register_sidebar')) {
	
	register_sidebar(array('name' => 'Blog Sidebar', 'before_widget' => '<div id="%1$s" class="widget %2$s">','after_widget'  => '</div>', 'before_title'  => '<h4>', 'after_title'   => '</h4>'));
	register_sidebar(array('name' => 'Page Sidebar', 'before_widget' => '<div id="%1$s" class="widget %2$s">','after_widget'  => '</div>', 'before_title'  => '<h4>', 'after_title'   => '</h4>'));
	
	register_sidebar(array('name' => 'Footer Area 1', 'before_widget' => '<div id="%1$s" class="widget %2$s">','after_widget'  => '</div>', 'before_title'  => '<h4>', 'after_title'   => '</h4>'));
	register_sidebar(array('name' => 'Footer Area 2', 'before_widget' => '<div id="%1$s" class="widget %2$s">','after_widget'  => '</div>', 'before_title'  => '<h4>', 'after_title'   => '</h4>'));
	register_sidebar(array('name' => 'Footer Area 3', 'before_widget' => '<div id="%1$s" class="widget %2$s">','after_widget'  => '</div>', 'before_title'  => '<h4>', 'after_title'   => '</h4>'));
	register_sidebar(array('name' => 'Footer Area 4', 'before_widget' => '<div id="%1$s" class="widget %2$s">','after_widget'  => '</div>', 'before_title'  => '<h4>', 'after_title'   => '</h4>'));
}

#-----------------------------------------------------------------#
# Custom widgets
#-----------------------------------------------------------------#

//Recent Posts Extra
include('includes/custom-widgets/recent-posts-extra-widget.php');

//Recent portfolio items
include('includes/custom-widgets/recent-projects-widget.php');


#-----------------------------------------------------------------#
# Excerpt related 
#-----------------------------------------------------------------#

//excerpt length
function excerpt_length( $length ) {
	return 30;
}

add_filter( 'excerpt_length', 'excerpt_length', 999 );

//custom excerpt ending
function excerpt_more( $more ) {
	return '...';
}
add_filter('excerpt_more', 'excerpt_more');

//fixing filtering for shortcodes
function shortcode_empty_paragraph_fix($content){   
    $array = array (
        '<p>[' => '[', 
        ']</p>' => ']', 
        ']<br />' => ']'
    );

    $content = strtr($content, $array);
    return $content;
}

add_filter('the_content', 'shortcode_empty_paragraph_fix');


#-----------------------------------------------------------------#
# Category Rel Fix
#-----------------------------------------------------------------#

function remove_category_list_rel( $output ) {
    // Remove rel attribute from the category list
    return str_replace( ' rel="category tag"', '', $output );
}
 
add_filter( 'wp_list_categories', 'remove_category_list_rel' );
add_filter( 'the_category', 'remove_category_list_rel' );

#-----------------------------------------------------------------#
# Search related 
#-----------------------------------------------------------------#

function change_wp_search_size($query) {
	if ( $query->is_search ) 
		$query->query_vars['posts_per_page'] = 12; 

	return $query; 
}
add_filter('pre_get_posts', 'change_wp_search_size');


#-----------------------------------------------------------------#
# Current Page Url
#-----------------------------------------------------------------#

function current_page_url() {
	$pageURL = 'http';
	if( isset($_SERVER["HTTPS"]) ) {
		if ($_SERVER["HTTPS"] == "on") {$pageURL .= "s";}
	}
	$pageURL .= "://";
	if ($_SERVER["SERVER_PORT"] != "80") {
		$pageURL .= $_SERVER["SERVER_NAME"].":".$_SERVER["SERVER_PORT"].$_SERVER["REQUEST_URI"];
	} else {
		$pageURL .= $_SERVER["SERVER_NAME"].$_SERVER["REQUEST_URI"];
	}
	return $pageURL;
}

#-----------------------------------------------------------------#
# Options panel
#-----------------------------------------------------------------#

//load font functions
include("nectar/options/fonts.php");

if (is_admin()) {
	include('nectar/options/options-init.php');
}


#-----------------------------------------------------------------#
# Add multiple thumbnail support                         
#-----------------------------------------------------------------#
include("nectar/assets/functions/multi-post-thumbnails/multi-post-thumbnails.php");


#-----------------------------------------------------------------#
# Shortcodes
#-----------------------------------------------------------------#

//TinyMCE button + generator
require_once ( 'nectar/tinymce/tinymce-class.php' );	

//Shortcode Processing
require_once ( 'nectar/tinymce/shortcode-processing.php' );


#-----------------------------------------------------------------#
# Nectar love
#-----------------------------------------------------------------#

require_once ( 'nectar/love/nectar-love.php' );


#-----------------------------------------------------------------#
# Page meta
#-----------------------------------------------------------------# 

include("nectar/meta/page-meta.php");


#-----------------------------------------------------------------#
# Create admin slider section
#-----------------------------------------------------------------# 
function slider_register() {  
    
	$labels = array(
	 	'name' => __( 'Slides', 'taxonomy general name', NECTAR_THEME_NAME),
		'singular_name' => __( 'Slide', NECTAR_THEME_NAME),
		'search_items' =>  __( 'Search Slides', NECTAR_THEME_NAME),
		'all_items' => __( 'All Slides', NECTAR_THEME_NAME),
		'parent_item' => __( 'Parent Slide', NECTAR_THEME_NAME),
		'edit_item' => __( 'Edit Slide', NECTAR_THEME_NAME),
		'update_item' => __( 'Update Slide', NECTAR_THEME_NAME),
		'add_new_item' => __( 'Add New Slide', NECTAR_THEME_NAME),
	    'menu_name' => __( 'Home Slider', NECTAR_THEME_NAME)
	 );
	 
	 $args = array(
			'labels' => $labels,
			'singular_label' => __('Home Slider', NECTAR_THEME_NAME),
			'public' => true,
			'show_ui' => true,
			'hierarchical' => false,
			'menu_position' => 10,
			'menu_icon' => NECTAR_FRAMEWORK_DIRECTORY . 'assets/img/icons/home-slider.png',
			'exclude_from_search' => true,
			'supports' => false
       );  
   
    register_post_type( 'home_slider' , $args );  
}  

add_action('init', 'slider_register');


#-----------------------------------------------------------------#
# Custom slider columns
#-----------------------------------------------------------------# 

add_filter('manage_edit-home_slider_columns', 'edit_columns_home_slider');  

function edit_columns_home_slider($columns){  
	$column_thumbnail = array( 'thumbnail' => 'Thumbnail' );
	$column_caption = array( 'caption' => 'Caption' );
	$columns = array_slice( $columns, 0, 1, true ) + $column_thumbnail + array_slice( $columns, 1, NULL, true );
	$columns = array_slice( $columns, 0, 2, true ) + $column_caption + array_slice( $columns, 2, NULL, true );
	return $columns;
}  
  
  
add_action('manage_posts_custom_column',  'home_slider_custom_columns', 10, 2);  

function home_slider_custom_columns($portfolio_columns, $post_id){  

	switch ($portfolio_columns) {
	    case 'thumbnail':
	        $thumbnail = get_post_meta($post_id, '_nectar_slider_image', true);
	        
	        if( !empty($thumbnail) ) {
	            echo '<a href="'.get_admin_url() . 'post.php?post=' . $post_id.'&action=edit"><img class="slider-thumb" src="' . $thumbnail . '" /></a>';
	        } else {
	            echo '<a href="'.get_admin_url() . 'post.php?post=' . $post_id.'&action=edit"><img class="slider-thumb" src="' . NECTAR_FRAMEWORK_DIRECTORY . 'assets/img/slider-default-thumb.jpg" /></a>' .
	                 '<strong><a class="row-title" href="'.get_admin_url() . 'post.php?post=' . $post_id.'&action=edit">No image added yet</a></strong>';
	        }
	    break; 
		
		case 'caption':
			$caption = get_post_meta($post_id, '_nectar_slider_caption', true);
	        echo $caption;
	    break;  
		
		   
		default:
			break;
	}  
}  


add_action( 'admin_menu', 'nectar_home_slider_ordering' );

function nectar_home_slider_ordering() {
	add_submenu_page(
		'edit.php?post_type=home_slider',
		'Order Slides',
		'Order',
		'edit_pages', 'slide-order',
		'nectar_home_slider_order_page'
	);
}

function nectar_home_slider_order_page(){ ?>
	
	<div class="wrap">
		<h2>Sort Slides</h2>
		<p>Simply drag the slide up or down and they will be saved in that order.</p>
	<?php $slides = new WP_Query( array( 'post_type' => 'home_slider', 'posts_per_page' => -1, 'order' => 'ASC', 'orderby' => 'menu_order' ) ); ?>
	<?php if( $slides->have_posts() ) : ?>
		
		<?php wp_nonce_field( basename(__FILE__), 'nectar_meta_box_nonce' ); ?>
		
		<table class="wp-list-table widefat fixed posts" id="sortable-table">
			<thead>
				<tr>
					<th class="column-order">Order</th>
					<th class="manage-column column-thumbnail">Image</th>
					<th class="manage-column column-caption">Caption</th>
				</tr>
			</thead>
			<tbody data-post-type="home_slider">
			<?php while( $slides->have_posts() ) : $slides->the_post(); ?>
				<tr id="post-<?php the_ID(); ?>">
					<td class="column-order"><img src="<?php echo NECTAR_FRAMEWORK_DIRECTORY . '/assets/img/sortable.png'; ?>" title="" alt="Move Icon" width="25" height="25" class="" /></td>
					<td class="thumbnail column-thumbnail">
						<?php 
						global $post;
						$thumbnail = get_post_meta($post->ID, '_nectar_slider_image', true);
	        
				        if( !empty($thumbnail) ) {
				           echo '<img class="slider-thumb" src="' . $thumbnail . '" />' ;
				        } 
				        else {
				            echo '<img class="slider-thumb" src="' . NECTAR_FRAMEWORK_DIRECTORY . 'assets/img/slider-default-thumb.jpg" />' .
				                 '<strong>No image added yet</strong>';
				        } ?>
						
					</td>
					<td class="caption column-caption">
						<?php 
						$caption = get_post_meta($post->ID, '_nectar_slider_caption', true);
	        			echo $caption; ?>
					</td>
				</tr>
			<?php endwhile; ?>
			</tbody>
			<tfoot>
				<tr>
					<th class="column-order">Order</th>
					<th class="manage-column column-thumbnail">Image</th>
					<th class="manage-column column-caption">Caption</th>
				</tr>
			</tfoot>

		</table>

	<?php else: ?>

		<p>No slides found, why not <a href="post-new.php?post_type=home_slider">create one?</a></p>

	<?php endif; ?>
	<?php wp_reset_postdata(); ?>

	</div><!-- .wrap -->
	
<?php }


add_action( 'admin_enqueue_scripts', 'nectar_slider_enqueue_scripts' );

function nectar_slider_enqueue_scripts() {
	wp_enqueue_script( 'jquery-ui-sortable' );
	wp_enqueue_script( 'nectar-reorder', NECTAR_FRAMEWORK_DIRECTORY . 'assets/js/nectar-reorder.js' );
}


add_action( 'wp_ajax_nectar_update_slide_order', 'nectar_update_slide_order' );

//slide order ajax callback 
function nectar_update_slide_order() {
	
	    global $wpdb;
	 
	    $post_type     = $_POST['postType'];
	    $order        = $_POST['order'];
		
		if (  !isset($_POST['nectar_meta_box_nonce']) || !wp_verify_nonce( $_POST['nectar_meta_box_nonce'], basename( __FILE__ ) ) )
			return;
		
	    foreach( $order as $menu_order => $post_id ) {
	        $post_id         = intval( str_ireplace( 'post-', '', $post_id ) );
	        $menu_order     = intval($menu_order);
			
	        wp_update_post( array( 'ID' => stripslashes(htmlspecialchars($post_id)), 'menu_order' => stripslashes(htmlspecialchars($menu_order)) ) );
    	}
 
	    die( '1' );
}


//order the default home slider page correctly 
function set_home_slider_admin_order($wp_query) {  
  if (is_admin()) {  
  
    $post_type = $wp_query->query['post_type'];  
  
    if ( $post_type == 'home_slider') {  
   
      $wp_query->set('orderby', 'menu_order');  
      $wp_query->set('order', 'ASC');  
    }  
  }  
}  

add_filter('pre_get_posts', 'set_home_slider_admin_order'); 


#-----------------------------------------------------------------#
# Home slider meta
#-----------------------------------------------------------------# 

include("nectar/meta/home-slider-meta.php");


#-----------------------------------------------------------------#
# Create admin portfolio section
#-----------------------------------------------------------------# 
function portfolio_register() {  
    	 
	 $portfolio_labels = array(
	 	'name' => __( 'Portfolio', 'taxonomy general name', NECTAR_THEME_NAME),
		'singular_name' => __( 'Portfolio Item', NECTAR_THEME_NAME),
		'search_items' =>  __( 'Search Portfolio Items', NECTAR_THEME_NAME),
		'all_items' => __( 'Portfolio', NECTAR_THEME_NAME),
		'parent_item' => __( 'Parent Portfolio Item', NECTAR_THEME_NAME),
		'edit_item' => __( 'Edit Portfolio Item', NECTAR_THEME_NAME),
		'update_item' => __( 'Update Portfolio Item', NECTAR_THEME_NAME),
		'add_new_item' => __( 'Add New Portfolio Item', NECTAR_THEME_NAME)
	 );
	 
	 $options = get_option('salient'); 
     $custom_slug = null;		
	 
	 if(!empty($options['portfolio_rewrite_slug'])) $custom_slug = $options['portfolio_rewrite_slug'];
	
	 $args = array(
			'labels' => $portfolio_labels,
			'rewrite' => array('slug' => $custom_slug,'with_front' => false),
			'singular_label' => __('Project', NECTAR_THEME_NAME),
			'public' => true,
			'publicly_queryable' => true,
			'show_ui' => true,
			'hierarchical' => false,
			'menu_position' => 9,
			'menu_icon' => NECTAR_FRAMEWORK_DIRECTORY . 'assets/img/icons/portfolio.png',
			'supports' => array('title', 'editor', 'thumbnail', 'comments')  
       );  
  
    register_post_type( 'portfolio' , $args );  
}  
add_action('init', 'portfolio_register');


#-----------------------------------------------------------------#
# Add taxonomys attached to portfolio 
#-----------------------------------------------------------------# 

$category_labels = array(
	'name' => __( 'Project Categories', NECTAR_THEME_NAME),
	'singular_name' => __( 'Project Category', NECTAR_THEME_NAME),
	'search_items' =>  __( 'Search Project Categories', NECTAR_THEME_NAME),
	'all_items' => __( 'All Project Categories', NECTAR_THEME_NAME),
	'parent_item' => __( 'Parent Project Category', NECTAR_THEME_NAME),
	'edit_item' => __( 'Edit Project Category', NECTAR_THEME_NAME),
	'update_item' => __( 'Update Project Category', NECTAR_THEME_NAME),
	'add_new_item' => __( 'Add New Project Category', NECTAR_THEME_NAME),
    'menu_name' => __( 'Project Categories', NECTAR_THEME_NAME)
); 	

register_taxonomy("project-type", 
		array("portfolio"), 
		array("hierarchical" => true, 
				'labels' => $category_labels,
				'show_ui' => true,
    			'query_var' => true,
				'rewrite' => array( 'slug' => 'project-type' )
));

$attributes_labels = array(
	'name' => __( 'Project Attributes', NECTAR_THEME_NAME),
	'singular_name' => __( 'Project Attribute', NECTAR_THEME_NAME),
	'search_items' =>  __( 'Search Project Attributes', NECTAR_THEME_NAME),
	'all_items' => __( 'All Project Attributes', NECTAR_THEME_NAME),
	'parent_item' => __( 'Parent Project Attribute', NECTAR_THEME_NAME),
	'edit_item' => __( 'Edit Project Attribute', NECTAR_THEME_NAME),
	'update_item' => __( 'Update Project Attribute', NECTAR_THEME_NAME),
	'add_new_item' => __( 'Add New Project Attribute', NECTAR_THEME_NAME),
	'new_item_name' => __( 'New Project Attribute', NECTAR_THEME_NAME),
    'menu_name' => __( 'Project Attributes', NECTAR_THEME_NAME)
); 	

register_taxonomy('project-attributes',
	array('portfolio'),
	array('hierarchical' => true,
    'labels' => $attributes_labels,
    'show_ui' => true,
    'query_var' => true,
    'rewrite' => array( 'slug' => 'project-attributes' )
));

#-----------------------------------------------------------------#
# Add multiple Post thumbnails
#-----------------------------------------------------------------# 

if (class_exists('MultiPostThumbnails')) {
	
	//Portfolio
	new MultiPostThumbnails( 
		array( 
			'label' => 'Second Image', 
			'id' => 'second-slide', 
			'post_type' => 'portfolio' 
		));
	new MultiPostThumbnails( 
		array( 
			'label' => 'Third Image', 
			'id' => 'third-slide', 
			'post_type' => 'portfolio' 
		));
	new MultiPostThumbnails( 
		array( 
			'label' => 'Fourth Image', 
			'id' => 'fourth-slide', 
			'post_type' => 'portfolio' 
		));
	new MultiPostThumbnails( 
		array( 
			'label' => 'Fifth Image', 
			'id' => 'fifth-slide', 
			'post_type' => 'portfolio' 
		));
	new MultiPostThumbnails( 
		array( 
			'label' => 'Sixth Image', 
			'id' => 'sixth-slide', 
			'post_type' => 'portfolio' 
		));
	
	//Posts
	new MultiPostThumbnails( 
		array( 
			'label' => 'Second Image', 
			'id' => 'second-slide', 
			'post_type' => 'post' 
		));
	new MultiPostThumbnails( 
		array( 
			'label' => 'Third Image', 
			'id' => 'third-slide', 
			'post_type' => 'post' 
		));
	new MultiPostThumbnails( 
		array( 
			'label' => 'Fourth Image', 
			'id' => 'fourth-slide', 
			'post_type' => 'post' 
		));
	new MultiPostThumbnails( 
		array( 
			'label' => 'Fifth Image', 
			'id' => 'fifth-slide', 
			'post_type' => 'post' 
		));
	new MultiPostThumbnails( 
		array( 
			'label' => 'Sixth Image', 
			'id' => 'sixth-slide', 
			'post_type' => 'post' 
		));
	
}


#-----------------------------------------------------------------#
# Portfolio Meta
#-----------------------------------------------------------------# 

include("nectar/meta/portfolio-meta.php");


#-----------------------------------------------------------------#
# New category walker for portfolio filter
#-----------------------------------------------------------------# 

class Walker_Portfolio_Filter extends Walker_Category {
   function start_el(&$output, $category, $depth, $args) {

      extract($args);
      $cat_slug = esc_attr( $category->slug );
      $cat_slug = apply_filters( 'list_cats', $cat_slug, $category );
	  
      $link = '<li><a href="#" data-filter=".'.strtolower(preg_replace('/\s+/', '-', $cat_slug)).'">';
	  
	  $cat_name = esc_attr( $category->name );
      $cat_name = apply_filters( 'list_cats', $cat_name, $category );
	  	
      $link .= $cat_name;
	  
      if(!empty($category->description)) {
         $link .= ' <span>'.$category->description.'</span>';
      }
	  
      $link .= '</a>';
     
      $output .= $link;
       
   }
}


#-----------------------------------------------------------------#
# Function to get the page link back to all portfolio items
#-----------------------------------------------------------------#

function get_portfolio_page_link($post_id) {
    global $wpdb;
	
    $results = $wpdb->get_results("SELECT post_id FROM $wpdb->postmeta
    WHERE meta_key='_wp_page_template' AND meta_value='page-portfolio.php'");

    foreach ($results as $result) 
    {
        $page_id = $result->post_id;
    }
	
    return get_page_link($page_id);
} 


#-----------------------------------------------------------------#
# Post meta
#-----------------------------------------------------------------#

function enqueue_media(){
	
	//enqueue the correct media scripts for the media library 
	$wp_version = floatval(get_bloginfo('version'));
	
	if ( $wp_version < "3.5" ) {
	    wp_enqueue_script(
	        'redux-opts-field-upload-js', 
	        Redux_OPTIONS_URL . 'fields/upload/field_upload_3_4.js', 
	        array('jquery', 'thickbox', 'media-upload'),
	        time(),
	        true
	    );
	    wp_enqueue_style('thickbox');// thanks to https://github.com/rzepak
	} else {
	    wp_enqueue_script(
	        'redux-opts-field-upload-js', 
	        Redux_OPTIONS_URL . 'fields/upload/field_upload.js', 
	        array('jquery'),
	        time(),
	        true
	    );
	    wp_enqueue_media();
	}
	
}

//post meta styling
function  nectar_metabox_styles() {
	wp_enqueue_style('nectar_meta_css', NECTAR_FRAMEWORK_DIRECTORY .'/assets/css/nectar_meta.css');
}

//post meta scripts
function nectar_metabox_scripts() {
	wp_register_script('nectar-upload', NECTAR_FRAMEWORK_DIRECTORY .'/assets/js/nectar-meta.js', array('jquery','media-upload','thickbox'));
	wp_enqueue_script('nectar-upload');
	wp_localize_script('redux-opts-field-upload-js', 'redux_upload', array('url' => Redux_OPTIONS_URL .'fields/upload/blank.png'));
}

add_action('admin_enqueue_scripts', 'nectar_metabox_scripts');
add_action('admin_print_styles', 'nectar_metabox_styles');
add_action('admin_print_styles', 'enqueue_media');


//post meta core functions
include("nectar/meta/meta-config.php");
include("nectar/meta/post-meta.php");


#-----------------------------------------------------------------#
# Post audio
#-----------------------------------------------------------------#

if ( !function_exists( 'nectar_audio' ) ) {
    function nectar_audio($postid) {
	
    	$mp3 = get_post_meta($postid, '_nectar_audio_mp3', TRUE);
    	$ogg = get_post_meta($postid, '_nectar_audio_ogg', TRUE);
    	
    ?>
		
    		<script type="text/javascript">
		
    			jQuery(document).ready(function($){
	
    				if( $().jPlayer ) {
    					$("#jquery_jplayer_<?php echo $postid; ?>").jPlayer({
    						ready: function () {
    							$(this).jPlayer("setMedia", {
    							    <?php if($mp3 != '') : ?>
    								mp3: "<?php echo $mp3; ?>",
    								<?php endif; ?>
    								<?php if($ogg != '') : ?>
    								oga: "<?php echo $ogg; ?>",
    								<?php endif; ?>
    								end: ""
    							});
    						},
    						<?php if( !empty($poster) ) { ?>
    						size: {
            				    width: "<?php echo $width; ?>px",
            				    height: "<?php echo $height . 'px'; ?>"
            				},
            				<?php } ?>
    						swfPath: "<?php echo get_template_directory_uri(); ?>/js",
    						cssSelectorAncestor: "#jp_interface_<?php echo $postid; ?>",
    						supplied: "<?php if($ogg != '') : ?>oga,<?php endif; ?><?php if($mp3 != '') : ?>mp3, <?php endif; ?> all"
    					});
					
    				}
    			});
    		</script>
		
    	    <div id="jquery_jplayer_<?php echo $postid; ?>" class="jp-jplayer jp-jplayer-audio"></div>

            <div class="jp-audio-container">
                <div class="jp-audio">
                    <div id="jp_interface_<?php echo $postid; ?>" class="jp-interface">
                        <ul class="jp-controls">
                            <li><a href="#" class="jp-play" tabindex="1">play</a></li>
                            <li><a href="#" class="jp-pause" tabindex="1">pause</a></li>
                            <li><a href="#" class="jp-mute" tabindex="1">mute</a></li>
                            <li><a href="#" class="jp-unmute" tabindex="1">unmute</a></li>
                        </ul>
                        <div class="jp-progress">
                            <div class="jp-seek-bar">
                                <div class="jp-play-bar"></div>
                            </div>
                        </div>
                        <div class="jp-volume-bar-container">
                            <div class="jp-volume-bar">
                                <div class="jp-volume-bar-value"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
    	<?php 
    }
}


#-----------------------------------------------------------------#
# Post video
#-----------------------------------------------------------------#

if ( !function_exists( 'nectar_video' ) ) {
    function nectar_video($postid) { 
	
    	$m4v = get_post_meta($postid, '_nectar_video_m4v', true);
    	$ogv = get_post_meta($postid, '_nectar_video_ogv', true);
    	$poster = get_post_meta($postid, '_nectar_video_poster', true);

    ?>
    <script type="text/javascript">
    	jQuery(document).ready(function($){
		
    		if( $().jPlayer ) {
    			$("#jquery_jplayer_<?php echo $postid; ?>").jPlayer({
    				ready: function () {
    					$(this).jPlayer("setMedia", {
    						<?php if($m4v != '') : ?>
    						m4v: "<?php echo $m4v; ?>",
    						<?php endif; ?>
    						<?php if($ogv != '') : ?>
    						ogv: "<?php echo $ogv; ?>",
    						<?php endif; ?>
    						<?php if ($poster != '') : ?>
    						poster: "<?php echo $poster; ?>"
    						<?php else: ?>
    						poster: "<?php echo get_template_directory_uri().'/img/no-video-img.png'; ?>"
    						<?php endif; ?>
    					});
    				},
    				size: {
			          width: "100%",
			          height: "auto"
			        },
    				swfPath: "<?php echo get_template_directory_uri(); ?>/js",
    				cssSelectorAncestor: "#jp_interface_<?php echo $postid; ?>",
    				supplied: "<?php if($m4v != '') : ?>m4v, <?php endif; ?><?php if($ogv != '') : ?>ogv, <?php endif; ?> all"
    			});
    		}
    	});
    </script>

    <div id="jquery_jplayer_<?php echo $postid; ?>" class="jp-jplayer jp-jplayer-video"></div>

    <div class="jp-video-container">
        <div class="jp-video">
            <div id="jp_interface_<?php echo $postid; ?>" class="jp-interface">
                <ul class="jp-controls">
                	<li><div class="seperator-first"></div></li>
                    <li><div class="seperator-second"></div></li>
                    <li><a href="#" class="jp-play" tabindex="1">play</a></li>
                    <li><a href="#" class="jp-pause" tabindex="1">pause</a></li>
                    <li><a href="#" class="jp-mute" tabindex="1">mute</a></li>
                    <li><a href="#" class="jp-unmute" tabindex="1">unmute</a></li>
                </ul>
                <div class="jp-progress">
                    <div class="jp-seek-bar">
                        <div class="jp-play-bar"></div>
                    </div>
                </div>
                <div class="jp-volume-bar-container">
                    <div class="jp-volume-bar">
                        <div class="jp-volume-bar-value"></div>
                    </div>
                </div>
            </div>

        </div>
    </div>

    <?php }
}

#-----------------------------------------------------------------#
# Post gallery
#-----------------------------------------------------------------#

if ( !function_exists( 'nectar_gallery' ) ) {
    function nectar_gallery($postid) { 
	        
	    if (class_exists('MultiPostThumbnails')) { ?>
		   
		  <div class="flex-gallery"> 
		  	  <ul class="slides">
			    <?php if ( has_post_thumbnail() ) { echo '<li>' . get_the_post_thumbnail($postid, 'full', array('title' => '')) . '</li>'; } ?>
			   
			    <?php 
				   if(MultiPostThumbnails::has_post_thumbnail(get_post_type(), 'second-slide')) { echo '<li>' . MultiPostThumbnails::get_the_post_thumbnail(get_post_type(), 'second-slide') . '</li>'; }
				   if(MultiPostThumbnails::has_post_thumbnail(get_post_type(), 'third-slide')) { echo '<li>' . MultiPostThumbnails::get_the_post_thumbnail(get_post_type(), 'third-slide') . '</li>'; }
				   if(MultiPostThumbnails::has_post_thumbnail(get_post_type(), 'fourth-slide')) { echo '<li>' . MultiPostThumbnails::get_the_post_thumbnail(get_post_type(), 'fourth-slide') . '</li>'; }
				   if(MultiPostThumbnails::has_post_thumbnail(get_post_type(), 'fifth-slide')) { echo '<li>' . MultiPostThumbnails::get_the_post_thumbnail(get_post_type(), 'fifth-slide') . '</li>'; }
				   if(MultiPostThumbnails::has_post_thumbnail(get_post_type(), 'sixth-slide')) { echo '<li>' . MultiPostThumbnails::get_the_post_thumbnail(get_post_type(), 'sixth-slide') . '</li>'; }
		   	    ?>
		   	   
		   	   </ul>
		   </div><!--/gallery-->
		<?php } 
    	
    }
    
}


#-----------------------------------------------------------------#
# Custom page header
#-----------------------------------------------------------------#

if ( !function_exists( 'nectar_page_header' ) ) {
    function nectar_page_header($postid) {
		
		global $options;
		global $post;
		
    	$bg = get_post_meta($postid, '_nectar_header_bg', true);
    	$title = get_post_meta($postid, '_nectar_header_title', true);
    	$subtitle = get_post_meta($postid, '_nectar_header_subtitle', true);
		$height = get_post_meta($postid, '_nectar_header_bg_height', true);
		$page_template = get_post_meta($postid, '_wp_page_template', true); 
		
		//incase no title is entered for portfolio, still show the filters
		if( $page_template == 'page-portfolio.php' && empty($title)) $title = get_the_title($post->ID);
			
		if( !empty($bg) ) { 
    ?>
    	
	    <div id="page-header-bg" data-height="<?php echo (!empty($height)) ? $height : '350'; ?>" style="background-image: url(<?php echo $bg; ?>); height: <?php echo $height;?>px;">
			<div class="container">	
				<div class="row">
					<div class="col span_6">
						<h1><?php echo $title; ?></h1>
						<span class="subheader"><?php echo $subtitle; ?></span>
					</div>
					
					<?php // portfolio filters
					if( $page_template == 'page-portfolio.php') { ?>
					<div id="portfolio-filters">
						<a href="#" id="sort-portfolio"><?php echo (!empty($options['portfolio-sortable-text'])) ? $options['portfolio-sortable-text'] :'Sort Portfolio'; ?></a>
						<ul>
						   <li><a href="#" data-filter="*"><?php echo __('All', NECTAR_THEME_NAME); ?></a></li>
		               	   <?php wp_list_categories(array('title_li' => '', 'taxonomy' => 'project-type', 'show_option_none'   => '', 'walker' => new Walker_Portfolio_Filter())); ?>
						</ul>
					</div>
					<?php } ?>
					
				</div>
			</div>
		</div>
	   
	
	    <?php } else if( !empty($title) ) { ?>
	    	
		    <div class="row page-header-no-bg">
		    	<div class="container">	
					<div class="col span_12 section-title">
						<h1><?php echo $title; ?><?php if(!empty($subtitle)) echo '<span>' . $subtitle . '</span>'; ?></h1>
						
						<?php // portfolio filters
						if( $page_template == 'page-portfolio.php') { ?>
						<div id="portfolio-filters">
							<a href="#" id="sort-portfolio"><?php echo (!empty($options['portfolio-sortable-text'])) ? $options['portfolio-sortable-text'] :'Sort Portfolio'; ?></a>
							<ul>
							   <li><a href="#" data-filter="*"><?php echo __('All', NECTAR_THEME_NAME); ?></a></li>
			               	   <?php wp_list_categories(array('title_li' => '', 'taxonomy' => 'project-type', 'show_option_none'   => '', 'walker' => new Walker_Portfolio_Filter())); ?>
							</ul>
						</div>
						<?php } ?>
						
					</div>
				</div>
			</div>
	    	
	   <?php }
		 
    }
}


#-----------------------------------------------------------------#
# Pagination
#-----------------------------------------------------------------#

if ( !function_exists( 'nectar_pagination' ) ) {
	
	function nectar_pagination() {
		
		global $options;
		//extra pagination
		if( !empty($options['extra_pagination']) && $options['extra_pagination'] == '1' ){
			    global $wp_query;  
      
			    $total_pages = $wp_query->max_num_pages;  
			      
			    if ($total_pages > 1){  
			      
			      $current_page = max(1, get_query_var('paged'));  
			      
				  echo '<div id="pagination">';
				   
			      echo paginate_links(array(  
			          'base' => get_pagenum_link(1) . '%_%',  
			          'format' => '/page/%#%',  
			          'current' => $current_page,  
			          'total' => $total_pages,  
			        )); 
					
				  echo  '</div>'; 
					
			    }  
		}
		//regular pagination
		else{
			
			if( get_next_posts_link() || get_previous_posts_link() ) { 
				echo '<div id="pagination">
				      <div class="prev">'.get_previous_posts_link('&laquo; Previous Entries').'</div>
				      <div class="next">'.get_next_posts_link('Next Entries &raquo;','').'</div>
			          </div>';
			
	        }
		}
		
	
	}
}

 

	 

?>