<?php
/**
 * SETUP
 */

if ( ! function_exists( '_setup' ) ) :

function wp_bootstrap_starter_setup() {

	load_theme_textdomain( 'samdesme', get_template_directory() . '/languages' );

	add_theme_support( 'automatic-feed-links' );

	add_theme_support( 'title-tag' );

	add_theme_support( 'post-thumbnails' );

	register_nav_menus( array(
		'primary' => esc_html__( 'Primary', 'samdesme' ),
	) );

	add_theme_support( 'html5', array(
		'comment-form',
		'comment-list',
		'caption',
	) );

	add_theme_support( 'custom-background', apply_filters( 'wp_bootstrap_starter_custom_background_args', array(
		'default-color' => 'ffffff',
		'default-image' => '',
	) ) );

	add_theme_support( 'customize-selective-refresh-widgets' );

    function wp_boostrap_starter_add_editor_styles() {
        add_editor_style( 'custom-editor-style.css' );
    }
    add_action( 'admin_init', 'wp_boostrap_starter_add_editor_styles' );

}
endif;
add_action( 'after_setup_theme', 'wp_bootstrap_starter_setup' );

/**
 * WIDGETS
 **/

function wp_bootstrap_starter_widgets_init() {
    register_sidebar( array(
        'name'          => esc_html__( 'Sidebar', 'samdesme' ),
        'id'            => 'sidebar-1',
        'description'   => esc_html__( 'Add widgets here.', 'samdesme' ),
        'before_widget' => '<section id="%1$s" class="widget %2$s">',
        'after_widget'  => '</section>',
        'before_title'  => '<h3 class="widget-title">',
        'after_title'   => '</h3>',
    ) );
    register_sidebar( array(
        'name'          => esc_html__( 'Footer 1', 'samdesme' ),
        'id'            => 'footer-1',
        'description'   => esc_html__( 'Add widgets here.', 'samdesme' ),
        'before_widget' => '<section id="%1$s" class="widget %2$s">',
        'after_widget'  => '</section>',
        'before_title'  => '<h3 class="widget-title">',
        'after_title'   => '</h3>',
    ) );
    register_sidebar( array(
        'name'          => esc_html__( 'Footer 2', 'samdesme' ),
        'id'            => 'footer-2',
        'description'   => esc_html__( 'Add widgets here.', 'samdesme' ),
        'before_widget' => '<section id="%1$s" class="widget %2$s">',
        'after_widget'  => '</section>',
        'before_title'  => '<h3 class="widget-title">',
        'after_title'   => '</h3>',
    ) );
    register_sidebar( array(
        'name'          => esc_html__( 'Footer 3', 'samdesme' ),
        'id'            => 'footer-3',
        'description'   => esc_html__( 'Add widgets here.', 'samdesme' ),
        'before_widget' => '<section id="%1$s" class="widget %2$s">',
        'after_widget'  => '</section>',
        'before_title'  => '<h3 class="widget-title">',
        'after_title'   => '</h3>',
    ) );
}
add_action( 'widgets_init', 'wp_bootstrap_starter_widgets_init' );



/**
 * JS & CSS
 */
