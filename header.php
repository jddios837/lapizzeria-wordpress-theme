<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta http-equiv="X-UA-Compatible" content="ie=edge">
		<?php wp_head(); ?>
		<title>Document</title>
	</head>
	<body>
		<div class="header-site">
			<div class="container">
				<div class="logo">
					<!-- esc_url sanitizar la url -->
					<a href="<?php echo esc_url(home_url('/')); ?>">
						<img 
							src="<?php echo get_template_directory_uri(); ?>/img/logo.svg" 
							alt="logo-pizzeria"
							class="logotipo">
					</a> <!-- .container -->
				</div><!-- .logo -->

				<div class="informacion-encabezado">
					<div class="redes-sociales">
						<?php 
							$args = array(
								'theme_location' => 'social-menu',
								'container' => 'nav',
								'container_class' => 'sociales',
								'container_id' => 'sociales',
								'link_before' => '<span class="sr-text" >',
								'link_after' => '</span>'
							);

							wp_nav_menu($args);
						?>
					</div><!-- redes-sociales -->
					<div class="direccion">
							<p>Sauzales palos grandes</p>
							<p>Vereda 12 Casa 12-A, planta Alta</p>
					</div><!-- .direccion -->
				</div>

				<nav class="menu-sitio">
					<div class="contenedor navegacion">
						<?php 
							$args = array(
								'theme_location' => 'header-menu',
								'container' => 'nav',
								'container_class' => 'menu-sitio'
							);
							wp_nav_menu($args);
						?>
					</div>
				</nav>
			</div>
		</div>

		