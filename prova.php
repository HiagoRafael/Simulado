<html>
	<head>
		<link rel="stylesheet" href="css/bootstrap.css">
		<link type="text/css" rel="stylesheet" href="estilo.css">
		<link href="css/bootstrap-theme.min.css" rel="stylesheet">
		<link href="css/bootstrap.min.css" rel="stylesheet">
		<script>
		</script>
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
		<form action="avalia.php" method="post">
		<?php
			include("questoes.php");
			foreach($perguntas as $valor){
				echo("<h1 align='center' style='background-color:gray;border-radius:10px;padding:10px;color:white;'>$valor</h2>");
				echo("<p align='center' >");
				
				echo("<br>");
				foreach($alternativas[$valor] as $valor2){
					echo("<font color='white' style='background-color:black;padding:10px;margin:10px;border-radius:5px;font-size:20px;'><input type='radio' name='$valor' value=$valor2><b>$valor2</b></font>");
				}
				echo("</p><br>");
			}
			echo("<br>");
		?>
		<input type="submit" value="Submeter" align="center" class="btn btn-default">
		</form>
		</div>
	</body>
</html>