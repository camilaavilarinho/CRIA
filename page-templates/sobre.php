<?php
/*
Template Name: Sobre
 */
get_header();
?>

	<div class="container sobre">
		<div class="row">
			<div id="primary" <?php /*bavotasan_primary_attr(); */?>>
				<?php
				while ( have_posts() ) : the_post();
					?>
					<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
						<!--<h1 class="entry-title"><?php the_title(); ?></h1>-->
						<section class="col-lg-12 text-center">
							<h2 class="section-heading"><?php the_title(); ?></h2>
							<hr class="primary">
						</section>

					    <div class="entry-content description clearfix">
						    <?php the_content( __( 'Read more', 'arcade') ); ?>
					    </div><!-- .entry-content -->

					    <?php get_template_part( 'content', 'footer' ); ?>
					</article><!-- #post-<?php the_ID(); ?> -->
					<!--<a href="http://localhost/wordpressCria/projetos" class="btn btn-info btn-lg">Projetos</a>
					<a href="http://localhost/wordpressCria/como-ajudar" class="btn btn-info btn-lg">Como Ajudar</a>
					-->
					<div class="row" id="links">
						<a href="<?php printf(home_url());?>/projetos"><div class="col-md-6">
							<div class="dashboard-div-wrapper bk-clr-two">
								<i class="fa fa-edit dashboard-div-icon fa-2x"></i>
								<h4>Programas</h4>
							</div>
						</div></a>
						<a href="<?php printf(home_url());?>/como-ajudar"><div class="col-md-6">
							<div class="dashboard-div-wrapper bk-clr-two">
								<i class="fa fa-heart-o dashboard-div-icon fa-2x"></i>
								<h4>Como Ajudar</h4>
							</div>
						</div></a>
					</div>
					<?php
				endwhile;
				?>
			</div>
			<?php /*get_sidebar(); */?>
		</div>
	</div>

<?php get_footer(); ?>