function wp_bootstrap_starter_scripts() {
	// load bootstrap css
	wp_enqueue_style( 'samdesme-bootstrap-css', get_template_directory_uri() . '/inc/assets/css/bootstrap.min.css' );
    // fontawesome cdn
    wp_enqueue_style( 'wp-bootstrap-pro-fontawesome-cdn', 'https://use.fontawesome.com/releases/v5.1.0/css/all.css' );
	// load bootstrap css
	// load AItheme styles
	// load WP Bootstrap Starter styles
	wp_enqueue_style( 'samdesme-style', get_stylesheet_uri() );
    if(get_theme_mod( 'theme_option_setting' ) && get_theme_mod( 'theme_option_setting' ) !== 'default') {
        wp_enqueue_style( 'samdesme-'.get_theme_mod( 'theme_option_setting' ), get_template_directory_uri() . '/inc/assets/css/presets/theme-option/'.get_theme_mod( 'theme_option_setting' ).'.css', false, '' );
    }
    if(get_theme_mod( 'preset_style_setting' ) === 'poppins-lora') {
        wp_enqueue_style( 'samdesme-poppins-lora-font', 'https://fonts.googleapis.com/css?family=Lora:400,400i,700,700i|Poppins:300,400,500,600,700' );
    }
    if(get_theme_mod( 'preset_style_setting' ) === 'montserrat-merriweather') {
        wp_enqueue_style( 'samdesme-montserrat-merriweather-font', 'https://fonts.googleapis.com/css?family=Merriweather:300,400,400i,700,900|Montserrat:300,400,400i,500,700,800' );
    }
    if(get_theme_mod( 'preset_style_setting' ) === 'poppins-poppins') {
        wp_enqueue_style( 'samdesme-poppins-font', 'https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700' );
    }
    if(get_theme_mod( 'preset_style_setting' ) === 'roboto-roboto') {
        wp_enqueue_style( 'samdesme-roboto-font', 'https://fonts.googleapis.com/css?family=Roboto:300,300i,400,400i,500,500i,700,700i,900,900i' );
    }
    if(get_theme_mod( 'preset_style_setting' ) === 'arbutusslab-opensans') {
        wp_enqueue_style( 'samdesme-arbutusslab-opensans-font', 'https://fonts.googleapis.com/css?family=Arbutus+Slab|Open+Sans:300,300i,400,400i,600,600i,700,800' );
    }
    if(get_theme_mod( 'preset_style_setting' ) === 'oswald-muli') {
        wp_enqueue_style( 'samdesme-oswald-muli-font', 'https://fonts.googleapis.com/css?family=Muli:300,400,600,700,800|Oswald:300,400,500,600,700' );
    }
    if(get_theme_mod( 'preset_style_setting' ) === 'montserrat-opensans') {
        wp_enqueue_style( 'samdesme-montserrat-opensans-font', 'https://fonts.googleapis.com/css?family=Montserrat|Open+Sans:300,300i,400,400i,600,600i,700,800' );
    }
    if(get_theme_mod( 'preset_style_setting' ) === 'robotoslab-roboto') {
        wp_enqueue_style( 'samdesme-robotoslab-roboto', 'https://fonts.googleapis.com/css?family=Roboto+Slab:100,300,400,700|Roboto:300,300i,400,400i,500,700,700i' );
    }
    if(get_theme_mod( 'preset_style_setting' ) && get_theme_mod( 'preset_style_setting' ) !== 'default') {
        wp_enqueue_style( 'samdesme-'.get_theme_mod( 'preset_style_setting' ), get_template_directory_uri() . '/inc/assets/css/presets/typography/'.get_theme_mod( 'preset_style_setting' ).'.css', false, '' );
    }

	wp_enqueue_script('jquery');

    // Internet Explorer HTML5 support
    wp_enqueue_script( 'html5hiv',get_template_directory_uri().'/inc/assets/js/html5.js', array(), '3.7.0', false );
    wp_script_add_data( 'html5hiv', 'conditional', 'lt IE 9' );

	// load bootstrap js
    wp_enqueue_script('samdesme-popper', get_template_directory_uri() . '/inc/assets/js/popper.min.js', array(), '', true );
	wp_enqueue_script('samdesme-bootstrapjs', get_template_directory_uri() . '/inc/assets/js/bootstrap.min.js', array(), '', true );
    wp_enqueue_script('samdesme-themejs', get_template_directory_uri() . '/inc/assets/js/theme-script.min.js', array(), '', true );
	wp_enqueue_script( 'samdesme-skip-link-focus-fix', get_template_directory_uri() . '/inc/assets/js/skip-link-focus-fix.min.js', array(), '20151215', true );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'wp_bootstrap_starter_scripts' );

