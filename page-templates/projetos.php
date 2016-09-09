<?php
/*
Template Name: Projetos
*/
get_header();
?>
<div class="container">
	<div class="row">
		<div id="primary">
			<section class="col-lg-12 text-center">
				<h2 class="section-heading"><?php the_title(); ?></h2>
				<hr class="primary">
			</section>
			<section id="portfolio" class="bg-light-gray">
				<div class="container">
					<div class="row">
						<div class="col-md-4 col-sm-6 portfolio-item">
							<a href="#portfolioModal1" class="portfolio-link" data-toggle="modal">
								<div class="portfolio-hover">
									<div class="portfolio-hover-content">
										<i class="fa fa-plus fa-3x"></i>
									</div>
								</div>
								<img src="<?php bloginfo('stylesheet_directory'); ?>/images/projetos/acolhedora.png" class="img-responsive" alt="">
							</a>
							<div class="portfolio-caption">
								<h4>Família Acolhedora</h4>
							</div>
						</div>
						<div class="col-md-4 col-sm-6 portfolio-item">
							<a href="#portfolioModal2" class="portfolio-link" data-toggle="modal">
								<div class="portfolio-hover">
									<div class="portfolio-hover-content">
										<i class="fa fa-plus fa-3x"></i>
									</div>
								</div>
								<img src="<?php bloginfo('stylesheet_directory');?>/images/projetos/escola.png" class="img-responsive" alt="">
							</a>
							<div class="portfolio-caption">
								<h4>Escola de Família</h4>
							</div>
						</div>
						<div class="col-md-4 col-sm-6 portfolio-item">
							<a href="#portfolioModal3" class="portfolio-link" data-toggle="modal">
								<div class="portfolio-hover">
									<div class="portfolio-hover-content">
										<i class="fa fa-plus fa-3x"></i>
									</div>
								</div>
								<img src="<?php bloginfo('stylesheet_directory'); ?>/images/projetos/fortalecendo.png" class="img-responsive" alt="">
							</a>
							<div class="portfolio-caption">
								<h4>Fortalecendo vínculos</h4>
							</div>
						</div>
						<div class="col-md-4 col-sm-6 portfolio-item">
							<a href="#portfolioModal4" class="portfolio-link" data-toggle="modal">
								<div class="portfolio-hover">
									<div class="portfolio-hover-content">
										<i class="fa fa-plus fa-3x"></i>
									</div>
								</div>
								<img src="<?php bloginfo('stylesheet_directory'); ?>/images/projetos/papoadocao.png" class="img-responsive" alt="">
							</a>
							<div class="portfolio-caption">
								<h4>Papo da Adoção</h4>
							</div>
						</div>
						<div class="col-md-4 col-sm-6 portfolio-item">
							<a href="#portfolioModal6" class="portfolio-link" data-toggle="modal">
								<div class="portfolio-hover">
									<div class="portfolio-hover-content">
										<i class="fa fa-plus fa-3x"></i>
									</div>
								</div>
								<img src="<?php bloginfo('stylesheet_directory'); ?>/images/projetos/adocoes.png" class="img-responsive" alt="">
							</a>
							<div class="portfolio-caption">
								<h4>Adoções Necessárias</h4>
							</div>
						</div>
					</div>
				</div>
			</section>
		</div>
	</div>
</div>
<!--Modals -->
<!-- Modal 1 -->
<div class="portfolio-modal modal fade" id="portfolioModal1" tabindex="-1" role="dialog" aria-hidden="true">
	<div class="modal-content">
		<div class="close-modal" data-dismiss="modal">
			<div class="lr">
				<div class="rl">
				</div>
			</div>
		</div>
		<div class="container">
			<div class="row">
				<div class="col-lg-8 col-lg-offset-2">
					<div class="modal-body">
						<h2>Programa Família Acolhedora</h2>
						<img class="img-responsive img-centered" src="<?php bloginfo('stylesheet_directory'); ?>/images/projetos/acolhedora.jpg" alt="">
						<p>O <strong>Programa Família Acolhedora</strong> é um acolhimento familiar temporário de crianças e adolescentes até que estes sejam reintegrados à família de origem ou disponibilizados para adoção</p>
						<a class="btn" href="<?php printf(home_url());?>/form" role="button"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Se inscreva</a>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<!-- Modal 2 -->
