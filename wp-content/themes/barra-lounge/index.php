  <?php get_header(); ?>
  <main class="main">
  	<section class="dois" id="dois">
  		<div class="container">
  			<div class="row">
  				<div class="titulo">
  					<h1>A Casa</h1>
  				</div>
  				<hr>
  				<div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
  					<div class="carousel-indicators">
  						<button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
  						<button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
  						<button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
  					</div>
  					<div class="carousel-inner">
  						<div class="carousel-item active">
  							<img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/dist/images/foto1.png" class="d-block w-100" alt="...">
  						</div>
  						<div class="carousel-item">
  							<img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/dist/images/foto2.png" class="d-block w-100" alt="...">
  						</div>
  						<div class="carousel-item">
  							<img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/dist/images/foto3.png" class="d-block w-100" alt="...">
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
  		</div>
  	</section>
  	<section class="tres" id="tres">
  		<div class="container">
  			<div class="row">
  				<div class="col-sm-6">
  					<div class="img-casa">
  						<img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/dist/images/barra4.png" alt="">
  					</div>
  				</div>
  				<div class="col-sm-6">
  					<div class="texto-casa">
  						<div class="parafrago-um">
  							<p>
  								Barra Lounge, nasce com a proposta de oferecer ao
  								público <strong>3 ambientes</strong> atrativos em um único lugar, inspirado
  								no futebol a casa conta com uma super estrutura lembrando a temática.
  							</p>
  						</div>
  						<div class="paragrafo-dois">
  							<p>
  								Seus espaços são divididos por <strong>Piso Central,</strong>
  							<strong>Mezanino</strong> e nosso incrível <strong>Rooftop,</strong> todos contam
  								com <strong>espaços reservados,</strong> mesas e <strong>bistrô.</strong>
  							</p>
  						</div>
  						<div class="paragrafo-tres">
  							<p>
  								O trabalho de nosso time te faz desfrutar de um excelente atendimento,
  							 <strong>gastronomia</strong> típica brasileira, <strong>drinks </strong>de alta qualidade, <strong>tabacaria,</strong>
  								proporcionado muita diversão,<strong>música</strong> e entretenimento para você!
  							</p>
  						</div>
  					</div>
  				</div>
  			</div>
  		</div>
  	</section>

  	<section class="quatro" id="quatro">
  		<div class="container">
  			<div class="row">
  				<div class="col-sm-6">
					  <div class="titulo">
					  <h2>Reserva</h2>
					  </div>
  					<hr>
  					<div class="form">
  						<p>Faça sua reserva</p>
  						<div class="formulario-form">
  							<?php echo do_shortcode('[contact-form-7 id="5" title="Contato"]'); ?>
  						</div>
  					</div>
  				</div>
  				<div class="col-sm-6">
  					<div class="contato">
  						<div class="logo">
  							<img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/dist/images/logonome.png" alt="">
  						</div>
  						<div class="telefone">
  							<a href="tel:+5511960492085" target="_blank">11 96049-2085</a>
  						</div>
  						<div class="email">
  							<a href="mailto:marketing@barralounge.com.br" target="_blank">marketing@barralounge.com.br</a>
  						</div>
  					</div>
  				</div>
  			</div>
  		</div>
  	</section>
	  <section class="cinco" id="cinco">
<div class="container">
	<div class="row">
		<h2>
		Localização
		</h2>
		<hr>
		<div class="mapa">
		<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d14632.658720805597!2d-46.65994936295047!3d-23.52657866273228!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x94ce580f9993bce7%3A0x398d5452404a5665!2sR.%20Barra%20Funda%2C%201066%20-%20Barra%20Funda%2C%20S%C3%A3o%20Paulo%20-%20SP%2C%2001152-000!5e0!3m2!1spt-BR!2sbr!4v1630177248807!5m2!1spt-BR!2sbr" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
		</div>
		<div class="endereco">
			 <p>R. Barra Funda, 1066 - Barra Funda</p>	
		</div>
	</div>
</div>
	  </section>
  </main>
  <?php get_footer(); ?>