/**
 * CUSTOM POST TYPES
 */

function recipes_init() {
    $args = array(
        'label' => 'Recipes',
        'public' => true,
        'show_ui' => true,
        'capability_type' => 'post',
        'hierarchical' => false,
        'rewrite' => array('slug' => 'recipes'),
        'query_var' => true,
        'menu_icon' => 'dashicons-book-alt',
        'supports' => array(
            'title',
            'editor',
            'excerpt',
            'trackbacks',
            'custom-fields',
            'comments',
            'revisions',
            'thumbnail',
            'author',
            'page-attributes',)
    );
    register_post_type( 'recipes', $args );
    
}


add_action( 'init', 'recipes_init' );


function events_init() {
    $args = array(
        'label' => 'Events',
        'public' => true,
        'show_ui' => true,
        'capability_type' => 'post',
        'hierarchical' => false,
        'rewrite' => array('slug' => 'events'),
        'query_var' => true,
        'menu_icon' => 'dashicons-calendar-alt',
        'supports' => array(
            'title',
            'editor',
            'excerpt',
            'trackbacks',
            'custom-fields',
            'comments',
            'revisions',
            'thumbnail',
            'author',
            'page-attributes',)
    );
    register_post_type( 'events', $args );
}

add_action( 'init', 'events_init' );


function personal_init() {
    $args = array(
        'label' => 'Personal',
        'public' => true,
        'show_ui' => true,
        'capability_type' => 'post',
        'hierarchical' => false,
        'rewrite' => array('slug' => 'personal'),
        'query_var' => true,
        'menu_icon' => 'dashicons-admin-users',
        'supports' => array(
            'title',
            'editor',
            'excerpt',
            'trackbacks',
            'custom-fields',
            'comments',
            'revisions',
            'thumbnail',
            'author',
            'page-attributes',)
    );
    register_post_type( 'personal', $args );
}

add_action( 'init', 'personal_init' );

/**
 * META BOXES
 */

add_filter( 'rwmb_meta_boxes', 'prefix_meta_boxes' );
function prefix_meta_boxes( $meta_boxes ) {
    $meta_boxes[] = array(
        'title'  => 'Test Meta Box',
        'pages' => array('Recipes'),
        'fields' => array(
            array(
                'id'   => 'subtitle',
                'name' => 'Subtitle',
                'type' => 'text',
            ),
            array(
                'id'   => 'ingr',
                'name' => 'Ingredients',
                'type' => 'textarea',
            ),
        ),
    );
    return $meta_boxes;
}

/**
 * CUSTOM POST FIELDS
 */


function my_cpf_recipes( $meta_boxes ) {
	$prefix = 'prefix-';

	$meta_boxes[] = array(
		'id' => 'customfields_recipes',
        'title' => esc_html__( 'Fields Recipes', 'cpf_recipes' ),
        'pages' => array('Recipes'),
		'post_types' => array('post' ),
		'context' => 'advanced',
		'priority' => 'default',
		'autosave' => 'false',
		'fields' => array(
            array(
				'id' => $prefix . 'text_3',
				'type' => 'text',
                'name' => esc_html__( 'Introtekst', 'cpf_recipes' ),
                'size' => 100,			),
			array(
				'id' => $prefix . 'image_advanced_1',
				'type' => 'image_advanced',
				'name' => esc_html__( 'Afbeeldingen', 'cpf_recipes' ),
				'max_file_uploads' => '2',
			),
			array(
				'id' => $prefix . 'radio_2',
				'name' => esc_html__( 'Alcohol?', 'cpf_recipes' ),
				'type' => 'radio',
				'placeholder' => '',
				'options' => array(
					'ja' => 'ja',
					'nee' => 'nee',
				),
				'inline' => 'true',
				'std' => 'ja',
			),
		
			array(
				'id' => $prefix . 'wysiwyg_4',
				'name' => esc_html__( 'Extra tips', 'cpf_recipes' ),
				'type' => 'wysiwyg',
			),
		),
        
	);

	return $meta_boxes;
}
add_filter( 'rwmb_meta_boxes', 'my_cpf_recipes' );


