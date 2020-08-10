<?php
/**
 * Dynalab functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package Dynalab
 */


if( !class_exists("cmb2") ){
    require_once( dirname(__FILE__)."/cmb2/init.php" );
    
}
require_once ( get_template_directory() . '/cmb2/cmb2.php' );
require_once ( get_template_directory() . '/inc/cmb2.php' );


if ( ! defined( '_S_VERSION' ) ) {
	// Replace the version number of the theme on each release.
	define( '_S_VERSION', '1.0.0' );
}

if ( ! function_exists( 'dynalab_setup' ) ) :
	/**
	 * Sets up theme defaults and registers support for various WordPress features.
	 *
	 * Note that this function is hooked into the after_setup_theme hook, which
	 * runs before the init hook. The init hook is too late for some features, such
	 * as indicating support for post thumbnails.
	 */
	function dynalab_setup() {
		/*
		 * Make theme available for translation.
		 * Translations can be filed in the /languages/ directory.
		 * If you're building a theme based on Dynalab, use a find and replace
		 * to change 'dynalab' to the name of your theme in all the template files.
		 */
		load_theme_textdomain( 'dynalab', get_template_directory() . '/languages' );

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
				'menu-1' => esc_html__( 'Primary', 'dynalab' ),
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
				'dynalab_custom_background_args',
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
add_action( 'after_setup_theme', 'dynalab_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function dynalab_content_width() {
	// This variable is intended to be overruled from themes.
	// Open WPCS issue: {@link https://github.com/WordPress-Coding-Standards/WordPress-Coding-Standards/issues/1043}.
	// phpcs:ignore WordPress.NamingConventions.PrefixAllGlobals.NonPrefixedVariableFound
	$GLOBALS['content_width'] = apply_filters( 'dynalab_content_width', 640 );
}
add_action( 'after_setup_theme', 'dynalab_content_width', 0 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function dynalab_widgets_init() {
	register_sidebar(
		array(
			'name'          => esc_html__( 'Sidebar', 'dynalab' ),
			'id'            => 'sidebar-1',
			'description'   => esc_html__( 'Add widgets here.', 'dynalab' ),
			'before_widget' => '<section id="%1$s" class="widget %2$s">',
			'after_widget'  => '</section>',
			'before_title'  => '<h2 class="widget-title">',
			'after_title'   => '</h2>',
		)
	);
}
add_action( 'widgets_init', 'dynalab_widgets_init' );

/**
 * Enqueue scripts and styles.
 */
function dynalab_scripts() {


	
	wp_enqueue_style('menu-responsive','https://cdn.jsdelivr.net/npm/pushbar.js@1.0.0/src/pushbar.min.css', array(),'1.0.0','all');  
	wp_enqueue_style('materialize','https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css', array(),'1.0.0'.'all');
	wp_enqueue_style('slider-css', 'https://unpkg.com/swiper/swiper-bundle.min.css', array(), '6.0.4', 'all');
	wp_enqueue_style( 'dynalab-style', get_stylesheet_uri(), array(), _S_VERSION );
	wp_style_add_data( 'dynalab-style', 'rtl', 'replace' );

	wp_enqueue_script( 'dynalab-navigation', get_template_directory_uri() . '/js/navigation.js', array(), _S_VERSION, true );
	wp_enqueue_script( 'dynalab-navigation', get_template_directory_uri() . '/js/script-principal.js', array(), '1.0.0', true );
	wp_enqueue_script('slider-js','https://unpkg.com/swiper/swiper-bundle.min.js', array(),'1.0.0', true);
	wp_enqueue_script('menu-navegacion','https://cdn.jsdelivr.net/npm/pushbar.js@1.0.0/src/pushbar.min.js', array(),'1.0.0', true);
	wp_enqueue_script( 'script', get_template_directory_uri().'/script.js', array('slider-js'), '1.0.0', true );

	wp_enqueue_script('jquery');
	wp_enqueue_script('materialize-js','https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js', array(),'1.0.0', true);
	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'dynalab_scripts' );

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



function mostrar_post_type($query){
	//que no se ala pantalla de admin y que sea el query principal
	if(!is_admin() && $query->is_main_query){
		// que sea el homepage
		if(is_home()){
			$query->set('post_type', array('post', 'productos'));
		}
	}
}
add_action('pre_get_posts', 'mostrar_post_type' );



function filtrar_productos($busqueda)
{
	$termino_actual = get_queried_object();
	//print_r($termino_actual);
	$taxonomia = get_taxonomy($termino_actual->taxonomy);
	$slug_actual =$termino_actual->slug;
	$a;
	if($busqueda == '')
	{
		$a = 'OR';
	}else{
		$a ='AND';
	}
   

   /*
			 $terms = get_terms(array(
				 'taxonomy' => 'categoria-producto',
				 'hide_empty' =>true,
				 ));
			 echo "<pre>";	 
			   print_r($terms);
			 echo "</pre>";

			 */
				
	$args = array(
		'posts_per_page' => -1,
		'post_type' => 'productos',
		'order' => 'rand',
		'tax_query' => array(
			'relation' => $a,
			[
				'taxonomy'         => 'tipo-Producto',
				'field'            => 'slug',
				'terms'            => $slug_actual,
			],
			[
				'taxonomy'         => 'categoria-producto',
				'field'            => 'slug',
				'terms'            => $busqueda,
			],

		),
	  );
	  $farmaco = new WP_Query($args);
	  if($farmaco->have_posts()) {
		echo '<div id="'.$busqueda.'" class="card_ui">';
			while($farmaco->have_posts()): $farmaco->the_post();?>
			            <div class="face face1">
							<div class="content">
                                  <?php echo get_the_post_thumbnail( $post->ID); ?>
					             
							</div>
						</div>
						<div class="face face2">
							<div class="content">	
							    <h3>
							      	<?php the_title(); ?>
							    </h3>
							    <p>
							    	<?php the_excerpt(); ?>
							    </p>
							    <a href="<?php echo get_the_permalink($post->ID)?>">
							    	<p>leer mas</p>	
							    </a>
							</div>
			            </div>
			<?php
			endwhile; wp_reset_postdata();
			?>
		</div>
		<?php 
	  }
}