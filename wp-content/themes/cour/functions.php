<?php

// Chargement des différents scripts et css
add_action('wp_enqueue_scripts','chargement_css_js');
add_action('init','load_menus');
add_action( 'init', 'Artiste', 0 );
add_action( 'init', 'Concerts', 0 );
add_action( 'init', 'custom_taxonomy', 0 );
add_theme_support( 'post-thumbnails' ); 


// Function
function load_menus() {
	register_nav_menus([
		'header_theme' => 'Menus haut du theme',
		'footer_theme' => 'Menus bas du theme'
	]);
}

function chargement_css_js(){
    wp_enqueue_style('bootstrap_css',get_template_directory_uri().'/css/bootstrap.min.css');
    wp_enqueue_script('jquery',get_template_directory_uri().'/js/jquery.min.js',null,null,true);
    wp_enqueue_script('bootstrap_js',get_template_directory_uri().'/js/bootstrap.min.js',['jquery'],null,true);
    wp_enqueue_style('style',get_stylesheet_uri());
}

// Register Custom Taxonomy
function custom_taxonomy() {

	$labels = array(
		'name'                       => _x( 'artistes_concerts', 'Taxonomy General Name', 'text_domain' ),
		'singular_name'              => _x( 'artiste_concert', 'Taxonomy Singular Name', 'text_domain' ),
		'menu_name'                  => __( 'artiste_concert', 'text_domain' ),
		'all_items'                  => __( 'artiste_concert Items', 'text_domain' ),
		'parent_item'                => __( 'artiste_concert Item', 'text_domain' ),
		'parent_item_colon'          => __( 'artiste_concert Item:', 'text_domain' ),
		'new_item_name'              => __( 'artiste_concert Name', 'text_domain' ),
		'add_new_item'               => __( 'Add New artiste_concert', 'text_domain' ),
		'edit_item'                  => __( 'Edit artiste_concert', 'text_domain' ),
		'update_item'                => __( 'Update artiste_concert', 'text_domain' ),
		'view_item'                  => __( 'View artiste_concert', 'text_domain' ),
		'separate_items_with_commas' => __( 'Separate artiste_concert with commas', 'text_domain' ),
		'add_or_remove_items'        => __( 'Add or remove artiste_concert', 'text_domain' ),
		'choose_from_most_used'      => __( 'Choose from the most used', 'text_domain' ),
		'popular_items'              => __( 'Popular artistes_concerts', 'text_domain' ),
		'search_items'               => __( 'Search artiste_concert', 'text_domain' ),
		'not_found'                  => __( 'Not Found', 'text_domain' ),
		'no_terms'                   => __( 'No artiste_concert', 'text_domain' ),
		'items_list'                 => __( 'artistes_concerts list', 'text_domain' ),
		'items_list_navigation'      => __( 'Items list navigation', 'text_domain' ),
    );
    
	$args = array(
		'labels'                     => $labels,
		'hierarchical'               => false,
		'public'                     => true,
		'show_ui'                    => true,
		'show_admin_column'          => true,
		'show_in_nav_menus'          => true,
		'show_tagcloud'              => true,
		'show_in_rest'               => true,
	);
	register_taxonomy( 'artiste_concert', array( 'style' ), $args );

}


