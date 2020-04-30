<?php
session_start();
?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
	<meta charset="utf-8"> <!-- config de caracteres -->
	<meta name="viewport" content="width=device-width, initial-scale=1"> <!-- responsividade -->
	<meta http-equiv="X-UA-Compatible" content="ie=edge"> <!-- compatilidade com Internet Explorer mais atual -->
	<meta name="keywords" content="html5, css3, mobile first, responsive, portfolio, website, pluginfo, infojr"/>
	<meta name="author" content="Matheus Victor"/>
	<meta name="description" content="Portólio criado durante o #pluginfo2019.1">

	<!-- Favicon -->
	<link rel="shortcut icon" type="image/png" href="assets/img/favicon.png">

	<!-- CSS -->
	<link rel="stylesheet" type="text/css" href="assets/css/style.css">

	<!--Fonts & Icons -->
	<link href="https://fonts.googleapis.com/css?family=Oswald|Raleway" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Gugi" rel="stylesheet">
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css" integrity="sha384-oS3vJWv+0UjzBfQzYUhtDYW+Pj2yciDJxpsK1OYPAYjqT085Qq/1cq5FLXAZQ7Ay" crossorigin="anonymous">

	<title>Matheus Victor - Portfólio</title>
</head>

<body>

	<header>
		<nav class="navbar">
			<div class="nav-buttons-right">
				<a class="nav-button glow" href="#home">Início</a>
				<a class="nav-button glow" href="#about">Sobre</a>
				<a class="nav-button glow" href="#experience">Experiências</a>
				<a class="nav-button glow" href="#skill">Habilidades</a>
				<a class="nav-button glow" href="#contact">Contato</a>
				<a class="nav-button glow" href="login-adm.php">Painel Administrativo</a>
			</div>
		</nav>
	</header>

	<section id="home">
		<div id="main-title-content">
			<div class="glow">
				<h1 class="main-title">Matheus Victor</h1>
				<h3 class="main-sub-title">Trainee</h3>						
			</div>
			<div class="social">
				<a href="https://github.com/matheusvictor/" target="_blank"><i class="fab fa-github"></i></a>
				<a href="https://gitlab.com/matheusvictor" target="_blank"><i class="fab fa-gitlab"></i></a>
				<a href="https://www.linkedin.com/in/matheus-victor-s-santana/" target="_blank"><i class="fab fa-linkedin"></i></a>
				<a href="mailto:matheusvictor.salles@gmail.com" target="_blank"><i class="fa fa-envelope"></i></a>
			</div>
		</div>
	</section>
	
	<section id="about">
		<div>
			<img id="about-img" src="assets/img/profile.jpg" alt="imagem de perfil">
		</div>
		<div class="sub-title">
			<h1>Sobre mim</h1>
		</div>
		<div class="content content-left">
			<p>
				Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis diam nisi, interdum et felis efficitur, vestibulum elementum mi. Morbi semper ligula ante, non eleifend erat volutpat ut. Curabitur vitae egestas metus. Etiam bibendum fringilla ligula ut tempus. Aenean molestie lacus in cursus egestas. Ut mattis laoreet felis, ut vestibulum elit ultrices a. Cras aliquam mi et posuere eleifend. Nulla quis ultrices dui, sit amet laoreet quam. Vivamus gravida, nunc non varius condimentum, orci arcu porttitor est, non commodo odio nisl id metus. Vestibulum nec fermentum tortor, nec feugiat est. Aenean tristique tortor at tellus posuere aliquam. Nam lobortis, ante vel rutrum fringilla, mi nisl tempus nibh, eget eleifend nunc magna eget nibh. Quisque ullamcorper consequat finibus. 
			</p>
			<p>
				Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis diam nisi, interdum et felis efficitur, vestibulum elementum mi. Morbi semper ligula ante, non eleifend erat volutpat ut. Curabitur vitae egestas metus. Etiam bibendum fringilla ligula ut tempus. Aenean molestie lacus in cursus egestas. Ut mattis laoreet felis, ut vestibulum elit ultrices a. Cras aliquam mi et posuere eleifend. Nulla quis ultrices dui, sit amet laoreet quam. Vivamus gravida, nunc non varius condimentum, orci arcu porttitor est, non commodo odio nisl id metus. Vestibulum nec fermentum tortor, nec feugiat est. Aenean tristique tortor at tellus posuere aliquam. Nam lobortis, ante vel rutrum fringilla, mi nisl tempus nibh, eget eleifend nunc magna eget nibh. Quisque ullamcorper consequat finibus. 
			</p>
		</div>
	</section>
	
	<section id="experience">
		<div class="sub-title">
			<h1>Experiências</h1>
		</div>
		<div class="content content-left">
			<p>
				Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis diam nisi, interdum et felis efficitur, vestibulum elementum mi. Morbi semper ligula ante, non eleifend erat volutpat ut. Curabitur vitae egestas metus. Etiam bibendum fringilla ligula ut tempus. Aenean molestie lacus in cursus egestas. Ut mattis laoreet felis, ut vestibulum elit ultrices a. Cras aliquam mi et posuere eleifend. Nulla quis ultrices dui, sit amet laoreet quam. Vivamus gravida, nunc non varius condimentum, orci arcu porttitor est, non commodo odio nisl id metus. Vestibulum nec fermentum tortor, nec feugiat est. Aenean tristique tortor at tellus posuere aliquam. Nam lobortis, ante vel rutrum fringilla, mi nisl tempus nibh, eget eleifend nunc magna eget nibh. Quisque ullamcorper consequat finibus.
			</p>
		</div>
	</section>

	<section id="skill">
		<div>
			<img id="skills-img" src="assets/img/gears.png" alt="imagem de perfil">
		</div>

		<div class="sub-title">
			<h1>Habilidades</h1>
		</div>

		<div class="content content-left">

			<p>HTML</p>
			<div class="skill-container">
			  <div class="skills html">15%</div>
			</div>

			<p>CSS</p>
			<div class="skill-container">
				<div class="skills css">12%</div>
			</div>

			<p>JavaScript</p>
			<div class="skill-container">
				<div class="skills js">10%</div>
			</div>

			<p>PHP</p>
			<div class="skill-container">
				<div class="skills php">8%</div>
			</div>
		</div>
	</section>
	
	<section id="contact">
		<div class="sub-title">
			<h1>Envie sua mensagem!</h1>
		</div>

		<div id="form">
			<form class="form-contact" method="post" action="enviarMensagem.php">
				<input type="text" class="form-contact-input" name="nome" placeholder="Nome" required/>
				<input type="email" class="form-contact-input" name="email" placeholder="E-mail" required />  
     			<textarea class="form-contact-textarea" name="conteudoMsg" placeholder="Deixe uma mensagem" required></textarea>
     			<button type="reset" class="form-contact-button-cancel">Cancelar</button>  
     			<button type="submit" class="form-contact-button">Enviar mensagem</button>  
			</form>
		</div>		
	</section>	

	<footer>
		<div>
			<a href="#home"><i class="arrow"></i></a>
		</div>
		<div>
			Portfólio desenvolvido durante o #pluginfo2019 da InfoJr. - UFBA
		</div>
	</footer>

</body>
</html>