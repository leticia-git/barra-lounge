<!DOCTYPE html>
<html lang="pt-br">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IT=edge,chrome=IE8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta property="og:type" content="website" />
	<meta property="og:locale" content="pt_BR" />
	<meta name="theme-color" content="#000" />
	<meta name="msapplication-navbutton-color" content="#000" />
	<meta name="apple-mobile-web-app-status-bar-style" content="#000" />
	<title>
		<?php if (is_front_page()) {
			echo bloginfo('name');
		} else {
			echo the_title();
			echo ' - ';
			echo bloginfo('name');
		} ?>
	</title>
	<link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css2?family=Lexend:wght@100;300;400;500;600;700;800&display=swap" rel="stylesheet">
	<!-- CSS only -->
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
	<link rel="stylesheet" href="css/font-awesome.min.css">
	<?php wp_head(); ?>
</head>

<body class="body" style="background-image: url('<?php echo get_stylesheet_directory_uri(); ?>/assets/dist/images/bg.png'); background-repeat: no-repeat;width: 100%; background-position: top center;background-size: cover;">
	<header class="header">
		<section class="section-um" >
			<div class="container">
				<div class="row">
					<!-- <div class="menu">
						<div class="logo">
							<img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/dist/images/logo.png" alt="Logo">
						</div>
						<div class="texto-menu">
							<div class="home">
								<a href="">HOME</a>
							</div>
							<div class="acasa">
								<a href="">A CASA</a>
							</div>
							<div class="reservas">
								<a href="">RESERVAS</a>
							</div>
							<div class="localizacao">
								<a href="">LOCALIZAÇÃO</a>
							</div>
						</div>
					</div> -->
					<div class="menu-responsivo">
					<a href="" class="logo"><img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/dist/images/logo.png" alt="Logo"></a>
 					 <input class="menu-btn" type="checkbox" id="menu-btn" />
 					 <label class="menu-icon" for="menu-btn"><span class="navicon"></span></label>
 					 <ul class="menu">
 					<li class="home"><a href="#">HOME</a></li>
 				   <li class="acasa"><a href="#">A CASA</a></li>
   					 <li class="reservas"><a href="#">RESERVAS</a></li>
   					 <li class="localizacao"><a href="#">LOCALIZAÇÃO</a></li>
 					</ul>
					</div>


					<div class="texto-header">
						<h1>
							<span class="span">Vivencie<span class="amarelo"> três</span></span>
							<span class="amarelo"> ambientes</span>
							<span class="span">em um único lugar</span>
						</h1>
					</div>
					<div class="reserva-cta">
        			  <button class="botao-reserva">
         				  Faça sua reserva
         			 </button>
        			</div>
				</div>
			</div>
		</section>
	</header>