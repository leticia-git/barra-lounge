  
<?php get_header(); ?>
<main class="main">
    <div class="section-dois">
        <div class="container">
            <div class="row">
                <h2 class="titulo-casa">A casa</h2>
                <hr>
            <div class="banner">
						<div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
							<div class="carousel-indicators">
								<button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
								<button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
								<button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
							</div>
							<div class="carousel-inner">
								<div class="carousel-item active">
									<img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/dist/images/Screenshot_2.jpg" class="d-block w-100" alt="...">
								</div>
								<div class="carousel-item">
									<img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/dist/images/Screenshot_3.jpg" class="d-block w-100" alt="...">
								</div>
								<div class="carousel-item">
									<img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/dist/images/Screenshot_4.jpg" class="d-block w-100" alt="...">
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
        </div>
    </div>

</main>
<?php get_footer(); ?>