<?php
/**
 * deltahub functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package deltahub
 */

if ( ! defined( '_S_VERSION' ) ) {
	// Replace the version number of the theme on each release.
	define( '_S_VERSION', '1.0.0' );
}

if ( ! function_exists( 'deltahub_setup' ) ) :
	/**
	 * Sets up theme defaults and registers support for various WordPress features.
	 *
	 * Note that this function is hooked into the after_setup_theme hook, which
	 * runs before the init hook. The init hook is too late for some features, such
	 * as indicating support for post thumbnails.
	 */
	function deltahub_setup() {
		/*
		 * Make theme available for translation.
		 * Translations can be filed in the /languages/ directory.
		 * If you're building a theme based on deltahub, use a find and replace
		 * to change 'deltahub' to the name of your theme in all the template files.
		 */
		load_theme_textdomain( 'deltahub', get_template_directory() . '/languages' );

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
				'primary' => esc_html__( 'Primary', 'deltahub' ),
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
				'deltahub_custom_background_args',
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
endif;
add_action( 'after_setup_theme', 'deltahub_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function deltahub_content_width() {
	$GLOBALS['content_width'] = apply_filters( 'deltahub_content_width', 640 );
}
add_action( 'after_setup_theme', 'deltahub_content_width', 0 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function deltahub_widgets_init() {
	register_sidebar(
		array(
			'name'          => esc_html__( 'Sidebar', 'deltahub' ),
			'id'            => 'sidebar-1',
			'description'   => esc_html__( 'Add widgets here.', 'deltahub' ),
			'before_widget' => '<section id="%1$s" class="widget %2$s">',
			'after_widget'  => '</section>',
			'before_title'  => '<h2 class="widget-title">',
			'after_title'   => '</h2>',
		)
	);
}
add_action( 'widgets_init', 'deltahub_widgets_init' );

/**
 * Enqueue scripts and styles.
 */
function deltahub_scripts() {
	// <!-- bootstrap.min css -->
	wp_enqueue_style('bootstrap-3', get_template_directory_uri() . '/css/bootstrap.css');

	// wp_enqueue_style('bootstrap-4', get_template_directory_uri() . '/css/bootstrap.min.css');
	// <!-- fontawesome -->
	wp_enqueue_style('font-awesome.min.css', get_template_directory_uri() . '/css/font-awesome.min.css');
	
	wp_enqueue_style( 'deltahub-style', get_stylesheet_uri(), array(), _S_VERSION );

	// wp_enqueue_style('style.css', get_template_directory_uri() . '/style.css');
	 
	// wp_style_add_data( 'deltahub-style', 'rtl', 'replace' );
	
	// wp_enqueue_script( 'deltahub-navigation', get_template_directory_uri() . '/js/navigation.js', array(), _S_VERSION, true );

	
	// <!-- Main jQuery -->
	// wp_enqueue_script( 'jquery.js', get_template_directory_uri() . '/js/jquery-2.2.4.min.js' );
	 wp_deregister_script('jquery');
	 wp_enqueue_script( 'jquery.js', get_template_directory_uri() . '/js/jquery-2.2.4.min.js' );
	// wp_enqueue_script( 'jquery' );
	//bootstrap js

	wp_enqueue_script( 'bootstrap.js', get_template_directory_uri() . '/js/bootstrap.min.js' );
	wp_enqueue_script( 'boot', 'https://cdn.rawgit.com/VPenkov/okayNav/master/app/js/jquery.okayNav.js' );
	wp_enqueue_script( 'main.js', get_template_directory_uri() . '/js/main.js' );

    // <script src='https://cdn.rawgit.com/VPenkov/okayNav/master/app/js/jquery.okayNav.js'></script>
	//custom js

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'deltahub_scripts' );

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

// get post category for each post
function custom_get_post_category($post_id){
	$category_array = get_the_category($post_id);
	foreach($category_array as $category){
		echo $category->cat_name.' ';
	}
	// echo $category_array[0]->cat_name;
}



/**
 * popular posts
 */

function wpb_set_post_views($postID) {
	$count_key = 'wpb_post_views_count';
	 $count = get_post_meta($postID, $count_key, true);
	 if($count==''){
		 $count = 1;
		 delete_post_meta($postID, $count_key);
		 add_post_meta($postID, $count_key, '0');
		}else{
			$count++;
			update_post_meta($postID, $count_key, $count);
			return $count;
		}
	}
	//To keep the count accurate, lets get rid of prefetching
	remove_action( 'wp_head', 'adjacent_posts_rel_link_wp_head', 10, 0);
	
	
	
	function wpb_track_post_views ($post_id) {
		if ( !is_single() ) return;
		if ( empty ( $post_id) ) {
			global $post;
			$post_id = $post->ID;    
		}
		wpb_set_post_views($post_id);
	}
	add_action( 'wp_head', 'wpb_track_post_views');
	
	/**
	 * End popular posts
	 */
	/*
 ==================
 Ajax Search
======================	 
*/
// add the ajax fetch js
add_action( 'wp_footer', 'ajax_fetch' );
function ajax_fetch() {
?>
<script type="text/javascript">
function fetch(){

    jQuery.ajax({
        url: '<?php echo admin_url('admin-ajax.php'); ?>',
        type: 'post',
        data: { action: 'data_fetch', keyword: jQuery('#keyword').val() },
        success: function(data) {
            jQuery('#datafetch').html( data );
        }
    });

}
</script>

<?php
}

// the ajax function
add_action('wp_ajax_data_fetch' , 'data_fetch');
add_action('wp_ajax_nopriv_data_fetch','data_fetch');
function data_fetch(){

    $the_query = new WP_Query( array( 'posts_per_page' => -1, 's' => esc_attr( $_POST['keyword'] ), 'post_type' => array('page','post') ) );
    if( $the_query->have_posts() ) :
        echo ' <ul class="results searchfield input">';
        while( $the_query->have_posts() ): $the_query->the_post(); ?>

			<a  href="<?php echo esc_url( post_permalink() ); ?>"><option class="serching"><?php the_title();?></option></a>

        <?php endwhile;
       echo '</ul>';
        wp_reset_postdata();  
    endif;

    die();
}
?>
<?php



	//---- Add buttons to top of post content
	function ip_post_likes($content) {
		// Check if single post
		if(is_singular('post')) {
			ob_start();

			$output = ob_get_clean();

			return $output . $content;
		}else {
			return $content;
		}
	}

	add_filter('the_content', 'ip_post_likes');

	//---- Get like or dislike count
	function ip_get_like_count($type = 'likes') {
		$current_count = get_post_meta(get_the_id(), $type, true);

		return ($current_count ? $current_count : 0);
	}

	//---- Process like or dislike
	function ip_process_like() {
		$processed_like = false;
		$redirect       = false;

		// Check if like or dislike
		if(is_singular('post')) {
			if(isset($_GET['post_action'])) {
				if($_GET['post_action'] == 'like') {
					// Like
					$like_count = get_post_meta(get_the_id(), 'likes', true);

					if($like_count >= 1) {
						$like_count ;
					}else {
						$like_count = (int)$like_count + 1;
					}

					$processed_like = update_post_meta(get_the_id(), 'likes', $like_count);
				}elseif($_GET['post_action'] == 'dislike') {
					// Dislike
					$dislike_count = get_post_meta(get_the_id(), 'dislikes', true);

					if($dislike_count >= 1) {
						$dislike_count ;
					}else {
						$dislike_count = (int)$dislike_count + 1;
					}

					$processed_like = update_post_meta(get_the_id(), 'dislikes', $dislike_count);
				}

				if($processed_like) {
					$redirect = get_the_permalink();
				}
			}
		}

		// Redirect
		if($redirect) {
			wp_redirect($redirect);
			die;
		}
	}

	add_action('template_redirect', 'ip_process_like');


/*
*
*pagination
*/

 if ( ! function_exists( 'post_pagination' ) ) :
	function post_pagination() {
	  global $wp_query;
	  $pager = 999999999; // need an unlikely integer
  
		 echo paginate_links( array(
			  'base' => str_replace( $pager, '%#%', esc_url( get_pagenum_link( $pager ) ) ),
			  'format' => '?paged=%#%',
			  'current' => max( 1, get_query_var('paged') ),
			  'total' => $wp_query->max_num_pages
		 ) );
	}
 endif;


 
 $value = 'yehia';
 
//  setcookie("TestCookie", $value);
 setcookie("TestCookie", $value, time()+10);  /* expire in 1 hour */
//  setcookie("TestCookie", $value, time()+10, 1);
 ?>