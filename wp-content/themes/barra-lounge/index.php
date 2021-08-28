  <?php get_header(); ?>
  <main class="main">
  	<section class="section-dois">
  		<div class="container">
  			<div class="row">
  				<h2 class="titulo-casa">A CASA</h2>
  				<hr class="hr">
  				<!-- carrosel -->
  				<div class="carrosel">
  					<div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
  						<div class="carousel-indicators">
  							<button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
  							<button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
  							<button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
  						</div>
  						<div class="carousel-inner">
  							<div class="carousel-item active">
  								<img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/dist/images/foto1.jpg" class="d-block w-100" alt="...">
  							</div>
  							<div class="carousel-item">
  								<img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/dist/images/foto2.jpg" class="d-block w-100" alt="...">
  							</div>
  							<div class="carousel-item">
  								<img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/dist/images/foto3.jpg" class="d-block w-100" alt="...">
  							</div>
  						</div>
  						<button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
  							<span class="carousel-control-prev-icon" aria-hidden="true"></span>
  							<span class="visually-hidden">Previous</span>
  						</button>
  						<button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
  							<span class="carousel-control-next-icon" aria-hidden="true"></span>
  							<span class="visually-hidden">Next</span>
  						</button>
  					</div>
  				</div>
  				<!-- //carrosel -->
  				<div class="col-sm-6">
  					<div class="img-casa">
  						<img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/dist/images/barra4.png" alt="">
  					</div>
  				</div>
  				<div class="col-sm-6">
  					<div class="texto-casa">
  						<p class="texto"><span class="amarelo">Barra Lounge,</span> nasce com a proposta de oferecer ao
  							<span class="texto">público 3 ambientes atrativos em um único lugar</span>
  							<span class="texto">inspirado no futebol a casa conta com uma super</span>
  							<span class="texto">estrutura lembrando a temática.</span>
  							<span class="texto">Seus espaços são divididos por <span class="amarelo"> Piso Central, </span> </span>
  							<span class="texto"><span class="amarelo"> Mezanino</span> e nosso incrível <span class="amarelo">Rooftop,</span> todos contam </span>
  							<span class="texto">com espaços reservados, mesas e bistrô.</span>
  							<span class="texto">O trabalho de nosso time te faz desfrutar de um</span>
  							<span class="texto">excelente atendimento, gastronomia típica brasileira, </span>
  							<span class="texto">drinks de alta qualidade, tabacaria, </span>
  							<span class="texto">proporcionado muita diversão, música </span>
  							<span class="texto">e entretenimento para você!</span>
  						</p>
  					</div>
  				</div>
  			</div>
  		</div>
  	</section>
  </main>
  <?php get_footer(); ?>