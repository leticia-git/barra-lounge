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
	<?php wp_head(); ?>
</head>

<body class="body">
	<header class="header">
<section class="section-um" style="">
	<div class="container">
		<div class="row">
		  <div class="menu">
			  <div class="logo">
				  <img src="/assets/dist/images/logo.png" alt="Logo">
			  </div>
			  <div class="texto-menu">
				  <div class="home">
					  <p>HOME</p>
				  </div>
				  <div class="acasa">
					  A CASA
				  </div>
				  <div class="reservas">
					  RESERVAS
				  </div>
				  <div class="localizacao">
					 LOCALIZAÇÃO
				  </div>
			  </div>
		  </div>
		  <div class="texto-header">
			  <h1>
			  <span class="span">vivencie <span class="amarelo">três ambientes</span></span> 
			  <span class="span">em um único lugar</span> 
			  </h1>
		  </div>
		</div>
	</div>
</section>
	</header>