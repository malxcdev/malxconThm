<?php
function mi_tema_enqueue_assets() {
    // Encolar CSS de Tailwind
    wp_enqueue_style( 'tailwindcss', get_template_directory_uri() . '/build/style.css', array(), '1.0', 'all' );

    // Encolar CSS adicional
    wp_enqueue_style( 'maincss', get_template_directory_uri() . '/build/main.css', array(), '1.0', 'all' );

    // Encolar Google Fonts
    wp_enqueue_style( 'google-fonts', 'https://fonts.googleapis.com/css2?family=DM+Serif+Display&display=swap', array(), null );

    // Encolar JavaScript personalizado
    wp_enqueue_script( 'mi-tema-script', get_template_directory_uri() . '/src/js/script.js', array(), '1.0', true );
}
add_action( 'wp_enqueue_scripts', 'mi_tema_enqueue_assets' );

// Soporte para características del tema
function mi_tema_setup() {
    add_theme_support( 'title-tag' );
    add_theme_support( 'post-thumbnails' );
    add_theme_support( 'html5', array( 'search-form', 'comment-form', 'gallery', 'caption' ) );
}
add_action( 'after_setup_theme', 'mi_tema_setup' );

// Registro de menús 
function mi_tema_register_menus() {
    register_nav_menus(
        array(
            'header-menu' => __( 'Header Menu' ),
            'footer-menu' => __( 'Footer Menu' )
        )
    );
}

add_action( 'init', 'mi_tema_register_menus' );

// Registro de widgets

function mi_tema_widgets_init() {
    register_sidebar(
        array(
            'name'          => __( 'Main Sidebar', 'mi-tema' ),
            'id'            => 'main-sidebar',
            'description'   => __( 'Añade widgets a la barra lateral principal', 'mi-tema' ),
            'before_widget' => '<section id="%1$s" class="widget %2$s">',
            'after_widget'  => '</section>',
            'before_title'  => '<h2 class="widget-title">',
            'after_title'   => '</h2>',
        )
    );
}

add_action( 'widgets_init', 'mi_tema_widgets_init' );

// Registro de tipos de contenido personalizados

function mi_tema_custom_post_types() {
    register_post_type( 'producto',
        array(
            'labels' => array(
                'name' => __( 'Productos' ),
                'singular_name' => __( 'Producto' )
            ),
            'public' => true,
            'has_archive' => true,
            'rewrite' => array( 'slug' => 'productos' ),
            'supports' => array( 'title', 'editor', 'thumbnail' ),
            'menu_icon' => 'dashicons-cart'
        )
    );
}

add_action( 'init', 'mi_tema_custom_post_types' );

// Registro de taxonomías personalizadas

function mi_tema_custom_taxonomies() {
    register_taxonomy(
        'tipo',
        'producto',
        array(
            'label' => __( 'Tipos' ),
            'rewrite' => array( 'slug' => 'tipo' ),
            'hierarchical' => true
        )
    );
}

add_action( 'init', 'mi_tema_custom_taxonomies' );

// Registro de campos personalizados

function mi_tema_custom_fields() {
    add_meta_box(
        'precio',
        'Precio',
        'mi_tema_precio_meta_box',
        'producto',
        'side',
        'default'
    );
}

add_action( 'add_meta_boxes', 'mi_tema_custom_fields' );