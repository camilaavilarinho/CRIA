<?php
/*
Template Name: Galeria
*/
get_header();
?>
<div class="container">
	<div class="row">
		<div id="primary">
			<?php
			while ( have_posts() ) : the_post();
			?>
			<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
				<section class="col-lg-12 text-center">
					<h2 class="section-heading"><?php the_title(); ?></h2>
					<hr class="primary">
				</section>
				<div class="entry-content description clearfix">
					<?php the_content( __( 'Read more', 'arcade') ); ?>
				</div><!-- .entry-content -->
				<?php get_template_part( 'content', 'footer' ); ?>
			</article><!-- #post-<?php the_ID(); ?> -->
		<?php
	endwhile;
	?>
		</div>
	</div>
</div>
<?php get_footer(); ?>
