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

	<?php wp_head(); ?>
</head>

<body class="body">
	<header class="header">
		<section class="section-um" style="background-image: url('<?php echo get_stylesheet_directory_uri(); ?>/assets/dist/images/bg1.png'); repeat: no-repeat; align-items: top-center;">
			<div class="container">
				<div class="row">
					<div class="menu">
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
					</div>
					<div class="texto-header">
						<h1>
							<span class="span">Vivencie</span>
							<span class="amarelo">três ambientes</span>
							<span class="span">em um único lugar</span>
						</h1>
					</div>
					<div class="ambientes">
						<div class="foto1">
						<a href=""><img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/dist/images/hexagono.png" alt=""></a>	
						</div>
						<div class="foto2">
						<a href=""><img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/dist/images/hexagono.png" alt=""></a>	
						</div>
						<div class="foto3">
							<a href=""><img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/dist/images/hexagono.png" alt=""></a>
						</div> 
					</div>
				</div>
			</div>
		</section>
	</header>