function my_cpf_events( $meta_boxes ) {
	$prefix = '_';

	$meta_boxes[] = array(
		'id' => 'customfields_events',
		'title' => esc_html__( 'Fields Events', 'cpf_events' ),
        'post_types' => array('post', 'page' ),
        'pages' => array('Events'),
		'context' => 'advanced',
		'priority' => 'default',
		'autosave' => 'false',
		'fields' => array(
			array(
				'id' => $prefix . 'date_1',
				'type' => 'date',
				'name' => esc_html__( 'Datum/Periode', 'cpf_events' ),
			),
			array(
				'id' => $prefix . 'map_2',
				'type' => 'map',
				'name' => esc_html__( 'Locatie', 'cpf_events' ),
			),
            array(
                'type'    => 'checkbox_list',
                'id'      => 'cb',
                'name'    => 'Betaalmogelijkheden',
                'options' => array(
                    array( 'value' => 'cash', 'label' => 'Cash' ),
                    array( 'value' => 'bancontact', 'label' => 'Bancontact' ),
                    array( 'value' => 'payconiq', 'label' => 'Payconiq' ),
                ),
                'flatten' => false,
            ),
		),
	);

	return $meta_boxes;
}


add_filter( 'rwmb_meta_boxes', 'my_cpf_events' );


function my_cpf_pers( $meta_boxes ) {
	$prefix = '_';

	$meta_boxes[] = array(
		'id' => 'customfields_pers',
        'title' => esc_html__( 'Fields Personal', 'cpf_pers' ),
        'pages' => array('Personal'),
		'post_types' => array('post', 'page' ),
		'context' => 'advanced',
		'priority' => 'default',
		'autosave' => 'false',
		'fields' => array(
			array(
				'id' => $prefix . 'image_advanced_1',
				'type' => 'image_advanced',
				'name' => esc_html__( 'Afbeeldingen', 'cpf_pers' ),
				'max_file_uploads' => '2',
			),
			array(
				'id' => $prefix . 'video_2',
				'type' => 'video',
				'name' => esc_html__( 'Video', 'cpf_pers' ),
				'max_file_uploads' => 1,
			),
		),
	);

	return $meta_boxes;
}
add_filter( 'rwmb_meta_boxes', 'my_cpf_pers' );

/**
 * TAXONOMIES
 */

function provinties_taxonomy() {


    $labels = array(
        'name' => _x( 'Provinties', 'taxonomy general name' ),
        'singular_name' => _x( 'Provintie', 'taxonomy singular name' ),
        'search_items' =>  __( 'Search Provinties' ),
        'all_items' => __( 'All Provinties' ),
        'parent_item' => __( 'Parent Provintie' ),
        'parent_item_colon' => __( 'Parent Provintie:' ),
        'edit_item' => __( 'Edit Provintie' ),
        'update_item' => __( 'Update Provinties' ),
        'add_new_item' => __( 'Add New Provinties' ),
        'new_item_name' => __( 'New Provintie Name' ),
        'menu_name' => __( 'Provinties' ),
    );


    register_taxonomy('provinties',array('events'), array(
        'hierarchical' => true,
        'labels' => $labels,
        'show_ui' => true,
        'show_admin_column' => true,
        'query_var' => true,
        'rewrite' => array( 'slug' => 'provinties' ),
    ));

}

add_action( 'init', 'provinties_taxonomy', 0 );

