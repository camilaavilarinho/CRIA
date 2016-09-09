<?php
/*
Template Name: comoAjudar
*/
get_header();
?>

<div class="container">
	<div class="row">
		<div id="primary">
			<section id="services">
				<div class="container">
					<div class="row">
						<div class="col-lg-12 text-center">
							<h2 class="section-heading"><?php the_title(); ?></h2>
							<hr class="primary">
						</div>
					</div>
				</div>
				<div class="container">
					<div class="row">
						<div class="col-lg-3 col-md-6 text-center">
							<div class="service-box">
								<a href="<?php printf(home_url());?>/familia-acolhedora"><i class="fa fa-4x fa-newspaper-o wow bounceIn text-primary"></i></a>
								<p class="text-muted">Cadastra-se para o programa Família Acolhedora.</p>
							</div>
						</div>
						<div class="col-lg-3 col-md-6 text-center">
							<div class="service-box">
								<a href="#modalApadrinhamento" class="portfolio-link" data-toggle="modal"><i class="fa fa-4x fa-heart wow bounceIn text-primary" data-wow-delay=".1s"></i></a>
								<p class="text-muted">Cadastre-se para o projeto apadrinhamento afetivo e dê carinho a quem mais precisa.</p>
							</div>
						</div>
						<div class="col-lg-3 col-md-6 text-center">
							<div class="service-box">
								<a href="#modalVoluntariado" class="portfolio-link" data-toggle="modal"><i class="fa fa-4x fa-users wow bounceIn text-primary" data-wow-delay=".2s"></i></a>
								<p class="text-muted">Seja voluntário no Cria.</p>
							</div>
						</div>
						<div class="col-lg-3 col-md-6 text-center">
							<div class="service-box">
								<a href="#modalFinanceiro" class="portfolio-link" data-toggle="modal"><i class="fa fa-4x fa-thumbs-up wow bounceIn text-primary" data-wow-delay=".3s"></i></a>
								<p class="text-muted">Apoie financeiramente o Cria</p>
							</div>
						</div>
					</div>
				</div>
			</section>
			<br>
			<div class="row" id="banco">
				<div class="col-md-12">
					<div class="dashboard-div-wrapper bk-clr-two">
						<h4>Banco do Brasil</h4>
						<h4>Agência: 3219-0</h4>
						<h4>Conta Corrente: 7892-1</h4>
						<hr>
						<p id="ps">O cria agradece a sua colaboração</p>
					</div>
				</div>
			</div>
	</div>
</div>
</div>
<!-- Modais-->
<div class="modal-como-ajudar">
<div class="portfolio-modal modal fade" id="modalApadrinhamento" tabindex="-1" role="dialog" aria-hidden="true">
	<div class="modal-content">
		<div class="close-modal" data-dismiss="modal">
			<div class="lr">
				<div class="rl">
				</div>
			</div>
		</div>
		<div class="container">
			<div class="row">
				<div class="col-lg-8">
					<div class="modal-body">
						<!--<h2>Programa Família Acolhedora</h2>-->
						<!--<img class="img-responsive img-centered" src="<?php bloginfo('stylesheet_directory'); ?>/images/projetos/familia.jpg" alt="">-->
						<p>O <strong>programa de apadrinhamento afetivo</strong> é desenvolvido por alguns abrigos em Teresina, se você tem interesse, pode entrar em contato com o <strong>Lar da Criança (86 3213.1770)</strong> ou <strong>Casa de Acolhimento Reencontro (86 3215.9306)</strong></p>
						<!--<a class="btn" href="<?php printf(home_url());?>/form" role="button"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Se inscreva</a>-->
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
</div>
<div class="modal-como-ajudar">
<div class="portfolio-modal modal fade" id="modalVoluntariado" tabindex="-1" role="dialog" aria-hidden="true">
	<div class="modal-content">
		<div class="close-modal" data-dismiss="modal">
			<div class="lr">
				<div class="rl">
				</div>
			</div>
		</div>
		<div class="container">
			<div class="row">
				<div class="col-lg-8">
					<div class="modal-body">
						<!--<h2>Programa Família Acolhedora</h2>-->
						<!--<img class="img-responsive img-centered" src="<?php bloginfo('stylesheet_directory'); ?>/images/projetos/familia.jpg" alt="">-->
						<p><strong>Seja voluntário na sua área de atuação</strong>, para desenvolver projetos específicos junto ao Cria. Ou ainda, participe de nossas ações com crianças e adolescentes.<br>Visite-nos e saiba como ajudar.</p>
						<!--<a class="btn" href="<?php printf(home_url());?>/form" role="button"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Se inscreva</a>-->
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
</div>
<div class="modal-como-ajudar">
<div class="portfolio-modal modal fade" id="modalFinanceiro" tabindex="-1" role="dialog" aria-hidden="true">
	<div class="modal-content">
		<div class="close-modal" data-dismiss="modal">
			<div class="lr">
				<div class="rl">
				</div>
			</div>
		</div>
		<div class="container">
			<div class="row">
				<div class="col-lg-8">
					<div class="modal-body">
						<!--<h2>Programa Família Acolhedora</h2>-->
						<!--<img class="img-responsive img-centered" src="<?php bloginfo('stylesheet_directory'); ?>/images/projetos/familia.jpg" alt="">-->
						<p>Se você deseja nos apoiar financeiramente, buscamos a contribuição em sua casa ou ainda disponibilizamos a nossa conta bancária para depósitos e transferências. <strong><br>Conta Corrente: Banco do Brasil <br>Agência: 3219-0 <br>Conta Corrente: 7892-1</strong></p>
						<!--<a class="btn" href="<?php printf(home_url());?>/form" role="button"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Se inscreva</a>-->
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
</div>
<?php get_footer(); ?>
