<?php
@ini_set( 'upload_max_size' , '64M' );
@ini_set( 'post_max_size', '64M');
@ini_set( 'max_execution_time', '300' );
function university_files() {
  
	wp_enqueue_script( 'mainjs', get_template_directory_uri() . '/js/mainjs.js', array ( 'jquery' ), 1.1, true);
	
	wp_enqueue_script('numscroller', get_theme_file_uri('/js/numscroller.js'), NULL, '1.0', true);

    wp_enqueue_style( 'main_styles', get_stylesheet_uri(), NULL, microtime());

    wp_enqueue_style('fontawesome', '//use.fontawesome.com/releases/v5.1.0/css/all.css');
	
	wp_enqueue_style('aos', '//unpkg.com/aos@next/dist/aos.css');

    wp_enqueue_style('bootstrap-style', '//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css');

    wp_enqueue_script( 
    'bootstrap', 
     '//stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js',
     array(), // <-- There we go
     '4.1.1', 
     true
);

    wp_enqueue_script( 
    'popper', 
     '//cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js',
     array(), // <-- There we go
     '1.12.9', 
     true
);

}

add_action('wp_enqueue_scripts', 'university_files');

function replace_jquery() {
    if (!is_admin()) {
        // comment out the next two lines to load the local copy of jQuery
        wp_deregister_script('jquery');
        wp_register_script('jquery', '//ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js', false, '3.3.1');
        wp_enqueue_script('jquery');
    }
}
add_action('init', 'replace_jquery');



function university_features() {
    register_nav_menu('headerMenuLocation', 'Header Menu Location');
    add_theme_support('title-tag');
    add_theme_support('post-thumbnails');
    add_image_size('speakimg', 400, 400, true);
}

add_action('after_setup_theme', 'university_features');





// Featured img requirement
add_action('save_post', 'heap_child_check_thumbnail');
add_action('admin_notices', 'heap_child_thumbnail_error');


function heap_child_check_thumbnail($post_id) {

  // change to any custom post type
  if (get_post_type($post_id) != 'speaker') {
    return;
  }


  if (!has_post_thumbnail($post_id)) {
    // set a transient to show the users an admin message
    set_transient("has_post_thumbnail", "no");
    // unhook this function so it doesn't loop infinitely
    remove_action('save_post', 'heap_child_check_thumbnail');
    // update the post set it to draft
    wp_update_post(array('ID' => $post_id, 'post_status' => 'draft'));
    add_action('save_post', 'heap_child_check_thumbnail');
  }
  else {
    delete_transient("has_post_thumbnail");
  }

}

function heap_child_thumbnail_error() {
  if (get_transient("has_post_thumbnail") == "no") {
    echo "<div id='message' class='error'><p><strong>You must select Featured Image. Your Post is saved but it can not be published.</strong></p></div>";
    delete_transient("has_post_thumbnail");
  }
}

function remove_menus(){
remove_menu_page( 'edit.php' );                   //Posts
remove_menu_page( 'edit-comments.php' );         //Comments
}

add_action( 'admin_menu', 'remove_menus' );



