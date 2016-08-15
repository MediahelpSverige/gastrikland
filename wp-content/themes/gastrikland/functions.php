<?php function register_my_menus() {
  register_nav_menus(
    array(
      'header-menu' => __( 'Header Menu' ),
      'extra-menu' => __( 'Extra Menu' )
    )
  );
}
add_action( 'init', 'register_my_menus' );

add_theme_support( 'post-thumbnails' ); 

require_once('wp_bootstrap_navwalker.php');


function nyheter_custom_init() {
    $args = array(
      'public' => true,
      'label'  => 'Nyheter',
      'description'        => __( 'Description.', 'landqvist' ),
        'public'             => true,
        'publicly_queryable' => true,
        'show_ui'            => true,
        'show_in_menu'       => true,
        'query_var'          => true,
        'rewrite'            => array( 'slug' => 'nyheter' ),
        'capability_type'    => 'post',
        'has_archive'        => true,
        'taxonomies'         => array('category'),
        'hierarchical'       => false,
        'menu_position'      => null,
        'supports'           => array( 'title', 'editor', 'author', 'thumbnail', 'excerpt', 'comments' )
    );
    register_post_type( 'nyheter', $args );
}
add_action( 'init', 'nyheter_custom_init' );



function new_trim_excerpt($text) {
        global $post;
        if ( '' == $text ) {
                $text = get_the_content('');
                $text = apply_filters('the_content', $text);
                $text = str_replace('\]\]\>', ']]>', $text);
                $text = preg_replace('@<script[^>]*?>.*?</script>@si', '', $text);
                $text = strip_tags($text, '<a>');
                $excerpt_length = 40;

                $words = explode(' ', $text, $excerpt_length + 1);
                if (count($words)> $excerpt_length) {
                        array_pop($words);
                        array_push($words, ' <a class="read-more" href="' . get_permalink( get_the_ID() ) . '">' . __( 'Klick här för att läsa mer', 'your-text-domain' ) . '</a>');
                        $text = implode(' ', $words);
                }
        }
        return $text;
}
remove_filter('get_the_excerpt', 'wp_trim_excerpt');
add_filter('get_the_excerpt', 'new_trim_excerpt');


?>