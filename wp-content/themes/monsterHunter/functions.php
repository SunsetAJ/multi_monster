<?php

	// Add Styling
	function wp_enqueue_styles(){
		wp_enqueue_style('mainStyle', get_template_directory_uri().'/style.css');
	}
	add_action('wp_enqueue_scripts', 'wp_enqueue_styles');

	// Register Question Post Type
	function question_post_type() {

		$labels = array(
			'name'                  => _x( 'Questions', 'Post Type General Name', 'text_domain' ),
			'singular_name'         => _x( 'Question', 'Post Type Singular Name', 'text_domain' ),
			'menu_name'             => __( 'Questions', 'text_domain' ),
			'name_admin_bar'        => __( 'Question', 'text_domain' ),
			'archives'              => __( 'Question Archives', 'text_domain' ),
			'parent_item_colon'     => __( 'Question Parent Item:', 'text_domain' ),
			'all_items'             => __( 'All Question Items', 'text_domain' ),
			'add_new_item'          => __( 'Add New Question', 'text_domain' ),
			'add_new'               => __( 'Add New', 'text_domain' ),
			'new_item'              => __( 'New Item', 'text_domain' ),
			'edit_item'             => __( 'Edit Item', 'text_domain' ),
			'update_item'           => __( 'Update Item', 'text_domain' ),
			'view_item'             => __( 'View Item', 'text_domain' ),
			'search_items'          => __( 'Search Item', 'text_domain' ),
			'not_found'             => __( 'Not found', 'text_domain' ),
			'not_found_in_trash'    => __( 'Not found in Trash', 'text_domain' ),
			'featured_image'        => __( 'Featured Image', 'text_domain' ),
			'set_featured_image'    => __( 'Set featured image', 'text_domain' ),
			'remove_featured_image' => __( 'Remove featured image', 'text_domain' ),
			'use_featured_image'    => __( 'Use as featured image', 'text_domain' ),
			'insert_into_item'      => __( 'Insert into item', 'text_domain' ),
			'uploaded_to_this_item' => __( 'Uploaded to this item', 'text_domain' ),
			'items_list'            => __( 'Items list', 'text_domain' ),
			'items_list_navigation' => __( 'Items list navigation', 'text_domain' ),
			'filter_items_list'     => __( 'Filter items list', 'text_domain' ),
		);
		$args = array(
			'label'                 => __( 'Question', 'text_domain' ),
			'labels'                => $labels,
			'supports'              => array( 'title', ),
			'hierarchical'          => false,
			'public'                => true,
			'show_ui'               => true,
			'show_in_menu'          => true,
			'menu_position'         => 5,
			'menu_icon'             => 'dashicons-list-view',
			'show_in_admin_bar'     => true,
			'show_in_nav_menus'     => true,
			'can_export'            => true,
			'has_archive'           => true,
			'exclude_from_search'   => false,
			'publicly_queryable'    => true,
			'capability_type'       => 'page',
		);
		register_post_type( 'question', $args );

	}
	add_action( 'init', 'question_post_type', 0 );

	// Register Game Post Type
	function game_post_type() {

		$labels = array(
			'name'                  => _x( 'Games', 'Post Type General Name', 'text_domain' ),
			'singular_name'         => _x( 'Game', 'Post Type Singular Name', 'text_domain' ),
			'menu_name'             => __( 'Games', 'text_domain' ),
			'name_admin_bar'        => __( 'Game', 'text_domain' ),
			'archives'              => __( 'Game Archives', 'text_domain' ),
			'parent_item_colon'     => __( 'Parent Game:', 'text_domain' ),
			'all_items'             => __( 'All Games', 'text_domain' ),
			'add_new_item'          => __( 'Add New Game', 'text_domain' ),
			'add_new'               => __( 'Add New', 'text_domain' ),
			'new_item'              => __( 'New Game', 'text_domain' ),
			'edit_item'             => __( 'Edit Game', 'text_domain' ),
			'update_item'           => __( 'Update Game', 'text_domain' ),
			'view_item'             => __( 'View Game', 'text_domain' ),
			'search_items'          => __( 'Search Game', 'text_domain' ),
			'not_found'             => __( 'Not found', 'text_domain' ),
			'not_found_in_trash'    => __( 'Not found in Trash', 'text_domain' ),
			'featured_image'        => __( 'Featured Image', 'text_domain' ),
			'set_featured_image'    => __( 'Set featured image', 'text_domain' ),
			'remove_featured_image' => __( 'Remove featured image', 'text_domain' ),
			'use_featured_image'    => __( 'Use as featured image', 'text_domain' ),
			'insert_into_item'      => __( 'Insert into Game', 'text_domain' ),
			'uploaded_to_this_item' => __( 'Uploaded to this Game', 'text_domain' ),
			'items_list'            => __( 'Games list', 'text_domain' ),
			'items_list_navigation' => __( 'Games list navigation', 'text_domain' ),
			'filter_items_list'     => __( 'Filter Games list', 'text_domain' ),
		);
		$args = array(
			'label'                 => __( 'Game', 'text_domain' ),
			'description'           => __( 'Active Games', 'text_domain' ),
			'labels'                => $labels,
			'supports'              => array( 'title', ),
			'hierarchical'          => false,
			'public'                => true,
			'show_ui'               => true,
			'show_in_menu'          => true,
			'menu_position'         => 5,
			'menu_icon'             => 'dashicons-welcome-view-site',
			'show_in_admin_bar'     => true,
			'show_in_nav_menus'     => false,
			'publicly_queryable'    => true,
			'capability_type'       => 'page',
		);
		register_post_type( 'game', $args );

	}
	add_action( 'init', 'game_post_type', 0 );

	function hide_admin(){
		remove_menu_page( 'edit-comments.php' );
		remove_menu_page( 'edit.php' );
	}
	add_action( 'admin_menu', 'hide_admin' );
