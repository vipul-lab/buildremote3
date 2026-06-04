<?php


/* =========================
   LOAD JS IN ADMIN (IMPORTANT FIX)
========================= */
function my_acf_admin_scripts($hook) {

    // Load only in ACF pages (optional but better)
    if (
        strpos($hook, 'acf') === false &&
        strpos($hook, 'post') === false
    ) {
        return;
    }

    wp_enqueue_script(
        'acf-layout-previews',
        get_stylesheet_directory_uri() . '/assets/js/acf-preview.js',
        array('jquery'),
        '1.0',
        true
    );

    wp_localize_script('acf-layout-previews', 'acfPreview', array(
        'themeUrl' => get_stylesheet_directory_uri()
    ));
}
add_action('admin_enqueue_scripts', 'my_acf_admin_scripts');


/* =========================
   CSS FOR FIELD GROUP
========================= */
add_action('admin_head', function(){
    echo '<style>
        .acf-fc-popup {
            max-height: 400px;
            overflow-y: auto;
            padding:8px;
        }
        .acf-field-setting-fc_layout {
            padding-bottom: 15px;
        }
        .acf-fc-popup a{
            padding: 10px;
            border-radius: 6px;
        }
        .acf-fc-popup a:hover{
            background:#efefef;
        }
        .layout-preview-img {
            display: block;
            margin: 8px;
            max-width: 250px;
            border: 1px solid #ddd;
            border-radius: 6px;
        }
    </style>';
});


/* =========================
   LAYOUT TITLE IMAGE (EDITOR VIEW)
========================= */
add_filter('acf/fields/flexible_content/layout_title', 'acf_layout_preview_image', 10, 4);

function acf_layout_preview_image($title, $field, $layout, $i) {

    $image_path = get_stylesheet_directory() . '/acf-layout-previews/' . $layout['name'] . '.png';
    $image_url  = get_stylesheet_directory_uri() . '/acf-layout-previews/' . $layout['name'] . '.png';

    if (file_exists($image_path)) {
        $title .= '<div style="margin-top:10px;">
                    <img src="'.$image_url.'" style="max-width:220px;border:1px solid #ddd;border-radius:6px;" />
                   </div>';
    }

    return $title;
}





function builremote_child_enqueue_styles() {

    wp_enqueue_style(
        'style',
        get_stylesheet_directory_uri() . '/style.css',
        array(),
        filemtime( get_stylesheet_directory() . '/style.css' ),
        'all'
    );

    wp_enqueue_style(
        'fontawesome',
        get_stylesheet_directory_uri() . '/assets/css/fontawesome.css',
        array(),
        filemtime( get_stylesheet_directory() . '/assets/css/fontawesome.css' ),
        'all'
    );

    wp_enqueue_style(
        'ktui',
        get_stylesheet_directory_uri() . '/assets/css/ktui.css',
        array(),
        filemtime( get_stylesheet_directory() . '/assets/css/ktui.css' ),
        'all'
    );

    wp_enqueue_style(
        'swiper-carousel',
        get_stylesheet_directory_uri() . '/assets/css/swiper-bundle.min.css',
        array(),
        filemtime( get_stylesheet_directory() . '/assets/css/swiper-bundle.min.css' ),
        'all'
    );

    wp_enqueue_style(
        'mainstyle',
        get_stylesheet_directory_uri() . '/assets/css/mainstyle.css',
        array(),
        filemtime( get_stylesheet_directory() . '/assets/css/mainstyle.css' ),
        'all'
    );

}

add_action('wp_enqueue_scripts', 'builremote_child_enqueue_styles');


//SVG file type upload function start
add_filter( 'wp_check_filetype_and_ext', function ( $data, $file, $filename, $mimes ) {

    global $wp_version;
    if ( $wp_version !== '4.7.1' ) {
        return $data;
    }

    $filetype = wp_check_filetype( $filename, $mimes );

    return [
        'ext' => $filetype[ 'ext' ],
        'type' => $filetype[ 'type' ],
        'proper_filename' => $data[ 'proper_filename' ]
    ];

}, 10, 4 );

