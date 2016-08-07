<?php
add_action( 'wp_enqueue_scripts', 'theme_enqueue_styles' );
function theme_enqueue_styles() {
    wp_enqueue_style( 'parent-style', get_template_directory_uri() . '/style.css' );

}

function themeprefix_bootstrap_modals() {
 wp_register_script ( 'modaljs' , get_stylesheet_directory_uri() . '/js/bootstrap.min.js', array( 'jquery' ), '1', true );
 wp_register_style ( 'modalcss' , get_stylesheet_directory_uri() . '/css/bootstrap.css', '' , '', 'all' );

 wp_enqueue_script( 'modaljs' );
 wp_enqueue_style( 'modalcss' );
}
add_action( 'wp_enqueue_scripts', 'themeprefix_bootstrap_modals');

//enqueues our locally supplied font awesome stylesheet
function enqueue_our_required_stylesheets(){
	wp_enqueue_style('font-awesome', get_stylesheet_directory_uri() . '/font-awesome/css/font-awesome.css');
}
add_action('wp_enqueue_scripts','enqueue_our_required_stylesheets');

add_filter( 'wp_trim_excerpt', 'bavotasan_excerpt_more' );
if ( ! function_exists( 'bavotasan_excerpt_more' ) ) :
/**
 * Adds a read more link to all excerpts
 *
 * This function is attached to the 'wp_trim_excerpt' filter hook.
 *
 * @param	string $text
 *
 * @return	Custom read more link
 *
 * @since 1.0.0
 */
function bavotasan_excerpt_more( $text ) {
	if ( is_singular() )
		return $text;

	return '<p class="excerpt">' . $text . ' <a href="' . get_permalink( get_the_ID() ) . '">' . __( 'Leia mais &rarr;', 'arcade' ) . '</a></p>';
}
endif; // bavotasan_excerpt_more

/*function bavotasan_pagination() {
	global $wp_query, $paged;

	// Don't print empty markup if there's only one page.
	if ( $wp_query->max_num_pages < 2 && 0 == $paged )
		return;
	?>
	<nav class="navigation clearfix" role="navigation">
		<h1 class="sr-only"><?php _e( 'Posts navigation', 'arcade' ); ?></h1>
		<?php if ( get_next_posts_link() ) : ?>
		<div class="nav-previous"><?php next_posts_link( __( '&larr; Posts antigos', 'arcade' ) ); ?></div>
		<?php endif; ?>

		<?php if ( get_previous_posts_link() ) : ?>
		<div class="nav-next"><?php previous_posts_link( __( 'Novos posts &rarr;', 'arcade' ) ); ?></div>
		<?php endif; ?>
	</nav><!-- .navigation -->
	<?php
	wp_reset_query();
}*/

?>
