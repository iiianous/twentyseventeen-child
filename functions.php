<?php

// Scripts and other Styles
function twentyseventeen_child_scripts() {
	wp_enqueue_script('extra js', get_template_directory_uri() . '/assets/js/custom.js');
}
add_action( 'wp_enqueue_scripts', 'twentyseventeen_child_scripts' );


// Register Widgets
function twentyseventeen_child_widgets_init() {
	register_sidebar( array(
		'name'          => __( 'New Sample Widget', 'twentyseventeen' ),
		'id'            => 'sample-widget-1',
		'description'   => __( 'This is just a sample widget', 'twentyseventeen' ),
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget'  => '</aside>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );
}
add_action( 'widgets_init', 'twentyseventeen_child_widgets_init' );