function cc_mime_types( $mimes ) {
    $mimes[ 'svg' ] = 'image/svg+xml';
    return $mimes;
}
add_filter( 'upload_mimes', 'cc_mime_types' );

function fix_svg() {
    echo '<style type="text/css">
          .attachment-266x266, .thumbnail img {
               width: 100% !important;
               height: auto !important;
          }
          </style>';
}
add_action( 'admin_head', 'fix_svg' );

function load_javascript() {

    wp_enqueue_script(
        'mainjquery',
        get_stylesheet_directory_uri() . '/assets/js/jquery-3.6.0.min.js',
        array('jquery'),
        filemtime( get_stylesheet_directory() . '/assets/js/jquery-3.6.0.min.js' ),
        true
    );

    wp_enqueue_script(
        'magnific-popup',
        get_stylesheet_directory_uri() . '/assets/js/jquery.magnific-popup.min.js',
        array('jquery'),
        filemtime( get_stylesheet_directory() . '/assets/js/jquery.magnific-popup.min.js' ),
        true
    );

    wp_enqueue_script(
        'ktui',
        get_stylesheet_directory_uri() . '/assets/js/ktui.min.js',
        array('jquery'),
        filemtime( get_stylesheet_directory() . '/assets/js/ktui.min.js' ),
        true
    );

    wp_enqueue_script(
        'swiper-carousel',
        get_stylesheet_directory_uri() . '/assets/js/swiper-bundle.min.js',
        array('jquery'),
        filemtime( get_stylesheet_directory() . '/assets/js/swiper-bundle.min.js' ),
        true
    );

    // wp_enqueue_script(
    //     'animation',
    //     get_stylesheet_directory_uri() . '/assets/js/animation.js',
    //     array('jquery'),
    //     filemtime( get_stylesheet_directory() . '/assets/js/animation.js' ),
    //     true
    // );
}

add_action('wp_enqueue_scripts', 'load_javascript');



//Featured Images & Post Thumbnails
add_theme_support( 'post-thumbnails' );


function register_custom_menus() {
  register_nav_menus(array(
    'third'     => 'Third Menu', // 👈 New menu
  ));
}
add_action('after_setup_theme', 'register_custom_menus');



// Client Wins menu fucntion start
function my_custom_page_type() {
    $labels = array(
        'name' => _x( 'Client Wins', 'post type general name', 'textdomain' ),
        'singular_name' => _x( 'Client Wins', 'post type singular name', 'textdomain' ),
        'menu_name' => _x( 'Client Wins', 'admin menu', 'textdomain' ),
        'name_admin_bar' => _x( 'Client Wins', 'add new on admin bar', 'textdomain' ),
        'add_new' => _x( 'Add New', 'service', 'textdomain' ),
        'add_new_item' => __( 'Add New Client Wins', 'textdomain' ),
        'new_item' => __( 'New Client Wins', 'textdomain' ),
        'edit_item' => __( 'Edit Client Wins', 'textdomain' ),
        'view_item' => __( 'View Client Wins', 'textdomain' ),
        'all_items' => __( 'All Client Wins', 'textdomain' ),
        'search_items' => __( 'Search Client Wins', 'textdomain' ),
        'parent_item_colon' => __( 'Parent Client Wins:', 'textdomain' ),
        'not_found' => __( 'No Client Wins found.', 'textdomain' ),
        'not_found_in_trash' => __( 'No Client Wins found in Trash.', 'textdomain' ),
    );

    $args = array(
        'labels' => $labels,
        'public' => true,
        'publicly_queryable' => true,
        'show_ui' => true,
        'show_in_menu' => true,
        'query_var' => true,
        'rewrite' => array( 'slug' => 'clientwins' ),
        'capability_type' => 'page',
        'hierarchical' => true,
        'menu_position' => 3,
        'menu_icon' => 'dashicons-category',
        'supports' => array( 'title', 'editor', 'author', 'thumbnail', 'excerpt', 'page-attributes' ),
    );

    register_post_type( 'clientwins', $args );
}
add_action( 'init', 'my_custom_page_type' );

