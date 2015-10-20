<html>
<head>
	<link type="text/css" rel="stylesheet" href="estilo.css">
	<link rel="stylesheet" href="css/bootstrap.css">
</head>
<body>
		<div class="navbar navbar-inverse">
			<div class="navbar-inner">
				<div class="container">
 
					<!-- .btn-navbar is used as the toggle for collapsed navbar content -->
					<a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					</a>
 
					<!-- Be sure to leave the brand out there if you want it shown -->
					<a class="brand" href="index.php">Home</a>
					<a class="brand" href="prova.php">Prova</a>
					<!-- Everything you want hidden at 940px or less, place within here -->
					<div class="nav-collapse collapse">
					<!-- .nav, .navbar-search, .navbar-form, etc -->
					</div>
 
				</div>
			</div>
		</div>
		<div id="div-principal">
	<?php
		include("questoes.php");
		$count = 0;
		$nota = 0;
		foreach($_POST as $resposta){
			$alt = $alternativas[$perguntas[$count]];
			if($resposta == $alt["RC"]){
				echo("<div class='rc'>
						<h4 class='pergunta' align='center'>$perguntas[$count]</h4>
						<p class='nota' align='center'>+10</p>
					  </div>");
				$nota+=10;
			} else{
				$rc = "RC";
				echo("<div class='re' align='center'>
						<h4 class='pergunta'>$perguntas[$count]</h4>
						<p class='nota'>+0</p>
						<p class='correcao'>Resposta certa: $alt[$rc]</p>
					  </div>");
			}
			$count++;
		}
		echo("<p id='pont' align='center'>Sua pontuação foi: $nota</p>");
	?>
	</div>
</body>
<html>