if ( ! function_exists('Artiste') ) {

// Register Custom Post Type
function Artiste() {

	$labels = array(
		'name'                  => _x( 'Artistes', 'Post Type General Name', 'Artiste' ),
		'singular_name'         => _x( 'Artiste', 'Post Type Singular Name', 'Artiste' ),
		'menu_name'             => __( 'Artiste', 'Artiste' ),
		'name_admin_bar'        => __( 'Artiste', 'Artiste' ),
		'archives'              => __( 'Archive artistes', 'Artiste' ),
		'attributes'            => __( 'Artiste arrtibuts', 'Artiste' ),
		'parent_item_colon'     => __( 'Parent Item:', 'Artiste' ),
		'all_items'             => __( 'All Items', 'Artiste' ),
		'add_new_item'          => __( 'Ajout nouvel artistes', 'Artiste' ),
		'add_new'               => __( 'Ajout d\'artiste', 'Artiste' ),
		'new_item'              => __( 'nouvel artiste', 'Artiste' ),
		'edit_item'             => __( 'modifier artiste', 'Artiste' ),
		'update_item'           => __( 'maj artiste', 'Artiste' ),
		'view_item'             => __( 'regarder artiste', 'Artiste' ),
		'view_items'            => __( 'regarder artistes', 'Artiste' ),
		'search_items'          => __( 'recherche artiste', 'Artiste' ),
		'not_found'             => __( 'pas trouver', 'Artiste' ),
		'not_found_in_trash'    => __( 'Not found in Trash', 'Artiste' ),
		'featured_image'        => __( 'Featured Image', 'Artiste' ),
		'set_featured_image'    => __( 'Set featured image', 'Artiste' ),
		'remove_featured_image' => __( 'Remove featured image', 'Artiste' ),
		'use_featured_image'    => __( 'Use as featured image', 'Artiste' ),
		'insert_into_item'      => __( 'Insert into item', 'Artiste' ),
		'uploaded_to_this_item' => __( 'Uploaded to this item', 'Artiste' ),
		'items_list'            => __( 'Items list', 'Artiste' ),
		'items_list_navigation' => __( 'Items list navigation', 'Artiste' ),
		'filter_items_list'     => __( 'Filter items list', 'Artiste' ),
	);
	$args = array(
		'label'                 => __( 'Artiste', 'Artiste' ),
		'description'           => __( 'Article d\'artiste', 'Artiste' ),
		'labels'                => $labels,
		'supports'              => array( 'title', 'editor', 'thumbnail' ),
		'taxonomies'            => array( 'category', 'post_tag' ),
		'hierarchical'          => false,
		'public'                => true,
		'show_ui'               => true,
		'show_in_menu'          => true,
		'menu_position'         => 5,
		'menu_icon'             => 'dashicons-playlist-audio',
		'show_in_admin_bar'     => true,
		'show_in_nav_menus'     => true,
		'can_export'            => true,
		'has_archive'           => true,
		'exclude_from_search'   => false,
		'publicly_queryable'    => true,
		'capability_type'       => 'page',
		'show_in_rest'          => true,
	);
	register_post_type( 'artiste', $args );

}

}
if ( ! function_exists('Concerts') ) {

// Register Custom Post Type
function Concerts() {

	$labels = array(
		'name'                  => _x( 'concerts', 'Post Type General Name', 'Concert' ),
		'singular_name'         => _x( 'concert', 'Post Type Singular Name', 'Concert' ),
		'menu_name'             => __( 'concert', 'Concert' ),
		'name_admin_bar'        => __( 'copncert', 'Concert' ),
		'archives'              => __( 'Archive concerts', 'Concert' ),
		'attributes'            => __( 'Concert arrtibuts', 'Concert' ),
		'parent_item_colon'     => __( 'Parent Item:', 'Concert' ),
		'all_items'             => __( 'All Items', 'Concert' ),
		'add_new_item'          => __( 'Ajout nouvel concerts', 'Concert' ),
		'add_new'               => __( 'Ajout concert', 'Concert' ),
		'new_item'              => __( 'nouveau concert', 'Concert' ),
		'edit_item'             => __( 'modifier concert', 'Concert' ),
		'update_item'           => __( 'maj concert', 'Concert' ),
		'view_item'             => __( 'regarder concert', 'Concert' ),
		'view_items'            => __( 'regarder concerts', 'Concert' ),
		'search_items'          => __( 'recherche concert', 'Concert' ),
		'not_found'             => __( 'pas trouver', 'Concert' ),
		'not_found_in_trash'    => __( 'Not found in Trash', 'Concert' ),
		'featured_image'        => __( 'Featured Image', 'Concert' ),
		'set_featured_image'    => __( 'Set featured image', 'Concert' ),
		'remove_featured_image' => __( 'Remove featured image', 'Concert' ),
		'use_featured_image'    => __( 'Use as featured image', 'Concert' ),
		'insert_into_item'      => __( 'Insert into item', 'Concert' ),
		'uploaded_to_this_item' => __( 'Uploaded to this item', 'Concert' ),
		'items_list'            => __( 'Items list', 'Concert' ),
		'items_list_navigation' => __( 'Items list navigation', 'Concert' ),
		'filter_items_list'     => __( 'Filter items list', 'Concert' ),
	);
	$args = array(
		'label'                 => __( 'concert', 'Concert' ),
		'description'           => __( 'concert', 'Concert' ),
		'labels'                => $labels,
		'supports'              => array( 'title', 'editor', 'thumbnail' ),
		'taxonomies'            => array( 'category', 'post_tag' ),
		'hierarchical'          => false,
		'public'                => true,
		'show_ui'               => true,
		'show_in_menu'          => true,
		'menu_position'         => 5,
		'menu_icon'             => 'dashicons-playlist-audio',
		'show_in_admin_bar'     => true,
		'show_in_nav_menus'     => true,
		'can_export'            => true,
		'has_archive'           => true,
		'exclude_from_search'   => false,
		'publicly_queryable'    => true,
		'capability_type'       => 'page',
		'show_in_rest'          => true,
	);
	register_post_type( 'concert', $args );

}

}

