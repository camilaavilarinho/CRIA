<?php
/**
 * The template for displaying the footer.
 *
 * Contains footer content and the closing of the main and #page div elements.
 *
 * @since 1.0.0
 */
$bavotasan_theme_options = bavotasan_theme_options();
?>
	</main><!-- main -->

	<footer id="footer" role="contentinfo">
		<div id="footer-content" class="container">
			<div class="row">
				<div class="telefone col-md-8">
					<h3>Visite-nos:</h3>
					<h5>Rua São Pedro, 1841. Centro-sul</h5>
					<h5>Teresina - Piauí</h5>
					<h5>Telefone: (86) 3216-6276</h5>
				</div>
				<div class="social col-md-4">
					<h3>Social</h3>
					<ul class="social-items">
						<li class="social-item">
							<a href="http://www.facebook.com/cria.pi" target="_blank">
								<span class="facebook-item">
									<i class="fa fa-facebook-square fa-4x"></i>
								</span>
							</a>
						</li>
						<li class="social-item">
							<a href="http://instagram.com/criapiaui" target="_blank">
								<span class="instagram-item">
									<i class="fa fa-instagram fa-4x"></i>
								</span>
							</a>
						</li>
						<li class="social-item">
							<a href="https://www.youtube.com/channel/UC9e5SecBJzvji6SgrCUG9kg" target="_blank">
								<span class="youtube-item">
									<i class="fa fa-youtube-square fa-4x"></i>
								</span>
							</a>
						</li>
					</ul>

				</div>
				<div class="copyright col-lg-12">
					<span class="pull-left"><?php printf( __( 'Copyright &copy; %s %s. All Rights Reserved.', 'arcade' ), date( 'Y' ), ' <a href="' . home_url() . '">' . get_bloginfo( 'name' ) .'</a>' ); ?></span>
				</div><!-- .col-lg-12 -->
			</div><!-- .row -->
		</div><!-- #footer-content.container -->
	</footer><!-- #footer -->
</div><!-- #page -->

<?php wp_footer(); ?>
</body>
</html>