<div class="portfolio-modal modal fade" id="portfolioModal2" tabindex="-1" role="dialog" aria-hidden="true">
	<div class="modal-content">
		<div class="close-modal" data-dismiss="modal">
			<div class="lr">
				<div class="rl">
				</div>
			</div>
		</div>
		<div class="container">
			<div class="row">
				<div class="col-lg-8 col-lg-offset-2">
					<div class="modal-body">
						<h2>Escola de Família</h2>
						<img class="img-responsive img-centered" src="<?php bloginfo('stylesheet_directory'); ?>/images/projetos/escola.jpg" alt="">
						<p>Trabalha com a rede escolar realizando ações socioeducativas com alunos e suas famílias para contribuir com o fortalecimento das relações e prevenir a ruptura dos vínculos familiares e um consequente abrigamento.</p>
						<a class="btn" href="<?php printf(home_url());?>/form" role="button"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Se inscreva</a>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<!-- Modal 3 -->
<div class="portfolio-modal modal fade" id="portfolioModal3" tabindex="-1" role="dialog" aria-hidden="true">
	<div class="modal-content">
		<div class="close-modal" data-dismiss="modal">
			<div class="lr">
				<div class="rl">
				</div>
			</div>
		</div>
		<div class="container">
			<div class="row">
				<div class="col-lg-8 col-lg-offset-2">
					<div class="modal-body">
						<h2>Fortalecendo vínculos</h2>
						<img class="img-responsive img-centered" src="<?php bloginfo('stylesheet_directory'); ?>/images/projetos/fortalecendo.jpg" alt="">
						<p>Acompanhamento psicossocial às famílias de origem das crianças e adolescentes inseridos nos programas visando sua reintegração, sempre que possível, e continuidade do acompanhamento após a reintegração.</p>
						<a class="btn" href="<?php printf(home_url());?>/form" role="button"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Se inscreva</a>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<!-- Modal 4 -->
<div class="portfolio-modal modal fade" id="portfolioModal4" tabindex="-1" role="dialog" aria-hidden="true">
	<div class="modal-content">
		<div class="close-modal" data-dismiss="modal">
			<div class="lr">
				<div class="rl">
				</div>
			</div>
		</div>
		<div class="container">
			<div class="row">
				<div class="col-lg-8 col-lg-offset-2">
					<div class="modal-body">
						<h2>Papo da Adoção</h2>
						<img class="img-responsive img-centered" src="<?php bloginfo('stylesheet_directory'); ?>/images/projetos/papoadocao.jpg" alt="">
						<p>Reunião com pretendentes e adotantes visando a preparação para o exercício da maternidade/paternidade. Sempre na última sexta-feira de cada mês, às 18 horas, na sede do Cria.</p>
						<a class="btn" href="<?php printf(home_url());?>/form" role="button"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Se inscreva</a>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<!-- Modal 5 -->
<!--<div class="portfolio-modal modal fade" id="portfolioModal5" tabindex="-1" role="dialog" aria-hidden="true">
<div class="modal-content">
<div class="close-modal" data-dismiss="modal">
<div class="lr">
<div class="rl">
</div>
</div>
</div>
<div class="container">
<div class="row">
<div class="col-lg-8 col-lg-offset-2">
<div class="modal-body">

<h2>Manhã de Piscina</h2>
<img class="img-responsive img-centered" src="<?php bloginfo('stylesheet_directory'); ?>/images/projetos/manha.jpg" alt="">
<p>Momento de lazer com as crianças acolhidas no Abrigo Lar da Criança Maria João de Deus no clube da ADUFPI, realizado no último sábado de cada mês, no intuito de contribuir para a convivência comunitária destas crianças.</p>
<button type="button" class="btn btn-primary" data-dismiss="modal"><i class="fa fa-times"></i> Fechar</button>
</div>
</div>
</div>
</div>
</div>
</div>-->
<!-- Modal 6 -->
<div class="portfolio-modal modal fade" id="portfolioModal6" tabindex="-1" role="dialog" aria-hidden="true">
	<div class="modal-content">
		<div class="close-modal" data-dismiss="modal">
			<div class="lr">
				<div class="rl">
				</div>
			</div>
		</div>
		<div class="container">
			<div class="row">
				<div class="col-lg-8 col-lg-offset-2">
					<div class="modal-body">
						<h2>Adoções Necessárias</h2>
						<img class="img-responsive img-centered" src="<?php bloginfo('stylesheet_directory'); ?>/images/projetos/adocoess.png" alt="">
						<p>Busca ativa por famílias para adoção de grupos de irmãos, crianças especiais ou com deficiência, negros, crianças especiais ou com deficiência, negros, crianças maiores e adolescentes.</p>
						<a class="btn" href="<?php printf(home_url());?>/form" role="button"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Se inscreva</a>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<?php get_footer(); ?>
