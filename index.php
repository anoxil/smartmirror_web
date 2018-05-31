<!DOCTYPE html>
<html lang="fr">

<?php require("includes/head.php"); ?>
<body class="home">
<?php require("includes/navbar.php"); ?>


	<!-- Header -->
	<header id="head">
		<div class="container">
			<div class="row">
				<h1 class="lead">SMART MIRROR</h1>
				<div class="tagline">Projet Transdisciplinaire 1A 2017-18</div>
				<div><a class="btn btn-default btn-lg" role="button" href="objectifs.php">En savoir plus ...</a>
				<a class="btn btn-action btn-lg text-center" role="button" href="https://github.com/Fabien-Couthouis/SmartMirror/archive/master.zip" 
				target="_blank">TÉLÉCHARGER</a></div>
			</div>
		</div>
	</header>
	<!-- /Header -->

	<!-- Intro -->
	<div class="container text-center">
		<br> <br>
		<h2 class="thin">Un miroir connecté pensé pour l'utilisateur </h2>
		<p class="text-muted">
			SmartMirror a été pensé et conçu pour l'utilisateur. Nous nous sommes basés sur <a href="https://github.com/MichMich/MagicMirror">MagicMirror</a>
			et sur <a href="https://github.com/kalliope-project/kalliope">Kalliope</a> pour la reconnaissance vocale.
			Nous avons développé nos propres modules MagicMirror pour une expérience unique.
		</p>
	</div>

		
		</div>
	</div> 
	<div class="container"> <blockquote>“L'homme regarde le miroir, le miroir regarde l'homme.”</blockquote></div>


	<!-- container -->
	<div class="container">

		<h2 class="text-center top-space">Questions fréquentes</h2>
		<hr>

		<div class="row">
			<div class="col-sm-6">
				<h3>De quoi ai-je besoin pour fabriquer mon propre miroir ?</h3>
				<p>SmartMirror est pensé pour être utilisé sur un Raspberry Pi.
					Vous aurez également besoin d'un écran et d'un filtre sans tain.
					Tous le matériel nécessaire à sa fabrication est disponible <a href="materiel.php">ici</a>.</p>
			</div>
			<div class="col-sm-6">
				<h3>Je n'arrive pas à installer SmartMirror sur mon Raspberry Pi !</h3>
				<p> Une documentation utilisateur est disponible <a href="tuto_utilisation.php">ici</a>.
					</p>
			</div>
		</div> <!-- /row -->

		

		<div class="row">
				<div class="col-sm-6">
						<h3>Puis-je reprendre votre projet ou une partie de celui-ci pour le modifier à ma guise ?</h3>
						<p>
							Bien sûr ! SmartMirror, MagicMirror et Kalliope sont distribués librement sous <a href = "https://github.com/Fabien-Couthouis/MagicMirror/blob/master/LICENSE.md">license MIT</a>.
						</p>
					</div>
					<div class="col-sm-6">
						<h3>Dois-je savoir programmer pour installer SmartMirror ?</h3>
						<p>L'installation et l'utilisation de SmartMirror ne nécessite aucune connaissance préalable. Tout est expliqué dans la 
							<a href="tuto_utilisation.php">documentation</a>.
						En revanche, pour apporter des modifications au projet, maîtriser les technologies web (html, CSS, javascript/nodejs, json) est fortement recommandé.</p>
					</div>
				</div> <!-- /row -->
		
				
	
	</div>	

<?php require("includes/footer.php"); ?>	
<?php require("includes/dependencies.php"); ?>
</body>
</html>