function add_clientwins_meta_box() {
    add_meta_box(
        'clientwins_meta_box', // Meta box ID
        'Additional Information', // Meta box title
        'clientwins_meta_box_callback', // Callback function
        'clientwins', // Post type
        'normal',
        'high'
    );
}
add_action( 'add_meta_boxes', 'add_clientwins_meta_box' );

function clientwins_meta_box_callback( $post ) {
    // Add a nonce field so we can check for it later.
    wp_nonce_field( 'save_clientwins_meta_box_data', 'clientwins_meta_box_nonce' );

    // Retrieve an existing value from the database.
    $value = get_post_meta( $post->ID, '_clientwins_meta_value_key', true );

    // Display the form, using the current value.
    echo '<label for="clientwins_meta_field">My Meta Field</label>';
    echo '<input type="text" id="clientwins_meta_field" name="clientwins_meta_field" value="' . esc_attr( $value ) . '" size="25" />';
}

function save_clientwins_meta_box_data( $post_id ) {
    // Check if our nonce is set.
    if ( !isset( $_POST[ 'clientwins_meta_box_nonce' ] ) ) {
        return;
    }
    // Verify that the nonce is valid.
    if ( !wp_verify_nonce( $_POST[ 'clientwins_meta_box_nonce' ], 'save_clientwins_meta_box_data' ) ) {
        return;
    }
    // If this is an autosave, our form has not been submitted, so we don’t want to do anything.
    if ( defined( 'DOING_AUTOSAVE' ) && DOING_AUTOSAVE ) {
        return;
    }
    // Check the user's permissions.
    if ( !current_user_can( 'edit_post', $post_id ) ) {
        return;
    }

    if ( isset( $_POST[ 'clientwins_meta_field' ] ) ) {
        $my_data = sanitize_text_field( $_POST[ 'clientwins_meta_field' ] );
        update_post_meta( $post_id, '_clientwins_meta_value_key', $my_data );
    }
}
add_action( 'save_post', 'save_clientwins_meta_box_data' );

function get_adjacent_post_by_post_type($post_type, $previous = true) {
    global $post, $wpdb;
    $operator = $previous ? '<' : '>';
    $order = $previous ? 'DESC' : 'ASC';
    $query = $wpdb->prepare("SELECT ID FROM $wpdb->posts WHERE post_date $operator %s AND post_type = %s AND post_status = 'publish' ORDER BY post_date $order LIMIT 1 ", $post->post_date, $post_type );

    $adjacent_post_id = $wpdb->get_var($query);
    if ($adjacent_post_id) {
        return get_post($adjacent_post_id);
    }
    return null;
}


function create_services_post_type() {
    register_post_type('services',
        array(
            'labels' => array(
                'name' => __('Services'),
                'singular_name' => __('Service')
            ),
            'public' => true,
            'show_ui' => true,
            'has_archive' => true,
            'menu_icon' => 'dashicons-admin-tools',
            'supports' => array('title', 'editor', 'thumbnail'),
        )
    );
}
add_action('init', 'create_services_post_type');

function create_caseStudy_post_type() {
    register_post_type('case-study',
        array(
            'labels' => array(
                'name' => __('Case Study'),
                'singular_name' => __('Case Study')
            ),
            'public' => true,
            'show_ui' => true,
            'show_in_menu' => true,
            'show_in_rest' => true,
            'has_archive' => true,
            'rewrite' => array('slug' => 'case-study'),
            'menu_icon' => 'dashicons-admin-tools',
            'supports' => array('title', 'editor', 'thumbnail'),
        )
    );
}
add_action('init', 'create_caseStudy_post_type');