function tags_taxonomy() {


    $labels = array(
        'name' => _x( 'Tags', 'taxonomy general name' ),
        'singular_name' => _x( 'Tag', 'taxonomy singular name' ),
        'search_items' =>  __( 'Search Tags' ),
        'all_items' => __( 'All Tags' ),
        'parent_item' => __( 'Parent Tags' ),
        'parent_item_colon' => __( 'Parent Tag:' ),
        'edit_item' => __( 'Edit Tag' ),
        'update_item' => __( 'Update Tags' ),
        'add_new_item' => __( 'Add New Tags' ),
        'new_item_name' => __( 'New Tag Name' ),
        'menu_name' => __( 'Tags' ),
    );


    register_taxonomy('tags',array('events'), array(
        'hierarchical' => true,
        'labels' => $labels,
        'show_ui' => true,
        'show_admin_column' => true,
        'query_var' => true,
        'rewrite' => array( 'slug' => 'tags' ),
    ));

}

add_action( 'init', 'tags_taxonomy', 0 );

function settings_taxonomy() {


    $labels = array(
        'name' => _x( 'Settings', 'taxonomy general name' ),
        'singular_name' => _x( 'Setting', 'taxonomy singular name' ),
        'search_items' =>  __( 'Search Settings' ),
        'all_items' => __( 'All Settings' ),
        'parent_item' => __( 'Parent Settings' ),
        'parent_item_colon' => __( 'Parent Settings:' ),
        'edit_item' => __( 'Edit Settings' ),
        'update_item' => __( 'Update Settings' ),
        'add_new_item' => __( 'Add New Settings' ),
        'new_item_name' => __( 'New Setting Name' ),
        'menu_name' => __( 'Settings' ),
    );


    register_taxonomy('settings',array('events'), array(
        'hierarchical' => true,
        'labels' => $labels,
        'show_ui' => true,
        'show_admin_column' => true,
        'query_var' => true,
        'rewrite' => array( 'slug' => 'settings' ),
    ));

}

add_action( 'init', 'settings_taxonomy', 0 );

function allergenen_taxonomy() {


    $labels = array(
        'name' => _x( 'Allergenen', 'taxonomy general name' ),
        'singular_name' => _x( 'Allergeen', 'taxonomy singular name' ),
        'search_items' =>  __( 'Search Allergenen' ),
        'all_items' => __( 'All Allergenen' ),
        'parent_item' => __( 'Parent Allergeen' ),
        'parent_item_colon' => __( 'Parent Allergeen:' ),
        'edit_item' => __( 'Edit Allergeen' ),
        'update_item' => __( 'Update Allergeen' ),
        'add_new_item' => __( 'Add New Allergeen' ),
        'new_item_name' => __( 'New Allergeen Name' ),
        'menu_name' => __( 'Allergenen' ),
    );


    register_taxonomy('allergenen',array('recipes'), array(
        'hierarchical' => true,
        'labels' => $labels,
        'show_ui' => true,
        'show_admin_column' => true,
        'query_var' => true,
        'rewrite' => array( 'slug' => 'allergenen' ),
    ));

}

add_action( 'init', 'allergenen_taxonomy', 0 );