if ( function_exists('register_sidebar') )
    register_sidebar();


add_action( 'widgets_init', 'appel_widget_licence' );

function appel_widget_licence(){
    register_widget( 'licence_widget' );
}

class licence_widget extends WP_Widget {
	function __construct() {
        parent::__construct(
            // widget ID
            'licence_widget',
            // widget name
            'Widget des licences',
            // widget description
            array( 'description' => 'Description widget licence')
        );
    }

    public function widget( $args, $instance ) {
       $title = apply_filters( 'widget_title', $instance['title'] );
        // before and after widget arguments are defined by themes
        echo $args['before_widget'];
        if ( ! empty( $title ) )
        echo $args['before_title'] . $title . $args['after_title'];
        // This is where you run the code and display the output
        echo __( 'Hello, World!', 'wpb_widget_domain' );
        echo $args['after_widget'];
    }

    public function form( $instance ) { 
        if ( isset( $instance[ 'title' ] ) ) {
            $title = $instance[ 'title' ];
            }
            else {
            $title = __( 'New title', 'wpb_widget_domain' );
            }
            // Widget admin form
            ?>
            <p>
            <label for="<?php echo $this->get_field_id( 'title' ); ?>"><?php _e( 'Title:' ); ?></label> 
            <input class="widefat" id="<?php echo $this->get_field_id( 'title' ); ?>" name="<?php echo $this->get_field_name( 'title' ); ?>" type="text" value="<?php echo esc_attr( $title ); ?>" />
            </p>
    <?php 
    }
  	public function update( $new_instance, $old_instance ) {
        $instance = array();
        if(!empty($new_instance['title'])){
            $instance['title'] = $new_instance['title'];
        }else{
            $instance['title'] = '';
        }
        return $instance;
    }
}

function my_custom_sidebar() {
    register_sidebar(
        array (
            'name' => __( 'Custom', 'your-theme-domain' ),
            'id' => 'custom-side-bar',
            'description' => __( 'Custom Sidebar', 'your-theme-domain' ),
            'before_widget' => '<div class="widget-content">',
            'after_widget' => "</div>",
            'before_title' => '<h3 class="widget-title">',
            'after_title' => '</h3>',
        )
    );
}
add_action( 'widgets_init', 'my_custom_sidebar' );

?>