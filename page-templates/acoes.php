<?php
/*
Template Name: Acoes
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
								<img src="<?php bloginfo('stylesheet_directory'); ?>/images/projetos/acoes/pintando.png" class="img-responsive" alt="">
							</a>
							<div class="portfolio-caption">
								<h4>Pintando o Sete e Reunião com Famílias</h4>
							</div>
						</div>
						<div class="col-md-4 col-sm-6 portfolio-item">
							<a href="#portfolioModal2" class="portfolio-link" data-toggle="modal">
								<div class="portfolio-hover">
									<div class="portfolio-hover-content">
										<i class="fa fa-plus fa-3x"></i>
									</div>
								</div>
								<img src="<?php bloginfo('stylesheet_directory');?>/images/projetos/acoes/manha.png" class="img-responsive" alt="">
							</a>
							<div class="portfolio-caption">
								<h4>Manhã de Lazer</h4>
							</div>
						</div>
						<div class="col-md-4 col-sm-6 portfolio-item">
							<a href="#portfolioModal3" class="portfolio-link" data-toggle="modal">
								<div class="portfolio-hover">
									<div class="portfolio-hover-content">
										<i class="fa fa-plus fa-3x"></i>
									</div>
								</div>
								<img src="<?php bloginfo('stylesheet_directory'); ?>/images/projetos/acoes/seminario.png" class="img-responsive" alt="">
							</a>
							<div class="portfolio-caption">
								<h4>Seminários Estaduais</h4>
							</div>
						</div>
						<div class="col-md-4 col-sm-6 portfolio-item">
							<a href="#portfolioModal4" class="portfolio-link" data-toggle="modal">
								<div class="portfolio-hover">
									<div class="portfolio-hover-content">
										<i class="fa fa-plus fa-3x"></i>
									</div>
								</div>
								<img src="<?php bloginfo('stylesheet_directory'); ?>/images/projetos/acoes/exposicao.png" class="img-responsive" alt="">
							</a>
							<div class="portfolio-caption">
								<h4>Exposições Fotográficas</h4>
							</div>
						</div>
						<div class="col-md-4 col-sm-6 portfolio-item">
							<a href="#portfolioModal5" class="portfolio-link" data-toggle="modal">
								<div class="portfolio-hover">
									<div class="portfolio-hover-content">
										<i class="fa fa-plus fa-3x"></i>
									</div>
								</div>
								<img src="<?php bloginfo('stylesheet_directory'); ?>/images/projetos/acoes/maosdadas.png" class="img-responsive" alt="">
							</a>
							<div class="portfolio-caption">
								<h4>Projeto de Mãos Dadas</h4>
							</div>
						</div>
						<div class="col-md-4 col-sm-6 portfolio-item">
							<a href="#portfolioModal6" class="portfolio-link" data-toggle="modal">
								<div class="portfolio-hover">
									<div class="portfolio-hover-content">
										<i class="fa fa-plus fa-3x"></i>
									</div>
								</div>
								<img src="<?php bloginfo('stylesheet_directory'); ?>/images/projetos/acoes/abandonar.png" class="img-responsive" alt="">
							</a>
							<div class="portfolio-caption">
								<h4>Campanha Abandonar é Crime</h4>
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
						<h2>Pintando o Sete e Reunião com Famílias</h2>
						<img class="img-responsive img-centered" src="<?php bloginfo('stylesheet_directory'); ?>/images/projetos/acoes/pintando.jpg" alt="">
						<p>O <strong>O Pintando o Sete e Reunião com Famílias </strong> é um evento que acontece na última quarta-feira de cada mês e consiste em reunir as Famílias Acolhedoras que participam do programa do Cria acolhendo crianças ou adolescentes em suas casas. No Pintando o Sete as crianças e adolescente desfrutam de atividades e brincadeiras junto a um grupo de voluntários ou estagiários. Já a Reunião das Famílias é sempre mediada por nossa equipe psicossocial, abordando temas relevantes para o convívio no acolhimento familiar.</p>
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
						<h2>Manhã de Lazer</h2>
						<img class="img-responsive img-centered" src="<?php bloginfo('stylesheet_directory'); ?>/images/projetos/acoes/manha.jpg" alt="">
						<p>Também chamada de <strong>Manhã de Piscina</strong>, é um evento que acontece nos últimos sábados dos meses com o objetivo de proporcionar lazer e bem-estar às crianças e adolescentes que vivem em instituições de acolhimento de Teresina.</p>
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
						<h2>Seminários Estaduais</h2>
						<img class="img-responsive img-centered" src="<?php bloginfo('stylesheet_directory'); ?>/images/projetos/acoes/seminario.jpg" alt="">
						<p>Realizamos a cada dois anos um seminário estadual elegendo temas relacionados à Adoção e à institucionalização de crianças e adolescentes com o objetivo de debater e propor melhorias para os problemas que cerceiam o universo da Adoção.</p>
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
						<h2>Exposições Fotográficas</h2>
						<img class="img-responsive img-centered" src="<?php bloginfo('stylesheet_directory'); ?>/images/projetos/acoes/exposicao.jpg" alt="">
						<p>Também realizadas a cada dois anos, as exposições fotográficas são intervenções que visam sensibilizar e chamar a atenção da sociedade sobre temas, relacionados à adoção, que ainda são tabus.</p>
						<a class="btn" href="<?php printf(home_url());?>/form" role="button"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Se inscreva</a>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<!-- Modal 5 -->
<div class="portfolio-modal modal fade" id="portfolioModal5" tabindex="-1" role="dialog" aria-hidden="true">
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
						<h2>Projeto de Mãos Dadas</h2>
						<img class="img-responsive img-centered" src="<?php bloginfo('stylesheet_directory'); ?>/images/projetos/acoes/maosdadas.jpg" alt="">
						<p>Tem como objetivo fortalecer os laços entre os componentes do Sistema de Garantia de Direitos de Crianças e Adolescentes e, a partir disso, melhorar a qualidade de vida dentro dos abrigos.</p>
						<a class="btn" href="<?php printf(home_url());?>/form" role="button"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Se inscreva</a>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
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
						<h2>Campanha Abandonar é Crime</h2>
						<img class="img-responsive img-centered" src="<?php bloginfo('stylesheet_directory'); ?>/images/projetos/acoes/abandonar.jpg" alt="">
						<p>Visa evitar o abandono de crianças e enfatizar a diferença entre o abandono e a entrega consciente de um filho para adoção, sensibilizando a sociedade e desmistificando todo o processo que envolve a desistência legal do poder familiar.</p>
						<a class="btn" href="<?php printf(home_url());?>/form" role="button"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Se inscreva</a>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<?php get_footer(); ?>