function moeilijkheden_taxonomy() {


    $labels = array(
        'name' => _x( 'Moeilijkheden', 'taxonomy general name' ),
        'singular_name' => _x( 'Moeilijkheid', 'taxonomy singular name' ),
        'search_items' =>  __( 'Search Moeilijkheden' ),
        'all_items' => __( 'All Moeilijkheden' ),
        'parent_item' => __( 'Parent Moeilijkheid' ),
        'parent_item_colon' => __( 'Parent Moeilijkheid:' ),
        'edit_item' => __( 'Edit Moeilijkheid' ),
        'update_item' => __( 'Update Moeilijkheid' ),
        'add_new_item' => __( 'Add New Moeilijkheid' ),
        'new_item_name' => __( 'New Moeilijkheid Name' ),
        'menu_name' => __( 'Moeilijkheden' ),
    );

    register_taxonomy('moeilijkheden',array('recipes'), array(
        'hierarchical' => true,
        'labels' => $labels,
        'show_ui' => true,
        'meta_box_cb'                => 'drop_cat',

        'show_admin_column' => true,
        'query_var' => true,
        'rewrite' => array( 'slug' => 'moeilijkheden' ),
    ));

    wp_insert_term(
        'beginner',
        'moeilijkheden'
    );

    wp_insert_term(
        'hobbykok',
        'moeilijkheden'
    );

    wp_insert_term(
        'professional',
        'moeilijkheden'
    );

    wp_insert_term(
        'expert',
        'moeilijkheden'
    );

    function drop_cat( $post, $box ) {
        $defaults = array('taxonomy' => 'moeilijkheden');
        if ( !isset($box['args']) || !is_array($box['args']) )
            $args = array();
        else
            $args = $box['args'];
        extract( wp_parse_args($args, $defaults), EXTR_SKIP );
        $tax = get_taxonomy($taxonomy);
        ?>
        <div id="taxonomy-<?php echo $taxonomy; ?>" class="acf-taxonomy-field categorydiv">

            <?php
            $name = ( $taxonomy == 'moeilijkheden' ) ? 'post_category' : 'tax_input[' . $taxonomy . ']';
            echo "<input type='hidden' name='{$name}[]' value='0' />"; // Allows for an empty term set to be sent. 0 is an invalid Term ID and will be ignored by empty() checks.
            ?>
            <? $term_obj = wp_get_object_terms($post->ID, $taxonomy ); //_log($term_obj[0]->term_id)?>
            <ul id="<?php echo $taxonomy; ?>checklist" data-wp-lists="list:<?php echo $taxonomy?>" class="categorychecklist form-no-clear">
                <?php //wp_terms_checklist($post->ID, array( 'taxonomy' => $taxonomy) ) ?>
            </ul>

            <?php wp_dropdown_categories( array( 'taxonomy' => $taxonomy, 'hide_empty' => 0, 'name' => "{$name}[]", 'selected' => $term_obj[0]->term_id, 'orderby' => 'name', 'hierarchical' => 0, 'show_option_none' => '&mdash;' ) ); ?>

        </div>
        <?php
    }

}

add_action( 'init', 'moeilijkheden_taxonomy', 0 );

function categorieën_taxonomy() {


    $labels = array(
        'name' => _x( 'Categorieën', 'taxonomy general name' ),
        'singular_name' => _x( 'Categorieën', 'taxonomy singular name' ),
        'search_items' =>  __( 'Search Categorieën' ),
        'all_items' => __( 'All Categorieën' ),
        'parent_item' => __( 'Parent Categorie' ),
        'parent_item_colon' => __( 'Parent Categorie:' ),
        'edit_item' => __( 'Edit Categorie' ),
        'update_item' => __( 'Update Categorie' ),
        'add_new_item' => __( 'Add New Categorie' ),
        'new_item_name' => __( 'New Categorie Name' ),
        'menu_name' => __( 'Categorieën' ),
    );

    register_taxonomy('categorieën',array('recipes'), array(
        'hierarchical' => true,
        'labels' => $labels,
        'show_ui' => true,
        'show_admin_column' => true,
        'query_var' => true,
        'rewrite' => array( 'slug' => 'categorieën' ),
    ));

/*
    wp_insert_term(
        'patisserie',
        'categorieën'
    );

    wp_insert_term(
        'soep',
        'categorieën'
    );

    wp_insert_term(
        'stoofpotje',
        'categorieën'
    );

    wp_insert_term(
        'pasta',
        'categorieën'
    );
*/
}

add_action( 'init', 'categorieën_taxonomy', 0 );





/**
 *  FUNCTIES VOOR DYNAMISCHE POST TAGS
 */
require get_template_directory() . '/inc/template-tags.php';

/**
 * EXTRA'S
  */
require get_template_directory() . '/inc/extras.php';

/**
 * Load custom WordPress nav walker.
 */
if ( ! class_exists( 'wp_bootstrap_navwalker' )) {
    require_once(get_template_directory() . '/inc/wp_bootstrap_navwalker.php');
}