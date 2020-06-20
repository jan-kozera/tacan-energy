<?php

	if(!defined('THEME_DIR')){
		define('THEME_DIR', get_theme_root().'/'.get_template().'/');
	}
	if(!defined('THEME_URL')){
		define('THEME_URL', WP_CONTENT_URL.'/themes/'.get_template().'/');
	}
	
	function pokaz($tablica){
		echo "<pre>";
			print_r($tablica);
		echo "</pre>";
	}

	require_once('wp_bootstrap_navwalker.php');
	
	function jquery_scripts() {
		wp_enqueue_script( 'jquery' );
	}
	add_action( 'wp_enqueue_scripts', 'jquery_scripts' );

	add_action( 'init', 'my_custom_menus' );
      function my_custom_menus() {
         register_nav_menus(
            array(
      'primary-menu' => __( 'Primary Menu' )
                    )
             );
      }

	add_theme_support('post-thumbnails', array(
		'realizacje'
	));
	
	add_action('init', 'init_posttypes');
	
	function init_posttypes(){
		$news_args = array(
		'labels' => array(
			'name' => 'Realizacje',
			'singular_name' => 'Realizacje',
			'all_items' => 'Wszystkie realizacje',
			'add_new' => 'Dodaj nową pozycję w realizacjach',
			'add_new_item' => 'Dodaj nową pozycję w realizacjach',
			'edit_item' => 'Edytuj pozycję w realizacjach',
			'new_item' => 'Nowa pozycja w realizacjach',
			'view_item' => 'Zobacz pozycję w realizacjach',
			'search_items' => 'Szukaj pozycji w realizacjach',
			'not_found' => 'Nie znaleziono pozycji',
			'not_found_in_trash' => 'Brak pozycji z realizacji w koszu',
			'parent_item_colon' => ''
		),
		'public' => true,
            'publicly_queryable' => true,
            'show_ui' => true, 
            'query_var' => true,
            'rewrite' => true,
            'capability_type' => 'post',
            'hierarchical' => false,
            'menu_position' => 5,
			'taxonomies'  => array( 'category' ),
            'supports' => array(
                'title','editor','author','thumbnail','excerpt','comments','custom-fields', 'post-formats'
            ),
            'has_archive' => true
	);
	
	register_post_type('realizacje', $news_args);
	
	}

	function replace_admin_menu_icons_css() {
        	?>
            <style>
                #adminmenu #menu-posts-realizacje a div.wp-menu-image:before {
					content: '\f481';
				}
            </style>
            <?php
        }
        
    add_action( 'admin_head', 'replace_admin_menu_icons_css' );
	
?>