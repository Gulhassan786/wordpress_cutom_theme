// Register Custom Post Type MyCustomPost
function create_mycustompost_cpt() {

	$labels = array(
		'name' => _x( 'MyCustomPost', 'Post Type General Name', 'textdomain' ),
		'singular_name' => _x( 'MyCustomPost', 'Post Type Singular Name', 'textdomain' ),
		'menu_name' => _x( 'MyCustomPost', 'Admin Menu text', 'textdomain' ),
		'name_admin_bar' => _x( 'MyCustomPost', 'Add New on Toolbar', 'textdomain' ),
		'archives' => __( 'MyCustomPost Archives', 'textdomain' ),
		'attributes' => __( 'MyCustomPost Attributes', 'textdomain' ),
		'parent_item_colon' => __( 'Parent MyCustomPost:', 'textdomain' ),
		'all_items' => __( 'All MyCustomPost', 'textdomain' ),
		'add_new_item' => __( 'Add New MyCustomPost', 'textdomain' ),
		'add_new' => __( 'Add New', 'textdomain' ),
		'new_item' => __( 'New MyCustomPost', 'textdomain' ),
		'edit_item' => __( 'Edit MyCustomPost', 'textdomain' ),
		'update_item' => __( 'Update MyCustomPost', 'textdomain' ),
		'view_item' => __( 'View MyCustomPost', 'textdomain' ),
		'view_items' => __( 'View MyCustomPost', 'textdomain' ),
		'search_items' => __( 'Search MyCustomPost', 'textdomain' ),
		'not_found' => __( 'Not found', 'textdomain' ),
		'not_found_in_trash' => __( 'Not found in Trash', 'textdomain' ),
		'featured_image' => __( 'Featured Image', 'textdomain' ),
		'set_featured_image' => __( 'Set featured image', 'textdomain' ),
		'remove_featured_image' => __( 'Remove featured image', 'textdomain' ),
		'use_featured_image' => __( 'Use as featured image', 'textdomain' ),
		'insert_into_item' => __( 'Insert into MyCustomPost', 'textdomain' ),
		'uploaded_to_this_item' => __( 'Uploaded to this MyCustomPost', 'textdomain' ),
		'items_list' => __( 'MyCustomPost list', 'textdomain' ),
		'items_list_navigation' => __( 'MyCustomPost list navigation', 'textdomain' ),
		'filter_items_list' => __( 'Filter MyCustomPost list', 'textdomain' ),
	);
	$args = array(
		'label' => __( 'MyCustomPost', 'textdomain' ),
		'description' => __( 'I am checking the working of My Custom Post', 'textdomain' ),
		'labels' => $labels,
		'menu_icon' => 'dashicons-admin-comments',
		'supports' => array('title', 'editor', 'excerpt', 'thumbnail', 'comments', 'post-formats'),
		'taxonomies' => array(),
		'public' => true,
		'show_ui' => true,
		'show_in_menu' => true,
		'menu_position' => 5,
		'show_in_admin_bar' => true,
		'show_in_nav_menus' => true,
		'can_export' => true,
		'has_archive' => true,
		'hierarchical' => false,
		'exclude_from_search' => false,
		'show_in_rest' => true,
		'publicly_queryable' => true,
		'capability_type' => 'post',
	);
	register_post_type( 'mycustompost', $args );

}
add_action( 'init', 'create_mycustompost_cpt', 0 );