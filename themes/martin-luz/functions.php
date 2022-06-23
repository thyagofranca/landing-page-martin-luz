<?php
require_once get_template_directory() . '/inc/customizer.php';
require_once get_template_directory() . '/inc/class-wp-bootstrap-navwalker.php';

function load_styles_scripts() {
	wp_enqueue_style('bootstrap_css', 'https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css', array(), '4.6.1', 'all');
	wp_enqueue_style('font_awesome', 'https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css');
	wp_enqueue_style('slick_css', get_template_directory_uri() . '/lib/slick-carousel/slick/slick.css');
	wp_enqueue_style('slick_theme', get_template_directory_uri() . '/lib/slick-carousel/slick/slick-theme.css');
	wp_enqueue_style('style_css', get_template_directory_uri() . '/assets/css/style.css', array(), '1.0', 'all');

	wp_enqueue_script('popper_js', 'https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js', array(), '', true); 
	wp_enqueue_script('bootstrap_js', 'https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.min.js', array('jquery'), '4.6.1', true);
	wp_enqueue_script( 'slick_js', get_template_directory_uri() . '/lib/slick-carousel/slick/slick.min.js', array(), '', true);
	wp_enqueue_script('carousel_js', get_template_directory_uri() . '/assets/js/carousel.js', array(), '', true);
	wp_enqueue_script('main_js', get_template_directory_uri() . '/assets/js/main.js', array(), '', true);
}
add_action( 'wp_enqueue_scripts', 'load_styles_scripts' );

function martin_support() {
	register_nav_menus(
		array(
			'main-menu' => __( 'Main Menu', 'martin' )
		)
	);

	$args = array( 
		'height'       => 300,
		'width'        => 1920,
		'uploads'      => true
	);
	add_theme_support( 'custom-header', $args );
	add_theme_support( 'post-formats', array( 'aside', 'image' ));
	add_theme_support( 'title-tag' );
	add_theme_support( 'post-thumbnails' );
	add_theme_support( 'custom-logo', array(
		'height' => 150, 
		'width' => 400,
		'flex-height' => true,
		'flex-width'  => true, 
		'header-text' => array( 'site-title', 'site-description' ), 
	));
}
add_action( 'after_setup_theme', 'martin_support', 0 );

function wp_excerpt_length( $length ) {
    return 20;
}
add_filter( 'excerpt_length', 'wp_excerpt_length', 999 );

function wp_excerpt_more($more) {
    return '<a style="display: table-cell;" class="btn btn-primary" href="' . get_permalink($post->ID) . '">Leia mais</a>';
}
add_filter('excerpt_more', 'wp_excerpt_more');

function carousel_animado() {
	$carousel = array(
	    'name'               => _x( 'Carousel', 'post type general name', 'martin' ),
	    'singular_name'      => _x( 'Carousel', 'post type singular name', 'martin' ),
	    'menu_name'          => _x( 'Carousel', 'admin menu', 'martin' ),
	    'add_new'            => _x( 'Adicionar novo Slide', 'martin' ),
	    'add_new_item'       => __( 'Adicionar novo Slide', 'martin' ),
	    'new_item'           => __( 'Novo Slide', 'martin' ),
	    'edit_item'          => __( 'Editar Slides', 'martin' ),
	    'all_items'          => __( 'Todos os Slides', 'martin' ),
	    'view_item'          => __( 'Ver Slides', 'martin' ),
	    'search_items'       => __( 'Pesquisar Novos Slides', 'martin' ),
	    'parent_item_colon'  => __( 'Parent Slides:', 'martin' ),
	    'not_found'          => __( 'Nenhum Slide encontrado.', 'martin' ),
	    'not_found_in_trash' => __( 'Nenhum Slide na Lixeira.', 'martin' )
	);
	$argCarousel = array(
	    'labels'        => $carousel,
	    'description'   => __( 'Field to create new slides' ),
	    'public'        => true,
	    'has_archive'   => true,
	    'menu_position' => 6,
	    'can_export'        => true,
	    'show_in_admin_bar' => true,
	    'show_in_nav_menus' => true,
	    'query_var'         => true,
	    'menu_icon'     => 'dashicons-images-alt2',
	    'supports'      => array('title', 'editor', 'thumbnail', 'custom-fields'),
	    'rewrite'       => array( 'slug' => 'carousel' )
    );
    register_post_type( 'carouselHome', $argCarousel );
}
add_action('init', 'carousel_animado');

function carousel_cpt($attr) {
ob_start();
	get_template_part('template/carousel');
return ob_get_clean();
}
add_shortcode('carousel', 'carousel_cpt');

function martin_sidebars() {
	register_sidebar(
		array(
			'name' => __( 'Footer One', 'martin' ),
			'id' => 'footer-one',
			'description' => __( 'Use this field to add business information', 'martin' ),
			'before_widget' => '<div class="wrapper">',
			'after_widget' => '</div>',
			'before_title' => '<h5 class="sub-title">',
			'after_title' => '</h5>'
		)
	);
	register_sidebar(
		array(
			'name' => __( 'Footer Two', 'martin' ),
			'id' => 'footer-two',
			'description' => __( 'Use this field to add any information you want.', 'martin' ),
			'before_widget' => '<div class="wrapper">',
			'after_widget' => '</div>',
			'before_title' => '<h5 class="sub-title">',
			'after_title' => '</h5>'
		)
	);
	register_sidebar(
		array(
			'name' => __( 'Footer Three', 'martin' ),
			'id' => 'footer-three',
			'description' => __( 'Use this field to add any information you want.', 'martin' ),
			'before_widget' => '<div class="wrapper">',
			'after_widget' => '</div>',
			'before_title' => '<h5 class="sub-title">',
			'after_title' => '</h5>'
		)
	);
}
add_action( 'widgets_init', 'martin_sidebars' );

remove_action('wp_head', 'wp_generator');

function logo_painel_admin() {
 
    if ( has_custom_logo() ) :
 
        $image = wp_get_attachment_image_src( get_theme_mod( 'custom_logo' ), 'full' );
        ?>
        <style type="text/css">
		#login h1 a, .login h1 a {
			background-image: url(<?php echo get_stylesheet_directory_uri(); ?>/assets/images/logo-footer.png);
			background-repeat: no-repeat;
			-webkit-background-size: 130px auto;
			background-size: 130px auto;
    		height: 150px;
   			width: 100%;
		}
	</style>

        <?php
    endif;
}
add_action( 'login_head', 'logo_painel_admin' );

/**
* Função para alterar a URL do WP no painel de login em cima do logo pela URL do seu site
*
* @since 1.0.0
* 
* @param string $url  The default login logo URL.
* @return string $url The amended login logo URL.
**/
function new_wp_login_url() {
    return home_url();
}
add_filter('login_headerurl', 'new_wp_login_url');

function pp_override_mce_options($initArray) {
	$opts = '*[*]';
	$initArray['valid_elements'] = $opts;
	$initArray['extended_valid_elements'] = $opts;
	return $initArray;
	} 
 add_filter('tiny_mce_before_init', 'pp_override_mce_options');

