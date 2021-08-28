  <?php get_header(); ?>
  <main class="main">
  	<section class="dois">
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
  		</div>
  	</section>
  	<section class="tres">
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
  								público 3 ambientes atrativos em um único lugar, inspirado
  								no futebol a casa conta com uma super estrutura lembrando a temática.
  							</p>
  						</div>
  						<div class="paragrafo-dois">
  							<p>
  								Seus espaços são divididos por Piso Central,
  								Mezanino e nosso incrível Rooftop, todos contam
  								com espaços reservados, mesas e bistrô.
  							</p>
  						</div>
  						<div class="paragrafo-tres">
  							<p>
  								O trabalho de nosso time te faz desfrutar de um excelente atendimento,
  								gastronomia típica brasileira, drinks de alta qualidade, tabacaria,
  								proporcionado muita diversão, música e entretenimento para você!
  							</p>
  						</div>
  					</div>
  				</div>
  			</div>
  		</div>
  	</section>

  </main>
  <?php get_footer(); ?>