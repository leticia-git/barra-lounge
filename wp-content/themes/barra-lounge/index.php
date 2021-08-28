  <?php get_header(); ?>
  <main class="main">
  	<section class="section-dois">
  		<div class="container">  				
			  <h2 class="titulo-casa">A CASA</h2>
  				<hr class="hr">
  			<div class="row">

  				<!-- carrosel -->
				  <div id="carouselExampleCaptions" class="carousel slide" data-ride="carousel">
  <ol class="carousel-indicators">
    <li data-target="#carouselExampleCaptions" data-slide-to="0" class="active"></li>
    <li data-target="#carouselExampleCaptions" data-slide-to="1"></li>
    <li data-target="#carouselExampleCaptions" data-slide-to="2"></li>
  </ol>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/dist/images/foto1.jpg" class="d-block w-100" alt="...">
      <div class="carousel-caption d-none d-md-block">
        <h5>First slide label</h5>
        <p>Nulla vitae elit libero, a pharetra augue mollis interdum.</p>
      </div>
    </div>
    <div class="carousel-item">
      <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/dist/images/foto2.jpg" class="d-block w-100" alt="...">
      <div class="carousel-caption d-none d-md-block">
        <h5>Second slide label</h5>
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
      </div>
    </div>
    <div class="carousel-item">
      <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/dist/images/foto3.jpg" class="d-block w-100" alt="...">
      <div class="carousel-caption d-none d-md-block">
        <h5>Third slide label</h5>
        <p>Praesent commodo cursus magna, vel scelerisque nisl consectetur.</p>
      </div>
    </div>
  </div>
  <a class="carousel-control-prev" href="#carouselExampleCaptions" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleCaptions" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
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